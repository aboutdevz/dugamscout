<div class="container">

  <div class="row mt-4">
    <div class="col-6">
      <?php Flasher::Flash(); ?>
    </div>
  </div>


<div class="container mt-5">
  

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#tambahpostingan">Tambah Postingan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pengunguman">Tambah Pengunguman</a>
  </li>
</ul>



<!-- Tab panes -->
<div class="tab-content">
  
<div class="tab-pane container mt-5 fade" id="pengunguman">
<h1 class="text-primary mb-2">Tambah Pengunguman</h1>
<form id="form" action="<?=BASEURL?>Admin/Pengunguman" method="POST">

    <div class="col-12 col-md -6 mt-5">
      
      
      <div class="form-group mt-5">
        <label>keterangan</label>
        <textarea class="form-control" id="keterangan" name="keteranganPengunguman" rows="3" required></textarea>
      </div>
      <div class="form-group mt-5">
        <label>Di Set Sampai </label>
        <input class="form-control" type="date" name="timeout" required>
      </div>

      <div class="form-group row">
        <div class="col-12">
        <button id="submit" type="submit" name="addPostingan" class="btn btn-primary float-right">Tambah</button>
        </div>
      </div>
    </div>
  </form>
</div>

<div class="tab-pane container mt-5 active" id="tambahpostingan">
<h1 class="text-primary">Tambah Postingan</h1>
  <form id="form" action="<?=BASEURL?>Admin/Tambah" method="POST" enctype="multipart/form-data">
    <div class="col-12 col-md -6 mt-5">
      <input type="hidden" id="id" name="">
      <div class="form-group row">
        <label class="col-2 col-form-label">Judul</label>
        <div class="col-12 col-md-10">
          <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul" required>
        </div>
      </div>
      
      <div class="form-group row">
        <label class="col-2 col-form-label" for="tag">Tag</label>
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
        
          <button id="buttonHref" type="button" class="btn btn-secondary buttonHref">href</button>
      
      </div>
      <div class="form-group">
        <label>Isi</label>
        <textarea class="form-control" id="isi" name="isi" rows="6" required></textarea>
      </div>
      <div class="form-group row">
        <span class="mr-5">Gambar Hero:</span> <input type="file" id="gambar" name="fileGambar" required>
      </div>
      <div class="form-group row">
        <div class="col-12">
        <button id="submit" type="submit" name="addPostingan" class="btn btn-primary float-right">Tambah</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>
</div>    
</div>


