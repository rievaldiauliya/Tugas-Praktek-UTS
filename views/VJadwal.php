<table class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddJadwal'); ?>"class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>Kd_Jadwal</th>
		<th>Kd_Kelas</th>
		<th>Kd_Matpel</th>
		<th>NIP</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataJadwal))
	{
		foreach($DataJadwal as $ReadDJ)
		{
	?>

	<tr>
		<td><?php echo $ReadDJ->kd_jadwal; ?></td>
		<td><?php echo $ReadDJ->kd_kelas; ?></td>
		<td><?php echo $ReadDJ->kd_matpel; ?></td>
		<td><?php echo $ReadDJ->nip; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataJadwal/'.$ReadDJ->kd_jadwal.'/view') ?>"class="btn btn-info">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataJadwal/'.$ReadDJ->kd_jadwal) ?>"class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>