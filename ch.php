<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>chessbord2</title>

</head>

<style type="text/css">
  
.table{

  border: 1px solid gray;
  border-collapse: collapse;
}

.black{
  height: 35px;
    width: 30px;
    background-color: white;
    text-align: center;
}
.white{
  height: 35px;
    width: 30px;
    background-color: gray;
    text-align: center;
}

</style>
<body>

<table class="table">

<?php

 $less = array('A','B','C','D','E','F','G','H');
  for ($row=8; $row >0 ; $row--) {

  
    echo "<tr>";
      
    
    for ($col=0; $col <8 ; $col++) {
  

      if (($col + $row) % 2==0) {

        echo "<td class='black'>".$less[$col].$row."</td>";

      } else{

          echo "<td class='white'>".$less[$col].$row."</td>";
      }
      
    }

    echo "</tr>";   
  }

?>

</table>
</body>
</html>