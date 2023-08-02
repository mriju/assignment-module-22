<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    // Display a listing of the customers
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // Show the form for creating a new customer
    public function create()
    {
        return view('customers.create');
    }

    // Store a newly created customer in the database
    public function store(Request $request)
    {
        // Validate the input fields
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'nullable|string|max:20',
            // Add other validation rules as needed
        ]);

        // Create the customer record
        Customer::create($request->all());

        return redirect('/customers')->with('success', 'Customer created successfully.');
    }

    // Display the specified customer
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    // Show the form for editing the specified customer
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    // Update the specified customer in the database
    public function update(Request $request, $id)
    {
        // Validate the input fields
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $id,
            'phone' => 'nullable|string|max:20',
            // Add other validation rules as needed
        ]);

        // Find the customer record and update it
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect('/customers')->with('success', 'Customer updated successfully.');
    }

    // Remove the specified customer from the database
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect('/customers')->with('success', 'Customer deleted successfully.');
    }
}
