<form action="<?php echo site_url('Welcome/UpdateDataKelas'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">KD_KELAS</label>
     <input type="text" name="kd_kelas" class="form-control" value="<?php echo $detail['kd_kelas']; ?>" 
    ><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA_KELAS</label>
    <input type="text" name="nama_kelas" class="form-control" value="<?php echo $detail['nama_kelas']; ?>" ><br>
  </div>
  <button type="submit" name="btn_simpan" class="btn btn-success" value="Simpan" >Submit</button>
 </form>