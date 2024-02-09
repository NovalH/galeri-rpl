<?php
include "config/header.php";
?>
<body>
    <form action="tambah_album.php" method="post">
        <table>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="namaalbum">
                <label for="floatingInput">Nama Album</label>
                </div>
                <div class="form-floating">
                <input type="text" class="form-control" name="deskripsi">
                <label for="floatingtext">Deskripsi</label>
            </div>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</body>

<?php
    include "config/footer.php";
?>