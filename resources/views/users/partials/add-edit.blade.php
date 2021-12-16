
<div class="form-group">
    <label for="inputNome">Nome</label>
    <input type="text" class="form-control" name="name" id="inputNome" value="{{ old('nome', $user->name) }}" />
</div>

<div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="text" class="form-control" name="email" id="inputEmail" value="{{ old('email', $user->email) }}" />
</div>

<div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" name="name" id="inputPassword" value="{{ old('password', $user->password) }}" />
</div>


<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Please upload a valid file image. Size of image should not be
        more than 2MB </small>
</div>


<div class="form-group">
    <label for="inputRole">Role</label>
    <select name="role" id="inputRole" class="form-control">
        <option value="A" >Admin</option>
        <option value="N" selected>Normal</option>

    </select>
</div>
