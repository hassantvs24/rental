
<?php $this->load->view('admin/inc/header'); ?>
    <?php $this->load->view('admin/inc/nav'); ?>
    <?php $this->load->view('admin/inc/aside'); ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?= $title ?? 'Page' ?></h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <?php $this->load->view($main_content); ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php $this->load->view('admin/inc/footer'); ?>
