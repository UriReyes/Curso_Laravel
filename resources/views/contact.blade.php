@extends('layout')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form class="bg-white shadow rounded py-3" method="POST" action="{{ route('messages.store') }}">

                    {{ csrf_field() }}

                    <div class="container">
                        <h1 class="display-4">@lang('Contact')</h1>
                        <hr>
                        <div class="form-group">
                            <label for="name"><strong>Nombre</strong></label>
                            <input name="name" placeholder="Nombre..." type="text"
                                class="form-control @error('name') is-invalid  @enderror shadow-sm border-0" id="name"
                                aria-describedby="nameHelp" value="{{ old('name') }}">
                            <small id="nameHelp" class="form-text text-muted">Tu nombre, nos ayudará a reconocerte más
                                facilmente.</small>
                            @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email"><strong>Correo Electrónico</strong></label>
                            <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid  @enderror shadow-sm border-0" id="email"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Tu email, nos ayudará a ponernos en contácto
                                contigo.</small>
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="subject"><strong>Asunto</strong></label>
                            <input name="subject" placeholder="Asunto..." type="text" value="{{ old('subject') }}"
                                class="form-control @error('subject') is-invalid  @enderror shadow-sm border-0" id="subject"
                                aria-describedby="subjectHelp">
                            <small id="subjectHelp" class="form-text text-muted">Danos una descripción, estaremos contentos
                                de poder ayudarte.</small>
                            @error('subject')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="content"><strong>Contenido</strong></label>
                            <textarea name="content" id="content" rows="3" placeholder="Mensaje..."
                                class="form-control @error('subject') is-invalid  @enderror shadow-sm border-0"
                                aria-describedby="contentHelp">{{ old('content') }}</textarea>
                            <small id="contentHelp" class="form-text text-muted">Cuentanos que es lo que requieres.</small>
                            @error('content')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">@lang('Send')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
