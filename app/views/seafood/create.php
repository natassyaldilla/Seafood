<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Form <?=$data['judul']?></h3>
                            <form action="<?=BASEURL?>/Seafood/store" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ID_BARANG" class="form-label">ID Barang</label>
                                        <input type="text" class="form-control" id="ID_BARANG" name="ID_BARANG" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ID_JENIS" class="form-label">Jenis Barang</label>
                                        <select class="form-select" aria-label="Default select example" id="ID_JENIS" name="ID_JENIS" required>
                                            <?php foreach($data['jenis_seafood'] as $j) :?>
                                                <option value="<?=$j['ID_JENIS']?>"><?=$j['NAMA_JENIS']?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                <div class="mb-3">
                                    <label for="NAMA_BARANG" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="NAMA_BARANG" name="NAMA_BARANG" required>
                                </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="STOK_BARANG" class="form-label">Stok Barang</label>
                                        <input type="text" class="form-control" id="STOK_BARANG" name="STOK_BARANG" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="BERAT_BARANG" class="form-label">Berat Barang</label>
                                        <input type="text" class="form-control" id="BERAT_BARANG" name="BERAT_BARANG" required>
                                    </div>
                                </div>
                            </div>
                                <div class="mb-3">
                                    <label for="HARGA_JUAL" class="form-label">Harga Jual Barang</label>
                                    <input type="text" class="form-control" id="HARGA_JUAL" name="HARGA_JUAL" required>
                                </div>
                                <div class="mb-3">
                                    <label for="GAMBAR_BARANG" class="form-label">Gambar Barang</label>
                                    <input type="file" class="form-control" id="GAMBAR_BARANG" name="GAMBAR_BARANG" required>
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