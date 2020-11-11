<?php
  $db = connect_db();
  $products = read_db($db, "product");
  $customers = read_db($db,"customer");
  if(isset($_POST['firstName'])){
    create_account($db ,$_POST['firstName'], $_POST['lastName'], $_POST['birthDay'], $_POST['country'], $_POST['email'], $_POST['username'], $_POST['password']);
  }
  if(isset($_POST['username']) && isset($_POST['password'])){
    foreach($customers as $customer){
        if($_POST['username'] === $customer['username'] && $_POST['password'] === $customer['password']){
            $_SESSION['login']= $_POST['username'];
        }
        else{
            header('Location: connection');
        }
    }
  }
  if(isset($_GET["action"])=="logout"){
    session_destroy();
    header('Location: /');
  }
?>

<header>
    <div class="modeLogo">
        <img src="img/modeLogo.png" alt="modeLogo">
    </div>
    <nav>
        <div class="lineMenu">
            <i class="fas fa-align-justify menu" onclick="ShowMenu()"></i>
        </div>
        <div class="language">
            <i class="fas fa-globe-americas"></i>
        </div>
        <ul class="menuLinks"> 
            <li>
                <a href="home">accueil</a>
            </li>
            <li>
                <a href="/">homme</a>
                <ul class="dropDownMenu">
                    <li><a href="/">okkkkfsfsf</a></li>
                    <li><a href="/">homme</a></li>
                    <li><a href="/">homme</a></li>
                </ul>
            </li>
            <li>
                <a href="/">femme</a>
            </li>
            <li>
                <a href="contact">nous contacter</a>
            </li>
            <li>
                <?php if(isset($_SESSION['login']) == false): ?>
                    <a href="connection">se connecter</a>
                <?php 
                    else:
                ?>
                    <p>Bienvenue <?php echo $_SESSION['login'] ?></p>
                    <ul class="dropDownMenu">
                        <li><a href="./?action=logout">Déconnexion</a></li>
                    </ul>
                <?php
                    endif;
                ?>
            </li>
        </ul>
        <div class="cart">
            <div class="cartContainer">
                <i class="fas fa-shopping-cart"></i>
                <div class="cartItem">0</div>
            </div>
        </div>
        <div class="purchase">
        </div>
    </nav>
</header>