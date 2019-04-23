

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
                         <?php echo $this->session->userdata("first_name"); ?> <span><a data-toggle="modal" data-target="#myModal" href="" style="color: #fdd75f;">edit</a></span>
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
           

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body" style="background-color: #363434; width: 700px; height: 740px;">
        <center><h2 style="font-size: 30px">EDIT INFORMASI AKUN ANDA</h2></center>
            
               <!-- isi konten -->
               <section class="form">
                  <div class="container">
                    
                    <div class="row">
                        <form action="<?= base_url() ?>index.php/Home/edituser" class="col-md-12" method="post">
                           <div class="form-row" style="padding: 20px; border-radius: 10px;"> 
                            
                            <!-- FULLNAME -->
                            <div class="col-md-2"></div>
                            <div class="col-md-8" >
                                  <label for="inputName" style="color: white">Nama Depan <span style="color: red">*</span></label>
                                  <input type="text" class="form-control" placeholder="First name" name="firstName" value="<?php echo $tbuser['first_name'] ?>">
                                  <small class="form-text text-danger"><?= form_error('firstName') ?></small>
                                  <label for="inputName" style="color: white">Nama Belakang</label>
                                  <input type="text" class="form-control" placeholder="Last name" name="lastName" value="<?php echo $tbuser['last_name'] ?>">
                                  <small class="form-text text-danger"><?= form_error('lastName') ?></small>
                            </div>
                            <div class="col-md-2"></div>
                            <!-- END FULLNAME -->

                            <!-- <div class="form-group col-md-8">
                              <label for="inputState" style="color: white">Jenis Kelamin</label>
                              <select id="inputState" class="form-control" name="jk">
                              <?php if ($tbuser['gender'] == 'Pria') { ?>
                                <option value="Pria" selected>Pria</option>
                                <option value="Wanita">Wanita</option>
                              <?php } else{ ?>
                                <option value="Pria">Pria</option>
                                <option value="Wanita" selected>Wanita</option>
                              <?php } ?>
                              </select>
                              <small class="form-text text-danger"><?= form_error('jk') ?></small>
                            </div> -->
                            <div class="col-md-2"></div>
                            <div class="form-group col-md-8">
                              <label for="email" style="color: white">Email address <span style="color: red">*</span></label>
                              <input style="background-color: #363434; border-color: #363434; color: white;" name="email" type="email" class="form-control" id="email" value="<?php echo $tbuser['email'] ?>" readonly>
                            </div>
                            <div class="col-md-2"></div>

                            <div class="col-md-2"></div>
                            <div class="form-group col-md-8">
                              <label style="color: white">No. Telepon <em class="required" style="color: red">*</em></label>
                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">+62</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="85141" name="phone" value="<?php echo $tbuser['phone'] ?>">
                                  </div>
                                  <small class="form-text text-danger"><?= form_error('phone') ?></small>
                            </div>
                            <div class="col-md-2"></div>


                            <div class="col-md-2"></div>
                            <div class="form-group col-md-8">
                              <label for="pwd" style="color: white">Old Password</label>
                              <input name="old-password" type="password" class="form-control" id="pwd">
                              <small class="form-text text-danger"><?= form_error('password') ?></small>
                            </div>
                            <div class="col-md-2"></div>


                            <div class="col-md-2"></div>
                            <div class="form-group col-md-8">
                              <label for="pwd" style="color: white">New Password</label>
                              <input name="password" type="password" class="form-control" id="pwd">
                              <small class="form-text text-danger"><?= form_error('password') ?></small>
                            </div>
                            <div class="col-md-2"></div>

                            <!-- PASSWORD -->
                            <?php $my_date = explode("-",$tbuser['birth']); ?>
                            <div class="col-md-2"></div>
                            <div class="form-group col-md-2">
                              <label for="inputCity" style="color: white">Tanggal</label>
                                  <select id="inputState" class="form-control" name="day">
                                  <?php foreach($date as $day){ ?>
                                    <?php if($day == $my_date[0]){?>
                                      <option value="<?php $day ?>" selected><?= $day ?></option>
                                    <?php } else { ?>
                                      <option value="<?php $day ?>"><?= $day ?></option>
                                    <?php } ?>
                                  <?php } ?>
                                  </select>
                                  <small class="form-text text-danger"><?= form_error('day') ?></small>
                              </div>
                              <div class="col-md-1"></div>
                              <div class="form-group col-md-2">
                              <label for="inputCity" style="color: white">Bulan</label>
                                  <select id="inputState" class="form-control" name="month">
                                    <?php foreach($month as $m){ ?>
                                      <?php if($m == $my_date[1]){?>
                                        <option value="<?php $m ?>" selected><?= $m ?></option>
                                      <?php } else { ?>
                                        <option value="<?php $m ?>"><?= $m ?></option>
                                      <?php } ?>
                                    <?php } ?>
                                    <small class="form-text text-danger"><?= form_error('month') ?></small>
                                  </select>
                              </div>
                              <div class="col-md-1"></div>
                              <div class="form-group col-md-2">
                              <label for="inputCity" style="color: white">Tahun</label>
                                  <select id="inputState" class="form-control" name="year">
                                    <?php for ($i=2000; $i <= date('Y'); $i++) { ?>
                                      <?php if ($i == $my_date[2]) { ?>
                                        <option value="<?php $i ?>" selected><?= $i ?></option>  
                                      <?php } else { ?>
                                        <option value="<?php $i ?>"><?= $i ?></option>  
                                      <?php } ?>
                                    <?php } ?>
                                  </select>
                                  <small class="form-text text-danger"><?= form_error('year') ?></small>
                              </div>
                              <div class="col-md-2"></div>
                              <!-- END PASSWORD -->
                                  
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-danger" style="width: 210px; height: 37px; font-weight: bold;">SIMPAN PERUBAHAN</button>
                            </div>
                            <div class="col-md-2"></div>
                            
                       
                          </div>                  
                        </form>
                            
                    </div>
                </div>
               </section>
              
            
          
                


          


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
      </div>

      

    </div>
  </div>
</div>    
        </div>
        </div>
        

    