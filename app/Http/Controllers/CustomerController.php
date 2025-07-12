<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerRequest;
use App\Models\Customer;
use App\Services\Customer\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected CustomerService $customer;

    /**
     * Inject the CustomerService.
     */
    public function __construct(CustomerService $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $this->customer->index($request);
    }

    /**
     * Store a newly created customer in storage.
     */
    public function store(CreateCustomerRequest $request)
    {
        return $this->customer->create($request);
    }

    /**
     * Update the specified customer in storage.
     */
    public function update(CreateCustomerRequest $request, string $id)
    {
        return $this->customer->update($request, $id);
    }

    /**
     * Remove the specified customer from storage.
     */
    public function destroy(string $id)
    {
        return $this->customer->destroy($id);
    }
}
