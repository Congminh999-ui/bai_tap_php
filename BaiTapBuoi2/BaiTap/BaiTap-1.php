<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài cây dừa</title>
    <link rel="stylesheet" href="../Css/BaiTap-3.css">

    <!-- CODE PHP -->
<?php
        $dientich = "";
        $thongbao = "";

        if (
            isset($_POST['Dai'], $_POST['Rong']) &&
            $_POST['Dai'] !== "" &&
            $_POST['Rong'] !== ""
        ) {
            if (is_numeric($_POST['Dai']) && is_numeric($_POST['Rong'])) {
                $dai  = $_POST['Dai'];
                $rong = $_POST['Rong'];
                $dientich = $dai * $rong;
            } else {
                $thongbao = "Lỗi vui lòng nhập số";
            }
        } else {
            $dientich = "Vui lòng nhập đủ dữ liệu!";
        }
?>

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
                <li class="_1Menu">Thêm sinh viên</li>
                <li class="_1Menu">Xóa sinh viên</li>
            </ul>
        </div>

        <!-- phần thân của trang -->
<form action="#" method="post">
    <!-- qua bài hai có giải thích -->

        <div class="bang">
                <table class="table1">
                    
                    <tr>
                        <th class="title" colspan="2">
                            TÍNH DIỆN TÍCH HÌNH CHỮ NHẬT
                        </th>
                    </tr>

                    <tr class="box-item">
                        <td>Chiều dài</td>
                        <td class="box-enter">
                            <input type="text" name="Dai"> 
                        </td>
                    </tr>

                    <tr class="box-item">
                        <td>Chiều rộng</td>
                        <td class="box-enter">
                            <input type="text" name="Rong">
                            <button type="submit">                    
                                Thực hiện
                            </button>
                        </td>
                    </tr>
                    
                    <tr>
                       <th class="title" colspan="2">
                            Kết quả
                       </th>
                    </tr>

                    <tr class="box-item">
                        <td>Diện tích hình chữ nhật</td>
                        <td class="box-enter_1">
                            <input type="text" name="Dientich" disabled 
                                value="<?php echo $dientich; ?>">

                            <p style="color:red;
                            font-weight:bold; 
                            margin-top: -16px;
                            font-size: 14px;
                            margin-left: 10px;">
                                <?php echo $thongbao; ?>
                            </p>
                        </td>
                    </tr>
                </table>
        </div>
</form>
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
</body>
</html>