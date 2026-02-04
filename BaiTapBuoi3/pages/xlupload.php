<?php 
        // kiểm tra from đã được submit
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_FILES["fUpload"]))
                {
                    $filename = $_FILES ["fUpload"]["name"];
                    $filetype = $_FILES ["fUpload"]["type"];
                    $filesize = $_FILES ["fUpload"]["size"];
                

                $allowedExts = array("jpg" => "image/jpg",
                                        "jpeg" => "image/jpeg",
                                            "gif" => "image/gif",
                                                "png" => "image/png");
                //Xác định phần mở rộng của file
                $fext = pathinfo($filename,PATHINFO_EXTENSION);
                if(!array_key_exists($fext,$allowedExts))
                    die("File không đúng với định dạng.");
                // xác nhận kích thước file - tối đa 5MB

                $maxsize = 5 * 1024 * 1024;
                if($filesize > $maxsize)
                        die("Lỗi:kích thước File quá lớn vui lòng Dòng File nhỏ hơn.");
                    // xác định loại file
                    
                    if(in_array($filetype,$allowedExts))
                        {
                            // kiểm tra xem file có tồn lại trước khi upload hay không
                            if(file_exists("../Upload/" .$filename))
                                {
                                    echo $filename. "đã tồn tại xin vui lòng up file khác ạ!";
                                }

                                else
                                    {
                                        move_uploaded_file($_FILES["fUpload"]["tmp_name"],"../Upload/" .$filename);
                                        echo"Thông báo: File của bạn đã upload thàng công.";
                                    }
                        }
                                    else
                                        {
                                            echo"Lỗi: có vấn đề xảy ra trong quá trình Upload.Vui lòng thử lại nhoa.";
                                        }
                }
                                            else
                                                {
                                                    echo"lỗi:" .$_FILES ["fUpload"]["error"];
                                                }

        }
?>