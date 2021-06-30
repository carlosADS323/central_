<!DOCTYPE html>
<?php
include_once './Config/database.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Central de Serviços</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" media="screen" />
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-dark bg-dark static-top">
            <div class="container">
                <img src="img/logo.jpeg" alt="" width=120 height=60>
                <?php
                if (empty($_SESSION['email'])) {
                    echo '<a class="btn btn-primary" href="View/cadastro.php">Cadastrar</a>';
                } else {
                    
                }
                ?>

                <?php
                if (empty($_SESSION['email'])) {
                    echo '<a class="btn btn-success" href="View/login.php">Login</a>';
                } else {
                    
                }
                ?> 
            </div>
            <?php
            if (empty($_SESSION['email'])) {
                
            } else {
                
            }
            ?> 

            <?php
            if (empty($_SESSION['email'])) {
                
            } else {
                echo '<a class="btn btn-sair" href="Config/sair.php">Sair</a>';
                session_destroy();
                header("Location: ./index.php");
            }
            ?> 


        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <img src="img/logo.jpeg" class="logocentral" alt="" width=240 height=120>
                            <h3 class="mb-5">Dê agora mesmo um upgrade na sua vida profissional!</h3>
                            <!-- Signup form-->

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            </br>
            <h3>Cadastrados</h3>
            </br>

            <div class="card-body pt-0">
                <div class="table-responsive">
                    <?php
                    $rs = $pdo->prepare("SELECT * FROM usuarios WHERE id > 0 order by id");
                    $rs->execute();
                    ?>

                    <table class="table table-bordered dataTable" width="50%" cellspacing="0">
                        <thead>
                            
                            <tr>
                                <th class="text-center pr-2">Profissao</th>           
                                <th class="text-center no-sort">Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($vagas = $rs->fetch(PDO::FETCH_ASSOC)) { ?>       
                                <tr>
                                    <td><?php echo $vagas['nome']; ?></td>
                                    <td><?php echo $vagas['profissao']; ?></td>
                                </tr>  

                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/home.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Engrenagem Funcional</h2>
                        <p class="lead mb-0">Aqui na central você tem a melhor ferramenta em mãos para divulgar o seu serviço!</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/home2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Comunicação</h2>
                        <p class="lead mb-0">Nos serviços apresentados pelos usuarios da Central são utilizados meios de comunicação através de aplicativos como Telegram ou Whatsapp!</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/home3.png')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Tempo Valioso</h2>
                        <p class="lead mb-0">Aqui você faz sua consultoria, agendamento ou vende seu serviço economizando tempo e dinheiro com anuncios!</p>
                    </div>
                </div>
            </div>
        </section>
        <?php
        include_once './View/footer.php';
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
