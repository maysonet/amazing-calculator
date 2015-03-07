<?php 

class calculator{
    
   public function sum($num1, $num2){
      if(isset ($num1, $num2)){
        if(is_numeric($num1) && is_numeric($num2)){
          $sum = $num1 + $num2;
          return $sum;
        }
      }
    }
    
    public function multiply($num1, $num2){
      if(isset ($num1, $num2)){
        if(is_numeric($num1) && is_numeric($num2)){
          $mult = $num1 * $num2;
          return $mult;
         }
      }
    }
    
    public function div($num1, $num2){
      if(isset ($num1, $num2)){
        if(is_numeric($num1) && is_numeric($num2)){
          if($num2 != 0){
           $div = $num1 / $num2;
             return $div;
          }
           else{
             echo "<div style='margin:auto'><img src='http://i2.kym-cdn.com/photos/images/original/000/008/721/_MPoster__DONT_DIVIDE_BY_ZERO_by_EnigmaticMercenary.jpg'></div>";
             echo "<p style='text-align:center'>You are trying to <span style='color:red'>divide by zero</span>!<br></p>";
           }
          
         }
      }
    }
    
    public function subst($num1, $num2){
      if(isset ($num1, $num2)){
        if(is_numeric($num1) && is_numeric($num2)){
          $subst = $num1 - $num2;
          return $subst;
          }
      }
     }
    
    public function decimals($field,$fieldName){
     if(preg_match('/^([0-9.]+)$/',$field)){
            $match=+1;
     }else{
            $match=-1;
            $errorMessage.=" - The $fieldName is not in the valid format. This field only accept decimals.<br>";
     }
        return array($match,$errorMessage);
}

          
}  

    ?>