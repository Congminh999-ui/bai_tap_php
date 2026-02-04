<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mô Phổng Upload File</title>
     <link rel="stylesheet" href="../css/index.css">
    <?php
        // ===== BƯỚC 1: GỌI FILE XỬ LÝ =====
        require_once 'soluongnguoi.php';
        /*
        - require_once = yêu cầu file khác
        - 'soluongnguoi.php' = file chứa code xử lý đếm
        - Khi chạy dòng này, PHP sẽ:
            1. Chạy toàn bộ code trong soluongnguoi.php
            2. Tạo biến $counter
            3. Quay lại file upload.php
        - "once" = chỉ gọi 1 lần, không gọi lại nếu đã gọi rồi
        
        PHÂN BIỆT:
        require_once: gọi 1 lần, BẮT BUỘC phải có file
        include_once: gọi 1 lần, không bắt buộc
        require: gọi nhiều lần, BẮT BUỘC
        include: gọi nhiều lần, không bắt buộc
        */
?>
</head>
<body>
     <div class="khungtong">
        <!-- phần đầu của trang -->
        <div class="khunganh">
            <img src="../Images/mm_travel_photo.jpg" alt="Cây dừa">

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
    <form method="POST" action="xlupload.php" enctype="multipart/form-data">
         <!-- qua bài hai có giải thích -->
 <div class="counter" style="margin-top: 30px;
                            margin-left: 790px;
                            font-size: 19px;
                            font-weight: bold;">
                 Lượt truy cập: <?php echo number_format($counter); ?>

                  <!-- echo...= in ra màn hình
           - $counter: biến đã có từ file soluongnguoi.php
           - number_format() = định dạng số có dấu phẩy
           
           VÍ DỤ:
           $counter = 1234567
           number_format($counter) = "1,234,567"
           
           Kết quả hiển thị: 👥 Lượt truy cập: 1,234,567 -->
            </div>
        <div class="bang">
            <div class="tieu_de">
                <h1>Upload File</h1>
                </div>

                <table class="table1">
                    <tr class="box-item">
                        <td class="mot">Chọn file cần gửi </td>
                        <td class="hai">
                            <input type="file" id="fUpload" name="fUpload"/>
                        </td>
                        
                        <td class="ba">
                            <input type="submit" id="btnGui" value="Gửi"/>
                             <input type="reset" id="btnNhaplai" value="Nhập Lại"/>
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