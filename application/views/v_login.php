
               <!-- isi konten -->
               <section class="form">
                  <div class="container">
                    <div class="row">
                        <ul style="color: white">
                          <li style="font-size: 30pt">BUAT AKUN</li><br>
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
                        <form action="<?= base_url() ?>index.php/Home/register" class="col-md-8" method="post">
                          <div class="form-row col-md-12"> 
                            <div class="col-md-9">
                                  <label for="inputName" style="color: white">Nama lengkap</label>
                                  <input type="text" class="form-control" placeholder="First name" name="firstName">
                                  <small class="form-text text-danger"><?= form_error('firstName') ?>.</small>
                                  <input type="text" class="form-control" placeholder="Last name" name="lastName">
                                  <small class="form-text text-danger"><?= form_error('lastName') ?>.</small>
                            </div>

                            <div class="form-group col-md-4">
                              <label for="inputState" style="color: white">Jenis Kelamin</label>
                              <select id="inputState" class="form-control" name="jk">
                                <option selected disabled>Choose...</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
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
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="85141" name="phone">
                                  </div>
                                  <small class="form-text text-danger"><?= form_error('phone') ?>.</small>
                            </div>
                            <div class="col-md-5"></div>

                            <div class="form-group col-md-3">
                              <label for="inputCity" style="color: white">Tanggal</label>
                                  <select id="inputState" class="form-control" name="day">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                  <small class="form-text text-danger"><?= form_error('day') ?>.</small>
                              </div>

                              <div class="form-group col-md-3">
                              <label for="inputCity" style="color: white">Bulan</label>
                                  <select id="inputState" class="form-control" name="month">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <small class="form-text text-danger"><?= form_error('month') ?>.</small>
                                  </select>
                              </div>

                              <div class="form-group col-md-3">
                              <label for="inputCity" style="color: white">Tahun</label>
                                  <select id="inputState" class="form-control" name="year">
                                    <option selected>Choose...</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                  </select>
                                  <small class="form-text text-danger"><?= form_error('year') ?>.</small>
                              </div>
                              <div class="col-md-3"></div>
                              <div class="row">
                            <div class="form-group col-md-12">
                              <label for="email" style="color: white">Email address:</label>
                              <input name="email" type="email" class="form-control" id="email">
                              <small class="form-text text-danger"><?= form_error('email') ?>.</small>
                            </div>
                            <div class="col-md-8"></div>
                            <div class="form-group col-md-8">
                              <label for="pwd" style="color: white">Password:</label>
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
              
            
        <footer class="text-white p-2 bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-2">
                    
                      <ul>
                        <li style="color: yellow;">MENU</li><br>
                        <li>Hot Promo</li><br>
                        <li>Pizza</li><br>
                        <li>Pasta</li><br>
                        <li>Chicken</li><br>
                        <li>Rice</li><br>
                        <li>Snacks</li><br>
                        <li>Drinks</li>
                        <li>Desserts</li> 
                      </ul>
                  </div>
                  <div class="col-md-2">
                     <ul>
                        <li style="color: yellow;" class="pb-1">ABOUT</li><br>
                        <li>PHD Profile</li><br>
                        <li>Outlet Locations</li><br>
                        <li>PHD App</li><br>
                        <li>Uefa</li>
                      </ul>
                  </div>
                  <div class="col-md-2">
                    <ul>
                      <li style="color: yellow;" class="pb-1">CUSTOMER SERVICE</li><br>
                      <li>FAQ</li><br>
                      <li>Contact Us</li>
                    </ul>
                    <br>
                    <ul>
                      <li style="color: yellow;" class="pb-1">MY ACCOUNT</li><br>
                      <li>Create an account</li><br>
                      <li>Sign in</li><br>
                      <li>Point</li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                     <ul>
                        <li style="color: yellow;" class="pb-1">POLICIES</li><br>
                        <li>Privacy Policy</li><br>
                        <li>Terms</li><
                      </ul>
                  </div>
                  <div class="col-md-2">
                     <ul>
                        <li style="color: yellow;" class="pb-1">CONNECT WITH PHD</li><br>
                        <li>Privacy Policy</li><br>
                        <li>Privacy Policy</li><br>
                        <li>Privacy Policy</li><br>
                        <li>Privacy Policy</li><br>
                        <li>Privacy Policy</li><br>
                        <li>Terms </li>
                      </ul>
                  </div>

                  <div class="col-md-2">
                    <img style="max-width: 150%" src="https://static.phd.co.id/icons/Apple_Store_Logo.png" class="pt-5">
                    <img style="max-width: 150%" src="https://static.phd.co.id/icons/Google_Play_Store_Logo.png" class="pt-3">
                    <img src="https://static.phd.co.id/icons/halal_logo.png" class="pt-3"> 
                  </div>

              </div>
            </div>
            
      </footer>    
                


          


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>