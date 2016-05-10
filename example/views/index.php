<!DOCTYPE html>
<html lang="pt-br">
    <head>
		<?php include('includes/head.inc'); ?>
        <title>Administração</title>
    </head>
    <body>
        <?php include('includes/header.inc');	 ?>
        <main class="box">
            <div class="msg warning">Você não atualiza sua senha há 6 meses.</div>
            <div class="title">
                <h1>Bem-Vindo, Usuário</h1>
                <div class="back_line"></div>
            </div>
            <section class="management-boxes">
                <a href="#">
                    <div class="management-box">
                        <div class="flex-center">
                            <i class="fa fa-user"></i>
                            <p>Gerenciar<br>Meu Cadastro</p>
                        </div>
                    </div>
                </a>
                <a href="news.php">
                    <div class="management-box">
                        <div class="flex-center">
                            <i class="fa fa-newspaper-o"></i>
                            <p>Gerenciar<br>Notícias</p>
                        </div>
                    </div>
                </a>
                <a href="files.php">
                    <div class="management-box">
                        <div class="flex-center">
                            <i class="fa fa-file"></i>
                            <p>Gerenciar<br>Arquivos</p>
                        </div>
                    </div>
                </a>
                <a href="users.php">
                    <div class="management-box">
                        <div class="flex-center">
                            <i class="fa fa-users"></i>
                            <p>Gerenciar<br>Usuários</p>
                        </div>
                    </div>
                </a>
            </section>
        </main>
		<?php include('includes/footer.inc'); ?>
    </body>
</html>
