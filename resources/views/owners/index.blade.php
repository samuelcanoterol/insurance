@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('owners.create') }}" class="btn btn-success float-end">{{ __('owners.addowner') }}</a>

                        <hr class="mt-5">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>{{ __('owners.name') }}</th>
                                <th>{{ __('owners.surname') }}</th>
                                <th>{{ __('owners.actions') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($owners as $owner)
                                <tr>
                                    <td>{{ $owner->name }}</td>
                                    <td>{{ $owner->surname }}</td>
                                    @if(auth()->user()->type == 'admin')
                                    <td>
                                        <a href="{{ route('owners.edit', $owner->id) }}" class="btn btn-info text-white">{{ __('owners.edit') }}</a>

                                        <a href="{{ route('owners.delete', $owner->id) }}"
                                           class="btn btn-danger"
                                           onclick="return confirm('Are you sure?')">
                                            {{ __('owners.delete') }}
                                        </a>
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
