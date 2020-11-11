/* Montrer et cacher le menu. */
function ShowMenu() {
  var element = document.getElementsByClassName("menuLinks");
  element[0].classList.toggle("show");
}

/* La position de l'image dans le tableau d'images. */
var imageIndex = 0;

function ShowImages(newIndex, radioButton){
  var images = document.getElementsByClassName("slideshowImages");
  var slideshowButtons = document.getElementsByClassName("slidesButtons");

  if(radioButton == true){
    imageIndex = newIndex;
  }else{
    imageIndex += newIndex;
  }

  if(imageIndex<0){
    imageIndex = images.length-1;
  }else if(imageIndex>images.length-1){
    imageIndex = 0;
  }

  for(i=0; i<images.length; i++){
    images[i].style.display = "none";
  }

  for(i=0;i<slideshowButtons.length;i++){
    slideshowButtons[i].classList.replace("fas","far");
  }

  images[imageIndex].style.display = "block";
  slideshowButtons[imageIndex].classList.replace("far","fas");
}

/* On affiche la première image tant que l'usager n'a pas cliquer sur les boutons. */
ShowImages(0, false);

function DeterminesNumberOfPurchases(){
  var nbItems = document.getElementsByClassName("cartItem");
  var number = nbItems[0].innerHTML;
  number++;
  nbItems[0].innerHTML = number;
}

var productIndex = new Array();
function GetProducId(id){
  productIndex.push(id);
}


