@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="row g-3 needs-validation" novalidate action="{{ route('admin.categories.update', ['category'=> $category]) }}"
        method="post">
            @method('PUT')
            @csrf

            {{-- name --}}
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror"
                id="name" name="name" value="{{ old('name', $category->name) }}">
                <div class="invalid-feedback">
                    @error('name')
                        <ul>
                            @foreach ($errors->get('name') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>

            {{-- slug --}}
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <div class="row">
                    <div class="col-9">
                        <input type="text" class="form-control @error('slug') is-invalid @enderror"
                        id="slug" name="slug" value="{{ old('slug', $category->slug) }}">
                        <div class="invalid-feedback">
                            @error('slug')
                                <ul>
                                    @foreach ($errors->get('slug') as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary" type="button">Get slug</button>
                    </div>
                </div>


            </div>



            {{-- Description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror"
                id="description" name="description">{{ old('description', $category->description) }}</textarea>
                <div class="invalid-feedback">
                    @error('description')
                        <ul>
                            @foreach ($errors->get('description') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>

        </form>
    </div>
@endsection

