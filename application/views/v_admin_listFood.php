<div class="container" action="<?= base_url() ?>index.php/admin">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $this->session->flashdata('success'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>



    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Makanan</h3>
            <?php if (empty($foods)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>
            <a href="<?= base_url() ?>index.php/admin/add_food" class="btn btn-primary"><span class="fa fa-plus"></span> Add Food</a>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Food Name</th>
                        <th class="text-center" scope="col">Price</th>
                        <th class="text-center" scope="col">Category</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($foods as $food) {?>
                    <tr>
                        <td class="text-center"><?= $food['nama']; ?></td>
                        <td class="text-center">Rp<?= $food['harga']; ?></td>
                        <td class="text-center"><?= $food['kategori']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>index.php/admin/delete_food/<?= $food['id'] ?>">HAPUS</a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            
        </div>
    </div>
</div> 

</body>
