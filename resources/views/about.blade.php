@extends('layouts.main')

@section('title', 'Laratest - About')

@section('content')
<div class="container">
    <div class="row flex-column align-items-center">
        <div class="col-6 my-4">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                            @foreach ($about as $abt)
                            <h4>{{ $abt->name }}</h4>
                            <p class="text-secondary mb-1">{{ $abt->job }}</p>
                            <!-- <p class="text-secondary mb-1">{{ $abt->contact }}</p> -->
                            <p class="text-secondary mb-1">{{ $abt->email }}</p>
                            <p class="text-muted font-size-sm">{{ $abt->address }}</p>
                            @endforeach
                            <button class="btn btn-primary">Follow</button>
                            <button class="btn btn-outline-primary">Message</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection