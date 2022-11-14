<form action="<?php echo site_url('Welcome/UpdateDataProfile'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">KD_PROFILE</label>
     <input type="text" name="kd_profile" class="form-control" value="<?php echo $detail['kd_profile']; ?>" 
    ><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA_PROFILE</label>
    <input type="text" name="nama_profile" class="form-control" value="<?php echo $detail['nama_profile']; ?>" ><br>
  </div>
  <button type="submit" name="btn_simpan" class="btn btn-success" value="Simpan" >Submit</button>
 </form>