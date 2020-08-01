    <div class="container">
        <div class="row mt-2">
          <div class="col-12">
            <?php Flasher::Flash(); ?>
          </div>
        </div>
        <?php
        if (isset($_SESSION['notFound'])){
            notFound::error();
        }else{

        $pils = '' ;
        
        ?>
        <div class="row">
            <div class="col-12 p-md-5">
            <?php Flasher::Flash(); ?>
            </div>
        </div>
        <div class="row p-md-5">
            <div class="col-12 ">
            <?php foreach($data['link'] as $pos):?>
                <div class="card m-2 mb-5 shadow" >
                        <img class="card-img-top shadow-sm" src="<?=$pos['gambar'];?>"/>
                            <div class="card-body">
                                <a href="<?=BASEURL.'Nav/index/'.$pos['tag']?>"><small class="text-primary"><?=$pos['tag'];?></small></a>
                                <h4 class="card-title font-weight-bold"><?=$pos['judul'];?></h5>
                                <p><?=$pos['keterangan'];?></p>
                                <button class="btn bg-primary text-white shadow-sm"><a href="<?=BASEURL.'Postingan/index/'.$pos['id'].'/'.$pos['tag'] ?>" class="text-white">check out!</a></button>
                            </div>
                        <div class="card-footer">
                            <p class="d-inline blockquote-footer">Author <a href="#About" class="card-link"><?=$pos['author'];?></a><?=$pos['tanggal'];?></p>
                            <?php if (isset($_SESSION['Level'])==$data['state']):?>
                            <?php 
                            echo'
                            <a id="delete" href="'.BASEURL.'Admin/Hapus/'.$pos['id'].'/'.$pos['tag'].'" class="badge badge-danger float-right mr-2" >Hapus</a>
                            <!-- Button trigger modal -->
                            <a id="tampilUbah" href="'.BASEURL.'Admin/Ubah/'.$pos['id'].'" class="badge text-white float-right mr-2 badge-success tampilUbah" data-id="'.$pos['id'].'" data-toggle="modal" data-target="#modalUbah">
                                Ubah
                            </a>';?>
                            <?php endif;?>
                        </div>
                    </div>
            <?php endforeach; ?>
            </div>
        </div>

    </div>
<?php } ?>



<!-- Modal -->
<div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Ubah Postingan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL;?>Admin/Ubah" method="POST" enctype="multipart/form-data">
          <input type="hidden" id="idUbah" name="idUbah">
              <input type="hidden" id="namaGambar" name="namaGambar">
            <div class="form-group">
              <label for="judulUbah">Judul</label>
              <input type="text" class="form-control" id="judulUbah" name="judulUbah" required>
            </div>
              
            <div class="form-group">
              <label for="tagUbah">tag</label>
              <select class="form-control" id="tagUbah" name="tagUbah" required>
                  <option value="kegiatan">Kegiatan</option>
                  <option value="strukturorganisasi">Struktur Organisasi</option>
                  <option value="administrasi">Administrasi</option>
                  <option value="about">About</option>
              </select>
            </div>
            <div class="form-group">
              <label for="keteranganUbah">keterangan</label>
              <textarea class="form-control" id="keteranganUbah" name="keteranganUbah" rows="3" required></textarea>
            </div>
            <div class="form-group">
              <label for="isiUbah">isi</label>
              <textarea class="form-control" id="isiUbah" name="isiUbah" rows="6" required></textarea>
            </div>
            <div class="form-group">
            <label for="gambarUbah">Jika gambar tidak ingin di ubah biarkan kosong</label>
              <label for="gambarUbah">File Gambar : </label> 
              <input type="file" id="gambarUbah" name="fileGambarUbah">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button name="submitUbah" type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </form>
    </div>
  </div>
</div>