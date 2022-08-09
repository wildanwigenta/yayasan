<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Program</h1>
                            </div>
                            <form class="user" action="<?= base_url('Program/update') ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="id_program" id="exampleInputEmail"
                                        placeholder="program" value="<?= $program['id_program'] ?>" hidden>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="program" id="exampleInputEmail"
                                        placeholder="program" value="<?= $program['program'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="latest" id="exampleInputEmail"
                                        placeholder="latest" value="<?= $program['gambar'] ?>" hidden>
                                </div>

                                <div class="form-group">
                                    <textarea type="text" class="form-control" rows="10" name="deskripsi" id="exampleInputEmail"placeholder="deskripsi" required><?= $program['deskripsi'] ?>
                                    </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="filefoto">Gambar</label><br>
                                    <input type="file"  name="gambar" id="exampleInputEmail"
                                        placeholder="Image" id="filefoto" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>