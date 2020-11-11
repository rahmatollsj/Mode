<?php
  define("PAGETITLE","Nous contacter");
  define("PAGEALIAS","contacte");
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
        <div id="contactMain">
            <div class="contactTitle">
                <h2>nos coordonnées</h2>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2297.468131490606!2d-71.30111047118513!3d46.781344163442434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb89728b956160d%3A0x2ccc36244b36f7d5!2sCentre+Commercial+Plaza+Laval!5e0!3m2!1sfr!2sca!4v1563232358156!5m2!1sfr!2sca" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="info">
                <h3>adresse:</h3>
                <p>2750 Ch Ste-Foy, Québec, QC G1V 1G7</p>
                <h3>téléphone:</h3>
                <p>(581) 002-1234</p>
                <h3>adresse courriel</h3>
                <p>mode@gmail.com</p>
            </div>
        </div>
    </main>

    <?php 
      require "./includes/footer.php";
      require "./includes/javascript.php";
    ?>
</body>

</html>