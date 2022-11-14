<form action="<?php echo site_url('Welcome/UpdateDataKontak'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">KD_KONTAK</label>
    <input type="text" name="kd_kontak" class="form-control" value="<?php echo $detail['kd_kontak']; ?>" ><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA_KONTAK</label>
    <input type="text" name="nama_kontak" class="form-control" value="<?php echo $detail['nama_kontak']; ?>" ><br>
  </div>

  <button type="submit" name="btn_simpan" class="btn btn-success" value="Simpan" >Submit</button>
 </form>