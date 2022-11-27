<section class="background">

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form action="config/login.php" method="post">
                <h1 class="display-4"><b>Login</b> </h1>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email</label>
                  <input type="email" name="email" value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>"  id="form3Example3" class="form-control" required/>  
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="form3Example4" name="sandi" value="<?= isset($_COOKIE['sandi']) ? $_COOKIE['sandi'] :'' ?>" class="form-control" />
                </div>
                <div class="form-check mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="<?= $ambildata['rememberme'] ?>"  name="rememberme" id="form2Example33"  <?php echo isset($_COOKIE['rememberme']) ? 'checked' : '' ?>/>
                  <label class="form-check-label" for="form2Example33">
                    Remember me
                  </label>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Login
                </button>
                <p>Anda belum punya akun? <a href="index.php?page=regis">Daftar</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>