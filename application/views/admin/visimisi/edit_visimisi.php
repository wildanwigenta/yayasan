<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Visi Misi</h1>
                            </div>
                            <form class="user" action="<?= base_url('Visimisi/update') ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="id_visi_misi" id="exampleInputEmail"
                                        placeholder="visi_misi" value="<?= $visimisi['id_visi_misi'] ?>" hidden>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="visi" id="exampleInputEmail"
                                        placeholder="visi" value="<?= $visimisi['visi'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="misi" id="exampleInputEmail"
                                        placeholder="misi" value="<?= $visimisi['misi'] ?>" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>