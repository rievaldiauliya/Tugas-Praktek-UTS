<form action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post">
  <div class="form-group"> 
    <label for="exampleInputEmail1">NIS</label>
    <input type="text" name="nis" class="form-control" >
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA</label>
    <input type="text" name="nama" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >ALAMAT</label>
    <input type="text" name="alamat" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
