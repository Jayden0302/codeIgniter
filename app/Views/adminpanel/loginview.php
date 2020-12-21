<div class="container">
  <div class="row">
    <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Admin Login</h3>
        <form class="" action="/" method="post">

          <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" name="username" id="username" value="<?= set_value('username')?>">
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" id="password" value="">
          </div>

            <h1></h1>
            <?php if(isset($validation)): ?>
              <div class="col-12">
                <div class="alert alert-danger" role="alert">
                  <?= $validation->listErrors()?>
                </div>
              </div>
            <?php endif; ?>
          <div class="row">
            <div class="col-12 col-sm-4">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>

            <div class="col-12 col-sm-8 text-right">
              <a href="/r">Continue as a visitor?</a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>