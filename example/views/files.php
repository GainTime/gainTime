<!DOCTYPE html>
<html>
    <head>
        <?php include('includes/head.inc'); ?>
        <title>Arquivos</title>
    </head>
    <body>
        <?php include('includes/header.inc');  ?>
        <section class="box last">
                <div class="top-bar">
                    <h1><i class="fa fa-file-pdf-o"></i> Arquivos</h1>
                    <a href="add-file.php" class="btn btn-add"><i class="fa fa-plus"></i>Adicionar</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Arquivo</th>
                            <th class="hxs">Autor</th>
                            <th class="hxs">Data de criação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Edital 2016</td>
                        <td class="hxs">JP Rodrigues</td>
                        <td class="hxs">22-11-2015, 22:00</td>
                        <td>
                            <a href="edit-file.php" class="btn-action edit" title="Editar Arquivo"><i class="fa fa-edit fa-lg"></i></a>
                            <a href="" class="btn-action del" title="Excluir Arquivo"><i class="fa fa-trash-o fa-lg"></i></a>
                            <a href="" class="btn-action download"  target="_blank" title="Baixar Arquivo"><i class="fa fa-download"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
        </section>
		<?php include('includes/footer.inc'); ?>
    </body>
</html>
