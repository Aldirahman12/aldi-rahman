 <div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-top: 60px;">
      <div class="card">
        <div class="card-header">
          Data Reservasi | Resepsionis
        </div>
        <div class="card-body">
          <form class="form-inline">
    <div class="input-group" style="width:50%; margin-left: 550px;">
      <select name="id_kota" class="form-control form-control-lg">
        <option value="">CARI</option>
        <?php 
        foreach($kota as $k){
          echo '<option value="'.$k->id_kota.'">'.$k->nama_kota.'</option>';
        }
        ?>
      </select>
      <div class="input-group-prepend">
        <button type="submit" class="btn btn-primary">Cari</button>
      </div>
    </form>
  </div>
          <hr>
          <?=$this->session->flashdata('message')?>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">Fasilitas</th>
                <th scope="col">Tangal chekin</th>
                <th scope="col">Tanggal checkout</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $i=1;
              foreach($list as $l){
                ?>
                <tr>
                  <th scope="row"><?=$i?></th>
                  <td><?=$l->nama_failitas?></td>
                  <td><?=$l->fasilitas_hotel?></td>
                  <td><?=rupiah($l->harga)?> / <?=rupiah($l->harga_bulan)?> / <?=rupiah($l->harga_tahun)?></td>
                  <td><img class="img-thumbnail" style="width: 100px" src="<?=base_url('assets/images/apartement')."/".$l->foto?>"></td>
                  <td><a href="<?=base_url('kamarr/edit/'.$l->id_hotel)?>" class="btn btn-info btn-sm">Edit</a>
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?=base_url('kamarr/delete/'.$l->id_hotel)?>" class="btn btn-danger btn-sm">Hapus</a></td>
                </tr>
                <?php $i++; 
              } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>