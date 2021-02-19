<?php
/* Write a php Script to create a class MyMatrix with following methods .
1.PrintMatrix(2D Array)
2.printTranspose(2D array)
3.sum(2D array)
4.average(2D array)
5.printDigonal(2D array)
6.getDimension(2D array)
7.getCol(2D col Number)
8.getRow(2D array Row number)
9.getType(2d array)
10.countZeros(2d array)
*/

class MyMatrix{

public function printMatrix($a){
    $m=0;
    $rows=sizeof($a);
    $cols=sizeof($a[0]);
    echo "<h2> 1.PrintMatrix() function</h2><br>";
  echo "<b>The matrix is-</b>"."<br>";
  echo "<table width=150>";
  for($i=0;$i<$rows;$i++)
  {
    echo "<tr>";
      for($j=0;$j<$cols;$j++)
      {
          
          echo "<td>";
          
          echo $a[$i][$j]." ";
          $m=$m+1;
          echo "</td>";
          
      }
      echo "</tr>";
  }
  echo "</table></br>";
  echo "<hr>";
}
//-------------------------------------------------------------------------------
public function printTranspose($a){
    echo "<h2> 2.printTranspose() function</h2><br>";
    echo "<b>The transpose of a matrix-</b>"."<br>";
    echo "<table width=150>";
     $rows=sizeof($a);
    $cols=sizeof($a[0]);
    for($i=0;$i<$rows;$i=$i+1)
    {
      echo "<tr>";
        for($j=0;$j<$cols;$j=$j+1)
        {
          echo "<td>";
            @$b[$i][$j]=$a[$j][$i];
            echo $b[$i][$j]."   ";
            echo "</td>";
        }
      echo "</tr>"; 
    }
   echo "</table></br>";
   echo "<hr>";
}
//------------------------------------------------------------------------------
public function sum($a){
    echo "<h2> 3.sum() function</h2><br>";
  $sum=0;
  $rows=sizeof($a);
    $cols=sizeof($a[0]);
  for($i=0;$i<$rows;$i=$i+1)
  {
      for($j=0;$j<$cols;$j=$j+1)
      {
          @$sum += $a[$i][$j];
      }
  }
  echo "<b>The sum of a matrix = ".$sum."</b>"."<br>"; 
  echo "<hr>";
}
//------------------------------------------------------------------------------
public function average($a){
    echo "<h2> 4.average() function</h2><br>";
  $sum=0;
  $rows=sizeof($a);
  $cols=sizeof($a[0]);
  for($i=0;$i<$rows;$i=$i+1)
  {
      for($j=0;$j<$cols;$j=$j+1)
      {
          if(@gettype($a[$i][$j]) == @integer)
          $sum += $a[$i][$j];
          else echo "Please pass numeric array only";
      }
  }
  $average = $sum /16;
  echo "<b>The Average of a matrix= ".$average."</b>"."<br>"; 
  echo "<hr>";
}
//-----------------------------------------------------------------------------
public function printDiagonal($a){
    echo "<h2> 5.printDiagonal() function</h2><br>";
  echo "<b>The Diagonal of Matrix is-</b>"."<br>";
  echo "<table width=150>";
   echo "<tr>";
   $rows=sizeof($a);
    
  for($i=0;$i<$rows;$i=$i+1)
  {
          echo "<td>";
          echo @$a[$i][$i]." ";
          echo "</td>";
  }
  echo "</tr>";
  echo "</table></br>";
  echo "<hr>";
}
//--------------------------------------------------------------------------
public function getCol($a,$cno){
    echo "<h2> 6.getCol() function</h2><br>";
  echo "<b>The Column ".$cno." is-</b>"."<br>";
  echo "<table width=150>";
  $rows=sizeof($a);
    $cols=sizeof($a[0]);
  for($i=0;$i<$rows;$i=$i+1)
  {
    echo "<tr>";
    for($j=0;$j<$cols;$j=$j+1){
      if($j==$cno-1)
      {
          
          echo "<td>";
          
          echo @$a[$i][$j];
          echo "</td>";
          
      }
    }
      echo "</tr>";
  }
  echo "</table></br>";
  echo "<hr>";
}
//-----------------------------------------------------------------------
public function getRow($a,$rno){
    echo "<h2> 7.getRow() function</h2><br>";
  echo "<b>The Row ".$rno." is-</b>"."<br>";
  echo "<table width=150>";
  $rows=sizeof($a);
    $cols=sizeof($a[0]);
  for($i=0;$i<$rows;$i=$i+1)
  {
    echo "<tr>";
    for($j=0;$j<$cols;$j=$j+1){
      if($i==$rno-1)
      {
          
          echo "<td>";
          echo $a[$i][$j];
          echo "</td>";
          
      }
    }
      echo "</tr>";
  }
  echo "</table></br>";
  echo "<hr>";
}
//---------------------------------------------------------------------------------
public function getDimension($a){
    echo "<h2> 8.getDimension() function</h2><br>";

echo "<b>The Dimension of Matrix is: ".sizeof($a)." X ".sizeof($a[0])."</b><br>";
echo "<hr>";

}
//----------------------------------------------------------------------------------
public function countZeroes($a){
    echo "<h2> 9.countZeroes() function</h2><br>";
  $zero = 0;
  $rows=sizeof($a);
    $cols=sizeof($a[0]);
  for($i=0;$i<$rows;$i=$i+1)
  {
    for($j=0;$j<$cols;$j=$j+1){
      $isZero = @$a[$i][$j];
      if($isZero == 0 )
      {
        $zero+=1;       
      }
    }
  }
   echo "<b>The Zeroes in matrix are: " .$zero." </b>"."<br>";
   echo "<hr>";
}
//------------------------------------------------------------------------------------
public function getType($a){
    echo "<h2> 10.getType() function</h2><br>";
   echo "<b>The type is: " .gettype($a)." </b><br>";
   echo "<hr>";
}

}
$a=array(array(0,1,1,1,1),
          array(2,0,2,2,2),
          array(3,3,0,3,3),
          array(4,4,4,0,4),
          array(1,2,3,4,0)
          );
$obj = new MyMatrix();

$obj->printMatrix($a);
$obj->printTranspose($a);
$obj->sum($a);
$obj->average($a);
$obj->printDiagonal($a);
$obj->getCol($a,2);
$obj->getRow($a,3);
$obj->getDimension($a);
$obj->countZeroes($a);
$obj->getType($a);

?>
    
