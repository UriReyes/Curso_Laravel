@csrf
<div class="form-group">
    <label for="title"><strong>Titulo del Proyecto</strong></label>
    <input type="text" name="title" id="title"
        class="form-control @error('title') is-invalid  @enderror shadow-sm border-0"
        placeholder="Titulo del proyecto..." aria-describedby="titleHelp" value="{{ old('title', $project->title) }}">
    <small id="titleHelp" class="form-text text-muted">Ingresa el titulo del proyecto</small>
    @error('title')
    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>

<div class="form-group">
    <label for="url"><strong>Url del Proyecto</strong></label>
    <input type="text" name="url" id="url" class="form-control @error('url') is-invalid  @enderror shadow-sm border-0"
        placeholder="Url del proyecto..." aria-describedby="urlHelp" value="{{ old('url', $project->url) }}">
    <small id="urlHelp" class="form-text text-muted">La url ayudará a crear un sitio más amigable</small>
    @error('url')
    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>

<div class="form-group">
    <label for="description"><strong>Descripción del Proyecto</strong></label>
    <textarea name="description" id="description" rows="3" placeholder="Descripción del proyecto..."
        class="form-control @error('description') is-invalid  @enderror shadow-sm border-0"
        aria-describedby="descriptionHelp">
    {{ old('description', $project->description) }}
    </textarea>
    <small id="descriptionHelp" class="form-text text-muted">Describe el proyecto</small>
    @error('description')
    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
    @enderror
</div>

<input class="btn btn-primary btn-block" type="submit" value="{{ $btnText }}">
<a href="{{ route('projects.index') }}" class="btn btn-link btn-block">Cancelar</a>
