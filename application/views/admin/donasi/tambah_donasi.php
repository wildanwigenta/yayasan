<div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="p-5">
                            <div class="text">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Data Donasi</h1>
                            </div>
                            <form class="user" action="<?= base_url('Donasi/insert') ?>" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="donasi" id="exampleInputEmail"
                                        placeholder="donasi" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>