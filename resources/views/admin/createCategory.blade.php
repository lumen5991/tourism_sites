@extends('layouts.dashboard')

@section('title', 'Bénin tourisme - Créer une catégorie')

@section('content')
    <div class="content" style="margin: 100px 50px; height:100vh">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Créer une nouvelle catégorie</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nom de la catégorie</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom de la catégorie" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Entrez la description de la catégorie"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Créer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
