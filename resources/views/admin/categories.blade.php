@extends('layouts.dashboard')

@section('title', 'Bénin tourisme')

@section('content')
    <div class="content" style="margin: 100px 50px; height:100vh">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center card-header">
                        <h4 class="card-title"> Catégories </h4>
                        <a href="{{ route('categories.create') }}" class="btn btn-primary"> Ajouter</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Modifier</a>
                                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
