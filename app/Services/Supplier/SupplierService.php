<?php
namespace App\Services\Supplier;

use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SupplierService
{
    function index(Request $req)
    {
        $suppliers = $req->user()->suppliers()->get();
        return view('pages.admin.supplier', [
            'suppliers' => $suppliers,
        ]);
    }
    function create(SupplierRequest $req)
    {
        $data = $req->validated();
        if ($req->hasFile('image')) {
            $data['image'] = $req->file('image')->store('supplier', 'public');
        };
        $supplier = new Supplier();
        $supplier->name = $data['name'];
        $supplier->email = $data['email'];
        $supplier->phone = $data['phone'];
        $supplier->address = $data['address'];
        $supplier->image = $data['image'];
        $supplier->shipping_address = $data['shipping_address'];
        $supplier->city = $data['city'];
        $supplier->code = \Illuminate\Support\Str::random(6);
        $supplier->user_id = Auth::id();
        $supplier->save();
        return redirect()->back()->with('toast', [
            'title' => "Completed",
            "description" => "Supplier " . $data['name'] . "created successfully.",
            "variant" => "success",
        ]);
    }

    function update(SupplierRequest $req, string $id)
    {
        $supplier = Supplier::findOrFail($id)->first();
        if (!$supplier) {
            return response()->json(['message' => 'Supplier not found'], 404);
        }
        $data = $req->validated();
        if ($req->hasFile('image')) {
            if (!empty($supplier->image) && Storage::disk('public')->exists($supplier->image)) {
                Storage::disk('public')->delete($supplier->image);
            }

            $data['image'] = $req->file('image')->store('supplier', 'public');
        }

        $supplier->update($data);
        $supplier->save();
        return redirect()->back()->with('toast', [
            'title' => "Completed",
            "description" => "Supplier " . $data['name'] . " updated successfully.",
            "variant" => "success",
        ]);
    }

    public function destroy(string $id)
    {
        $supplier = request()->user()->suppliers()->findOrFail($id);

        if ($supplier->image) {
            Storage::disk('public')->delete($supplier->image);
        };
        $supplier->delete();
        return redirect()->back()->with('toast', [
            'title' => "Completed",
            "description" => "Supplier deleted successfully.",
            "variant" => "success",
        ]);
    }

};
