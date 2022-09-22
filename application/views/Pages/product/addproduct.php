<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("layout/header.php") ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view("layout/sidebar.php") ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view("layout/navbar.php") ?>

                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Barang</h1>
                        <div class="pull-right">
                            <a href="<?php echo site_url('barang') ?>" class="btn btn-warning btn-flat">
                                <i class="fa fa-undo"></i> Back</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Barang</h6>
                                </div>
                                <div class="card-body">
                                    <form action="<?php echo site_url('barang/addbarang') ?>" method="post" enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label for="nama">Kode Barang</label>
                                                    <input type="text" name="user_id" class="form-control" placeholder="Username" required="required" value="<?php echo getCode(); ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label for="nama">Nama Barang</label>
                                                    <input type="text" name="nama" class="form-control" placeholder="Nama Barang" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label for="keterangan">Deskripsi barang</label>
                                                    <textarea class="form-control" name="keterangan" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="gambar">Upload Gambar/Berkas</label>
                                                <input type="file" class="form-control-file" name="gambar" id="gambar">
                                            </div>
                                            <button class="btn btn-primary" type="submit" name="save">Add Tiket</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php $this->load->view("layout/footer.php") ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php $this->load->view("layout/scrolltop.php") ?>
    <?php $this->load->view("layout/modal.php") ?>
    <?php $this->load->view("layout/js.php") ?>

</body>

</html>