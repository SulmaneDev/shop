<?php

namespace App\Services\Customer;

use App\Http\Requests\CreateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CustomerService
{
    public function index(Request $request)
    {
        $customers = $request->user()->customers()->get();

        return view('pages.admin.customer', [
            'customers' => $customers,
        ]);
    }

    public function create(CreateCustomerRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('cnic_front_image')) {
            $data['cnic_front_image'] = $request->file('cnic_front_image')->store('customer/cnic', 'public');
        }

        if ($request->hasFile('cnic_back_image')) {
            $data['cnic_back_image'] = $request->file('cnic_back_image')->store('customer/cnic', 'public');
        }

        $customer = new Customer();
        $customer->name = $data['name'];
        $customer->email = $data['email'];
        $customer->phone = $data['phone'];
        $customer->cnic_front_image = $data['cnic_front_image'] ?? null;
        $customer->cnic_back_image = $data['cnic_back_image'] ?? null;
        $customer->code = Str::random(6);
        $customer->user_id = Auth::id();
        $customer->save();

        return redirect()->back()->with('toast', [
            'title' => __('customer.toast.created.title'),
            'description' => __('customer.toast.created.description', ['name' => $customer->name]),
            'variant' => 'success',
        ]);
    }

    public function update(CreateCustomerRequest $request, string $id)
    {
        $customer = Customer::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('cnic_front_image')) {
            if ($customer->cnic_front_image && Storage::disk('public')->exists($customer->cnic_front_image)) {
                Storage::disk('public')->delete($customer->cnic_front_image);
            }
            $data['cnic_front_image'] = $request->file('cnic_front_image')->store('customer/cnic', 'public');
        }

        if ($request->hasFile('cnic_back_image')) {
            if ($customer->cnic_back_image && Storage::disk('public')->exists($customer->cnic_back_image)) {
                Storage::disk('public')->delete($customer->cnic_back_image);
            }
            $data['cnic_back_image'] = $request->file('cnic_back_image')->store('customer/cnic', 'public');
        }

        $customer->update($data);

        return redirect()->back()->with('toast', [
            'title' => __('customer.toast.updated.title'),
            'description' => __('customer.toast.updated.description', ['name' => $customer->name]),
            'variant' => 'success',
        ]);
    }

    public function destroy(string $id)
    {
        $customer = request()->user()->customers()->findOrFail($id);

        if ($customer->cnic_front_image && Storage::disk('public')->exists($customer->cnic_front_image)) {
            Storage::disk('public')->delete($customer->cnic_front_image);
        }

        if ($customer->cnic_back_image && Storage::disk('public')->exists($customer->cnic_back_image)) {
            Storage::disk('public')->delete($customer->cnic_back_image);
        }

        $customer->delete();

        return redirect()->back()->with('toast', [
            'title' => __('customer.toast.deleted.title'),
            'description' => __('customer.toast.deleted.description'),
            'variant' => 'success',
        ]);
    }
}
