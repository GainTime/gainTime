<!DOCTYPE html>
<html>
    <head>
        <?php include('includes/head.inc'); ?>
        <title>Notícias</title>
    </head>
    <body>
        <?php include('includes/header.inc');     ?>
        <section class="box last">
            <div class="top-bar">
                <h1><i class="fa fa-newspaper-o"></i> Usuários</h1>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th class="hxs">email</th>
                        <th class="hxs">telefone</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>JP Rodrigues</td>
                    <td class="hxs">70jprodrigues@gmail.com</td>
                    <td class="hxs">(00) 0000-0000</td>
                    <td>
                        <a href="edit-user.php" class="btn-action edit" title="Editar Usuário"><i class="fa fa-edit fa-lg"></i></a>
                        <a href="" class="btn-action del" title="Excluir Usuário"><i class="fa fa-trash-o fa-lg"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </section>
        <?php include('includes/footer.inc'); ?>
    </body>
</html>
