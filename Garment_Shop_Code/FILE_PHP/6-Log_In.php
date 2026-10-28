<!-- file completato!-->
<?php
  ini_set('display_errors', 1);
  session_start();
  error_reporting(E_ALL);
  require_once "12-Funzioni.php";


  $percorso=dirname($_SERVER['PHP_SELF']);
  $Path0="Location: ". $percorso ."/1-Homepage-php";
  $Path1="Location: ". $percorso ."/1-Homepage-php";

  if (isset($_POST['T_USER']) ){
    
    $Result=SEARCH_USER( $_POST['T_PASS'], $_POST['T_USER'] );

    if($Result==1){
      exit( header( $Path1 ) );
    }else{
     
      echo "<script> alert('le credenziali che hai inserito sono errate'); </script>" ;
    }
    
  }

?>  



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <?xml version="1.0" encoding="UTF-8"?>


  <head>
    <title>Garments shop</title>
    <!--css della pagina   !-->
    <link rel="stylesheet" href="http://localhost/php_program/GarmentShop/Garment_Shop_Code/FILE_CSS/log_In.css">
    <!--le righe successive mi servono per importare via link i font e icone presente nei google api !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />  
  </head>

  <body>

    <div class="Grid_Container">


      <div class="Grid_item bungee-regular">
        <h1>Welcome back!</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post">
          <label for="T_USER">Username:</label>
            <input class="Txt-box-style1" type="text" id="T_USER" name="T_USER" required><br><br>
    
          <label for="T_PASS">Password:</label>
            <input class="Txt-box-style1 bungee-regular" type="Password" id="T_PASS" name="T_PASS" required><br><br>
            <input class="Button-log bungee-regular" type="submit" value="sign-in"><br><br>
            
            <button class="Button-home material-symbols-outlined" onclick="document.location='1-Homepage.php'">home</button>
        </form>
      </div>
      



    

  </body>





</html>     