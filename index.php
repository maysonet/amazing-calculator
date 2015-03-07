<!doctype html>
<html>
  
  <head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Simple Calculator</title>
  </head>
  
  <body>
    <div class="header">
    <h1>Simple Calculator</h1>
    <p>Enter two real numbers and I will do some mathematical operations for you!</p>
    </div>
    <div class="box">
    
    <form action="index.php" method="post">
      <div class="input">
    <input class="display" id="num1" type="number" name="n1" placeholder="First Number"><br>
    <input class="display" id="num2" type="number" name="n2" placeholder="Second Number"><br>
      </div>
      <div class="operations">
      <input id="sum" type="checkbox" name="+"><label for="sum">+</label>
      <input id="resta" type="checkbox" name="-"><label for="resta">-</label>
      <input id="mult" type="checkbox" name="*"><label for="mult">*</label>
      <input id="div" type="checkbox" name="/"><label for="div">/</label>
      <br>
      </div>
      <div class="submit">
    <input type="submit" value="Submit">
    <input style="text-decoration:none; color:red" type="button" value="Reset" onclick="window.location=''" />
      </div>
    </form>
    <br>
    </div>
    </div>
    
    <?php
require('src_helper.php');

      

//Posting variables
    $int1 = @$_POST['n1'];
    $int2 = @$_POST['n2'];
    $ksum = @$_POST['+'];
    $ksubst = @$_POST['-'];
    $kmult = @$_POST['*'];
    $kdiv = @$_POST['/'];

//Construction object
    $calc = new calculator;

//Sum
    if(isset($ksum)){
      $sum = $calc->sum($int1, $int2);
      if(is_null($sum)){
        echo "<p style='color:red;text-align:center'>Please enter a valid number for sum!<br></p>";
      }
      else{
         echo "<p style='text-align:center'>The sum is: <strong>" . $sum . "</strong><br></p>";
      }
   }

//Substraction
    if(isset($ksubst)){
      $resta = $calc->subst($int1, $int2);
        if(is_null($resta)){
        echo "<p style='color:red;text-align:center'>Please enter a valid number for substraction!<br></p>";
        }
      else{
        echo "<p style='text-align:center'>The substraction is:<strong> " . $resta . "</strong><br></p>";
      }
   }
//Product
    if(isset($kmult)){
      $product = $calc->multiply($int1, $int2);
        if(is_null($product)){
        echo "<p style='color:red;text-align:center'>Please enter a valid number for multiplication!<br></p>";
      }
      else{
         echo "<p style='text-align:center'>The product is:<strong> " . $product . "</strong><br></p>";
      }
    }
//Division
    if(isset($kdiv)){
      $div = $calc->div($int1, $int2);
      if(is_null($div)){
        echo "<p style='color:red; text-align:center'>Please enter a valid number for division!<br></p>";
      }
      else{
         echo "<p style='text-align:center'>The division is:<strong> " . $div . "</strong><br></p>";
      }
    }


  ?>
   
    
  </body>
</html>
