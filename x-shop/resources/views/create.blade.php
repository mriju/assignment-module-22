@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Customer</h2>

    <form action="/customers" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <!-- Add other fields as needed -->
        <button type="submit" class="btn btn-primary">Add Customer</button>
    </form>
</div>
@endsection
