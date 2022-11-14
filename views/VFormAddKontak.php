<form action="<?php echo site_url('Welcome/AddDataKontak'); ?>" method="post">
  <div class="form-group"> 
    <label for="exampleInputEmail1">KD_KONTAK</label>
    <input type="text" name="kd_kontak" class="form-control" >
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA_KONTAK</label>
    <input type="text" name="nama_kontak" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
