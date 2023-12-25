<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Form <?=$data['judul']?></h3>
                            <form action="<?=BASEURL?>/Pemesanan/store" method="post">
                                <div class="mb-3">
                                    <label for="ID_PEMESANAN" class="form-label">ID Pemesanan</label>
                                    <input type="text" class="form-control" id="ID_PEMESANAN" name="ID_PEMESANAN" required>
                                </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="mb-3">
                                        <label for="ID_PEGAWAI" class="form-label">NAMA PEGAWAI</label>
                                        <select class="form-select" aria-label="Default select example" id="ID_PEGAWAI" name="ID_PEGAWAI" required>
                                            <?php foreach($data['pegawai'] as $p) :?>
                                                <option value="<?=$p['ID_PEGAWAI']?>"><?=$p['NAMA_PEGAWAI']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ID_CALON_KONSUMEN" class="form-label">CALON KONSUMEN</label>
                                        <select class="form-select" aria-label="Default select example" id="ID_CALON_KONSUMEN" name="ID_CALON_KONSUMEN" required>
                                            <?php foreach($data['calon_konsumen'] as $k) :?>
                                                <option value="<?=$k['ID_CALON_KONSUMEN']?>"><?=$k['NAMA_CALON_KONSUMEN']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="ID_PENAWARAN" class="form-label">ID PENAWARAN & TGL PENAWARAN</label>
                                <select class="form-select" aria-label="Default select example" id="ID_PENAWARAN" name="ID_PENAWARAN" required>
                                    <?php foreach($data['penawaran'] as $p) :?>
                                        <option value="<?=$p['ID_PENAWARAN']?>"><?=$p['ID_PENAWARAN']?> || <?=$p['TGL_PENAWARAN']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ALAMAT_PENGIRIMAN" class="form-label">ALAMAT PENGIRIMAN</label>
                                        <input type="text" class="form-control" id="ALAMAT_PENGIRIMAN" name="ALAMAT_PENGIRIMAN" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="STATUS_PEMESANAN" class="form-label">STATUS PEMESANAN</label>
                                        <input type="text" class="form-control" id="STATUS_PEMESANAN" name="STATUS_PEMESANAN" required>
                                    </div>
                                </div>
                            </div>
                            <?php for($i = 0; $i < 5; $i++) :?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="ID_PENAWARAN" class="form-label">SEAFOOD</label>
                                        <select class="form-select" aria-label="Default select example" id="ID_PENAWARAN" name="ID_BARANG[]" >
                                            <option value="">Pilih Seafood</option>
                                            <?php foreach($data['seafood'] as $p) :?>
                                                <option value="<?=$p['ID_BARANG']?>"><?=$p['NAMA_BARANG']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="SUB_TOTAL" class="form-label">QUANTITY</label>
                                            <input type="number" class="form-control" id="SUB_TOTAL" name="SUB_TOTAL[]" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="mb-3">
                                            <label for="TOTAL_BERAT" class="form-label">TOTAL BERAT</label>
                                            <input type="text" class="form-control" id="TOTAL_BERAT" name="TOTAL_BERAT[]" >
                                        </div>

                                    </div>
                                </div>
                            <?php endfor;?>
                                <div class="mb-3">
                                    <label for="TOTAL_HARGA" class="form-label">TOTAL HARGA</label>
                                    <input type="number" class="form-control" id="TOTAL_HARGA" name="TOTAL_HARGA" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>