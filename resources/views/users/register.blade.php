@extends('layout')

@section('content')
<h2>Register User</h2>
<form action="{{ url('/register') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="mb-3">
        <label for="license_number" class="form-label">License Number</label>
        <input type="text" class="form-control" id="license_number" name="license_number" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection
