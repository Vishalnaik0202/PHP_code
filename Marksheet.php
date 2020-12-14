<?php
//Write a php script to create a marksheet
if (isset($_GET["btnCal"]))
{
  $sname = $_GET["txtName"];
  $sub1=$_GET["txtSub1"];
  $sub2=$_GET["txtSub2"];
  $sub3=$_GET["txtSub3"];
  $total = $sub1 + $sub2 + $sub3;
  $per=$total/3;
  if($per > 70)
  {
    $result="Distinction";
  }
  elseif($per > 60)
  {
    $result="First Division";
  }
   elseif($per > 50)
  {
    $result="Second  Division";
  }
  elseif($per > 35)
  {
    $result=" pass ";
  }
    else
  {
    $result=" Fail ";
  }
} 
?>
<html>
  <head>
    <title>Assignment no. 2</title>
  </head>
  <body>
    <form border="1px">
    Enter Student Name<br>
    <input type="text" name="txtName"><br>
    Enter Marks of subject1<br>
    <input type="text" name="txtSub1"><br>
    Enter Marks of subject2<br>
    <input type="text" name="txtSub2"><br>
    Enter Marks of subject3<br>
    <input type="text" name="txtSub3"><br>
    <input type="submit" name="btnCal" value="Calculate">
    </form>

    <table border="1px">
    <tr>
     <td> <?php echo "Name" ?> </td>
    <td> <?php echo $sname ?> </td>
    </tr>
    <tr>
    <td> <?php echo "Sub1" ?> </td>
    <td> <?php echo $sub1 ?> </td>
    </tr>
    <tr>
    <td> <?php echo "Sub2" ?> </td>
    <td> <?php echo $sub2 ?> </td>
    </tr>
    <tr>
    <td> <?php echo "Sub3" ?> </td>
    <td> <?php echo $sub3 ?> </td>
    </tr>
    <tr>
    <td> <?php echo "Percentage" ?> </td>
    <td> <?php echo $per ?> </td>
    </tr>
    <tr>
    <td> <?php echo "Result" ?> </td>
    <td> <?php echo $result ?> </td>
    </tr>
    </table>

  </body>
</html>
