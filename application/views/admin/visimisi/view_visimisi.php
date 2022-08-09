


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Visi Misi</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
        <?php
            if($this->db->get('visi_misi')->num_rows() == 0){
        ?>
      <a href="<?= base_url('Visimisi/form_tambah')?>" class="float-right btn btn-primary">Tambah</a>
      <?php } ?>
    </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $no = 1;
                    $visimisi= $this->Visimisi_m->select();
                    foreach($visimisi as $row){
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->visi; ?></td>
                        <td><?= $row->misi; ?></td>
                        <td>
                            <a href="<?= base_url('Visimisi/form_edit/'.$row->id_visi_misi) ?>" class= "btn btn-warning">Edit</a>
                            <!-- <a href="<?= base_url('Visimisi/delete/'.$row->id_visi_misi) ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin')">Delete</a> -->
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

