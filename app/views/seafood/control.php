<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Tabel <?=$data['judul']?></h3>
                            <p>Menampilkan seafood dengan stok < 20</p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No</th>
                                            <th class="border-top-0">ID BARANG</th>
                                            <th class="border-top-0">ID JENIS</th>
                                            <th class="border-top-0">NAMA BARANG</th>
                                            <th class="border-top-0">STOK BARANG</th>
                                            <th class="border-top-0">BERAT BARANG</th>
                                            <th class="border-top-0">HARGA JUAL</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                        <?php 
                                        $no = 1; 
                                        foreach($data['sp_control'] as $s) : ?>
                                        <tr>
                                            <td><?=$no++?></td>
                                            <td><?=$s['ID_BARANG']?></td>
                                            <td><?=$s['ID_JENIS']?></td>
                                            <td><?=$s['NAMA_BARANG']?></td>
                                            <td><?=$s['STOK_BARANG']?></td>
                                            <td><?=$s['BERAT_BARANG']?></td>
                                            <td>Rp.<?=number_format($s['HARGA_JUAL'])?></td>
                                            <td>
                                                <a href="<?=BASEURL?>/Seafood/edit/<?=$s['ID_BARANG']?>" class="btn btn-warning ">Edit</a>
                                                <a href="<?=BASEURL?>/Seafood/delete/<?=$s['ID_BARANG']?>" class="btn btn-danger" onclick="return confirm('yakin ?')">Hapus</a>
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