@extends('layout')

@section('title', 'About')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mt-4">
                <img class="img-fluid" src="/img/about.svg" alt="Desarrollo Web">
            </div>
            
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">
                    Quién Soy
                </h1>
                <p class="lead text-secondary">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt dicta, neque in repellendus explicabo
                    corporis maiores magni? Expedita fugit earum facilis commodi voluptatum similique culpa quisquam. Est
                    aspernatur sunt, perferendis nam praesentium minus sapiente odio atque neque quod nemo dolores adipisci
                    perspiciatis at officiis? Neque praesentium eos veniam iure recusandae!
                </p>
                <a href="{{ route('contact') }}" class="btn btn-large btn-block btn-outline-secondary">Contáctame</a>
                <a href="{{ route('projects.index') }}"
                    class="btn btn-large btn-block btn-outline-primary">@lang('Projects')</a>
            </div>
        </div>
    </div>
@endsection
