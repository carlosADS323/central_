<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>
    <head>
        <title>Login Page</title>
        <!--Made with love by Mutiullah Samim -->

        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="../css/login.css">


    </head>

    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <div class="fadeIn first">
                    <img class="wallpapper" src="../img/logo.jpeg" id="icon" alt="User Icon" />
                </div> 
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center h-100     ">
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                      
                    </div>
                    <div class="card-body">
                        <form action="../Config/validaLogin.php" method="POST">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="email" placeholder="E-mail">

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="senha" placeholder="password">
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox">Lembrar
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Log In" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            N??o tem uma conta?<a href="../View/cadastro.php">Cadastrar</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#">Esqueceu sua senha?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>