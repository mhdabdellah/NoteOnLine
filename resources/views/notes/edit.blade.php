@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Modification de la Note
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row list-group-item">
                        <form method="POST" action="update">
                            {{ csrf_field() }}
                            <div class="input-group">
                            <textarea type="text" name="text" value='{{ $note->text }}' class="form-control">{{ $note->text }}</textarea>
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="submit">Modifier</button>
                                    <a href="../../pages/{{ $note->page_id }}"><button class="btn btn-info" type="button">Anuler</button></a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection