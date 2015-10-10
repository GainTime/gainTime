<!DOCTYPE html>
<html>
	<head>
		<?php include('includes/head.inc'); ?>
		<title>Notícias</title>
	</head>
	<body>
        <?php include('includes/header.inc');	 ?>
		<section class="box last">
            <div class="top-bar">
                <h1><i class="fa fa-newspaper-o"></i> Notícias</h1>
                <a href="add-news.php" class="btn btn-add"><i class="fa fa-plus"></i>Adicionar</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Noticias</th>
                        <th class="hxs">Autor</th>
                        <th class="hxs">Data de criação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Lançamento do GainTime</td>
                    <td class="hxs">JP Rodrigues</td>
                    <td class="hxs">25-12-2020, 19:30</td>
                    <td>
                        <a href="edit-news.php" class="btn-action edit" title="Editar Noticia"><i class="fa fa-edit fa-lg"></i></a>
                        <a href="" class="btn-action del" title="Excluir Noticia"><i class="fa fa-trash-o fa-lg"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
		</section>
		<?php include('includes/footer.inc'); ?>
	</body>
</html>
