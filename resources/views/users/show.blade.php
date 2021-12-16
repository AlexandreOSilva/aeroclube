@extends('layout.admin')

@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                Informação do user
            </div>
            <div class="card-body">
                @if ($user->foto)
                    <div>
                        <img alt="USER imagem" width="250" src="{{ asset('storage/img_users/' . $user->foto) }}">
                    </div>

                @endif
                <div><strong>Nome:</strong> {{ $user->name }} </div>
                <div><strong>Email:</strong> {{ $user->email }} </div>
                <div><strong>Password:</strong> {{ $user->password }} </div>
                <div><strong>Role:</strong> {{ $user->role }} </div>



            </div>
        </div>
    </div>
@endsection
