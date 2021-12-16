<div class="form-group">
    <label for="inputNome">Title</label>
    <input type="text" class="form-control" name="nome" id="inputNome" value="{{ old('nome', $aviao->nome) }}" />
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Please upload a valid file image. Size of image should not be
        more than 2MB </small>
</div>

