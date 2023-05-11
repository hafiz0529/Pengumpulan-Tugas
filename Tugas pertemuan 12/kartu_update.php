<?php
error_reporting(0);
    $objek_kartu = new Kartu();
    $data_kartu = $objek_kartu->dataKartu();
    $idEdit = $_REQUEST['idedit'];
    $kartu = !empty($idEdit) ? $objek_kartu->getKartu($idEdit) : array();
?>

<form action="controller/kartu_con.php" method="POST">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <input id="kode" name="kode" type="text" class="form-control" value="<?= $kartu['kode'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control" value="<?= $kartu['nama'] ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Diskon</label> 
        <div class="col-8">
          <input id="diskon" name="diskon" type="text" class="form-control" value="<?= $kartu['diskon'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Iuran </label> 
        <div class="col-8">
          <input id="iuran" name="iuran" type="text" class="form-control" value="<?= $kartu['iuran'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
        <?php
          if(empty($idEdit)) {
        ?>
          <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
          <?php
          }
          else {
          ?>
          <button name="proses" type="submit" value="ubah" class="btn btn-primary">Upadate</button>
          <input type="hidden" name="idx" value="<?= $idEdit ?>" >  
            <?php
            }
            ?>
          <button name="proses" type="submit" value="batal" class="btn btn-primary" >Cancel</button>
        </div>
      </div>
    </form>
    
