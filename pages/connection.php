<?php
  define("PAGETITLE","Connexion");
  define("PAGEALIAS","connexion");
?>
<!doctype html>
<html class="no-js" lang="">
<?php require "./includes/head.php";?>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <?php require "./includes/header.php";?>

    <main>
        <?php
          // Si l'utilisateur est connecté.
          if(isset($_SESSION['login']) == false):
        ?>
            <div id="connection">
                <div id="connectionTitle">
                    <h2>connexion</h2>
                </div>
                <form action="/" method="post">
                    <div>
                        <h3>nom d'utilisateur:</h3>
                        <input type="text" name="username">
                    </div>
                    <div>
                        <h3>mot de passe:</h3>
                        <input type="text" name="password">
                    </div>
                    <input type="submit" value="connexion">
                    <a href="register">s'incrire...</a>
                </form>
            </div>
        <?php
            endif;
        ?>
    </main>

    <?php 
      require "./includes/footer.php";
      require "./includes/javascript.php";
    ?>
</body>

</html>