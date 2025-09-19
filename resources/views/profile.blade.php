<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Mahasiswa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #158bdfff;
    }
    .card {
      text-align: center;
      width: 250px;
    }
    .profile-pic {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 20px auto;
      display: block;
      border: 2px solid #ccc;
    }
    .info {
      background-color: #d3d3d3;
      padding: 12px;
      margin: 6px 0;
      border-radius: 4px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="card">
    <!-- Foto profil -->
    <img src="{{ asset('logo.png') }}" alt="Foto Profil" class="profile-pic">

    <!-- Data mahasiswa -->
    <div class="info">Nama: Sheva Lukiyanto</div>
    <div class="info">Kelas: D</div>
    <div class="info">NPM: 2317051046</div>
  </div>
</body>
</html>
