@extends('layouts.app')

@section('content')
<span class="btn"><a href="../">
    <button class="btn btn-default" type="button">La Page principal</button>
</a></span>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('voire tous les pages disponible') }} <br>
                    <hr>
                    @foreach($user->pages as $page)
                    <a href="../pages/{{ $page->id }}">
                        <div class="row list-group-item page-title-list container">
                            <div class="col-xs-8">
                               {{ $page ->title }}
                            </div>
                            <div class="col-xs-4">
                                <div><a href="../pages/{{ $page ->id }}/delete" class ="btn btn-danger pull-right">Supprimer</a></div>
                            </div>
                           
                        </div>
                    </a>
                    @endforeach
                    <hr>
                    <div class="row list-group-item">
                        <form method="POST" action="../{{ Auth::user()->id }}/addpage">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" name="title" class="form-control" placeholder="Ajouter une Pages ...">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit">Ajouter</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="collapse navbar-collapse" id="navbarNav"> 
	                <ul class="navbar-nav">
	                    <li class="nav-item"> 
		                    <a class="nav-link" href="logout">Logout</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection