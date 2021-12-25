@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Etez vous sur de vouloire Supprimer de la Page <h3><b>{{ $page ->title }}</b></h3> et tous les notes qui sont de dans
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row list-group-item page-title-list">
                            <div class="col-xs-12">
                                <a href="../../pages/{{ Auth::user()->id }}/{{$page->id}}/deleteall"><button class ="btn btn-danger pull-right">Confirmer </button></a>
                                <a href="/userpages/{{ Auth::user()->id }}"><button class ="btn btn-danger pull-right">Annuler</button></a>
                            </div>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection