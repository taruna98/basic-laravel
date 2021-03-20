@extends('layouts.main')

@section('title', 'Laratest - Employee')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 mt-4">
            <h2>Employee List</h2>

            <a href="/employee/create" class="btn btn-primary my-3">Add New Employee</a>

            @if (session('status'))
            <div class="alert alert-success my-2">
                {{ session('status') }}
            </div>
            @endif

        </div>
    </div>

    <div class="row">
        <div class="col-6 mt-4">
            <ul class="list-group">
                @foreach ($employee as $emp)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $emp->name }}
                    <a href="/employee/{{ $emp->id }}" class="badge badge-primary badge-pill">detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection