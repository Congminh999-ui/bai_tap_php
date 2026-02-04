<?php
// ===== BƯỚC 1: KHAI BÁO ĐƯỜNG DẪN FILE =====
$filename = '../data/online.txt';
/* 
   - '../' nghĩa là lùi về thư mục cha (từ pages/ lên BaiTapBuoi3/)
   - 'data/online.txt' là đường dẫn đến file lưu số lượt truy cập
   - Kết quả: BaiTapBuoi3/data/online.txt
*/

// ===== BƯỚC 2: KHỞI TẠO BIẾN ĐẾM =====
$counter = 0;
/*
   - Tạo biến $counter với giá trị ban đầu = 0
   - Nếu file không tồn tại hoặc lỗi, giá trị mặc định là 0
   - Đây là bước BẮT BUỘC để tránh lỗi "Undefined variable"
*/

// ===== BƯỚC 3: KIỂM TRA FILE CÓ TỒN TẠI HAY KHÔNG =====
if(file_exists($filename)) {
/*
   - Hàm file_exists() kiểm tra file có tồn tại không
   - Trả về TRUE nếu file TỒN TẠI
   - Trả về FALSE nếu file KHÔNG TỒN TẠI
   - Nếu file chưa có thì bỏ qua phần đọc, giữ $counter = 0
*/

    // ===== BƯỚC 4: MỞ FILE Ở CHẾ ĐỘ ĐỌC =====
    $fp = @fopen($filename, 'r');
    /*
       - fopen() = function open (hàm mở file)
       - $filename: đường dẫn file cần mở
       - 'r' = read (chế độ chỉ đọc, không ghi được)
       - @ ở đầu để ẨN LỖI nếu mở file thất bại
       - $fp = file pointer (con trỏ file) - dùng để thao tác với file
    */
    
    if($fp) {
    // Kiểm tra xem mở file có thành công không
    
        // ===== BƯỚC 5: KIỂM TRA FILE CÓ NỘI DUNG KHÔNG =====
        if(filesize($filename) > 0) {
        /*
           - filesize() trả về KÍCH THƯỚC file (đơn vị: bytes)
           - Nếu > 0 nghĩa là file có nội dung
           - Nếu = 0 nghĩa là file rỗng (mới tạo chưa có gì)
        */
        
            // ===== BƯỚC 6: ĐỌC NỘI DUNG FILE =====
            $counter = (int)fread($fp, filesize($filename));
            /*
               - fread() = function read (hàm đọc file)
               - $fp: con trỏ file đã mở
               - filesize($filename): đọc hết file (đọc bao nhiêu bytes)
               - Kết quả trả về: chuỗi ký tự (string)
               - (int) = ép kiểu sang số nguyên
               
               VÍ DỤ: 
               File online.txt có nội dung: "123"
               fread() đọc được: "123" (dạng string)
               (int)"123" chuyển thành: 123 (dạng number)
            */
        }
        
        // ===== BƯỚC 7: ĐÓNG FILE SAU KHI ĐỌC XONG =====
        fclose($fp);
        /*
           - fclose() = function close (hàm đóng file)
           - BẮT BUỘC phải đóng file sau khi dùng xong
           - Giống như mở cửa xong phải đóng lại
           - Không đóng file sẽ gây lãng phí bộ nhớ và lỗi
        */
    }
}

// ===== BƯỚC 8: TĂNG SỐ LƯỢT TRUY CẬP =====
$counter++;
/*
   - $counter++ nghĩa là $counter = $counter + 1
   - Mỗi lần ai vào trang web thì tăng lên 1
   
   VÍ DỤ:
   Lượt truy cập cũ: 123
   Sau khi tăng: 124
*/

// ===== BƯỚC 9: MỞ FILE Ở CHẾ ĐỘ GHI =====
$fp = @fopen($filename, 'w');
/*
   - Mở lại file lần nữa
   - 'w' = write (chế độ GHI - xóa hết nội dung cũ)
   - Nếu file chưa tồn tại, PHP sẽ TỰ ĐỘNG TẠO FILE MỚI
   
   CHẾ ĐỘ MỞ FILE:
   'r'  = read (chỉ đọc)
   'w'  = write (ghi, xóa nội dung cũ)
   'a'  = append (ghi tiếp vào cuối file)
   'r+' = read+write (đọc và ghi)
*/

if($fp) {
// Kiểm tra mở file có thành công không

    // ===== BƯỚC 10: GHI SỐ MỚI VÀO FILE =====
    fwrite($fp, $counter);
    /*
       - fwrite() = function write (hàm ghi file)
       - $fp: con trỏ file
       - $counter: nội dung cần ghi (số lượt truy cập mới)
       
       VÍ DỤ:
       $counter = 124
       fwrite() ghi "124" vào file online.txt
    */
    
    // ===== BƯỚC 11: ĐÓNG FILE SAU KHI GHI XONG =====
    fclose($fp);
    /*
       - Đóng file sau khi ghi xong
       - Đảm bảo dữ liệu được lưu an toàn
    */
}
?>