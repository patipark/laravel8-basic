<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.main_template')
@section('title') รายชื่อพนักงาน @endsection
@section('content')

<div class="jumbotron">
    <div class="container pt-5">
        <h2 class="display-3 head-title">รายชื่อพนักงาน</h2>
    </div>
</div>

<div class="container">

    <table class="table table-bordered">
        <thead>
            <tr class="bg-primary text-white">
                <th>ID</th>
                <th>Fullname</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Tel</th>
                <th>Age</th>
                <th>Address</th>
                <th>Avatar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $emp)
                <tr>
                    <td>{{ $emp->id }}</td>
                    <td>{{ $emp->fullname }}</td>
                    <td>{{ $emp->gender }}</td>
                    <td>{{ $emp->email }}</td>
                    <td>{{ $emp->tel }}</td>
                    <td>{{ $emp->age }}</td>
                    <td>{{ $emp->address }}</td>
                    <td>{{ $emp->avartar }}</td>
                    <td>{{ $emp->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $employees->links('pagination::bootstrap-4') }}

</div>

@endsection
