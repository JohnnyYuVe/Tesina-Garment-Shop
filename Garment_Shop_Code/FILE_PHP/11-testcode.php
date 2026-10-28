<?php 

?>  



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <?xml version="1.0" encoding="UTF-8"?>


   <head>
    <title>Garments shop</title>
    <!--css della pagina   !-->
    <link rel="stylesheet" href="http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_CSS/Homepage.css">
    
    <!--le righe successive mi servono per importare via link i font e icone presente nei google api !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

   <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

   
  
  </head>

  <body>

    <div class="Nav_Container">
      
       <a href="#home" class="Button_Style bungee-regular" style="font-size: 40px;">GARMENT SHOP</a>  
      
      <nav class="Nav_Links">

        <a href="#about"    class="Button_Style material-symbols-outlined " style="font-size: 40px; ">shopping_cart  </a>

        <a href="#about"    class="Button_Style material-symbols-outlined " style="font-size: 40px;"> account_circle</a>

        <a href="#menu"     class="Button_Style  material-symbols-outlined" style="font-size: 40px;"> settings </a>  
        <a href="#contact"  class="Button_Style  material-symbols-outlined" style="font-size: 40px;">info</a>
      </nav>

    </div>

  
    <div class="IMG_Container" >

     <img src="http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_IMG/Img_5.jpg" alt="MyImg" class="Img_BG"> 

      <p class="text_overlay_BOTTOM_LEFT1 bungee-regular opacity_min"> The Finest Art of Tailoring</p>
      <p class="text_overlay_TOP_LEFT1 bungee-regular opacity_min"> Crafted to Be Unique</p>
      <p class="text_overlay_TOP_LEFT bungee-regular opacity_min"> Where Craft Meets Elegance</p>
      <p class="text_overlay_BOTTOM_LEFT bungee-regular opacity_min"> Your Style, Your Signature</p>

    </div>
    
    <div class="Main_layout">

      <div class="Text_Content">
        <p class="bungee-regular ">Featured products</p> 
      </div>

      <button class="Nav_Button Left_Button" id="scrollLeft" aria-label="Scroll left">&larr;</button>

     <div class="HOT_ITEM_Container element " id="scrollContainer">
      
        <div class="Box_Item">
              <img  src="http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_IMG/Item_1.jpg" alt="img articolo">
              <div class="Text_box">
                <p class="bungee-regular "> nome articolo</p>
              </div>
        </div>

         <div class="Box_Item">
              <img  src="http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_IMG/Img_3.jpg" alt="img articolo">
              <div class="Text_box">
                <p class="bungee-regular "> nome articolo</p>
              </div>
        </div>

         <div class="Box_Item">
              <img  src="http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_IMG/Img_3.jpg" alt="img articolo">
              <div class="Text_box">
                <p class="bungee-regular "> nome articolo</p>
              </div>
        </div>

        <div class="Box_Item">
              <img  src="http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_IMG/Img_3.jpg" alt="img articolo">
              <div class="Text_box">
                <p class="bungee-regular "> nome articolo</p>
              </div>
        </div>

        <div class="Box_Item">
              <img  src="http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_IMG/Img_3.jpg" alt="img articolo">
              <div class="Text_box">
                <p class="bungee-regular "> nome articolo</p>
              </div>
        </div>

        <div class="Box_Item">
              <img  src="http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_IMG/Img_3.jpg" alt="img articolo">
              <div class="Text_box">
                <p class="bungee-regular "> nome articolo</p>
              </div>
        </div>

        <div class="Box_Item">
              <img  src="http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_IMG/Img_3.jpg" alt="img articolo">
              <div class="Text_box">
                <p class="bungee-regular "> nome articolo</p>
              </div>
        </div>
      
      </div>

      <button class="Nav_Button Right_Button" id="scrollRight" aria-label="Scroll right">&rarr;</button>

    </div>

    <div class="Grid_Container">
      

      <div class="Grid_item  ">
        <!-- in questa grlilia sara presente una grossa immagine che fungerà da vetrina per la nostra pagina web con i vari elementi per la navigazione, sovrapposto alla immagine.
              quindi ci sarà:
              -un testo per fare pubblicizzare cosa stiamo vendendo
              -vari link che reindirizzeranno l'utente, nelle varie sezioni della pagina (login, account, carrello ect..);
         !-->
        
      </div>

     
 



    </div>

  <script>
        const container = document.getElementById('scrollContainer');
        const leftBtn = document.getElementById('scrollLeft');
        const rightBtn = document.getElementById('scrollRight');

        // Define how many pixels to jump on each click
        // Adjusting this shifts more or fewer items at once
        const scrollAmount = 300; 

        leftBtn.addEventListener('click', () => {
            container.scrollLeft -= scrollAmount;
        });

        rightBtn.addEventListener('click', () => {
            container.scrollLeft += scrollAmount;
        });
    </script>

  </body>



</html>     






