<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài cây dừa</title>
    <link rel="stylesheet" href="../Css/BaiTap-4.css">

    <!-- CODE PHP -->
   <?php
        $so_thu_1 = "";
        $so_thu_2 = "";
        $ket_qua  = "";
        $thong_bao = "";
        //Tạo biến rỗng để tránh lỗi Undefined variable và dùng hiển thị ra form.

        if (isset($_POST['so_thu_1'], $_POST['so_thu_2']) &&
            $_POST['so_thu_1'] !== "" && $_POST['so_thu_2'] !== "") //Chỉ chạy khi: Form đã submit Cả số 1 và số 2 đều có nhập
            {

            $so_thu_1 = (int) $_POST['so_thu_1'];
            $so_thu_2 = (int) $_POST['so_thu_2'];
            //Ép từ chuỗi → số để so sánh đúng

            if ($so_thu_1 > $so_thu_2) {
                $ket_qua = $so_thu_1;
            } elseif ($so_thu_2 > $so_thu_1) {
                $ket_qua = $so_thu_2;
            } else {
                $ket_qua = "Hai số bằng nhau";
            }
            //Tìm số lớn hơn, nếu bằng nhau thì báo

        } else {
            $thong_bao = "Vui lòng nhập đủ 2 số!";
            // không nhập hoặc nhập nhiếu thì hiện thông báo này
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
                            TÍNH DIỆN TÍCH HÌNH CHỮ NHẬT
                        </th>
                    </tr>

                    <tr class="box-item">
                        <td>Số thứ 1</td>
                        <td class="box-enter">
                            <input type="text" name="so_thu_1"> 
                        </td>
                    </tr>

                    <tr class="box-item">
                        <td>Số thứ 2</td>
                        <td class="box-enter">
                            <input type="text" name="so_thu_2">
                            <button type="submit">                    
                                tìm số lớn hơn
                            </button>
                        </td>
                    </tr>
                    
                    <tr>
                       <th class="title" colspan="2">
                            Kết quả
                       </th>
                    </tr>

                    <tr class="box-item">
                        <td>Số lớn hơn</td>
                        <td class="box-enter">
                            <input type="text" name="so_lon_hon" disabled 
                                value="<?php echo $ket_qua !="" ? $ket_qua : $thong_bao; ?>">
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