<?php
  define("PAGETITLE","Accueil");
  define("PAGEALIAS","accueil");

  $slideshowImages = glob("img/slideshow/*.jpg");
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

      <div class="slideshow">
        <div class="images">
          <?php
            foreach($slideshowImages as $image){
              echo '<img class="slideshowImages" src="' . $image . '">';
            } 
          ?>
        </div>
        <div class="buttons">
          <i id="slideShowLeftArrow" class="fas fa-arrow-circle-left arrow" onclick="ShowImages(-1, false)"></i>
          <?php
            $index = 0;
            foreach($slideshowImages as $image){
              if($index == 0){
                echo '<i class="fas fa-circle slidesButtons" onclick="ShowImages(' . $index . ', true)"></i>';
              }else{
                echo '<i class="far fa-circle slidesButtons" onclick="ShowImages(' . $index . ', true)"></i>';
              }
              $index++;
            }
          ?>
          <i id="slideShowRightArrow" class="fas fa-arrow-circle-right arrow" onclick="ShowImages(1, false)"></i>
        </div>
      </div>

      <div class="content">
        <div class="new">
          <div class="title">
            <h2>nouveautés</h2>
          </div>
          <div class="cards">
              <?php
                $date = date('Y-m-d', strtotime('-1 year'));
                foreach($products as $product):
                  if($product['date']>$date):
              ?>
                <div class="cardsContainer">
                  <div class="card">
                    <div id="cardImage">
                      <?php
                        echo '<img src="img/products/' . $product['id'] . '.jpg">';
                      ?>
                    </div>
                    <div id="cardMarkDescription">
                      <?php
                        echo '<h3>' . $product['mark'] . ' :</h3>';
                        echo '<p>' . $product['description'] . '</p>';
                      ?>
                    </div>
                    <div id="cardCost">
                      <?php
                        echo '<p>' . $product['cost'] . ' $</p>';
                      ?>
                    </div>
                    <div id="cardPurchase">
                      <i class="fas fa-cart-plus" onclick="DeterminesNumberOfPurchases(); GetProducId(<?php echo $product['id'] ?>)"></i>
                    </div>
                  </div>
                </div>
              <?php
                  endif;
                endforeach;
              ?>
            </div>
          </div>
      </div>
 
    </main>

    <?php 
      require "./includes/footer.php";
      require "./includes/javascript.php";
    ?>
</body>

</html>