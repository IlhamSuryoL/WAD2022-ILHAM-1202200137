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
              <form action="config/regis.php" method="post"> 
                <h1 class="display-4"><b>Register</b> </h1>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email</label>
                  <input type="email" name="email" id="form3Example3" class="form-control" required />  
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Nama</label>
                  <input type="text" name="nama" id="form3Example3" class="form-control" required/>                 
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Nomor Handphone</label>
                  <input type="text" name="nohp" id="form3Example3" class="form-control" required />                
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Kata Sandi</label>
                  <input type="password" name="sandi" id="form3Example4" class="form-control" required/>
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Konfirmasi Kata Sandi</label>
                  <input type="password" name="sandikonfirm" id="form3Example4" class="form-control" required/>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Daftar
                </button>
                <p>Anda sudah punya akun? <a href="index.php?page=login">Login</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>