<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data Contact</h1>
                            </div>
                            <form class="user" action="<?= base_url('Contact/update') ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="id_contact" id="exampleInputEmail"
                                        placeholder="contact" value="<?= $contact['id_contact'] ?>" hidden>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="deskripsi" id="exampleInputEmail"
                                        placeholder="deskripsi" value="<?= $contact['deskripsi'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="alamat" id="exampleInputEmail"
                                        placeholder="alamat" value="<?= $contact['alamat'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="telp" id="exampleInputEmail"
                                        placeholder="telp" value="<?= $contact['telp'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="email" id="exampleInputEmail"
                                        placeholder="email" value="<?= $contact['email'] ?>" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>