<div class="container">

  <div class="row mt-4">
    <div class="col-6">
      <?php Flasher::Flash(); ?>
    </div>
  </div>


<div class="container mt-5">
  <h1>Tambah Postingan</h1>


  <form id="form" action="<?=BASEURL?>Admin/Tambah" method="POST" enctype="multipart/form-data">
    <div class="col-12 col-md -6 mt-5">
      <input type="hidden" id="id" name="">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Judul</label>
        <div class="col-12 col-md-10">
          <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul" required>
        </div>
      </div>
      
      <div class="form-group">
        <label class="" for="tag">Tag</label>
        <div class="col-12 col-md-10">
          <select class="form-control" id="tag" name="tag" placeholder="Tag" required>
            <option value="kegiatan">Kegiatan</option>
            <option value="strukturorganisasi">Struktur Organisasi</option>
            <option value="administrasi">Administrasi</option>
            <option value="about">About</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label>keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
      </div>
      <div class="form-group">
        <label>Isi</label>
        <textarea class="form-control" id="isi" name="isi" rows="6" required></textarea>
      </div>
      <div class="form-group row">
        <span class="mr-5">Gambar Hero:</span> <input type="file" id="gambar" name="fileGambar" required>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
        <button id="submit" type="submit" name="addPostingan" class="btn btn-primary float-right">Tambah</button>
        </div>
      </div>
    </div>
  </form>
</div>    
</div>