<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-pelanggan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from idata_pelanggan where id_pelanggan='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="id_pelanggan">id_pelanggan</label>
                        <input type="hidden" name="id_pelanggan" value="<?php echo $row['id_pelanggan']?>" class="form-control">
                        <input type="number" name="id_pelanggan" value="<?php echo $row['id_pelanggan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">nama_pelanggan</label>
                        <input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_hijab">jenis_hijab</label>
                        <select name="jenis_hijab" class="form-control">
                            <option value="<?php echo $row['jenis_hijab']?>" selected><?php echo $row['jenis_hijab']?></option>
                            <option value="pashmina">pashmina</option>
                            <option value="sport">sport</option>
                            <option value="voal">voal</option>
                            <option value="bellasquare">bellasquare</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="warna_hijab">warna_hijab</label>
                        <input type="text" name="warna_hijab" value="<?php echo $row['warna_hijab']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_hijab">jumlah_hijab</label>
                        <input type="number" name="jumlah_hijab" value="<?php echo $row['jumlah_hijab']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <input type="number" name="total_harga" value="<?php echo $row['total_harga']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>