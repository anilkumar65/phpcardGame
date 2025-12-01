 <?php 
       $cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
           "07.png","08.png","09.png","10.png","11.png","12.png","13.png");
       $fNum = mt_rand(0,13);
      
       ?>
<html>
   <head>
       <meta http-equiv="Content- Type"content=“text/html; charset=UTF-8”>
       <title>カードゲーム</title>
       <style>
       body {
       text-align:center;
       background-color:beige;
       }
      h1{ color:red;
       }
       #submit{
       margin:5px;
       border:2px solid;
       border-radius:3px;
       }
       </style>
   </head>
     <body>
       
       <h1>High&Lowゲーム</h1>
       <hr>
      <?php 
//       echo $fNum;
      echo '<img src ="../cards/',$cards[$fNum],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp';
      echo '<img src ="../cards/bg.png">';
       ?>
       
       <form action = "resultScreen.php" method = "post">
         <input type = "hidden" name = "currentCard" value ="<?php echo $fNum; ?>">
         <input type = "radio" name = "userSelect" value ="highを選択しました" required>High&nbsp&nbsp&nbsp
         <input type = "radio" name = "userSelect" value ="lowを選択しました">Low<br>
         <input id="submit" type = "submit" value ="決定">
       </form>
      
     </body>
</html>
