<?php
    include "../Model/db.php"
    
    //nama gambar
    $nama_gambar=$_FILES['filegambar']['name'];
    //ukuran gambar
    $ukuran_gambar = $_FILES['filegambar']['size']; 

    $fileinfo = @getimagesize($_FILES["filegambar"]["tmp_name"]);
    //lebar gambar
    $width = $fileinfo[0];
    //tinggi gambar
    $height = $fileinfo[1]; 

    //file gambar
    $file_gambar=addslashes(file_get_contents($_FILES['filegambar']['tmp_name']));

    if($ukuran_gambar > 81920){ 
        echo 'Ukuran gambar melebihi 80kb';
    }else if ($width > "480" || $height > "640") {
         echo 'Ukuran gambar harus 480x640';
    }else{                    
            $sql=mysql_query("INSERT INTO produk(NamaProduk,Gambar,File_Gambar) VALUES('".$_POST['nama']."', '".$nama_gambar."','".$file_gambar."')");
            if ($sql) {
             echo 'Simpan data berhasil';
            }else {
             echo 'Simpan data gagal';
         }
    } 
 
?>