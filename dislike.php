<?php
    include "koneksi.php";
    session_start();

    $fotoid=$_GET['fotoid'];
    $userid=$_SESSION['userid'];

    $sql=mysqli_query($conn,"delete from likefoto where fotoid='$fotoid' and userid='$userid'");

    header("location:index.php");
?>