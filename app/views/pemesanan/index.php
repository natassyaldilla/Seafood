<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Tabel <?=$data['judul']?></h3>
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    <a href="<?=BASEURL?>/Pemesanan/create" class="btn btn-primary">Tambah Data + </a>
                                </div>
                                <div class="col-4">
                                    <a href="<?=BASEURL?>/pemesanan/control" class="btn btn-dark  float-end ms-2 ">View</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No</th>
                                            <th class="border-top-0">ID PEMESANAN</th>
                                            <th class="border-top-0">PEGAWAI</th>
                                            <th class="border-top-0">KONSUMEN</th>
                                            <th class="border-top-0">ID PENAWARAN</th>
                                            <th class="border-top-0">TGL PENAWARAN</th>
                                            <th class="border-top-0">STATUS PEMESANAN</th>
                                            <th class="border-top-0">Detail</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                       <?php
                                       $no = 1;
                                       foreach($data['pemesanan'] as $p) :?>
                                       <tr>
                                            <td><?=$no++?></td>
                                            <td><?=$p['ID_PEMESANAN']?></td>
                                            <td><?=$p['NAMA_PEGAWAI']?></td>
                                            <td><?=$p['NAMA_CALON_KONSUMEN']?></td>
                                            <td><?=$p['ID_PENAWARAN']?></td>
                                            <td><?=$p['TGL_PENAWARAN']?></td>
                                            <td><?=$p['STATUS_PEMESANAN']?></td>
                                            <td>
                                                <a href="<?=BASEURL?>/Pemesanan/detail/<?=$p['ID_PEMESANAN']?>" class="btn btn-primary"> Detail</a>
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