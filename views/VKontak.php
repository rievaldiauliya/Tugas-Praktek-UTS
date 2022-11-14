<table class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddKontak'); ?>"class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>KD_Kontak</th>
		<th>Nama_Kontak</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataKontak))
	{
		foreach($DataKontak as $ReadDK)
		{
	?>

	<tr>
		<td><?php echo $ReadDK->kd_kontak; ?></td>
		<td><?php echo $ReadDK->nama_kontak; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataKontak/'.$ReadDK->kd_kontak.'/view') ?>"class="btn btn-info">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataKontak/'.$ReadDK->kd_kontak) ?>"class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>