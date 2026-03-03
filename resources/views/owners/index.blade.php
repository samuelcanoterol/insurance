@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('owners.index') }}" class="btn btn-primary">Owners</a>
                        <a href="{{ route('cars.index') }}" class="btn btn-primary">Cars</a>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('owners.create') }}" class="btn btn-success float-end">Add new Owner</a>

                        <hr class="mt-5">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($owners as $owner)
                                <tr>
                                    <td>{{ $owner->name }}</td>
                                    <td>{{ $owner->surname }}</td>

                                    <td>
                                        <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-info text-white">Edit</a>

                                        <a href="{{ route('owners.delete', $owner->id) }}"
                                           class="btn btn-danger"
                                           onclick="return confirm('Are you sure?')">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
