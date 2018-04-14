<form>

Nome: <input type="text" name="nome"><br>
Sobrenome:  <input type="text" name="Sobrenome"><br>
Nascimento: <input type="date" name="nascimento"><br>
<input type="submit" value="ok">

</form>

<?php

  if(isset($_GET)){

   foreach($_GET as $Key => $value) {
    # code...
    
    
    echo "Valor do campo ".$Key.": ".$value."<br>";

    echo "<hr>";
   }
 }
?>