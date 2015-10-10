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
                <button id="edit" onclick="editing('#aboutus')" type="button" class="btn btn-principal to-right"><i class="icon-pencil"></i> Editar</button>
            </div>
            <div class="me field has-label">
                <label for="video">Nome da Empresa</label>
                <input id="video" class="form-input" name="video" type="text" required value="GainTime®">
            </div>
            <div>
                <div class="field menot">
                    <label for="">Localização</label>
                </div>
                <textarea class="form-input" name="videoDescription" rows="3"></textarea>
            </div>
            <div class="me field has-label">
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
    <script type="text/javascript" src="../vendors/jquery/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="../assets/js/inputLabels.js"></script>
    <script type="text/javascript">block();</script>
</html>

