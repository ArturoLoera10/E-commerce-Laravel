@extends('layouts.admin')

@section('content')
    <div class="card">

        <div class="card-header">
            <h1>Categorias</h1>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/' . $item->image) }}" class="cate-image"
                                    alt="category">
                            </td>
                            <td>
                                <a href="{{ url('edit-category', $item->id) }}" class="btn btn-primary">Editar</a>
                                <a href="{{ url('delete-category', $item->id) }}" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
