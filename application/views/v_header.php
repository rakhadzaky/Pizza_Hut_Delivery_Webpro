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
    <link rel="shortcut icon" type="text/css" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnO8d0OS9wS-aQhqD7HSorQ7zQvCv_T_81Zx5vNvFJjsxgjfhs0Q">

    <title>Pizza Hut Delivery</title>
  </head>
  <body>
    
  <div id="background-modal" class="background-modal"></div>
         <div id="modal-pesan" class="card bg-dark w-50" style="position: absolute; z-index: 10; display:none; transition: 0.5s ease; margin-left: 25%; margin-top: 100px;">
            <form action="<?= base_url() ?>index.php/pesanan/tambah_pesanan" method="post">
              <div class="card-header">
              <button onclick="close_Modal_pesan()" id="button_close_modal" class="button_close_modal float-right fa fa-times text-light" style="background-color: transparent; border:none;"></button><h3 class="text-center text-light">MULAI PESANAN ANDA</h3>
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
                <ul class="nav navbar-nav col-md-3 iden" class="pt-2">
                    <li>
                      <a href="#" class="active" style="color: red; padding-left: 2px; padding-right: 2px;">ID</a>
                      |
                      <a href="#" style="color: white; padding-left: 2px; padding-right: 2px;">EN</a>
                    </li>
                    <li>
                      <?php if ($this->session->userdata("status") != "login") {?>
                        <a href="<?= base_url(); ?>index.php/Home/aksi_login" style="color: white; padding-right: 10px; font-size: 12px; font-weight: bold; text-transform: uppercase;"><i class="fas fa-user" style="color: yellow; font-size: 12px;"></i> masuk</a>
                        <a href="<?= base_url() ?>index.php/Home/register" style="color: white; font-size: 12px; font-weight: bold; text-transform: uppercase;"><i class="fas fa-user" style="color: yellow; font-size: 12px;"></i> daftar</a>
                      <?php } else{ ?>
                        <a href="<?= base_url(); ?>index.php/Home/aksi_login" style="color: white; padding-right: 10px; font-size: 12px; text-transform: uppercase;"><i class="fas fa-user" style="color: yellow"></i> <a href="<?= base_url() ?>index.php/Home/lihat_predetail" style="color: white; font-size: 12px; font-weight: bold; text-transform: uppercase;">HI, <?php echo $this->session->userdata("first_name"); ?></a></a>
                        <a href="<?= base_url(); ?>index.php/Home/logout" style="color: white; padding-right: 10px; font-size: 12px; font-weight: bold; text-transform: uppercase;"><i class="fas fa-user" style="color: yellow; font-size: 12px;"></i> log out</a>
                      <?php } ?>
                      
                    </li>
                                  
                </ul>
              <div class="col-md-1"></div>
              <div class="col-md-3"><img src="https://static.phd.co.id/PHD_Logo2019v2.png" alt="Pizza Hut" width="260" height="60"></div>
              <div class="col-md-3"><img src="https://pizzahutid.s3.amazonaws.com/static/images/30%20Menit%20_%20Gratis%20Pizza.png" alt="" class="pt-2" width="170" height="55"></div>
              <div class="pt-2">
                <a href="#" id="btn-pesan" onclick="show_Modal_pesan()" class="btn btn-danger pt-2"  role="button" style="padding: 5px; position: relative; font-size: 21px; font-family: Arial;  width: 150px; line-height: 1.1; font-weight: bold;">PESAN<br>SEKARANG</a>
              </div>
              
          </div>
     </section><br>  
          <div class="row">
            
             <ul class=" text-center logo col-md-12 mr-5">                    
                          <li style="width: 132px; height: 102px; border-right: 1px solid #999999; border-top: 1px solid #999999; padding-top: 10px;" >
                            <a href="<?= base_url() ?>index.php/Home">
                                <i><img src="https://static.phd.co.id/icons/categoryicons/promo.png" style="width:57px; height:47px; padding-bottom: 10px;"></i>
                                <br>
                                <span class="tulisan">HOT PROMO</span>
                            </a>
                          </li><!--
                        --><li style="width: 132px; height: 102px; border-right: 1px solid #999999; border-top: 1px solid #999999; padding-top: 10px;">
                            <a href="<?= base_url() ?>index.php/home/food/pizza">
                                <i><img src="https://static.phd.co.id/icons/categoryicons/pizza.png" style="width:57px; height:47px; "></i> 
                                <br>
                                <span class="tulisan">PIZZA</span>
                            </a>
                        </li><!--

                        --><li style="width: 132px; height: 102px; border-right: 1px solid #999999; border-top: 1px solid #999999; padding-top: 10px;">
                            <a href="<?= base_url() ?>index.php/home/food/pasta">
                                 <i><img src="https://static.phd.co.id/icons/categoryicons/pasta.png" style="width:57px; height:47px;"></i>
                                <br>
                                <span class="tulisan">PASTA</span>
                            </a>
                        </li><!--

                        --><li style="width: 132px; height: 102px; border-right: 1px solid #999999; border-top: 1px solid #999999; padding-top: 10px;">
                            <a href="#">
                                <i><img src="https://static.phd.co.id/icons/categoryicons/chicken.png" style="width:57px; height:47px;"></i>
                                <br>
                                 <span class="tulisan">CHICKEN</span>
                            </a>
                        </li><!--
                        --><li style="width: 132px; height: 102px; border-right: 1px solid #999999; border-top: 1px solid #999999; padding-top: 10px;">
                            <a href="#" class="yellow">
                                <i><img src="https://static.phd.co.id/icons/categoryicons/rice.png" style="width:57px; height:47px;"></i>
                                <br>
                                <span class="tulisan">RICE</span>
                            </a>
                        </li><!--

                        --><li style="width: 132px; height: 102px; border-right: 1px solid #999999; border-top: 1px solid #999999; padding-top: 10px;">
                            <a href="">
                                <i><img src="https://static.phd.co.id/icons/categoryicons/others_icon.png" style="width:57px; height:47px;"></i>
                                <br>
                                 <span class="tulisan">MORE</span>
                            </a>
                            
                        </li><!--
                        --><li style="width: 132px; height: 102px; border-right: 1px solid #999999; border-top: 1px solid #999999; padding-top: 10px;">
                            <a href="#remodal-target" data-url="https://www.phd.co.id/id/getpopup/findAHut" data-reference="main-content--find-a-hut">
                                <i><img src="https://static.phd.co.id/icons/categoryicons/store_location_icon_03.png" style="width:100px; height:47px;"></i>
                                <br>
                                <span class="tulisan">OUTLET</span>
                        </li><!--

                        --><li class="yellow" style="width: 132px; height: 102px; border-top: 1px solid #999999; padding-top: 10px;">
                            <a  href="">
                                <i><img src="https://static.phd.co.id/icons/categoryicons/icon_poin.png" style="width:57px; height:47px;"></i>
                                <br>
                                <span class="tulisan">LOYALTY</span>
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