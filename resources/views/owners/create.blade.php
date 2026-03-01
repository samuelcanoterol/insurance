@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">New Owner</div> <div class="card-body">
                        <form action="{{ route('owners.store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Name:</label>
                                <input class="form-control" type="text" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Surname:</label>
                                <input class="form-control" type="text" name="surname" required>
                            </div>

                            <hr>
                            <button class="btn btn-success">Add new Owner</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
