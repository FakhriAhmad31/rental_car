@extends('layout')

@section('content')
<h2>Return a Car</h2>
<form action="{{ route('rentals.return') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="rental_id" class="form-label">Rental ID</label>
        <input type="number" class="form-control" id="rental_id" name="rental_id" required>
    </div>
    <button type="submit" class="btn btn-primary">Return</button>
</form>
@endsection
