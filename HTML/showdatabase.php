<!DOCTYPE html>
<html lang="zxx">
<head>
    
</head>
<body id="top">
    
    <?php
       /* Attempt MySQL server connection. Assuming you are running MySQL
       server with default setting (user 'zdxyjmbl' with no password) */
       $link = mysqli_connect("housingbmg.com", "zdxyjmbl", "Panama655.bh", "zdxyjmbl_test_db");

       // Check connection
       if($link === false)
       {
           die("ERROR: Could not connect. " . mysqli_connect_error());
       }

       // Attempt select query execution
       $sql = "SELECT * FROM Usuarios";
       if($result = mysqli_query($link, $sql))
       {
           if(mysqli_num_rows($result) > 0)
           {
               
               $arreglo=array();
               while($row = mysqli_fetch_array($result))
               {
                   $arreglo[] = $row;
               }
               // Free result set
               mysqli_free_result($result);
           } 
           else
           {
               echo "No records matching your query were found.";
           }
       } 
       else
       {
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
       }
       
       // Close connection
       mysqli_close($link);
       ?>

        <table>
			<tr>
				<td> <?php echo $arreglo[0]['id'] ?></td>
				<td> <?php echo $arreglo[0]['nombre'] ?> </td>;
				<td> <?php echo $arreglo[0]['apellido_paterno'] ?></td>;
				<td> <?php echo $arreglo[0]['apellido_materno'] ?> </td>;
			</tr>
		</table>
</body>
</html>