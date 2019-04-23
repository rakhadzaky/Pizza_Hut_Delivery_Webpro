<div class="container">
    <a style="font-size: 30pt; color: white; text-transform: uppercase;">SELAMAT DATANG <?php echo $this->session->userdata("first_name"); ?></a><br>
    <p style="color: white">Kamu berhasil masuk. Silahkan klik pesan sekarang untuk proses pemesanan kamu.</p>
    <a href="#" id="btn-pesan" onclick="show_Modal_pesan()" class="btn btn-danger pt-2" role="button" style="padding: 5px; position: relative; font-size: 21px; font-family: Arial;  width: 150px; line-height: 1.1; font-weight: bold; margin-bottom: 20px;">PESAN<br>SEKARANG</a>
</div>

