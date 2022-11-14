<form action="<?php echo site_url('Welcome/AddDataJadwal'); ?>" method="post">
  <div class="form-group"> 
    <label for="exampleInputEmail1">KD_JADWAL</label>
    <input type="text" name="kd_jadwal" class="form-control" >
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">KD_KELAS</label>
    <input type="text" name="kd_kelas" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">KD_MATPEL</label>
    <input type="text" name="kd_matpel" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NIP</label>
    <input type="text" name="nip" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
