<!DOCTYPE html>
<html>
    <head>
        <?php include('includes/head.inc'); ?>
        <title>Login</title>
    </head>
    <body>
        <section class="last login">
            <form action="" method="POST" class="s-form login-form">
                <a href=""><img src="../assets/img/logo-gT-f.png" alt="GainTime"></a>
                <div class="field has-label">
                    <label for="email">Email:</label>
                    <input id="email" type="email" name="professor[email]" required>
                </div>
                <div class="field has-label">
                    <label for="password">Senha:</label>
                    <input id="password" type="password" name="professor[password]" required>
                </div>
                <div class="forgot">
                    <a href="#">Esqueci minha senha.</a>
                </div>
                <button type="submit" class="btn btn-principal" onclick="window.location='news.php'"><i class="fa fa-sign-in"></i> Entrar</button>
            </form>
        </section>
        <?php include('includes/footer.inc'); ?>
    </body>
    <script type="text/javascript" src="../vendors/jquery/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="../assets/js/inputLabels.js"></script>
</html>
