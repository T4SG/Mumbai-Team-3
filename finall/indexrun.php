<?php

 include ("database_connection.php");


                 $result = mysqli_query($dbc,"SELECT * FROM hhf");
                echo ("Test");
                while($row = mysqli_fetch_array($result)) {
                echo $row['region'];
                echo('<br>');
                echo $row['no_of_schools'];
                }
                
?>