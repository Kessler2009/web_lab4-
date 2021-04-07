<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: admin.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>














<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css?family=Helvetica+Neue&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/mysitestyle.css" />
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <!-- Шапка сайта з меню -->
    <div class="topheader">
      <div class="topnav" id="myTopnav">
        <a href="landing.html"
          ><img
            class="sitelogo"
            src="images/sitelogo.png"
            alt="To main page"
            title="InfamousWiki"
        /></a>
        <a href="info.html" class="active">Игры</a>
        <a href="#heros">Персонажи</a>
        <a href="container_block.html">Способности</a>
        <a href="#fraction">Фракции</a>
        <a href="#technology-games">Технологии</a>
        <a href="#location">Локации</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>

    <!-- Початок тіла -->
    <div class="bigbody">
      <!-- Контет сторінки -->
      <div class="body-page">
        <!-- Блок головна картинка  Слайд1-->
        <div class="containermainimage">
          <div class="img_wrapper">
            <img src="./images/Ealry_days_of_the_First_Sons (1).png" />
          </div>
        </div>
        <!-- Блок Слайд 2 -->

        <h2 class="h2style">
          <span class="h2simple">Top Secret</span>
        </h2>
        <!-- Блок надбання 1 -->
        
			<link href="styles.css" rel="stylesheet" type="text/css">
             <div class="container">
            <form method="post" action="">
                <div id="div_login">
                    <h1>Login to access secret info</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </div>
            </form>
        </div>
            
         

         
       
       
        </div>

    
     

        <!-- Конец Контент сторінки -->
      </div>

      <!-- Футер -->
    </div>
    <footer>
      <div class="sitefooter">
        <div class="images-footerblock">
          <img class="images-footerleft" src="./images/foot1.png" /><img
            class="images-footerleft"
            src="./images/foot2.png"
          />
        </div>
        <div class="footetextblock">
          <span class="footertextcopy">
            © 2002-2020 Sony Interactive Entertainment LLC. Ghost of Tsushima,
            inFAMOUS First light, inFAMOUS Second Son, inFAMOUS Festival of
            Blood, inFAMOUS 2, inFAMOUS: are trademarks of Sony Interactive
            Entertainment LLC. Developed by Sucker Punch Productions LLC.
          </span>
        </div>
        <div class="images-footerblock">
          <img class="images-footerright" src="./images/facebook.png" />
          <img class="images-footerright" src="./images/Twitter.png" />
        </div>
      </div>
    </footer>

    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>
