<?php
include "config.php";

// Перевіряємо чи залогінений користувач
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// Виходимо
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Способности персонажей - Infamous Wiki Official Page</title>
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
            <img src="./images/Kessler-As-First-Sons-Leader.png" />
          </div>
        </div>
        <!-- Блок Слайд 2 -->

        <h2 class="h2style">
          <span class="h2simple">Лучевая Сфера</span>
        </h2>
        <!-- Блок надбання 1 -->
        <div class="AgrayTextImageBlock">
          <div class="newText">
            <p class="slidetextgrayblock">
              <b>Лучевая сфера</b> Вернувшись во времени из будущего, где Зверь разрушил мир, Коул МакГрат взял псевдоним Кесслера и захватил контроль над Первыми Сыновьями. Контролируя все свои активы, Кесслер ускорил разработку Ray Sphere, сделав его ведущим проектом во фракции.

Доктор Себастьян Вулф работал над Лучевой Сферой и помогал проектировать прототип. Затем прототип был испытан Вулфом в Нью-Марэ. После нескольких успешных испытаний частично работающая сфера лучей была доставлена ​​в Эмпайр-сити, где она получила дальнейшее развитие. Похоже, что было несколько неудачных попыток разработки Лучевой Сферой. Ядра Blast являются расширенными ядрами Лучевой Сферой, которые были модифицированы в попытке переработать их в новые ядра. 

Лучшевая сфера была впервые протестирована на животных, так как у некоторых крыс и шимпанзе был ген Conduit. Некоторые испытуемые приобрели способность летать, в то время как другие получили регенерацию небольшой мышечной ткани и уменьшили приток крови к ступням и ногам. После десятилетий работы Кесслер вскоре сотрудничал с DARPA, которое финансировало его, в то время как First Sons разработали его совместными усилиями. Вскоре Кесслер перешел к человеческим предметам. Был нанят Дэвид Уорнер, у которого был ген Conduit, но позже он стал узником экспериментов с лучевой сферой.
            </p>
          </div>

          <div class="newgrayPicture">
            <img src="./images/Ray_Sphere_Blueprints (1).png" />
          </div>
        </div>
       
        </div>

        <!--Кнопка-->
		<link href="styles.css" rel="stylesheet" type="text/css">
        <div class="placebutton">
         <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout" >
        </form>
        </div>

        <!--Кінець блоку кнопка-->

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
