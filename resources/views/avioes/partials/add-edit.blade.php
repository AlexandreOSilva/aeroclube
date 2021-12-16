<div class="form-group">
    <label for="inputNome">Nome</label>
    <input type="text" class="form-control" name="nome" id="inputNome" value="{{ old('nome', $aviao->nome) }}" />
</div>

<div class="form-group">
    <label for="inputKmsRealizados">Kilómetros realizados</label>
    <input type="text" class="form-control" name="kmsrealizados" id="inputKmsRealizados" value="{{ old('kmsrealizados', $aviao->kmsrealizados) }}" />
</div>

<div class="form-group">
    <label for="inputLitros">Nº Litros</label>
    <input type="text" class="form-control" name="n_litros" id="inputLitros" value="{{ old('n_litros', $aviao->n_litros) }}" />
</div>

<div class="form-group">
    <label for="inputFornecedores">Fornecedores</label>
    <input type="text" class="form-control" name="fornecedores" id="inputFornecedores" value="{{ old('fornecedores', $aviao->fornecedores) }}" />
</div>

<div class="form-group">
    <label for="inputLugares">Lugares</label>
    <input type="text" class="form-control" name="total_poltronas" id="inputLugares" value="{{ old('total_poltronas', $aviao->total_poltronas) }}" />
</div>

<div class="form-group">
    <label for="inputImage">Imagem</label>
    <input type="file" class="form-control-file" name="imagem" id="inputImage" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Please upload a valid file image. Size of image should not be
        more than 2MB </small>
</div>

