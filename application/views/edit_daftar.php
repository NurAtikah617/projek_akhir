<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
</head>
<body>
    <h1>Edit event</h1>
    <form action="<?= base_url() ?>admin/update" method="POST">
    <div class="tambah">
    <input placeholder="masukkan id" type="hidden" name="id" value="<?= $edit ['id']?>"><br><br>
    <select class="edit2" name="jns_lomba">
        <option value="">pilih jenis lomba</option>
        <?php foreach( $jns_lomba as $jns ) : ?>
            <option value="<?= $jns['id']?>"><?= $jns['namalomba']?></option>
        <?php endforeach; ?>
    </select>
    <br><br>
    <input placeholder="masukkan nama pendaftar" type="text" name="nama_pendaftar" value="<?= $edit ['nama_pendaftar']?>"><br><br>
    <input placeholder="masukkan kelas" type="text" name="kelas" value="<?= $edit ['kelas']?>"><br><br>
    <input placeholder="masukkan no_hp" type="text" name="no_hp" value="<?= $edit ['no_hp']?>"><br><br>
    <input type="date" name="tgl_daftar"><br><br>
    <input type="submit" value="edit">
</form>
</div>
</body>
</html>