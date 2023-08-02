@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Customer</h2>

    <form action="/customers/{{ $customer->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $customer->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $customer->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}">
        </div>
        <!-- Add other fields as needed -->
        <button type="submit" class="btn btn-primary">Update Customer</button>
        <a href="/customers/{{ $customer->id }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
