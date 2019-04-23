
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