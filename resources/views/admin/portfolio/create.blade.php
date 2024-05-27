@extends('layouts.admin')

@section('content')
    <h2>Editing : {{ $project->title }}</h2>
    <div class="container">

        <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- cover_image --}}
            <div class="mb-3 text-light">
                <label for="link" class="form-label">cover_image</label>
                <input type="file" class="form-control  @error('cover_image') is-invalid @enderror" name="cover_image"
                    id="cover_image" aria-describedby="helpId" placeholder="Type a cover_image" />
                <small id="cover_imageId" class="form-text text-muted">Type a cover_image</small>
            </div>
            @error('cover_image')
                <h6 class="text-danger ">{{ $message }}</h6>
            @enderror

            {{-- Title --}}
            <div class="mb-3 text-light">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title', $project->title) }}" id="title" aria-describedby="helpId"
                    placeholder="Type a title" />
                <small id="titleId" class="form-text text-muted">Type a Title</small>
            </div>
            @error('title')
                <h6 class="text-danger ">{{ $message }}</h6>
            @enderror

            {{-- Slug --}}
            <div class="mb-3 text-light">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" value="{{ old('slug', $project->slug) }}"
                    class="form-control  @error('slug') is-invalid @enderror" name="slug" id="slug"
                    aria-describedby="helpId" placeholder="Type a slug" />
                <small id="slugId" class="form-text text-muted">Type a Slug</small>
            </div>
            @error('slug')
                <h6 class="text-danger ">{{ $message }}</h6>
            @enderror

            {{-- Technologies --}}
            @foreach ($techs as $tech)
                <div class="form-check form-check-inline text-warning"> @error('techs')
                        <h6 class="text-danger ">{{ $message }}</h6>
                    @enderror
                    <input class="form-check-input bg-dark @error('tech') is-invalid @enderror" type="checkbox"
                        {{ in_array($tech->id, old('techs', [])) ? 'checked' : '' }} id="technology-{{ $tech->id }}"
                        value="{{ $tech->id }}" />
                    <label class="form-check-label @error('tech') bg-danger @enderror"
                        for="technology-{{ $tech->id }}">{{ $tech->name }}</label>
                </div>
            @endforeach

            {{-- Content --}}
            <div class="mb-3 text-light">
                <label for="content" class="form-label">Content</label>
                <input type="text" value="{{ old('content', $project->content) }}"
                    class="form-control  @error('content') is-invalid @enderror" name="content" id="content"
                    aria-describedby="helpId" placeholder="Type a content" />
                <small id="contentId" class="form-text text-muted">Type a Content</small>
            </div>
            @error('content')
                <h6 class="text-danger ">{{ $message }}</h6>
            @enderror

            {{-- Link --}}
            <div class="mb-3 text-light">
                <label for="link" class="form-label">Link</label>
                <input type="text" value="{{ old('link', $project->link) }}"
                    class="form-control  @error('link') is-invalid @enderror" name="link" id="link"
                    aria-describedby="helpId" placeholder="Type a Link" />
                <small id="linkId" class="form-text text-muted">Type a Link</small>
            </div>
            @error('link')
                <h6 class="text-danger ">{{ $message }}</h6>
            @enderror

            {{-- SUBMIT --}}
            <button class="btn btn-secondary" type="submit">Confirm</button>
        </form>
    </div>
@endsection
