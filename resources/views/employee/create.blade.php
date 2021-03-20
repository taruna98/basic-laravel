@extends('layouts.main')

@section('title', 'Form Add Employee')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/employee">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Add New Employee</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-8 my-4">
            <form action="/employee" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" placeholder="Enter NRP" value="{{ old('nrp') }}">
                    @error('nrp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company" placeholder="Enter Company" value="{{ old('company') }}">
                    @error('company')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="division">Division</label>
                    <input type="text" class="form-control @error('division') is-invalid @enderror" id="division" name="division" placeholder="Enter Division" value="{{ old('division') }}">
                    @error('division')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" placeholder="Enter Position" value="{{ old('position') }}">
                    @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Save Data</button>
            </form>
        </div>
    </div>
</div>
@endsection