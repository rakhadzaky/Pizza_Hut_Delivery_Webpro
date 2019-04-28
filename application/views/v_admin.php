<div class="container" action="<?= base_url() ?>index.php/admin">
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
                            <a href="<?= base_url(); ?>admin/hapus/<?= $puser['id'] ?>">HAPUS</a>
                        </td>

                        
                            
                        
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            
            

        </div>
    </div>
</div> 

</body>
