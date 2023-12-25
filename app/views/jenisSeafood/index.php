<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Tabel <?=$data['judul']?></h3>
                            <a href="<?=BASEURL?>/Jenis_Seafood/create" class="btn btn-primary">Tambah Data + </a>
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No</th>
                                            <th class="border-top-0">id</th>
                                            <th class="border-top-0">Jenis Seafood</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                        <?php 
                                        $no = 1; 
                                        foreach($data['jenis_seafood'] as $j) : ?>
                                        <tr>
                                            <td><?=$no++?></td>
                                            <td><?=$j['ID_JENIS']?></td>
                                            <td><?=$j['NAMA_JENIS']?></td>
                                            <td>
                                                <a href="<?=BASEURL?>/Jenis_Seafood/edit/<?=$j['ID_JENIS']?>" class="btn btn-warning ">Edit</a>
                                                <a href="<?=BASEURL?>/Jenis_Seafood/delete/<?=$j['ID_JENIS']?>" class="btn btn-danger" onclick="return confirm('yakin ?')">Hapus</a>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                   </tbody>
                                </table>
                            </div>
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