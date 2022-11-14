<table class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddKelas'); ?>"class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>Kd_kelas</th>
		<th>Nama_kelas</th>
	</tr>
	<?php
	if(!empty($DataKelas))
	{
		foreach($DataKelas as $ReadDKls)
		{
	?>

	<tr>
		<td><?php echo $ReadDKls->kd_kelas; ?></td>
		<td><?php echo $ReadDKls->nama_kelas; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataKelas/'.$ReadDKls->kd_kelas.'/view') ?>"class="btn btn-info">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataKelas/'.$ReadDKls->kd_kelas) ?>"class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>