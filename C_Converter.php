

<html>
  <head>
    <title>Currancy Converter</title>
    <style>
       input[type=submit]
    { 
    border:none;
    background-color: green;
    color: white;
    padding: 10px 36px;
    margin: 4px 2px;
    }
    input{padding:5px 20px;}
    body {background-color: lightblue;}
    select{padding:5px 20px;}
    h1{text-align:center;}
    
    </style>
  </head>
  <body>
   <form align="center">
   Enter Ammount in Rupees<br>
   <input type="text" name="txtAmt" required/><br>
   Select Currancy <br>
   <select Name="ddlCur">
   <option> Doller</option>
   <option> Euro</option>
   <option> Riyal</option>
   <option> Yen</option>
   </select>
   <br>
   <input type="submit" name="btnConvert" value="Convert"/>
   </form>
<?php
if(isset($_GET["btnConvert"]))
{
  $amount=$_GET["txtAmt"];
  $cur=$_GET["ddlCur"];
  switch($cur)
  {
    case "Doller":
      $result=$amount/73.52;
      echo "<h1> Doller = $result </h1>";
      break;
    case "Euro":
      $result=$amount/88.49;
      echo "<h1> Euro = $result </h1>";
      break;
    case "Riyal":
      $result=$amount/20.19;
      echo "<h1> Riyal =$result </h1>";
      break;
    case "Yen":
      $result=$amount/0.70;
      echo "<h1> Yen = $result </h1>";
      break;
  } 
}
?>
  </body>
</html>
