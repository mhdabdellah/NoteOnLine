@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $page-> title }}
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('voire tous les Notes disponible') }} <br>
                    <hr>
                    @foreach($page->notes as $note)
                    
                        <div class="row list-group-item page-title-list">
                            <div class="col-xs-8">
                               {{ $note ->text }}
                            </div>
                            <div class="col-xs-4">
                                <a href="../notes/{{ $note->id }}/edit"><button class ="btn btn-success pull-right">Modifier</button></a>
                                <a href="../notes/{{ $note ->id }}/delete"><button class ="btn btn-danger pull-right">Supprimer</button></a>
                            </div>
                           
                        </div>
                    @endforeach
                    <div class="row list-group-item">
                        <form method="POST" action="../{{ $page->id }}/addnote">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <textarea type="text" name="text" class="form-control" placeholder="Ajouter une Note ..."></textarea>
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="submit">Ajouter</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    @if(count($errors))
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                     @endif
                    <hr>
                    <span class="btn"><a href="../userpages/{{ Auth::user()->id }}">
                        <button class="btn  btn-info pull-right" type="button">La list des Pages</button>
                    </a></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection