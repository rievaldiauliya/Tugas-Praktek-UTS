<form action="<?php echo site_url('Welcome/UpdateDataKelas'); ?>" method="post">
  <div>
    <label for="exampleInputEmail1">KD_JADWAL</label>
     <input type="text" name="kd_kelas" class="form-control" value="<?php echo $detail['kd_jadwal']; ?>" 
    ><br>
  </div>
  <div>
    <label for="exampleInputEmail1">KD_KELAS</label>
     <input type="text" name="kd_kelas" class="form-control" value="<?php echo $detail['kd_kelas']; ?>" 
    ><br>
  </div>
  <div>
    <label for="exampleInputEmail1">KD_MATPEL</label>
     <input type="text" name="kd_kelas" class="form-control" value="<?php echo $detail['kd_matpel']; ?>" 
    ><br>
  </div>
  <div>
    <label for="exampleInputEmail1">NIP</label>
     <input type="text" name="nip" class="form-control" value="<?php echo $detail['nip']; ?>" 
    ><br>
  </div>
  <button type="submit" name="btn_simpan" class="btn btn-success" value="Simpan" >Submit</button>
 </form>