<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/css.css">
    <link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>Pizza Hut Delivery</title>
  </head>
  <body style="color: white"><div class="container" action="<?= base_url() ?>index.php/admin">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data User <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Input New Food</h3>
            <form action="<?= base_url() ?>index.php/admin/add_food" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="food_name">Food Name</label>
                    <input type="text" name="food_name" class="form-control w-50">
                    <small class="form-text text-danger"><?= form_error('food_name') ?></small>
                </div>
                <div class="form-group">
                    <label for="food_name">Description</label>
                    <textarea name="desc" cols="30" rows="10" class="form-control w-50"></textarea>
                    <small class="form-text text-danger"><?= form_error('desc') ?></small>
                </div>
                <div class="form-group">
                    <label for="food_name">Price</label>
                    <input type="number" name="price" class="form-control w-50">
                    <small class="form-text text-danger"><?= form_error('price') ?></small>
                </div>
                <div class="form-group">
                    <label for="food_name">Category</label>
                    <select name="category" class="form-control w-25">
                        <option value="pizza">Pizza</option>
                        <option value="pasta">Pasta</option>
                        <option value="Chicken">Chicken</option>
                    </select>
                    <small class="form-text text-danger"><?= form_error('category') ?></small>
                </div>
                <div class="form-group">
                    <label for="food_name">Image</label>
                    <input type="file" name="img" class="form-control w-50">
                    <small class="form-text text-danger"><?= form_error('img') ?></small>
                    <?php if (!empty($error)) { ?>
                        <small class="form-text text-danger"><?= $error ?></small>
                    <?php } ?>
                </div>
                <button class="btn btn-success"><span class="fa fa-paper-plane"></span> Submit</button>
            </form>
            <center><a href="<?= base_url(); ?>index.php/Home" style="color: white; border: 3px solid white; border-radius: 10px;"> BACK HOME</a></center>
        </div>
    </div>
</div> 

</body>
