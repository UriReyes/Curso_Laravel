@extends('layout')

@section('title','Portfolio')

@section('content')
   
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form action="{{route('projects.store')}}" method="post" class="bg-white shadow rounded py-3">
                    <div class="container">
                        <h1 class="display-4">Crear Proyecto</h1>
                        @include('projects._form', ['btnText'=> 'Guardar'])
                    </div>
                </form>
            </div>
        </div>
    </div>
   
@endsection