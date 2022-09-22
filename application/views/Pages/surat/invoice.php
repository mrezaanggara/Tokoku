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
                        <h1 class="h3 mb-0 text-gray-800">Faktur Pembayaran</h1>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Invoice</h6>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Minimal</label>
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option selected="selected">Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                </div>
                                                <!-- /.form-group -->
                                                <div class="form-group">
                                                    <label>Disabled</label>
                                                    <select class="form-control select2" disabled="disabled" style="width: 100%;">
                                                        <option selected="selected">Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                </div>
                                                <!-- /.form-group -->
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Minimal</label>
                                                    <select class="form-control select2" style="width: 100%;">
                                                        <option selected="selected">Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                </div>
                                                <!-- /.form-group -->
                                                <div class="form-group">
                                                    <label>Disabled</label>
                                                    <select class="form-control select2" disabled="disabled" style="width: 100%;">
                                                        <option selected="selected">Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                </div>
                                                <!-- /.form-group -->
                                            </div>
                                            <div class="col-lg-12">
                                                <label for="Barang">
                                                    Barang
                                                    <button id="rowAdder" type="button" class="btn btn-primary mb-2">
                                                        <span class="bi bi-plus-square-dotted">
                                                        </span> Tambah
                                                    </button>
                                                </label>
                                                <div id="row">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-danger" id="#" type="button">
                                                                        <i class="bi bi-trash"></i>
                                                                        Hapus
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="text" class="form-control m-input" placeholder="Nama Barang">
                                                        <input type="text" class="form-control m-input" placeholder="Keterangan">
                                                    </div>
                                                </div>
                                                <div id="newinput"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $("#rowAdder").click(function() {
                        newRowAdd =
                            '<div id="row"> <br> <div class="input-group">' +
                            '<div class="input-group-prepend">' +
                            '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                            '<i class="bi bi-trash"> </i> Hapus</button> </div>' +
                            '<input type="text" class="form-control m-input" placeholder="Nama Barang">' +
                            '<input type="text" class="form-control m-input" placeholder="Keterangan"> </div> </div>';

                        $('#newinput').append(newRowAdd);
                    });

                    $("body").on("click", "#DeleteRow", function() {
                        $(this).parents("#row").remove();
                    })
                </script>

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