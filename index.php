<!-- 
To do:
Go Big!
-->
<!DOCTYPE html>
<html lang="de">
<head>
	<title>main.foto</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">  

    <script src="script/js/jquery.js" type="text/javascript"></script> 
    <script>
      function meinAjax(ziel,quelle) {
        $.get(quelle, function(data) {
        $(ziel).html(data); 
      })
    }
    </script> 	  

  </head>
<body>
<main>
  <div class="container">

  <header id="header">
<?php include("html/logo.php"); ?>

  </header>
 
  <nav>
    <ul>
      <li><a href="#" onclick="meinAjax('#inhalt', 'script/php/section/portrait.php')">Portrait</a>
      </li>
      <li><a href="#" onclick="meinAjax('#inhalt', 'script/php/section/animals.php')">Animals</a>
      </li>
      <li><a href="#" onclick="meinAjax('#inhalt', 'script/php/section/landscape.php')">Landscapes</a>
      </li>
      <li><a href="#" onclick="meinAjax('#inhalt', 'script/php/section/mountainbike.php')">Mountainbiking</a>
      </li>
    </ul>
  </nav>
  <section id="inhalt">

  <?php include("script/php/section/landscape001.html"); ?>
  <?php include("script/php/section/portrait001.html"); ?>
  <?php include("script/php/section/tiere001.html"); ?>
  <?php include("script/php/section/landscape002.html"); ?>  
  <?php include("script/php/section/tiere002.html"); ?>
  <?php include("script/php/section/landscape003.html"); ?>
  <?php include("script/php/section/portrait003.html"); ?>  

  </section>
 
  <aside>
 		
    <?php include("script/php/news/news1.html"); ?>
    <?php include("script/php/news/news2.html"); ?>
    <?php include("script/php/news/news3.html"); ?>
    <?php include("script/php/news/news4.html"); ?>

  </aside>
 
  <footer>
    <ul>
      <li><a href="index.php">Home</a>
      </li>
      <li><a href="#">Impressum</a>
      </li>
      <li><a href="#">Kontakt</a>
      </li>
      <li><a href="#">AGB</a>
      </li>
      <li><a href="#">Datenschutz</a>
      </li>
    </ul>
  </footer>

  </div>
</main>   
</body>
</html>