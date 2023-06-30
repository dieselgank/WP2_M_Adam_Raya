            <?php foreach ($buku as $b) { ?>
                <form action="<?= base_url('buku/ubahBuku'); ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="hidden" name="id" id="id" value="<?php echo $b['id']; ?>">
                                    <input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku" value="<?= $b['judul_buku']; ?>">
                                </div>
                                <div class="form-group">
                                    <select name="id_kategori" class="form-control form-control-user">
                                        <!-- <option value="<?= $b['id']; ?>" selected="selected"></option> -->
                                        <option value="<?= $b['id']; ?>">Pilih Kategori</option>
                                        <?php foreach ($kategori as $k) { ?>
                                            <option value="<?= $k['id']; ?>"><?= $k['kategori']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang" value='<?= $b['pengarang']; ?>'>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit" value='<?= $b['penerbit']; ?>'>
                                </div>
                                <div class="form-group">
                                    <select name="tahun" class="form-control form-control-user">
                                        <option value="<?= $b['tahun_terbit']; ?>">Pilih Tahun Terbit</option>
                                        <?php for ($i = date('Y'); $i > 1000; $i--) { ?>
                                            <option value="<?= $i; ?>"><?= $i; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN" value='<?= $b['isbn']; ?>'>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok" value='<?= $b['stok']; ?>'>
                                </div>
                                <div class="form-group">
                                    <?php
                                            if (isset($b['image'])) { ?>

                                        <input type="hidden" name="old_pict" id="old_pict" value="<?= $b['image']; ?>">

                                        <picture>
                                            <source srcset="" type="image/svg+xml">
                                            <img src="<?= base_url('assets/img/upload/') . $b['image']; ?>" class="img-fluid img-thumbnail">
                                        </picture>

                                    <?php } ?>
                                    <input type="file" class="form-control form-control-user" id="image" name="image">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" onclick="window.history.back(-1)"><i class="fas fa-ban"></i>Close</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                                    Update</button>
                            </div>
                        </div>
                    </div>

                </form>
            <?php } ?>

        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->