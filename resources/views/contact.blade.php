@extends('layout')

@section('title','Contact')

@section('content')
    <h1>@lang('Contact')</h1>
    <form method="POST" action="{{route('contact')}}">
        {{csrf_field()}}
        <input name="name" placeholder="Nombre..." type="text" value="{{ old('name') }}">
        {!!$errors->first('name', '<small>:message</small>')!!}
        
        <input type="text" name="email" placeholder="Email..." value="{{ old('email') }}">
        {!!$errors->first('email', '<small>:message</small>')!!}

        <input name="subject" placeholder="Asunto..." type="text" value="{{ old('subject') }}">
        {!!$errors->first('subject', '<small>:message</small>')!!}
        
        <textarea name="content" id="" cols="30" rows="10" placeholder="Mensaje...">{{ old('content') }}</textarea>
        {!!$errors->first('content', '<small>:message</small>')!!}
        
        <button type="submit">@lang('Send')</button>
    </form>
@endsection
