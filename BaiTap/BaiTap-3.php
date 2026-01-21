<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang-3.php</title>

</head>
<body>
    <?php
            echo "<table 
                    border='3'
                    style='border-collapse: collapse; margin:auto; margin-top:100px;'
                    width='1100px'
                 >";
           
            echo "<tr>";
                echo "<th colspan='4' style='padding:10px; font-size:20px;'>BẢNG TỔNG KẾT ĐIỂM</th>";
            echo "</tr>";
            
             echo "<tr>";
        
                echo "<th style='border:2px solid black; padding:10px; font-size:15px; background-color: #00FF0D;'><b>STT</b></th>";
           
                echo "<th style='border:2px solid black; padding:10px; font-size:15px; background-color: #00FF0D;'><b>MÃ SINH VIÊN</b></th>";
           
                echo "<th style='border:2px solid black; padding:10px; font-size:15px; background-color: #00FF0D;'><b>ĐIỂM</b></th>";
            echo "</tr>";
            
                
                for($i=1; $i<=5; $i++)
                    {
                        echo "<tr>";
                        
                            echo "<td
                                    style='border:2px solid black; width:30px; text-align:center;'
                                 >";

                                echo"$i";

                            echo "</td>";

                                echo "<td
                                        style='border:2px solid black; width:150px; text-align:center;'
                                    >";

                                    echo"Sinhvien-".$i;

                                echo "</td>";

                                    echo "<td
                                            style='border:2px solid black; width:40px; text-align:center;'
                                         >";

                                            echo"$i";

                                    echo "</td>";

                        echo "</tr>";
                    }

            echo "<tr>";
                echo "<th colspan='4' style='
                        text-align:right;
                        font-size:18px;
                        font-weight:normal;'>

                        <b>Tổng số sinh viên</b>: 5 sinh viên 

                        </th>";
            echo "</tr>";
            
            echo "</table>";
    ?>    
</body>
</html>