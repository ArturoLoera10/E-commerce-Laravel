@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header">
            <h4>Actualizar Producto</h4>
        </div>

        <div class="card-body">
            <form action="{{ url('update-product', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-md-12 mb-3">
                        <label for="">Category</label>
                        <select class="form-select">
                            <option value="">{{ $products->category->name }}</option>
                        </select>

                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre de la Categoria"
                            value="{{ $products->name }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="Slug"
                            value="{{ $products->slug }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Small Description</label>
                        <textarea name="small_description" rows="3" class="form-control" placeholder="Small Descripción">{{ $products->small_description }}</textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control" placeholder="Descripción">{{ $products->description }}</textarea>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" class="form-control" name="original_price" placeholder="Original Price"
                            value="{{ $products->original_price }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Selling Price</label>
                        <input type="number" class="form-control" name="selling_price" placeholder="Selling Price"
                            value="{{ $products->selling_price }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" name="qty" placeholder="Quantity"
                            value="{{ $products->qty }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Tax</label>
                        <input type="number" class="form-control" name="tax" placeholder="Tax"
                            value="{{ $products->tax }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{ $products->status == '1' ? 'checked' : '' }}>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" name="trending" {{ $products->trending == '1' ? 'checked' : '' }}>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" placeholder="Meta Title"
                            value="{{ $products->meta_title }}">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="3" class="form-control" placeholder="Meta Keywords">{{ $products->meta_keywords }}</textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_descrip" rows="3" class="form-control" placeholder="Meta Description">{{ $products->meta_descrip }}</textarea>
                    </div>

                    @if ($products->image)
                        <img src="{{ asset('assets/uploads/products/' . $products->image) }}" alt="iamgen"
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
