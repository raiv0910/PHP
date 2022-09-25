<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Code4Example</title>
    <style>
 
        table{
            border:10px;
            padding:10px;
            border-spacing:1px;
        }
 
        table td{
            width:30px;
            height:30px;
            border:1px solid black;
            
        }
 
        td.black{
            background:#000;
            
        }
 
        td.white{
            background:#eee;
        }
    </style>
</head>
<body>
 
 
<?php
 
  echo "<table>";
  for($row=1;$row<=8;$row++)
  {
  	echo "<tr>";
  	for($column=1;$column<=8;$column++)
  	{
  		$total=$row+$column;
  		if($total%2==0)
  		{
  			echo "<td class='black'></td>";
  		}
  		else
  		{
  			echo "<td class='white'></td>";
  		}
  	}
  	echo "</tr>";
  }
echo "</table>";
?>
    
</body>
</html>