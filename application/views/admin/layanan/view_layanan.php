


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Layanan</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
      <a href="<?= base_url('Layanan/form_tambah')?>" class="float-right btn btn-primary">Tambah</a>
    </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Layanan</th>
                        <th>Deskripsi</th>
                        <th>Image</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $layanan= $this->Layanan_m->select();
                    foreach($layanan as $row){
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->layanan; ?></td>
                        <td><?= $row->deskripsi; ?></td>
                        <td><img src="<?= base_url('./assets/images/layanan/'.$row->gambar) ?>" alt="" style="width:auto" height='150'></td>
                        <td><?= $row->link; ?></td>
                        <td>
                            <a href="<?= base_url('Layanan/form_edit/'.$row->id_layanan) ?>" class= "btn btn-warning">Edit</a>
                            <a href="<?= base_url('Layanan/delete/'.$row->id_layanan.'/'.$row->gambar) ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a>
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

