<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>PENDAFTARAN LOMBA</h1>
    <div class="tambah">
    <form action="<?= base_url() ?>tambah_daftar/tambah" method="POST">
        <label for="">Jenis Lomba</label>
    <select name="namalomba">
        <?php foreach ($jns_lomba as $jns) : ?>
            <option value="<?= $jns['id'] ?>"> <?= $jns ['namalomba'] ?></option>
        <?php endforeach ; ?>
    </select>
    <br><br>
    <input placeholder="nama pendaftar" type="text" name="nama_pendaftar"><br><br>
    <input placeholder="kelas" type="text" name="kelas"><br><br>
    <input placeholder="No HP" type="text" name="no_hp"><br><br>
    <input type="date" name="tgl_daftar"><br><br>
    <input type="submit" value="simpan">
</form>
</div>
</body>
</html>