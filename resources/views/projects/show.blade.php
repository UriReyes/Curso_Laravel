@extends('layout')

@section('title', 'Portfolio')

@section('content')
    <div class="container">
        <div class="bg-white p-5 shadow rounded">
            <h1>{{ $project->title }}</h1>
            <p class="text-secondary">{{ $project->description }}</p>
            <p class="text-black-50">{{ $project->created_at->diffForHumans() }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('projects.index') }}" class="btn btn-secondary">Regresar</a>
                @auth
                    <div class="btn-group-sm text-center">
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary">Editar</a>
                        <a href="#" class="btn btn-danger"
                            onclick="event.preventDefault(); document.getElementById('delete-project').submit()">
                            Eliminar</a>
                    </div>
                    <form id="delete-project" action="{{ route('projects.destroy', $project) }}" method="POST"
                        class="d-none">
                        @csrf @method('DELETE')
                    </form>

                @endauth
            </div>
        </div>
    </div>

@endsection
