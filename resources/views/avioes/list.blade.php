@extends ("layout.admin")


@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Posts</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{ route('avioes.create') }}">
                    <i class="fas fa-plus"></i> Adicionar Avião
                </a>
            </div>
            <div class="card-body">
                @if (count($avioes))
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Imagem</th>
                                    <th>Nome</th>
                                    <th>kms</th>
                                    <th>Nº litros</th>
                                    <th>Fornecedores</th>
                                    <th>Lugares</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($avioes as $aviao)
                                    <tr>
                                        <td>
                                            @if ($aviao->imagem)
                                                <img src="{{ asset('storage/img_avioes/' . $aviao->imagem) }}"
                                                    width="100" alt="Post image">

                                            @else
                                                <img src="{{ asset('img/no-image.png') }}" width="100"
                                                    alt="Post image">
                                            @endif
                                        </td>
                                        <td>{{ $aviao->nome }}</td>
                                        <td>{{ $aviao->kmsrealizados }}</td>
                                        <td>{{ $aviao->n_litros }}</td>
                                        <td>{{ $aviao->fornecedores }}</td>
                                        <td>{{ $aviao->total_poltronas }}</td>
                                        <td nowrap>
                                            <a class="btn btn-xs btn-primary btn-p"
                                                href="{{ route('avioes.show', $aviao) }}"><i
                                                    class="fas fa-eye fa-xs"></i></a>
                                            <a class="btn btn-xs btn-warning btn-p"
                                                href="{{ route('avioes.edit', $aviao) }}"><i
                                                    class="fas fa-pen fa-xs"></i></a>
                                            <form method="POST" action="{{ route('avioes.destroy', $aviao) }}" role="form"
                                                class="inline"
                                                onsubmit="return confirm('Are you sure you want to delete this record?');">
                                                @csrf
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-xs btn-danger btn-p"><i
                                                        class="fas fa-trash fa-xs"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                @else
                    <h6>Não existem aviões registados</h6>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('moreScripts')
    <script>
        $('#dataTable').dataTable({
            destroy: true,
            "order": [
                [1, 'desc']
            ],
            "columns": [{
                    "orderable": false
                },
                null,
                null,
                null,
                null,
                null,
                {
                    "orderable": false
                }
            ]
        });
    </script>
@endsection
