<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Tabel <?=$data['judul']?></h3>
                            

                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ALAMAT PENGIRIMAN :</th>
                                            <td><?=$data['pemesanan_by_id']['ALAMAT_PENGIRIMAN']?></td>
                                        </tr>
                                        <tr>
                                            <th class="border-top-0">ID PEMESANAN</th>
                                            <th class="border-top-0">PEGAWAI</th>
                                            <th class="border-top-0">KONSUMEN</th>
                                            <th class="border-top-0">ID PENAWARAN</th>
                                            <th class="border-top-0">TGL PENAWARAN</th>
                                            <th class="border-top-0">STATUS PEMESANAN</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                       <tr>
                                            <td><?=$data['pemesanan_by_id']['ID_PEMESANAN']?></td>
                                            <td><?=$data['pemesanan_by_id']['NAMA_PEGAWAI']?></td>
                                            <td><?=$data['pemesanan_by_id']['NAMA_CALON_KONSUMEN']?></td>
                                            <td><?=$data['pemesanan_by_id']['ID_PENAWARAN']?></td>
                                            <td><?=$data['pemesanan_by_id']['TGL_PENAWARAN']?></td>
                                            <td><?=$data['pemesanan_by_id']['STATUS_PEMESANAN']?></td>
                                       </tr>
                                       <tr>
                                            <th colspan="6" class="text-center">Detail Pemesanan</th>
                                       </tr>
                                       <tr>
                                            <th >ID BARANG</th>
                                            <th colspan="2">NAMA BARANG</th>
                                            <th colspan="2">SUB TOTAL</th>
                                            <th colspan="2">TOTAL BERAT</th>
                                       </tr>
                                       <?php foreach($data['detail_pemesanan'] as $dp) :?>
                                        <tr>
                                            <td><?=$dp['ID_BARANG']?></td>
                                            <td colspan="2"><?=$dp['NAMA_BARANG']?></td>
                                            <td colspan="2"><?=$dp['SUB_TOTAL']?></td>
                                            <td colspan="2"><?=$dp['TOTAL_BERAT']?></td>
                                        </tr>
                                       <?php endforeach;?>
                                        <tr>
                                            <th colspan="5">TOTAL HARGA</th>
                                            <td>Rp.<?=number_format($data['pemesanan_by_id']['TOTAL_HARGA'])?></td>
                                        </tr>
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