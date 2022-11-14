<table class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddGuru'); ?>"class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>NIP</th>
		<th>Nama</th>
		<th>No. HP</th>
		<th>Email</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataGuru))
	{
		foreach($DataGuru as $ReadDG)
		{
	?>

	<tr>
		<td><?php echo $ReadDG->nip; ?></td>
		<td><?php echo $ReadDG->nama; ?></td>
		<td><?php echo $ReadDG->no_hp; ?></td>
		<td><?php echo $ReadDG->email; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataGuru/'.$ReadDG->nip.'/view') ?>"class="btn btn-info">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataGuru/'.$ReadDG->nip) ?>"class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>