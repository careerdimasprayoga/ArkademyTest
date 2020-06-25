    <section class="content">
        <div class="container-fluid">

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?= $title;?>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <?= $this->session->flashdata('sementara');?>
                            <form method="POST" action="<?= base_url('produk/tambah');?>">
                                <label>Nama Produk</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_produk" placeholder="Masukan Nama Produk">
                                    </div>
                                    <?= form_error('nama_produk','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <label>Harga</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Produk">
                                    </div>
                                    <?= form_error('harga','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <label>Jumlah</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="jumlah" placeholder="Masukan Jumlah Produk">
                                    </div>
                                    <?= form_error('jumlah','<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <label>Keterangan</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" name="keterangan"></textarea>
                                    </div>
                                    <?= form_error('keterangan','<small class="text-danger pl-3">','</small>'); ?>
                                </div>

                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?= base_url('assets/');?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('assets/');?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?= base_url('assets/');?>plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?= base_url('assets/');?>plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('assets/');?>plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url('assets/');?>js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?= base_url('assets/');?>js/demo.js"></script>
</body>

</html>
