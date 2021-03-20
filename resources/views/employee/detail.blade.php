@extends('layouts.main')

@section('title', 'Detail Employee')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/employee">Employee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Employee</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-6 my-3">
            <div class="card">
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <td>:</td>
                                <td>{{ $employee->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">NRP</th>
                                <td>:</td>
                                <td>{{ $employee->nrp }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>:</td>
                                <td>{{ $employee->email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Company</th>
                                <td>:</td>
                                <td>{{ $employee->company }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Division</th>
                                <td>:</td>
                                <td>{{ $employee->division }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Position</th>
                                <td>:</td>
                                <td>{{ $employee->position }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col-6 text-center">
                            <!-- Button to Open the Modal -->
                            <button type="submit" class="btn btn-primary" style="width: 90%;" data-toggle="modal" data-target="#modalEdit{{ $employee->id }}">Edit</button>
                        </div>
                        <div class="col-6 text-center">
                            <!-- <form action="/employee/{{ $employee->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" style="width: 90%;">Delete</button>
                            </form> -->
                            <button type="submit" class="btn btn-danger" style="width: 90%;" data-toggle="modal" data-target="#modalDelete{{ $employee->id }}">Delete</button>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- The Modal -->
<div class="modal fade" id="modalDelete{{ $employee->id }}" tabindex="-1" aria-labelledby="modalDelete" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                <h4 class="text-center">Are you sure to delete data <span>{{ $employee->name }}</span> ?</h4>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <div class="row">
                    <div class="col">
                        <form action="/employee/{{ $employee->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-primary">Sure!</button>
                        </form>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="modalEdit{{ $employee->id }}" tabindex="-1" aria-labelledby="modalEdit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Employee</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="/employee/{{ $employee->id }}" method="post">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}">
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control" id="nrp" name="nrp" value="{{ $employee->nrp }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="{{ $employee->email }}">
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" name="company" value="{{ $employee->company }}">
                    </div>
                    <div class="form-group">
                        <label for="division">Division</label>
                        <input type="text" class="form-control" id="division" name="division" value="{{ $employee->division }}">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" name="position" value="{{ $employee->position }}">
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Change</button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>