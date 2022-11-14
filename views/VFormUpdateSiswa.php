<form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">NIS</label>
     <input type="text" name="nama" class="form-control" value="<?php echo $detail['nis']; ?>" 
    ><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NAMA</label>
    <input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>" ><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ALAMAT</label>
    <input type="text" name="alamat" class="form-control" value="<?php echo $detail['alamat']; ?>" ><br>
  </div>

  <button type="submit" name="btn_simpan" class="btn btn-success" value="Simpan" >Submit</button>
 </form>