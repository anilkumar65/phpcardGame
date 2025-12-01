<?php 
$cards = array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
    "07.png","08.png","09.png","10.png","11.png","12.png","13.png");

$firstCard =$_POST['currentCard'];
$secondCard = mt_rand(0,13);

$userChoice = $_POST['userSelect'];


?>

<html>
  <head>
  <meta http-equiv=“Content-Type”content=“text/html;charset=UTF-8”>
  <style>
  body {
       text-align:center;
       background-color:beige;
       }
       #button{
       margin:5px;
       border:2px solid;
       border-radius:3px;
  </style>
  </head>
   <body>
    <h1>High&Lowゲーム</h1>
       <hr>
       <?php 
       if (($secondCard>$firstCard&&$userChoice=='highを選択しました')||($secondCard<$firstCard&&$userChoice=='lowを選択しました')||($secondCard==$firstCard)) {
           echo '<img src ="../cards/',$cards[$firstCard],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp' ;
           echo '<img src ="../cards/',$cards[$secondCard],'"><br>';
           echo $userChoice,'<br>';
           echo 'You Win!';
       }else {
           echo '<img src ="../cards/',$cards[$firstCard],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp' ;
           echo '<img src ="../cards/',$cards[$secondCard],'"><br>';
           echo $userChoice,'<br>';
           echo 'You lose!';
       }
       ?>
       <form action = "gameScreen.php" method = "get">
       <input id="button"type ="submit" value="もうー度緒戦">
       
       </form>
  
   </body>

 </html>