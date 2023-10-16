<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
</head>
<body>
    @extends('layout.layout')

    @section('account_name')
    @auth
        <h4>{{ auth()->user()->name }}</h4>
    @endauth
    @endsection

    @section('content')
    <div class="customer">
        <h1>List of Customers</h1>

        @if(count($customers) > 0)
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone number</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Valid Id</th>
                    <th>ID Image</th>
                </tr>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->firstName }}</td>
                    <td>{{ $customer->lastName }}</td>
                    <td>{{ $customer->phoneNumber }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->password }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->validID }}</td>
                    <td><img src="{{ $customer->idImage }}" alt="ID Image" width="100"></td>
                  </tr>
                {{-- <li>
                    <strong>First Name:</strong> {{ $customer->firstName }}<br>
                    <strong>Last Name:</strong> {{ $customer->lastName }}<br>
                    <strong>Phone Number:</strong> {{ $customer->phoneNumber }}<br>
                    <strong>Email:</strong> {{ $customer->email }}<br>
                    <strong>Password:</strong> {{ $customer->password }}<br>
                    <strong>Address:</strong> {{ $customer->address }}<br>
                    <strong>Valid ID:</strong> {{ $customer->validID }}<br>
                    <strong>ID Image:</strong> <!-- Display the ID image as needed, e.g., if it's a URL or file -->
                    <img src="{{ $customer->idImage }}" alt="ID Image" width="100"><br>
                    <!-- Add more fields as needed -->
                </li> --}}
                @endforeach
            </table>
        @else
            <p>No customers found.</p>
        @endif
    </div>
    @endsection
</body>
</html>