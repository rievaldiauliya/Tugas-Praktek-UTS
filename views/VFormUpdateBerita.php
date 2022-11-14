
<form action="<?php echo site_url('Welcome/UpdateDataBerita'); ?>" method="post">
<table>
	<tr>
		<td>Nama_berita</td>
		<td>:</td>
		<td><input type="hidden" name="kd_berita" value="<?php echo $detail['kd_berita']; ?>">
			<input type="text" name="nama_berita" value="<?php echo $detail['nama_berita']; ?>">
		</td>
	</tr>
		<td colspan="3" align="right">
			<input type="submit" name="btn_simpan" value="Simpan">
		</td>
	</tr>
</table>
</form>
