@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('cars.create') }}" class="btn btn-success float-end">{{ __('owners.addcar') }}</a>

                        <hr class="mt-5">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>{{ __('owners.regnumber') }}</th>
                                <th>{{ __('owners.brand') }}</th>
                                <th>{{ __('owners.model') }}</th>
                                <th>{{ __('owners.owner') }}</th>
                                <th>{{ __('owners.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{ $car->reg_number }}</td>
                                    <td>{{ $car->brand }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->owner->name }} {{ $car->owner->surname }}</td>
                                    @if(auth()->user()->type == 'admin')
                                    <td>
                                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-info text-white">{{ __('owners.edit') }}</a>

                                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">{{ __('owners.delete') }}</button>
                                        </form>
                                    </td>
                                    @endif
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
