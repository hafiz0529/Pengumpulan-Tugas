<?php
error_reporting(0);
    $objek_pesanan = new Pesanan();
    $data_pesanan = $objek_pesanan->dataPesanan();
    $idEdit = $_REQUEST['idedit'];
    $pesanan = !empty($idEdit) ? $objek_pesanan->getPesanan($idEdit) : array();
?>

<form action="controller/pesanan_con.php" method="POST">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Tanggal</label> 
        <div class="col-8">
          <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $pesanan['tanggal'] ?>">
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Total</label> 
        <div class="col-8">
          <input id="total" name="total" type="text" class="form-control" value="<?= $pesanan['total'] ?>" >
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">ID Pelanggan</label> 
        <div class="col-8">
          <input id="pelanggan_id" name="pelanggan_id" type="text" class="form-control" value="<?= $pesanan['pelanggan_id'] ?>">
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
    
