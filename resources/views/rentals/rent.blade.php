@extends('layout')

@section('content')
<h2>Rent a Car</h2>
<form action="{{ route('rentals.rent') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="user_id" class="form-label">User ID</label>
        <input type="number" class="form-control" id="user_id" name="user_id" required>
    </div>
    <div class="mb-3">
        <label for="car_id" class="form-label">Car ID</label>
        <input type="number" class="form-control" id="car_id" name="car_id" required>
    </div>
    <div class="mb-3">
        <label for="start_date" class="form-label">Start Date</label>
        <input type="date" class="form-control" id="start_date" name="start_date" required>
    </div>
    <div class="mb-3">
        <label for="end_date" class="form-label">End Date</label>
        <input type="date" class="form-control" id="end_date" name="end_date" required>
    </div>
    <button type="submit" class="btn btn-primary">Rent</button>
</form>
@endsection
