<form action="<?php echo site_url('Welcome/AddDataBerita'); ?>" method="post">
  <div class="form-group"> 
    <label for="exampleInputEmail1">KD_BERITA</label>
    <input type="text" name="kd_berita" class="form-control" >
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA_BERITA</label>
    <input type="text" name="nama_berita" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
