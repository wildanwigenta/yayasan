


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Donasi</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
      <a href="<?= base_url('Donasi/form_tambah')?>" class="float-right btn btn-primary">Tambah</a>
    </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Donasi</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $donasi= $this->Donasi_m->select();
                    foreach($donasi as $row){
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>Rp. <?= number_format($row->donasi,2,',','.'); ?></td>
                        <td><?= $row->tanggal; ?></td>
                        <td>
                            <a href="<?= base_url('Donasi/form_edit/'.$row->id_donasi) ?>" class= "btn btn-warning">Edit</a>
                            <a href="<?= base_url('Donasi/delete/'.$row->id_donasi) ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
                        </td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

