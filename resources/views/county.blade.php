@extends('layouts.app')


@section('content')

    <div class="container">
        @auth
            @foreach ($counties as $id => $county)
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h3>{{ $county->name }}</h3>
                    </div>
                </div>
            @endforeach
        @endauth
    </div>
@endsection