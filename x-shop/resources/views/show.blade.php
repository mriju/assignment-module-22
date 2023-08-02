@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Customer Details</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $customer->name }}</h5>
            <p class="card-text">Email: {{ $customer->email }}</p>
            <p class="card-text">Phone: {{ $customer->phone }}</p>
            <!-- Add other customer details here -->
            <a href="/customers/{{ $customer->id }}/edit" class="btn btn-primary">Edit</a>
            <a href="/customers" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
