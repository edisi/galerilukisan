<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('admin') ?>">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Harga</li>
</ol>

<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Edit Harga</h2>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-lg-8">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Edit Harga
            </div>
            <div class="card-body">
                <?php echo form_open('admin/harga/edit/'.$harga->id,'role="form" class="form-horizontal"'); ?>
                    <?php echo validation_errors(); ?>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" id="harga" placeholder="harga" name="harga" value="<?php echo ($this->input->post('harga') ? $this->input->post('harga') : $harga->harga); ?>" class="form-control limited" maxlength="25" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori_id" id="kategori" class="form-control" required="">
                            <option value="">Pilih Kategori</option>
                            <?php 
                                foreach ($kategori as $k): 
                                    if($k->id == ($this->input->post('kategori_id') ? $this->input->post('kategori_id') : $harga->kategori_id)){
                                        echo "<option value='$k->id' selected>$k->nama</option>";
                                    } else {
                                        echo "<option value='$k->id'>$k->nama</option>";
                                    } 
                                endforeach 
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <select name="ukuran_id" id="ukuran" class="form-control" required="">
                            <option value="">Pilih Ukuran</option>
                            <?php 
                                foreach ($ukuran as $u): 
                                    if($u->id == ($this->input->post('ukuran_id') ? $this->input->post('ukuran_id') : $harga->ukuran_id)){
                                        echo "<option value='$u->id' selected>$u->ukuran</option>";
                                    } else {
                                        echo "<option value='$u->id'>$u->ukuran</option>";
                                    } 
                                endforeach 
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="lama_pembuatan">Lama Pembuatan</label>
                        <input type="text" id="lama_pembuatan" placeholder="Perkiraan Lama Pembuatan" name="lama_pembuatan" value="<?php echo ($this->input->post('lama_pembuatan') ? $this->input->post('lama_pembuatan') : $harga->lama_pembuatan); ?>" class="form-control limited" maxlength="25" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url('admin/harga') ?>"  class="btn btn-danger">Kembali</a>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
