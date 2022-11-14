<form action="<?php echo site_url('Welcome/AddDataMatpel'); ?>" method="post">
  <div class="form-group"> 
    <label for="exampleInputEmail1">KD_MATPEL</label>
    <input type="text" name="kd_matpel" class="form-control" >
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA_MATPEL</label>
    <input type="text" name="nama_matpel" class="form-control" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">KKM</label>
    <input type="text" name="kkm" class="form-control" >
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
