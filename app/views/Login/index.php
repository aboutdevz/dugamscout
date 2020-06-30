<div class="container">
  <div class="row">
    <div class="col-6">
      <?php Flasher::Flash(); ?>
    </div>
  </div>

  <div class="row m-5">
    <div class="col-10">
      <div class="loginbox m-auto ">
        <h2 class="">login</h2>
        <form action="<?= BASEURL;?>Login/index" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <i class="far fa-user"></i>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>
                <small id="emailHelp" class="form-text text-muted">Enter Your Username</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <i class="fas fa-unlock"></i>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                <small id="emailHelp" class="form-text text-muted">Enter Your Password</small>
            </div>
            <button type="submit" class="btn btn-primary" name="submit_Lgn">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>