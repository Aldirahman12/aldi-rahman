 <div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-top: 60px;">
      <div class="card">
        <div class="card-header">
          Tambah kamar | Admin
        </div>
        <div class="card-body">

          <?=form_open_multipart()?>
          <?=$this->session->flashdata('message')?>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Kamar</label>
            <input type="text" name="nama_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama  Kamar" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Fasilitas</label>
            <select name="id_kota" class="form-control" required>
              <option value="">Pilih Fasilitas</option>
              <?php 
              foreach($fasilitas as $f){
                echo '<option value="'.$f->id_kota.'">'.$f->fasilitas.'</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Harga per Hari</label>
            <input type="number" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Harga per Hari" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Harga per Bulan</label>
            <input type="number" name="harga_bulan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Harga per Bulan" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Harga per Tahun</label>
            <input type="number" name="harga_tahun" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Harga per Tahun" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Foto</label>
            <small class="text-bold">*File yang diizinkan : jpg,png,jpeg</small><br>
            <input type="file" name="foto" required>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>s