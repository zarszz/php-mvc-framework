<h2 class="page-header">Tambah Produk</h2>

<?php
    //menampilkan pesan error jika ada
    if(isset($data['msg'])){
     ?>
       <div class="alert alert-danger">
            <ul>
                <?php
                    foreach ($data['msg'] as $error) {
                        echo "<li>$error</li>";
                    }
                ?>
            </ul>
       </div>
    <?php
    }
    ?>

    <form class="form-hozirontal" method="post" action="<?= BASE_PATH?>/produk/insert">
        <div class="form-group">
            <label class="control-label col-md-2">Nama Produk</label>
            <div class="col-md-4">
                <input type="text" name="nama" id="" class="form-control" placeholder="Nama produk">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">Harga</label>
            <div class="col-md-4">
                <input type="text" name="harga" id="" class="form-control" placeholder="Harga produk...">
            </div>
        </div>
        <button class="btn btn-primary col-md-offset-2">Simpan</button>
        <a class="btn btn-warning" href="<?= BASE_PATH ?>/produk">Batal</a>
    </form>