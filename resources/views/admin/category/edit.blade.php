@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Actualizar Categoria</h4>
        </div>

        <div class="card-body">
            <form action="{{ url('update-category', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre de la Categoria"
                            value="{{ $category->name }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Slug"
                            value="{{ $category->slug }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control" placeholder="Descripción">{{ $category->description }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : '' }}>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular"{{ $category->popular == '1' ? 'checked' : '' }}>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" placeholder="Meta Title"
                            value="{{ $category->meta_title }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" rows="3" class="form-control" placeholder="Meta Description">{{ $category->meta_descrip }}</textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="3" class="form-control" placeholder="Meta Keywords">{{ $category->meta_keywords }}</textarea>
                    </div>

                    @if ($category->image)
                        <img src="{{ asset('assets/uploads/category/' . $category->image) }}" alt="imagen"
                            class="cate-image">
                    @endif

                    <div class="col-md-12 mb-3">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>

    </div>
@endsection
