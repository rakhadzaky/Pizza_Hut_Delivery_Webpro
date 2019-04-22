
            <div class="container m-auto text-light">
                <div class="mb-4">
                    <img src="<?= base_url() ?>assets/img/PHD_pizza_background.jpg" alt="">
                    <h1 class="ml-4" style="margin-top: -60px;">PIZZA</h1>
                </div>
                <div class="mb-4 row" style="margin-top: 50px;">
                    <?php if (empty($food)) {?>
                        <div class="alert alert-dark form-control text-center">Data Empty</div>
                    <?php } ?>
                    <?php foreach ($food as $content) { ?>
                        <div class="col-md-6">
                            <div class="row p-2 m-1 mt-4" style="background: rgba(70,70,70,.5); border-radius: 10px; min-height: 280px;">
                                <div class="col-sm-5">
                                    <img style="width: auto" src="<?= base_url() ?>uploads/<?= $content['gambar'] ?>" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <h4 style="color: #d4a26f"><?= $content['nama'] ?></h4>
                                    <p><?= $content['deskripsi'] ?></p>
                                </div>
                                <div class="col-sm-5 text-center">
                                    <p style="font-size: 20pt;"><small>Rp</small><?= $content['harga'] ?></p>
                                </div>
                                <div class="col-sm-7">
                                  <?php if (!empty($this->session->userdata('order_id'))) { ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                          <select name="type_pizza" id="" class="form-control">
                                            <option value="original">Original</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-6">
                                          <select name="size" id="" class="form-control">
                                            <option value="regular">Regular</option>
                                          </select>
                                        </div>
                                      </div>
                                      <br>
                                      <button class="btn btn-warning font-weight-bold w-100">Extra Cheese (+Rp 10,000)</button><br><br>
                                  <?php } ?>
                                    <button class="btn btn-danger font-weight-bold w-100">ORDER NOW</button>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            
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