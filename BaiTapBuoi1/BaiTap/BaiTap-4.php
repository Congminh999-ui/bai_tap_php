<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang-4.php</title>
    <link rel="stylesheet" href="../Css/Baitap4.css">
    <link rel="icon" href="../Images/kiniem.jpg">

</head>
<body>

   <div class="khungtong">
        <!-- phần đầu của trang -->
        <div class="khunganh">
            <img src="../images/mm_travel_photo.jpg" alt="Cây dừa">

            <div class="khungchu">
                <p class="noidung">
                    CÂU LẠC BỘ TIN HỌC - NGOẠI NGỮ - BDVH
                </p>
                <P class="Thongtin">
                    http://khonggiankythuat.com
                </P>
            </div>
        </div>

        <div class="khungMenu">
            <ul class="Menu">
                <li class="_1Menu">Trang chủ</li>
                <li class="_1Menu">Danh sách sinh viên </li>
                <li class="_2Menu">Thêm sinh viên</li>
                <li class="_2Menu">Xóa sinh viên</li>
            </ul>
        </div>

        <!-- phần thân của trang -->

        <div class="bang">
            <table class="table1">
                <tr>
                   <th>THÔNG BÁO KẾT QUẢ THI ĐỊA HỌC</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn A</td>
                    
                </tr>
                <tr>
                    <td>2</td>
                    <td>Trần Thị B</td>
                    
                </tr>
                <tr>
                    <th>đ</th>
                </tr>
            </table>
        </div>

    <!-- phần kêt của trang -->
        <div class="kettrang">
            <b class="indam">
                CÂU LẠC BỘ TIN HỌC - NGOẠI NGỮ - BỒI DƯỠNG VĂN HÓA
            </b>

            <P class="noidung1">Địa chỉ 11 Đường 14B, Phường Bình Hưng Hòa A, Quận Bình Tân,Tp.HCM</P>
            <P class="noidung1">Điện thoại: 0903.97.9218</P>
            <P class="noidung1">Website: http://khonggiankythuat.com</P>
        </div>
    </div>
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