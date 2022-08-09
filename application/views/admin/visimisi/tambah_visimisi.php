<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Visi Misi</h1>
                            </div>
                            <form class="user" action="<?= base_url('Visimisi/insert') ?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="">Visi</label><br>
                                    <textarea type="text" class="form-control" rows="10" name="visi" id="exampleInputEmail"required>
                                    </textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Misi</label><br>
                                    <textarea type="text" class="form-control" rows="10" name="misi" id="exampleInputEmail"required>
                                    </textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>