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


    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data user ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar User</h3>
            <?php if (empty($user)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">First Name</th>
                        <th class="text-center" scope="col">last name</th>
                        <th class="text-center" scope="col">gender</th>
                        <th class="text-center" scope="col">phone</th>
                        <th class="text-center" scope="col">birth</th>
                        <th class="text-center" scope="col">email</th>
                        <th class="text-center" scope="col">password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user as $puser) {?>
                    <tr>
                        <td class="text-center"><?= $puser['first_name']; ?></td>
                        <td class="text-center"><?= $puser['last_name']; ?></td>
                        <td class="text-center"><?= $puser['gender']; ?></td>
                        <td class="text-center"><?= $puser['phone']; ?></td>
                        <td class="text-center"><?= $puser['birth']; ?></td>
                        <td class="text-center"><?= $puser['email']; ?></td>
                        <td class="text-center"><?= $puser['password']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>admin/hapus/<?= $puser['first_name'] ?>">HAPUS</a>
                        </td>

                        
                            
                        
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <center><a href="<?= base_url(); ?>Home" style="color: white; border: 3px solid white; border-radius: 10px;"> BACK HOME</a></center>
            

        </div>
    </div>
</div> 

</body>
