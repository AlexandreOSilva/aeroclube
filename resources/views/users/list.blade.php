@extends('layout.admin')

@section("content")
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>


     <div class="card shadow mb-4">
        <div class="card-header py-3">
			<a class="btn btn-primary" href="{{ route('users.create') }}">
				<i class="fas fa-plus"></i> Adicionar User
			</a>
        </div>
        <div class="card-body">

            @if (count($users))

			<div class="row">
				<div class="col-md-2" style="border:1px solid #dee2e6;">
					<form method="GET" action="#" class="form-group">


						<div class="form-group">
							<label for="inputName">Name</label>
							<input type="text" class="form-control" name="name" id="inputName"
								value="" />
						</div>
						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email address"
								value="" />
						</div>
						<label for="inputRole">Role</label>
						<select name="role" id="inputRole" class="form-control">
							<option value="">All</option>
							<option value="A">Admin</option>
							<option value="N">Normal</option>
						</select>

						<br>
						<div class="form-group">
							<button type="submit" class="btn btn-success">Search</button>
						</div>

					</form>
				</div>
				<div class="col-md-10" style="border:1px solid #dee2e6;">


					<div class="table-responsive">
						<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						  <thead>
							<tr>
							  <th>Name</th>
							  <th>Email</th>
							  <th>Password</th>
							  <th>Foto</th>
                              <th>Role</th>
							  <th>Actions</th>
							</tr>
						  </thead>
						  <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>
                                    @if ($user->foto)
                                        <img src="{{ asset('storage/img_users/' . $user->foto) }}"
                                            width="100" alt="Post image">

                                    @else
                                        <img src="{{ asset('img/no-image.png') }}" width="100"
                                            alt="Post image">
                                    @endif
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ $user->role}}</td>

                                <td nowrap>
                                    <a class="btn btn-xs btn-primary btn-p"
                                        href="{{ route('users.show', $user) }}"><i
                                            class="fas fa-eye fa-xs"></i></a>
                                    <a class="btn btn-xs btn-warning btn-p"
                                        href="{{ route('users.edit', $user) }}"><i
                                            class="fas fa-pen fa-xs"></i></a>
                                    <form method="POST" action="{{ route('users.destroy', $user) }}" role="form"
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
            <h6>N??o existem users registados</h6>
        @endif
    </div>
</div>
</div>
@endsection

@section("moreScripts")
<script>

$('#dataTable').dataTable( {
  destroy: true,
    "order": [[ 1, 'asc' ]],
	"columns": [
    { "orderable": false },
    null,
	null,
    null,
    null,
	{ "orderable": false }
  ]
} );

  </script>
@endsection
