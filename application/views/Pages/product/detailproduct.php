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
                                    <h6 class="m-0 font-weight-bold text-primary">Detail Barang</h6>
                                </div>
                                <div class="card-body">
                                    <?php foreach ($row as $data) : ?>
                                        <div class="col-6">
                                            <img src="<?php echo base_url("data/product/" . $data['gambar'] . ".jpg") ?>" class="img-responsive rounded" height="400" width="600" />
                                        </div>
                                        <?php echo $data['kode_barang']; ?>
                                        <?php echo $data['nama_barang']; ?>
                                        <?php echo $data['jumlah']; ?>
                                        <?php echo $data['harga']; ?>
                                        <?php echo $data['deskripsi']; ?>
                                        <?php echo $data['gambar']; ?>
                                    <?php endforeach ?>
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