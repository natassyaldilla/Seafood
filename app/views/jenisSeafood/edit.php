<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Form <?=$data['judul']?></h3>
                            <form action="<?=BASEURL?>/Jenis_Seafood/update" method="post">
                                <div class="mb-3">
                                    <label for="ID_JENIS" class="form-label">Id jenis Barang</label>
                                    <input type="text" class="form-control" id="ID_JENIS" name="ID_JENIS" required value="<?=$data['jenis_seafood_by_id']['ID_JENIS']?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="NAMA_JENIS" class="form-label">Nama Jenis Barang</label>
                                    <input type="text" class="form-control" id="NAMA_JENIS" name="NAMA_JENIS" required value="<?=$data['jenis_seafood_by_id']['NAMA_JENIS']?>" >
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