 <div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-top: 60px;">
      <div class="card">
        <div class="card-header">
          Edit kamar | Admin
        </div>
        <div class="card-body">

          <?=form_open_multipart()?>
          <?=$this->session->flashdata('message')?>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama kamar</label>
            <input type="text" name="nama_kamar" value="<?=$detail->nama_kamar?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Apartemen" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Fasilitas</label>
            <select name="id_kota" class="form-control" required>
              <option value="">Pilih Fasilitas</option>
              <?php 
              foreach($fasilitas as $f){
                if($f->id_kota==$detail->id_kota){
                  $selected = ' selected';
                }else{
                  $selected = '';
                }
                echo '<option value="'.$f->id_kota.'"'.$selected.'>'.$f->fasilitas.'</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Harga permalam</label>
            <input type="number" name="harga" value="<?=$detail->harga?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Harga per Hari" required>
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">Foto</label>
            <small class="text-bold">*File yang diizinkan : jpg,png,jpeg</small>
            <br><img class="img-thumbnail" style="width: 200px" src="<?=base_url('assets/images/apartement')."/".$detail->foto?>"><br><br>
            <input type="file" name="foto">
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>