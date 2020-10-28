@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form action="{{ route('projects.update', $project) }}" method="post">
                    <h1 class="display-4">Editar Proyecto</h1>
                    @method('PATCH')
                    @include('projects._form', ['btnText'=> 'Actualizar'])
                </form>
            </div>
        </div>
    </div>
@endsection
