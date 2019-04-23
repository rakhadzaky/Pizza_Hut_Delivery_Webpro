
               <!-- isi konten -->
               <section class="form">
                  <div class="container">
                    <div class="row">
                        <ul style="color: white">
                          <li style="font-size: 30pt">EDIT AKUN</li><br>
                          <li>Buat akun untuk pemesanan lebih cepat & penawaran special</li>
                          <li><?php
                            if ($this->session->flashdata('success') != "") {
                                echo "<div class='alert alert-success'>".$this->session->flashdata('success')."</div>";
                            }
                            if ($this->session->flashdata('failed') != "") {
                                echo "<div class='alert alert-danger'>".$this->session->flashdata('failed')."</div>";
                            }
                        ?></li>
                        </ul>
                    </div>

                    <div class="row">
                        <form action="<?= base_url() ?>index.php/Home/edituser" class="col-md-8" method="post">
                                                    <div class="form-row col-md-12"> 
                            <div class="col-md-9">
                                  <label for="inputName" style="color: white">Nama lengkap</label>
                                  <input type="text" class="form-control" placeholder="First name" name="firstName" value="<?php echo $tbuser['first_name'] ?>">
                                  <small class="form-text text-danger"><?= form_error('firstName') ?>.</small>
                                  <input type="text" class="form-control" placeholder="Last name" name="lastName" value="<?php echo $tbuser['last_name'] ?>">">
                                  <small class="form-text text-danger"><?= form_error('lastName') ?>.</small>
                            </div>

                            <div class="form-group col-md-4">
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
                              <small class="form-text text-danger"><?= form_error('jk') ?>.</small>
                            </div>
                            <div class="col-md-8"></div>
                            <div class="form-group col-md-5">
                              <label style="color: white">No. Telepon <em class="required" aria-required="true">*</em></label>
                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">+62</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="85141" name="phone" value="<?php echo $tbuser['phone'] ?>">
                                  </div>
                                  <small class="form-text text-danger"><?= form_error('phone') ?>.</small>
                            </div>
                            <div class="col-md-5"></div>
                            
                            <?php $my_date = explode("-",$tbuser['birth']); ?>
                            <div class="form-group col-md-3">
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
                                  <small class="form-text text-danger"><?= form_error('day') ?>.</small>
                              </div>

                              <div class="form-group col-md-3">
                              <label for="inputCity" style="color: white">Bulan</label>
                                  <select id="inputState" class="form-control" name="month">
                                    <?php foreach($month as $m){ ?>
                                      <?php if($m == $my_date[1]){?>
                                        <option value="<?php $m ?>" selected><?= $m ?></option>
                                      <?php } else { ?>
                                        <option value="<?php $m ?>"><?= $m ?></option>
                                      <?php } ?>
                                    <?php } ?>
                                    <small class="form-text text-danger"><?= form_error('month') ?>.</small>
                                  </select>
                              </div>

                              <div class="form-group col-md-3">
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
                                  <small class="form-text text-danger"><?= form_error('year') ?>.</small>
                              </div>
                              <div class="col-md-3"></div>
                              <div class="row">
                            <div class="form-group col-md-12">
                              <label for="email" style="color: white">Email address:</label>
                              <input name="email" type="email" class="form-control" id="email" value="<?php echo $tbuser['email'] ?>" readonly><br>
                            </div>
                            <div class="col-md-8"></div>
                            <div class="form-group col-md-8">
                              <label for="pwd" style="color: white">Old Password:</label>
                              <input name="old-password" type="password" class="form-control" id="pwd">
                              <small class="form-text text-danger"><?= form_error('password') ?>.</small>
                            </div>
                            <div class="form-group col-md-8">
                              <label for="pwd" style="color: white">New Password:</label>
                              <input name="password" type="password" class="form-control" id="pwd">
                              <small class="form-text text-danger"><?= form_error('password') ?>.</small>
                            </div>
                            <div class="col-md-8"></div>
                            <div class="form-group form-check">
                              <label class="form-check-label">
                                <input class="form-check-input " type="checkbox" style="color: white"><span class="small-text col-md-6" style="color: white">
                                                  Saya setuju dengan <a href="https://www.phd.co.id/id/home/term" target="_blank" style="color: white">syarat</a>
                                                  dan mengerti bahwa informasi saya akan <br> digunakan sebagai penjelasalan dalam halaman ini dan <a href="https://www.phd.co.id/id/home/privacy" target="_blank" style="color: white">kebijakan privasi</a>
                                              </span> Pizza Hut
                              </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                          </div>                  
                        </form>
                            <div class="col-md-4">
                                <div class="sign-in-benefits col-md-12 xxx" style="color: white">
                                    <ul>
                                      <li><br> Simpan pesanan favoritmu untuk pesan lebih cepat.</li>
                                        <li>Percepat checkout dengan menggunakan alamat dan informasi pembayaran yang sudah tersimpan.</li>
                                        <li>Dapatkan penawaran eksklusif. <br></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
               </section>