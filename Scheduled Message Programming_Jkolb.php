<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <style> body{
          background-color: cornflowerblue;
          }
          div {
              background-color: aliceblue;
              width: 150px;
              border: 5px solid red;
              padding: 25px;
              margin: 20px;
          }
      </style>
  </head>
  <body>
   <div>
    <?php
      $x = "Good Morning Class!";
      echo $x; 
      echo "<br>";
       
      $dayofweek = date("w");

      switch ($dayofweek) {
        case 1:
          echo "It is Monday!";
          break;
        case 2:
          echo "It is Tuesday!";
          break;
        case 3:
          echo "It is Wednesday!";
          break;
        case 4:
          echo "It is Thursday!";
          break;
        case 5:
          echo "It is Friday!";
          break;
        case 6:
          echo "It is Saturday!";
          break;
        case 0:
          echo "It is Sunday!";
          break;
             
       ;
      }
      echo "<br>";
      $y = "Have a Great day!";
              echo $y;
    ?>
    </div>
  </body>
</html>
