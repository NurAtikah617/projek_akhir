
    <h1>Edit Lomba</h1>
    <form action="<?= base_url() ?>data_event/update" method="POST">
    <div class="tambah">
    <input type="hidden" value="<?= $edit['id'];?>" name="id"><br><br>

    <label for="">Nama Lomba</label>
    <input type="text" name="namalomba" value="<?= $edit ['namalomba'];?>"><br><br>

    <label for="">Penyelenggara</label>
    <input type="text" name="penyelenggara" value="<?= $edit ['penyelenggara'];?>"><br><br>
    <input type="submit" value="simpan">
</from>