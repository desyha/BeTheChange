<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar</title>
    <link rel="stylesheet" href="resources/css/daftar-style.css" />
  </head>
  <body>
    <!-- NAVBAR -->
    <div class="navbar"></div>

    <!-- BODY -->
    <div class="container">
      <h1>DAFTAR</h1>
      <form action="#">
        <label for="nama">Nama:</label>
        <input
          type="text"
          name="nama"
          id="nama"
          placeholder="Masukan nama anda"
        />
        <label for="email">Email:</label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Masukan email anda"
        />
        <label for="phone">No. Telp:</label>
        <input
          type="number"
          name="phone"
          id="phone"
          placeholder="Masukan no telp anda"
        />
        <label for="password">Password:</label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Masukan password anda"
        />
        <label for="password">Konfirmasi Password:</label>
        <input
          type="password"
          name="konfirmasi-password"
          id="konfirmasi-password"
          placeholder="Konfirmasi password anda"
        />
        <label for="tipe-akun">Tipe Akun:</label>
        <input
          type="radio"
          name="tipe-akun"
          id="tipe-relawan"
          value="relawan"
        />Relawan
        <input
          type="radio"
          name="tipe-akun"
          id="tipe-organisasi"
          value="organisasi"
        />Organisasi
        <input type="submit" value="Daftar" />
      </form>
    </div>
    <div class="to-login">
      <p>Sudah memiliki akun? <a>Login disini</a></p>
    </div>

    <!-- FOOTER -->
    <div class="footer"></div>
  </body>
</html>