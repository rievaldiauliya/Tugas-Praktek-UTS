<form action="<?php echo site_url('Welcome/AddDataSiswa'); ?>" method="post">
  <div class="form-group"> 
    <label for="exampleInputEmail1">NIP</label>
    <input type="text" name="nip" class="form-control" >
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA</label>
    <input type="text" name="nama" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >NO. HANPHONE</label>
    <input type="text" name="no. handphone" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" >EMAIL</label>
    <input type="text" name="email" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
