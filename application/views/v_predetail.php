

    <div class="container">
        <div class="row" style="color: white">
            <div class="col-md-12" style="margin: 0px 0px 10px; font-size: 36px;">
                <h1>
                        INFORMASI AKUN SAYA
                </h1> 
            </div>
            
            <div class="col-md-4">
                <div>
                <ul style="border: 1px solid white; border-radius: 5px; width: 354px; height: 272px; padding: 20px;">
                    <li class="predetail" style="font-weight: bold;">
                         <?php echo $this->session->userdata("first_name"); ?> <span><a href="<?= base_url() ?>index.php/Home/lihat_detail"" style="color: #fdd75f;">edit</a></span>
                    </li><br>
                    <li class="predetail">
                         <?php echo $this->session->userdata("phone"); ?>
                    </li><br>
                    <li class="predetail">
                         <?php echo $this->session->userdata("email"); ?>
                    </li><br>
                    <li class="predetail" style="font-weight: bold;">
                        Poin: 12
                    </li><br>
                    <li class="predetail"><!-- <a href="https://www.phd.co.id/en/accounts" class="btn btn-cta active">Akun Saya</a> -->
                        <button type="button" class="btn btn-secondary" style="width: 312px; height: 37px; margin-bottom: 5px; font-weight: bold;">Akun Saya</button>
                        
                    </li><br>
                    <li class="predetail">
                        <button type="button" class="btn btn-danger" style="width: 312px; height: 37px; font-weight: bold;">Lihat History Pemesanan</button>
                    </li><br>
                    <center>
                        <li class="predetail">
                            <i></i> 9 Bulan sampai ulang tahun anda
                        </li>
                    </center>
                    
                </ul>

                </div>
                
            </div>
            
            <div class="boxkanan col-md-7" style="background: rgba(0,0,0,0.5); border-radius: 10px; width: 702px; height: 272px; margin-left: 30px; margin-bottom: 20px; padding: 20px;     line-height: 1.42857;">
                <div class="row">
                    <div class="col-md-6">
                        <span style="color: #d4a26f; font-weight: bold; font-size: 20px; line-height: 200%">PILIHAN PEMBAYARAN</span>

                        <span style="color: #d4a26f; font-weight: bold; font-size: 20px; line-height: 200%">METODE PEMBAYARAN *</span>
                        <br>
                        <label rel="no">
                                                <input type="radio" name="methodradio" id="paymentonline" >
                                                Online
                         </label>
                         <br><br><br>
                         <button type="button" class="btn btn-danger" style="width: 302px; height: 37px; font-weight: bold;">Lihat History Pemesanan</button>
                    </div>
                    <div style="border: 0.5px white solid; height: 220px; width: 0px;"></div>
                    <div class="col-md-5">
                        <span style="color: #d4a26f; font-weight: bold; font-size: 20px; ">SIMPAN ALAMAT <br>PENGANTARAN</span>
                        
    
                         <br>
                         <button type="button" class="btn btn-danger" style="width: 302px; height: 37px; font-weight: bold;">SIMPAN ALAMAT PENGANTARAN</button>
                         
                    </div>
                </div>
                    
                    
                
            </div>    
        </div>
        </div>
        

    