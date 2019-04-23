
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
                                    <a href="<?= base_url() ?>index.php/pesanan/add_to_cart/<?= $content['id'] ?>" class="btn btn-danger font-weight-bold w-100">ORDER NOW</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>