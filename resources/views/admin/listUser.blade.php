@extends('layouts.dashboard')

@section('title', 'Gestion des Utilisateurs - Bénin Tourisme')

@section('content')
    <div class="content" style="margin: 100px 50px; height:100vh">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   <div class="d-flex justify-content-between card-header">
                    <h4 class="card-title"> Utilisateurs </h4>
                  
                   </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>Nom et Prénoms</th>
                                    <th>Email</th>
                                    <th>Rôles</th>
                                    <th>Statut</th>
                                    <th class="text-right">Actions</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @foreach ($user->roles as $role)
                                                    {{ $role->name }}
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $user->status }}</td>
                                            <td class="text-right">
                                                <form action="{{ route('approve.guide.account', $user->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success" @if($user->status === 'active') disabled @endif>Approuver</button>
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
