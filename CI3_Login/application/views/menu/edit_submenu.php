<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <form action="<?= base_url('menu/edit_submenu/2'); ?>" method="post">
                <!-- <form action="" method="post"> -->
                <!-- <?= form_open('admin/edit_role') ?> -->
                <!-- <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $user_role['id']; ?>" readonly>
                    </div>
                </div> -->
                <input type="hidden" name="id" value="<?= $user_sub_menu['id']; ?>">
                <div class="form-group row">
                    <label for="menu" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm 10">
                        <input type="text" class="form-control" id="title" value="<?= $user_sub_menu['title']; ?>" name="title" placeholder="Submenu Title">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="menu" class="col-sm-2 col-form-label">Menu</label>
                    <div class="col-sm 10">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div> -->
                <div class="form-group row">
                    <label for="menu" class="col-sm-2 col-form-label">URL</label>
                    <div class="col-sm 10">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url" value="<?= $user_sub_menu['url']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="menu" class="col-sm-2 col-form-label">Icon</label>
                    <div class="col-sm 10">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon" value="<?= $user_sub_menu['icon']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="menu" class="col-sm-2 col-form-label">Is Active?</label>
                    <div class="col-sm 10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $user_sub_menu['is_active']; ?>" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
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