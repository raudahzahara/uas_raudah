<?php include "header.php"; ?>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
            <center> <h1><i><b> input data pelanggan </i></b></h1></center>
            <br>
                <form action="proses-input-pelanggan.php" method="POST">
                <div class="form-group">
                        <label for="id_pelanggan">id_pelanggan</label>
                        <input type="number" name="id_pelanggan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_pelanggan">nama_pelanggan</label>
                        <input type="text" name="nama_pelanggan"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_hijab">jenis_hijab</label>
                        <select  name="jenis_hijab"  class="form-control">
                        <option value="pashmina">pashmina</option>
                        <option value="sport">sport</option>
                        <option value="voal">voal</option>
                        <option value="bellasquare">bellasquare</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="warna_hijab">warna_hijab</label>
                        <input type="text" name="warna_hijab"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_hijab">jumlah_hijab</label>
                        <input type="text" name="jumlah_hijab"  class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">total_harga</label>
                        <input type="text" name="total_harga"  class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="Simpan" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

</body>
<?php include "footer.php"; ?>