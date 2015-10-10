<form action="" method="POST" enctype="multipart/form-data" class="s-form">
    <div class="msg-fixed warning">Os campos com * são obrigatórios.</div>
    <div class="field has-label">
        <label for="file_title">Título Final do Arquivo *</label>
        <input type="text" name="file[title]" value="" required>
    </div>
    <div>
        <div class="field menot">
            <label for="file_description">Descrição</label>
        </div>
        <textarea name="file[description]" id="area1" cols="10" rows="5" ></textarea>
    </div>
    <div class="btn-pair">
        <div class="field menot">
            <label>Nível de Permissão *</label>
        </div>
        <label class="btn btn-radio">
           <input type="radio" name="professor[isAdmin]" required value="1" checked>
           Administrador
        </label>
        <label class="btn btn-radio">
           <input type="radio" name="professor[isAdmin]" value="0">
           Usuário
        </label>
    </div>
    <div class="input-file">
        <div class="btn btn-file">
            <i class="fa fa-upload"></i>
            <input type="file" class="real" name="file" value=">
            <input type="hidden" name="MAX_FILE_SIZE" value="20971520"/>
        </div>
        <div class="field"><input class="false" type="text" value="" placeholder="Nenhum arquivo foi selecionado."></div> *
    </div>
    <div class="msg-fixed warning">* Arquivo não deve possuir tamanho maior que 20 Megabytes.</div>
    <div class="btn-pair">
        <a class="btn cancel" href="files.php">Cancelar</a>
        <button type="submit" class="btn send" value="Upload">Upload</button>
    </div>
</form>
