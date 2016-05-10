<form action="" method="POST" enctype="multipart/form-data" class="s-form">
    <div class="msg-fixed warning">Os campos com * são obrigatórios.</div>
    <div class="prev-img" style="background-image: url(../assets/img/logo-gT.png)">
        <div class="fake">
            <i class="icon-picture"></i>
        </div>
        <img id="prev-img">
        <input type="file" name="picture" value="" id="changer">
    </div>
    <div class="field has-label">
        <label for="notice_title">Título da Notícia *</label>
        <input type="text" name="notice[title]" value="" required>
    </div>
    <div class="field has-label">
        <label for="notice_author">Subtítulo *</label>
        <input type="text" name="notice[subtitle]" value="" required>
    </div>
    <div class="select-group">
        <label for="archive">Categoria</label>
        <select name="" id="archive">
            <option value="">Esportes</option>
            <option value="">Música</option>
        </select>
    </div>
    <div>
        <div class="field menot">
            <label for="notice_description">Texto *</label>
        </div>
        <textarea name="notice[text]" id="area1" cols="10" rows="5" ></textarea>
    </div>
    <div class="btn-pair">
        <a href="news.php" class="btn cancel">Voltar</a>
        <input type="submit" class="btn send" value="Salvar">
    </div>
</form>
