<h1>Halaman Login</h1>
<form action="">
<?= $this->session->flashdata('message'); ?>
<input type="text" placeholder="username" name="username"><br><br>
<input type="password" placeholder="password" name="password"><br><br>

<input type="submit" value="login">
</form>
<p class="daftar">belum punya akun? <a class="tdftr" href="<?= base_url() ?>daftar">daftar</a></p>