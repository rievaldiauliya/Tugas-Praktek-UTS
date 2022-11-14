<table class="table table-bordered">
	<tr>
		<td colspan="4">
			<a href="<?php echo site_url('Welcome/VFormAddMatpel'); ?>"class="btn btn-success">Add</a>
		</td>
	</tr>
	<tr>
		<th>Kd_matpel</th>
		<th>Nama_matpel</th>
		<th>KKM</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($DataMatpel))
	{
		foreach($DataMatpel as $ReadDM)
		{
	?>

	<tr>
		<td><?php echo $ReadDM->kd_matpel; ?></td>
		<td><?php echo $ReadDM->nama_matpel; ?></td>
		<td><?php echo $ReadDM->kkm; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/DataMatpel/'.$ReadDM->kd_matpel.'/view') ?>"class="btn btn-info">Update</a>
			<a href="<?php echo site_url('Welcome/DeleteDataMatpel/'.$ReadDM->kd_matpel) ?>"class="btn btn-danger">Delete</a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>