@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} <br>
                    <br><br><hr>
                    <a class="nav-link" href="userpages/{{ Auth::user()->id }}">Les Pages</a>
                    <br><br><hr>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
