<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài cây dừa</title>
    <link rel="stylesheet" href="../Css/BaiTap-3.css">

    <!-- CODE PHP -->
    <?php
$thanh_tien = "";
$thong_bao = "";
$thong_bao_loi = "";

if (
    isset($_POST['chi_so_cu'], $_POST['chi_so_moi'], $_POST['don_gia']) &&
    $_POST['chi_so_cu'] !== "" &&
    $_POST['chi_so_moi'] !== "" &&
    $_POST['don_gia'] !== ""
) {
    if (
        is_numeric($_POST['chi_so_cu']) &&
        is_numeric($_POST['chi_so_moi']) &&
        is_numeric($_POST['don_gia'])
    ) {
        $cu  = $_POST['chi_so_cu'];
        $moi = $_POST['chi_so_moi'];
        $gia = $_POST['don_gia'];

        if ($moi > $cu) {
            $so_dien = $moi - $cu;
            $thanh_tien = $so_dien * $gia;
        } else {
            $thong_bao = "Chỉ số mới phải lớn hơn chỉ số cũ!";
        }
    } else {
        $thong_bao_loi = "Lỗi vui lòng nhập số";
    }
} else {
    $thong_bao = "Vui lòng nhập đầy đủ thông tin!";
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

        <div class="bang">
                <table class="table1">
                    
                    <tr>
                        <th class="title" colspan="2">
                            TÍNH TIỀN ĐIỆN DÙNG TRONG 1 THÁNG QUA Ó Ó Ó
                        </th>
                    </tr>

                    <tr class="box-item">
                        <td>Khách hàng</td>
                        <td class="box-enter">
                            <input type="text" value="Mỹ Ngọc" disabled> 
                            <!-- có thể đổi tên khác nha value = "Tên khác" -->
                        </td>
                    </tr>

                    <tr class="box-item">
                        <td>Chỉ số cũ</td>
                        <td class="box-enter">
                            <input type="text" name="chi_so_cu"> 
                        </td>
                    </tr>

                    <tr class="box-item">
                        <td>Chỉ số mới</td>
                        <td class="box-enter">
                            <input type="text" name="chi_so_moi"> 
                        </td>
                    </tr>

                    <tr class="box-item">
                        <td>Đơn giá</td>
                        <td class="box-enter">
                            <input type="text" name="don_gia">
                            <button type="submit">                    
                                Thành tiền
                            </button>
                        </td>
                    </tr>
                    
                    <tr>
                       <th class="title" colspan="2">
                            Kết quả
                       </th>
                    </tr>

                    <tr class="box-item">
                        <td>Thành tiền</td>
                        <td class="box-enter_1">
                            <div class="input-wrap">
                                <input type="text" disabled
                                    value="<?php echo $thanh_tien != '' ? $thanh_tien : $thong_bao; ?>">

                                <span class="loi">
                                    <?php echo $thong_bao_loi; ?>
                                </span>
                            </div>
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