<?php
require_once 'dbkoneksi.php';
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
  // edit
  $sql = "SELECT * FROM pelanggan WHERE id=?";
  $st = $dbh->prepare($sql);
  $st->execute([$_idedit]);
  $row = $st->fetch();
} else {
  // new data
  $row = [];
}
?>
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-body">

        <form method="POST" action="proses_pelanggan.php">
          <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-anchor"></i>
                  </div>
                </div>
                <input id="kode" name="kode" type="text" class="form-control" value="<?= $row['kode'] ?>">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-adjust"></i>
                  </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-arrow-circle-o-left"></i>
                  </div>
                </div>
                <input id="jk" name="jk" value="L" type="radio" class="form-control">Laki Laki
                <input id="jk" name="jk" value="P" type="radio" class="form-control">Perempuan
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="stok" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-arrow-circle-up"></i>
                  </div>
                </div>
                <input id="tmp_lahir" name="tmp_lahir" value="<?= $row['tmp_lahir'] ?>" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="min_stok" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-arrow-circle-right"></i>
                  </div>
                </div>
                <input id="tgl_lahir" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>" type="date" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="min_stok" class="col-4 col-form-label">Email</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-arrow-circle-right"></i>
                  </div>
                </div>
                <input id="email" name="email" value="<?= $row['email'] ?>" type="email" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jenis" class="col-4 col-form-label">Kartu ID</label>
            <div class="col-8">
              <?php
              $sqljenis = "SELECT * FROM kartu";
              $rsjenis = $dbh->query($sqljenis);
              ?>
              <select id="kartu_id" name="kartu_id" class="custom-select">
                <?php
                foreach ($rsjenis as $rowjenis) {
                ?>
                  <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                <?php
                }
                ?>
                <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <input type="submit" name="proses" class="btn btn-primary" value="Simpan">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <?php
              $button = (empty($_idedit)) ? "Simpan" : "Update";
              ?>
              <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
              <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
            </div>
          </div>
        </form>

      </div>
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>


<?php
?>