<?php

namespace App\Services\Purchase;

use App\Http\Requests\CreatePurchaseRequest;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PurchaseService
{
    public function index(Request $request)
    {
        $relations = $request->user()->load(['suppliers', 'customers', 'brands', 'products']);

        $customers = $relations->customers->map(function ($customer) {
            return [
                'id' => 'customer-' . $customer->id,
                'name' => $customer->name,
                'email' => $customer->email,
                'phone' => $customer->phone,
                'code' => $customer->code,
            ];
        });

        $suppliers = $relations->suppliers->map(function ($supplier) {
            return [
                'id' => 'supplier-' . $supplier->id,
                'name' => $supplier->name,
                'email' => $supplier->email,
                'code' => $supplier->code,
                'phone' => $supplier->phone,
            ];
        });

        $selectData = collect($customers->all())->merge($suppliers->all());

        return view('pages.admin.purchase', [
            'suppliers' => $relations->suppliers,
            'customers' => $relations->customers,
            'brands' => $relations->brands,
            'products' => $relations->products,
            'purchases' => $request->user()->purchases,
            'select_data' => $selectData,
        ]);
    }

    public function create(CreatePurchaseRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        $type = (Str::startsWith($data['person_d'], 'customer-') ? ($type = "customer") : "supplier")."_id";
        $count=count($data['imeis']);
        $purchase = Purchase::create([
            ...$data,
            $type=> Str::of($data['person_d'])->explode('-')[1],
            "qty"=> $count,
        ]);

        return redirect()->back()->with('toast', [
            'title' => __('purchase.toast.created.title'),
            'description' => __('purchase.toast.created.description', ['id' => $purchase->id]),
            'variant' => 'success',
        ]);
    }

    public function update(CreatePurchaseRequest $request, string $id)
    {
        $purchase = Purchase::findOrFail($id);
        $data = $request->validated();

        $purchase->update($data);

        return redirect()->back()->with('toast', [
            'title' => __('purchase.toast.updated.title'),
            'description' => __('purchase.toast.updated.description', ['id' => $purchase->id]),
            'variant' => 'success',
        ]);
    }

    public function destroy(string $id)
    {
        $purchase = request()->user()->purchases()->findOrFail($id);
        $purchase->delete();

        return redirect()->back()->with('toast', [
            'title' => __('purchase.toast.deleted.title'),
            'description' => __('purchase.toast.deleted.description'),
            'variant' => 'success',
        ]);
    }
}
