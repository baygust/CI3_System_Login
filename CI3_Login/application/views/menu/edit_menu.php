<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('menu/edit_menu/2'); ?>" method="post">
                <!-- <form action="" method="post"> -->
                <!-- <?= form_open('admin/edit_role') ?> -->
                <!-- <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $user_role['id']; ?>" readonly>
                    </div>
                </div> -->
                <input type="hidden" name="id" value="<?= $user_menu['id']; ?>">
                <div class="form-group row">
                    <label for="menu" class="col-sm-2 col-form-label">Menu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="menu" name="menu" value="<?= $user_menu['menu']; ?>">
                        <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->