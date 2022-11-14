<table class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddBerita'); ?>"class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>Kd_berita</th>
		<th>Nama_berita</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataBerita))
	{
		foreach($DataBerita as $ReadDB)
		{
	?>

	<tr>
		<td><?php echo $ReadDB->kd_berita; ?></td>
		<td><?php echo $ReadDB->nama_berita; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataBerita/'.$ReadDB->kd_berita.'/view') ?>"class="btn btn-info">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataBerita/'.$ReadDB->kd_berita) ?>"class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>