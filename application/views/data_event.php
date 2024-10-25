<table>
	<tr>
		<th>NO</th>
		<th>Nama Event</th>
		<th>penyelenggara</th>
		<th colspan="2">Aksi</th>
	</tr>

		<?php $i = 1; ?>
		<?php foreach ($jns_lomba as $lmb) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $lmb['namalomba']?></td>
				<td><?= $lmb['penyelenggara']?></td>
				<td><a class="a-edit" href="<?= base_url(); ?>data_event/edit/<?= $lmb['id']?>">edit</a></td>
				<td><a class="a-hapus" onclick="return confirm('yakin hapus?')" href="<?= base_url(); ?>data_event/hapus/<?= $lmb['id']?>">hapus</a></td>
			</tr>
			<?php $i++ ?>
			<?php endforeach;?>
</table>

<a class="adaftar" href="<?php echo base_url(); ?>tambah2">tambah data</a>