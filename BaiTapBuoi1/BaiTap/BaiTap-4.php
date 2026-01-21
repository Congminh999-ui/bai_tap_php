<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang-4.php</title>

</head>
<body>
    <?php
            echo "<table 
                    border='3'
                    style='border-collapse: collapse; margin:auto; margin-top:100px;'
                    width='330px'
                 >";
           
            echo "<tr>";
                echo "<th colspan='4' style='padding:10px; font-size:18px;'>BẢNG CỬU CHƯƠNG 2</th>";
            echo "</tr>";
               
            
                
                for($i=1; $i<=10; $i++) // Vòng lập for dùng để lặp từ 1 dến 10 // $i là biến đếm
                    {
                        $kp= 2 * $i;  // $kp là một biến chứa kết quả
                        echo "<tr>";

                            echo "<td
                                    style='border:2px solid black; width:60px; text-align:center;'
                                 >";

                                echo"2";

                            echo "</td>";

                                echo "<td
                                        style='border:2px solid black; width:60px; text-align:center;'
                                     >";
                                    echo"X";

                                echo "</td>";

                                    echo "<td
                                            style='border:2px solid black; width:60px; text-align:center;'
                                        >";

                                        echo"$i";

                                    echo "</td>";

                                        echo "<td
                                                style='border:2px solid black; width:90px; text-align:center;'
                                             >";

                                            echo"$kp";

                                        echo "</td>";

                        echo "</tr>";
                    }
            echo "</table>";
    ?>
</body>
</html>