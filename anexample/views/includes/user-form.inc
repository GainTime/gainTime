<form action="" method="POST" enctype="multipart/form-data" class="s-form">
    <div class="msg-fixed warning" id="top-msg">Os campos com * são obrigatórios.</div>
    <div class="prev-img" style="background-image: url(../assets/img/logo-gT.png);">
        <div class="fake">
            <i class="icon-picture"></i>
        </div>
        <img id="prev-img">
        <input type="file" name="picture" value="" id="changer">
    </div>
    <button id="form-control" type="button" class="btn wait" href="#">Alterar senha?</button>
    <div class="form-controled invisible">
        <div class="msg-fixed warning">A senha deve conter de 6 a 20 caracteres.</div>
        <div class="field has-label">
            <label for="new">Nova Senha*</label>
            <input id="new" type="password" title="6 a 20 caracteres" pattern=".{6,20}">
        </div>
        <div class="field has-label">
            <label for="confirm">Confirmar Senha*</label>
            <input id="confirm" type="password" name="user[password]" title="6 a 20 caracteres" pattern=".{6,20}">
        </div>
    </div>
    <div class="field has-label">
        <label for="name">Nome*</label>
        <input type="text" name="user[name]" id="name" value="" required>
    </div>
    <div class="field has-label">
        <label for="email">E-mail*</label>
        <input type="email" name="user[email]" id="email" value="" required>
    </div>
    <div>
        <div class="field-mark menot">
            <label>Nível de Acesso *</label>
        </div>
        <label class="radio">
           <input type="radio" name="user[isAdmin]" required value="1"> Administrador
        </label>
        <label class="radio">
           <input type="radio" name="user[isAdmin]" value="0"> Usuário
        </label>
    </div>
    <div class="btn-pair">
        <a href="users.php" class="btn cancel">Voltar</a>
        <input type="submit" class="false-send btn send" value="Salvar">
    </div>
</form>
