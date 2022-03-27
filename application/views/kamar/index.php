 <div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-top: 60px;">
      <div class="card">
        <div class="card-header">
          Data kamar | Admin
        </div>
        <div class="card-body">
          <a href="<?=base_url('kamar/add')?>" class="btn btn-primary">Tambah Data</a>
          <hr>
          <?=$this->session->flashdata('message')?>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col"style="width: 12%;">Nama Kamar</th>
                <th scope="col"style="width: 30%;text-align: center;">Fasilitas</th>
                <th scope="col">Harga permalam</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>


              <?php 
              $i=1;
              foreach($list as $l){
                ?>
                <tr>
                  <th scope="row"><?=$i?></th>
                  <td><?=$l->nama_kamar?></td>
                  <td><?=$l->fasilitas?></td>
                  <td><?=rupiah($l->harga)?></td>
                  <td><img class="img-thumbnail" style="width: 100px" src="<?=base_url('assets/images/apartement')."/".$l->foto?>"></td>
                  <td><a href="<?=base_url('kamar/edit/'.$l->id_kamar)?>" class="btn btn-info btn-sm">Edit</a>
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?=base_url('kamar/delete/'.$l->id_kamar)?>" class="btn btn-danger btn-sm">Hapus</a></td>
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