<?php
    include "koneksi.php";
    include "create_message.php";

    // query sql untuk menghapus data
    $sql = "DELETE from data where id=".$_GET['mahasiswa_id'];
    if ($conn->query($sql) === TRUE) {
        $conn->close();

        // jika pesan hapus data berhasil
        create_message('Hapus data berhasil','success','check');

        header("location:index.php");
        exit();
    } else {
        $conn->close();

        // jika pesan hapus data error
        create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
        
        header("location:index.php");
        exit();
    }
?>