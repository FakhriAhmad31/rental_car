@extends('layout')

@section('content')
<h2>User Registered Successfully</h2>

@if(session('user'))
    <p>Here are the details of the user you just registered:</p>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <td>{{ session('user')->name }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ session('user')->address }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ session('user')->phone }}</td>
        </tr>
        <tr>
            <th>License Number</th>
            <td>{{ session('user')->license_number }}</td>
        </tr>
    </table>
@endif

<a href="{{ route('users.register') }}" class="btn btn-primary">Register Another User</a>
<a href="{{ route('home') }}" class="btn btn-secondary">Go to Home</a>
@endsection
