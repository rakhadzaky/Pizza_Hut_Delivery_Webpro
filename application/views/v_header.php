<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/css.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/pizza_hut.css"> -->
    <link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>Pizza Hut Delivery</title>
  </head>
  <body>
    
  <div id="background-modal" class="background-modal"></div>
         <div id="modal-pesan" class="card bg-dark w-50" style="position: absolute; z-index: 10; display:none; transition: 0.5s ease; margin-left: 25%; margin-top: 100px;">
            <form action="<?= base_url() ?>index.php/pesanan/tambah_pesanan" method="post">
              <div class="card-header">
              <div onclick="close_Modal_pesan()" id="button_close_modal" class="button_close_modal float-right fa fa-times text-light" style="background-color: transparent; border:none;"></div><h3 class="text-center text-light">MULAI PESANAN ANDA</h3>
              </div>
              <div class="card-body">
                    <div class="row text-center text-light">
                        <div class="col-sm-6">
                          <img class="delivery-button" onclick="show_footer_delivery()" width="80px" src="<?= base_url() ?>assets/img/icon/delivery.png" alt=""><br>
                          <small><b>Delivery</b></small><br>
                          <small>30 menit dijamin tiba<br>atau gratis 1 pizza</small>
                        </div>
                        <div class="col-sm-6">
                        <img class="delivery-button" onclick="show_footer_take()" width="80px" src="<?= base_url() ?>assets/img/icon/delivery.png" alt=""><br>
                          <small><b>Takeaway</b></small><br>
                          <small>Pesanan sudah siap dibawa saat<br>Anda sampai di outlet</small>
                        </div>
                    </div>
              </div>
              <div class="card-footer">
                <div id="now_or_later" class="text-center text-light" style="display: none">
                  <h4>KIRIM PESANAN SAYA UNTUK...</h4><br>
                  <span class="now_or_later_button" id="order-now" onclick="show_send_it()" style="border-radius : 10px 0 0 10px">Sekarang</span><!--
                  --><span class="now_or_later_button" style="border-radius : 0 10px 10px 0">Nanti</span>
                </div>
                <br>
                <br>
                <div id="send_it" class="text-center" style="display: none;">
                  <?php echo $map['js'];?>
                  <input class="form-control" type="text" id="myPlaceTextBox" /><br>
                  <?php echo $map['html'];?>
                  <br>
                  <input type="text" class="form-control" name="jalan" readonly><br>
                  <input type="hidden" name="type" id="type_order">
                  <input type="hidden" name="id_user" value="<?= $this->session->userdata('id_user') ?>">
                  <input type="text" class="form-control" name="address" placeholder="No Rumah"><br>
                  <input type="text" class="form-control" name="building" placeholder="Building Name"><br>
                  <button class="btn btn-danger w-50">Konfirmasi</button>
                </div>
              </div>
            </form>
         </div>

    <div class="bg pt-3">
    <div class="container">
    <section class="atas">
          <div class="row">
                <br>
                <ul class="nav navbar-nav col-md-2 iden" class="pt-2">
                    <li>
                      <a href="#" class="active" style="color: white;">Id</a>
                      |
                      <a href="#" style="color: white;">En</a>
                    </li>
                    <li>
                      <?php if ($this->session->userdata("status") != "login") {?>
                        <a href="<?= base_url(); ?>index.php/Home/aksi_login" style="color: white; padding-right: 10px;"><i class="fas fa-user" style="color: yellow"></i> masuk</a>
                        <a href="<?= base_url() ?>index.php/Home/register" style="color: white;"><i class="fas fa-user" style="color: yellow"></i> daftar</a>
                      <?php } else{ ?>
                        <a href="<?= base_url(); ?>index.php/Home/aksi_login" style="color: white; padding-right: 10px;"><i class="fas fa-user" style="color: yellow"></i> <a href="<?= base_url() ?>index.php/Home/lihat_detail" style="color: white">Hai, <?php echo $this->session->userdata("first_name"); ?></a></a>
                        <a href="<?= base_url(); ?>index.php/Home/logout" style="color: white; padding-right: 10px;"><i class="fas fa-user" style="color: yellow"></i> log out</a>
                      <?php } ?>
                      <?= $this->session->userdata('order_id');?>
                      <?= $this->session->userdata('order_qty'); ?>
                    </li>
                    <li>
                      <a href="<?= base_url(); ?>index.php/admin" style="color: white; padding-right: 10px;"><i class="fas fa-user" style="color: yellow"></i> admin</a>
                    </li>               
                </ul>
              <div class="col-md-5"><img src="https://static.phd.co.id/PHD_Logo2019v2.png" alt="Pizza Hut" width="80%"></div>
              <div class="col-md-3"><img src="https://pizzahutid.s3.amazonaws.com/static/images/30%20Menit%20_%20Gratis%20Pizza.png" alt="" class="pt-2"></div>
              <div class="pt-2">
                <?php if (empty($this->session->userdata("status"))) { ?>
                  <a href="<?= base_url() ?>index.php/Home/aksi_login" id="btn-pesan" class="btn btn-danger pt-2"  role="button" style="width: 150px; height: 75px; border-radius: 10px;">PESAN<br>SEKARANG</a>
                <?php }else{ ?>
                  <a href="#" id="btn-pesan" onclick="show_Modal_pesan()" class="btn btn-danger pt-2"  role="button" style="width: 150px; height: 75px; border-radius: 10px;">PESAN<br>SEKARANG</a>
                <?php } ?>
              </div>
              
          </div>

     </section>   
          <div class="row">
             <ul class="list-inline text-center logo" class="bg">
                          <li>
                            <a class="yellow" href="<?= base_url() ?>index.php/Home">
                                <i class="fas fa-pizza-slice text-navbar"></i>
                                <br>
                                HOT PROMO
                            </a>
                          </li>
                        <li>
                            <a href="<?= base_url() ?>index.php/home/food/pizza" class="yellow">
                                <i class="fas fa-pizza-slice text-navbar"></i>
                                <br>
                                PIZZA
                            </a>
                        </li>
                        <li class="yellow">
                            <a href="<?= base_url() ?>index.php/home/food/pasta" class="yellow">
                                <i class="fas fa-bacon text-navbar"></i>
                                <br>
                                PASTA
                            </a>
                        </li>
                        <li class="yellow">
                            <a href="#" class="yellow">
                                <i class="fas fa-drumstick-bite text-navbar"></i>
                                <br>
                                CHICKEN
                            </a>
                        </li>
                        <li class="yellow">
                            <a href="#" class="yellow">
                                <i class="fas fa-drumstick-bite text-navbar"></i>
                                <br>
                                RICE
                            </a>
                        </li>
                        <li>
                            <a href="" class="yellow">
                                <i class="fas fa-drumstick-bite text-navbar" ></i>
                                <br>
                                MORE<b class="caret"></b>
                            </a>
                            
                        </li>
                        <li class="yellow">
                            <a href="#remodal-target" data-url="https://www.phd.co.id/id/getpopup/findAHut" data-reference="main-content--find-a-hut" class="yellow">
                                <i class="fas fa-drumstick-bite text-navbar"></i>
                                <br>
                                OUTLET
                        </li>
                        <li class="yellow">
                            <a  href="" class="yellow">
                                <i class="fas fa-drumstick-bite text-navbar"></i>
                                <br>
                                LOYALTY
                            </a>
                            
                        </li>
                    </ul>
            </div>
                   
         </div>
         </div>
         <script>
            function show_Modal_pesan(){
              document.getElementById('modal-pesan').style.display = 'block';
              document.getElementById('background-modal').style.display = 'block';
              
            }
            function close_Modal_pesan(){
              document.getElementById('modal-pesan').style.display = 'none';
              document.getElementById('now_or_later').style.display = 'none';
              document.getElementById('background-modal').style.display = 'none';
              document.getElementById('now_or_later').style.display = 'none';
            }
            function show_footer_delivery(){
              document.getElementById('now_or_later').style.display = 'block';
              document.getElementById('type_order').setAttribute('value','delivery');
            }
            function show_footer_take(){
              document.getElementById('now_or_later').style.display = 'block';
              document.getElementById('type_order').setAttribute('value','take away');
            }
            function show_send_it(){
              document.getElementById('send_it').style.display = 'block';
            }
         </script>