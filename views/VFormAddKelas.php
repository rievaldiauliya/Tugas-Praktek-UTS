<form action="<?php echo site_url('Welcome/AddDataKelas'); ?>" method="post">
  <div class="form-group"> 
    <label for="exampleInputEmail1">KD_KELAS</label>
    <input type="text" name="kd_kelas" class="form-control" >
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA_KELAS</label>
    <input type="text" name="nama_kelas" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
