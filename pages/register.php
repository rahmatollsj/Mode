<?php
  define("PAGETITLE","Inscription");
  define("PAGEALIAS","inscription");
?>
<!doctype html>
<html class="no-js" lang="">
<?php require "./includes/head.php";?>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <?php 
        require "./includes/header.php";
    ?>

    <main>
        <div id="registerMain">
            <form action="/" method="post">
                <div>
                    <h3>Prénom:</h3>
                    <input type="text" name="firstName">
                </div>
                <div>
                    <h3>Nom:</h3>
                    <input type="text" name="lastName">
                </div>
                <div>
                    <h3>date de naissance:</h3>
                    <input type="date" name="birthDay">
                </div>
                <div>
                    <h3>Pays:</h3>
                    <select name="country">
                        <option value="Canada">Canada</option>
                        <option value="US">US</option>
                        <option value="France">France</option>
                        <option value="Germeny">Germeny</option>
                        <option value="Belgium">Belgique</option>
                    </select>
                </div>
                <div>
                    <h3>adresse courriel:</h3>
                    <input type="text" name="email">
                </div>
                <div>
                    <h3>nom d'utilisateur:</h3>
                    <input type="text" name="username">
                </div>
                <div>
                    <h3>mot de passe:</h3>
                    <input type="text" name="password">
                </div>
                <input type="submit" value="s'inscrire">
            </form>
        </div>
    </main>

    <?php 
      require "./includes/footer.php";
      require "./includes/javascript.php";
    ?>
</body>

</html>