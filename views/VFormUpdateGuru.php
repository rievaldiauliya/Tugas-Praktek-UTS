<form action="<?php echo site_url('Welcome/UpdateDataGuru'); ?>" method="post">
  <div>
    <label for="exampleInputEmail1">NIP</label>
     <input type="text" name="nip" class="form-control" value="<?php echo $detail['nip']; ?>" 
    ><br>
  </div>
  <div>
  <div>
    <label for="exampleInputEmail1">NAMA</label>
     <input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>" 
    ><br>
  </div>
  <div>
     <div>
    <label for="exampleInputEmail1">NO. HP</label>
     <input type="text" name="no_hp" class="form-control" value="<?php echo $detail['no_hp']; ?>" 
    ><br>
  </div>
  <div>
     <div>
    <label for="exampleInputEmail1">EMAIL</label>
     <input type="text" name="email" class="form-control" value="<?php echo $detail['email']; ?>" 
    ><br>
  </div>
  <div>
  <button type="submit" name="btn_simpan" class="btn btn-success" value="Simpan" >Submit</button>
 </form>