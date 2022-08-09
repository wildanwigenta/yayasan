<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Layanan</h1>
                            </div>
                            <form class="user" action="<?= base_url('Layanan/update') ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="id_layanan" id="exampleInputEmail"
                                        placeholder="layanan" value="<?= $layanan['id_layanan'] ?>" hidden>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="layanan" id="exampleInputEmail"
                                        placeholder="layanan" value="<?= $layanan['layanan'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="deskripsi" id="exampleInputEmail"
                                        placeholder="deskripsi" value="<?= $layanan['deskripsi'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="latest" id="exampleInputEmail"
                                        placeholder="latest" value="<?= $layanan['gambar'] ?>" hidden>
                                </div>

                                <div class="form-group">
                                    <label for="filefoto">Gambar</label><br>
                                    <input type="file"  name="gambar" id="exampleInputEmail"
                                        placeholder="Image" id="filefoto" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="link" id="exampleInputEmail"
                                        placeholder="link" value="<?= $layanan['link'] ?>" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>