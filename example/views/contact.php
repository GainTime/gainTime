<!DOCTYPE html>
<html>
    <head>
        <?php include('includes/head.inc'); ?>
        <title>Contato</title>
    </head>
    <?php include('includes/header.inc'); ?>
    <section class="box last">
        <form id="aboutus" action="" class="s-form" method="POST" enctype="multipart/form-data">
            <div class="top-bar cf">
                <h1><i class="fa fa-envelope"></i> Contato</h1>
                <button id="edit" onclick="editing('#aboutus', 'company')" type="button" class="btn wait to-right"><i class="icon-pencil"></i> Editar</button>
            </div>
            <div class="getme field has-label">
                <label for="company">Nome da Empresa</label>
                <input id="company" class="form-input" name="company" type="text" required value="GainTime®">
            </div>
            <div>
                <div class="field menot">
                    <label for="">Localização</label>
                </div>
                <textarea class="form-input" name="videoDescription" rows="3"></textarea>
            </div>
            <div class="getme field has-label">
                <label for="">Telefone</label>
                <input class="form-input" name="title" type="text" value="(xx) xxxx-xxxx">
            </div>
            <div>
                <div class="field menot">
                    <label for="">Rede social 1</label>
                </div>
                <textarea class="form-input" name="text" rows="3"></textarea>
            </div>
            <div id="btn-pair" class="btn-pair">
                <button type="reset" class="btn cancel" onclick="block()">Cancelar</button>
                <button class="btn send" type="submit" name="action" value="update">Concluir</button>
            </div>
        </form>
    </section>
    <?php include 'includes/footer.inc'; ?>
    <script type="text/javascript" src="../assets/js/inputLabels.min.js"></script>
    <script type="text/javascript">block();</script>
</html>
