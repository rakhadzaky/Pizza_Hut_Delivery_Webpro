
            <div class="container m-auto text-light">
                <div class="mb-4 row" style="margin-top: 50px;">
                    <?php $sum = 0; ?>
                    <div class="row p-2 m-1 mt-4" style="background: rgba(70,70,70,.5); border-radius: 10px; width: 100%;">
                    <?php foreach($cart as $bill) { ?>
                        <?php $sum = $sum + ($bill['jumlah'] * $bill['harga']) ?>
                        <div class="col-sm-3">
                            <img src="<?= base_url() ?>uploads/<?= $bill['gambar'] ?>" alt="">
                        </div>
                        <div class="col-sm-3">
                            <h2><?= $bill['nama'] ?></h2>
                            <div><small class="fa fa-circle"></small> Stuffed Crust</div>
                            <div><small class="fa fa-circle"></small> Regular</div>
                        </div>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-4">
                                    <button class='form-control btn-dark disabled text-light'><span class="fa fa-minus"></span></button>
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" class='form-control' value="<?= $bill['jumlah'] ?>">
                                </div>
                                <div class="col-sm-4">
                                    <button class="form-control btn-dark text-light"><span class="fa fa-plus"></span></button>
                                </div>
                                <br><br>
                                <a href="<?= base_url() ?>index.php/home/removeCart/<?= $bill['id'] ?>" class="form-control btn btn-danger">REMOVE</a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <h2><small>Rp</small><?= $bill['jumlah'] * $bill['harga'] ?></h2>
                        </div>
                        <div class="mb-4"></div>
                        <?php } ?>
                    </div>
                    <div class="row p-2 ml-1 mr-1" style="background: black; width: 100%;">
                        <div class="col-md-7 offset-5 pt-3">
                            <p>Coupon Code</p>
                            <input type="text" name="coupon" class="form-control w-75" value="not available in this version" disabled>
                            <br>
                            <button class="btn btn-danger font-weight-bold" disabled>REDEEM</button>
                            <br><br>
                            <div style="height: 1px; background-color:white; width: 100%;"></div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Sub Total</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <small>Rp</small> <?= $sum ?>
                                </div>
                                <div class="col-md-6">
                                    <p>Tax</p> <?php $tax = $sum * 5/100 ?>
                                </div>
                                <div class="col-md-6 text-right">
                                    <small>Rp</small><?= $tax ?>
                                </div>
                                <div class="col-md-6">
                                    <p>Delivery Fee</p> <?php $deliv_fee = $sum * 7/100 ?>
                                </div>
                                <div class="col-md-6 text-right">
                                    <small>Rp</small> <?= $deliv_fee ?>
                                </div>
                                <div class="col-md-6">
                                    <p>Discount</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <small>Rp</small> 0
                                </div>
                                <div class="col-md-6">
                                    <p>Total</p>
                                </div>
                                <div class="col-md-6 text-right"><?php $total = $sum - $tax + $deliv_fee ?>
                                    <h2 class="text-warning"><small>Rp</small> <?= $total ?></h2>
                                </div>
                                <div class="col-md-4">
                                    <button class="font-weight-bold btn btn-danger form-control">ADD ORDER</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="font-weight-bold btn btn-danger form-control">EXTRA CHILLI</button>
                                </div>
                                <div class="col-md-4">
                                    <a href="<?= base_url() ?>index.php/home/checkOut" class="font-weight-bold btn btn-dark form-control">CHECK OUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
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