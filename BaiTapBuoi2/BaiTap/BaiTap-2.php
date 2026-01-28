<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài cây dừa</title>
    <link rel="stylesheet" href="../Css/BaiTap-2.css">

    <!-- CODE PHP -->
    <?php
    $chu_vi_hinh_tron = ""; 
    $dien_tich_hinh_tron = ""; 
    $Thong_bao = ""; 
    //Tạo 3 biến và gán giá trị rỗng để lưu chu vi, diện tích và thông báo lỗi

        if(isset ($_POST['BanKinh']) && $_POST['BanKinh']!=null)
            //Điều kiện này kiểm tra 2 việc:
            //isset($_POST['BanKinh']): Kiểm tra xem có dữ liệu được gửi lên từ form với tên "BanKinh" không
            //$_POST['BanKinh']!=null: Kiểm tra giá trị đó có khác null (không rỗng) không
        {
            $r = $_POST['BanKinh'];
          $chu_vi_hinh_tron = 2 * 3.14 * $r;
          $dien_tich_hinh_tron = 3.14 * $r * $r;

        //Nếu điều kiện đúng:
        //Lấy giá trị bán kính từ form gán vào biến $r
        //Tính chu vi hình tròn: C = 2πr (với π ≈ 3.14)
        //Tính diện tích hình tròn: S = πr² (với π ≈ 3.14)
        }

        else $Thong_bao= "Nhập số đi bạn già!";
        //Nếu không nhập gì hoặc nhập giá trị rỗng, sẽ hiển thị thông báo này.
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
<form name="frm" action="#" method="post">
    <!-- này là bổ túc lại kiết thức ý kiến gì thì cút giùp -->
    <!-- <form> tag
    Đây là thẻ HTML để tạo biểu mẫu (form) cho người dùng nhập liệu -->

    <!-- name="frm"
    Đặt tên cho form là "frm" -->
    
    <!-- action="#"
    Chỉ định nơi sẽ xử lý dữ liệu khi submit form : là nút "Thực hiện" được nhấn
    action="#" nghĩa là form sẽ gửi dữ liệu về chính trang hiện tại (tự submit về chính nó)
    Vì thế code PHP xử lý ở trên cùng file này luôn -->

    <!-- method="post"
    Phương thức gửi dữ liệu là POST
    Dữ liệu sẽ được gửi qua $_POST (như $_POST['BanKinh'] ở code trên)
    POST an toàn hơn GET vì dữ liệu không hiển thị trên URL -->

        <div class="bang">
                <table class="table1">
                    
                    <tr>
                        <th class="title" colspan="2">
                            TÍNH DIỆN TÍCH VÀ CHU VI HÌNH TRÒN
                        </th>
                    </tr>

                    <tr class="box-item">
                        <td>Bán Kính</td>
                        <td class="box-enter">
                            <input type="text" name="BanKinh">
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
                        <td>Chu vi hình tròn</td>
                        <td class="box-enter">
                            <input type="text" name="Dientich" disabled 
                                value="<?php echo $chu_vi_hinh_tron != "" ? $chu_vi_hinh_tron : $Thong_bao?>">
                                 <!-- điều_kiện ? giá_trị_nếu_đúng : giá_trị_nếu_sai 
                                     Đây gọi là toán tử 3 ngôi (ternary operator) -->
                        </td>
                    </tr>

                    <tr class="box-item">
                        <td>Diện tích hình tròn</td>
                        <td class="box-enter">
                            <input type="text" name="Dientich" disabled 
                                value="<?php echo $dien_tich_hinh_tron != "" ? $dien_tich_hinh_tron : $Thong_bao?>">
                                <!-- điều_kiện ? giá_trị_nếu_đúng : giá_trị_nếu_sai 
                                     Đây gọi là toán tử 3 ngôi (ternary operator) -->
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