
               <!-- isi konten -->
               <section class="form">
                  <div class="container">
                  
                    <a style="font-size: 30pt; color: white;">SIGN IN</a><br><br>
                       
                    <div class="row">
                        <div class="col-md-8">
                          <form action="<?= base_url() ?>index.php/Home/aksi_login" method="post" class="pl-3">
                          <div class="row">
                            <div class="col-md-12"><a style="font-size: 20pt; color: white;">DAFTAR</a></div>
                            <?php if (!empty($this->session->flashdata('failed'))) {?>
                              <div class="alert alert-danger"><?= $this->session->flashdata('failed'); ?></div>
                            <?php } ?>
                            <br>
                            <div class="col-md-6">
                              <button type="submit" class="btn btn-danger" style="width: 300px;" href="<?= base_url() ?>index.php/Home/register">DAFTAR</button>
                            </div><br><br><br>

                            <div class="col-md-12">
                                <a style="font-size: 10pt; color: white;">Social Login</a><br>
                                <a href="#">
                                    <img alt="" src="https://www.phd.co.id//assets/images/facebook-icon.png" style="width: 40px; height: 40px;">
                                </a>
                                <a href="#" class="pl-3">
                                    <img alt="" src="https://www.phd.co.id//assets/images/google-plus-icon.png" style="width: 40px; height: 40px;">
                                </a>
                            </div><br><br><br>
                            <div class="form-group col-md-8">
                              <label for="email" style="color: white">Email address:</label>
                              <input name="email" type="email" class="form-control" id="email">
                              <small class="form-text text-danger"><?= form_error('email') ?></small>
                            </div>
                            <div class="form-group col-md-8">
                              <label for="pwd" style="color: white">Password:</label>
                              <input name="password" type="password" class="form-control" id="pwd">
                              <small class="form-text text-danger"><?= form_error('password') ?></small>
                            </div>
                            <div class="form-group col-md-12">  
                                <input class="form-check-input " type="checkbox" ><a href=""  style="color: white">ingat saya</a>
                            </div>
                            <div class="col-md-6"><button type="submit" class="btn btn-danger" style="width: 300px;">SIGN IN</button></div>
                            
                        </div>                
                        </form>
                        </div>
                        
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