@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Owner</div> <div class="card-body">
                        <form action="{{ route('owners.update', $owner->id) }}" method="post">
                            @csrf
                            @method('put') <div class="mb-3">
                                <label class="form-label">Name:</label>
                                <input class="form-control" type="text" name="name" value="{{ $owner->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Surname:</label>
                                <input class="form-control" type="text" name="surname" value="{{ $owner->surname }}" required>
                            </div>

                            <hr>
                            <button class="btn btn-success">Update Owner</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
