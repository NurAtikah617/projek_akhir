<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HALAMAN ADMIN</h1>

    <h5>TABEL DATA EVENT</h5>
    <div class="admin">
    <a class="adaftar"href="<?= base_url('tambah_daftar'); ?>"> TAMBAH DATA </a>
    <table border=1 id="pendaftarann">
        <tr>
            <th>Id</th>
            <th>id lomba</th>
            <th>Nama Pendaftar</th>
            <th>Kelas</th>
            <th>No HP</th>
            <th>Tanggal Daftar</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php foreach ($pendaftarann as $tdftr) : ?>
        <tr>
            <td><?= $tdftr['id'] ?></td>
            <td><?= $tdftr['id_lomba'] ?></td>
            <td><?= $tdftr['nama_pendaftar'] ?></td>
            <td><?= $tdftr['kelas'] ?></td>
            <td><?= $tdftr['no_hp'] ?></td>
            <td><?= $tdftr['tgl_daftar'] ?></td>
            <td><a class="a-edit" href="<?= base_url(); ?>admin/edit/<?= $tdftr['id']?>">edit</a></td>
            <td><a class="a-hapus" onclick="return confirm( 'Yakin mau Hapus?')" href="<?= base_url(); ?>admin/hapus/<?= $tdftr['id']?>">hapus</a></td>
        </tr>
        <?php endforeach; ?>
        
    </table>
    </div>
</body>
</html>