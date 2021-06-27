<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../img/logo.jpeg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="../Config/validaLogin.php" method="POST">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="E-mail">
      <input type="text" id="senha" class="fadeIn third" name="senha" placeholder="password" type="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Esqueçeu sua senha?</a>
    </div>
    
  </div>
</div>