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
                        <h1 class="h3 mb-0 text-gray-800">Faktur Pajak</h1>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Faktur Pajak</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table class="table table-borderless" id="tables" width="100%" cellspacing="0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td width="150">
                                                        -
                                                    </td>
                                                    <td width="250">
                                                        -
                                                    </td>
                                                    <td width="350">
                                                        -
                                                    </td>
                                                    <td width="150">
                                                        -
                                                    </td>
                                                    <td>
                                                        <a type="button" href="" class="btn btn-sm btn-success">
                                                            <i class="fas fa-info"></i>
                                                        </a>
                                                        <a type="button" class="btn btn-sm btn-danger" href="">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#tables').DataTable();
    });
</script>

</html>