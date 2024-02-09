<?php
    include "koneksi.php";

    $fotoid=$_POST['fotoid'];
    $userid=$_POST['userid'];
    $isikomentar=$_POST['isikomentar'];
    $tanggal = date('Y-m-d');

    $sql=mysqli_query($conn,"insert into komentarfoto values('','$fotoid','$userid ','$isikomentar','$tanggal')");

    header("location:zoom.php?id=$fotoid");
?>