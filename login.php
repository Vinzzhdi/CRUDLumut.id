<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Login / Daftar</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <!-- Form Login -->
          <form action="auth.php" method="post" class="sign-in-form">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nis" placeholder="NIS" required pattern="[0-9]+" title="Masukkan hanya angka"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required minlength="3"/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>

          <!-- Form Pendaftaran -->
          <form action="register.php" method="post" class="sign-up-form">
            <h2 class="title">Daftar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Nama Lengkap" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" required minlength="3"/>
            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Baru Disini?</h3>
            <p>
              Buat akun dulu agar kamu mendapatkan
              lebih banyak benefit!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="login.svg" class="image" alt="Login Image" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah pernah Login disini?</h3>
            <p>Sudah punya akun? Langsung login aja di sini.</p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="reg.svg" class="image" alt="Register Image" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
