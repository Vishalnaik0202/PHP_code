<?php 
// write a php script to find age for given date in years,months and days format .


if(isset($_GET["btnPrint"]))
        {
            $date=$_GET["txtDate"];
        }
?>
<html>
  <head>
    <title>PHP Test</title>
    <style>
    input[type=submit]
    { 
    border:none;
    background-color: green;
    color: white;
    padding: 8px 35px;
    margin: 4px 2px;
    }
    input{padding:5px 20px;}
    body {background-color: skyblue;}
    </style>
  </head>

  <body>
     <form align="center">
     Enter Your Date of Birth<br>
    <input type ="date"  name="txtDate" value="<?php echo @$date ?>" required /><br>
    <input type="submit" name="btnPrint" value="Print Age"/><br>
    <?php if(isset($_GET["btnPrint"]))
        { 
        
            $bday = new DateTime($date); // Your date of birth
            $today = new Datetime(date('m.d.y'));
            $diff = $today->diff($bday);
            printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);
            printf("\n");

     } ?>
     </form>
  </body>
</html>
