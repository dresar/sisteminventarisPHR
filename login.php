<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistem Inventaris ICT PT Pertamina Hulu Rokan Rantau">
  <meta name="author" content="ICT PHR Rantau">
  <title>Sistem Inventaris ICT - PT Pertamina Hulu Rokan Rantau</title>
  
  <!-- Favicon -->
  <link rel="icon" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/svgs/solid/oil-well.svg" type="image/svg+xml">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  
  <style>
    :root {
      --pertamina-blue:rgb(132, 123, 255);
      --pertamina-dark-blue:rgb(8, 6, 98);
      --pertamina-light-blue: #3488cc;
      --pertamina-green: #00985f;
      --pertamina-red: #ed1c24;
      --pertamina-yellow: #ffcc00;
      
      --bg-color: #f8f9fa;
      --text-color: #333;
      --card-bg: #ffffff;
      --input-bg: #ffffff;
      --input-border: #e1e1e1;
      --input-text: #333;
      --placeholder-color: #6c757d;
      --secondary-text: #666;
      --footer-text: #777;
      --shadow-color: rgba(0, 0, 0, 0.1);
    }
    
    [data-theme="dark"] {
      --bg-color: #121212;
      --text-color: #f8f9fa;
      --card-bg: #1e1e1e;
      --modal-bg: #262626;
      --input-bg: #2d2d2d;
      --input-border: #444;
      --input-text: #f8f9fa;
      --placeholder-color: #aaa;
      --secondary-text: #bbb;
      --footer-text: #999;
      --shadow-color: rgba(0, 0, 0, 0.3);
      --list-group-bg: #262626;
      --modal-border: #333;
      --accordion-bg: #262626;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
      min-height: 100vh;
      position: relative;
      transition: background-color 0.3s ease;
    }
    
    .background-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('/api/placeholder/1920/1080');
      background-size: cover;
      background-position: center;
      opacity: 0.7;
      filter: brightness(0.3) blur(3px);
      z-index: -1;
    }
    
    .login-container {
      min-height: 100vh;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }
    
    .login-wrapper {
      width: 100%;
      max-width: 1100px;
      display: flex;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px var(--shadow-color);
      background-color: var(--card-bg);
    }
    
    .login-left {
      flex: 1;
      background: linear-gradient(135deg, var(--pertamina-blue), var(--pertamina-dark-blue));
      padding: 40px;
      color: white;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    .login-right {
      flex: 1;
      padding: 40px;
      background-color: var(--card-bg);
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    
    .login-header {
      margin-bottom: 30px;
      text-align: center;
    }
    
    .system-title {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
      font-size: 28px;
      color: var(--pertamina-blue);
      margin-bottom: 8px;
    }
    
    .system-subtitle {
      font-size: 16px;
      color: var(--secondary-text);
      margin-bottom: 30px;
      font-weight: 500;
    }
    
    .form-group {
      margin-bottom: 20px;
      position: relative;
    }
    
    .form-control {
      height: 50px;
      border-radius: 8px;
      border: 1px solid var(--input-border);
      padding-left: 45px;
      font-size: 16px;
      background-color: var(--input-bg);
      color: var(--input-text);
    }
    
    .form-control:focus {
      border-color: var(--pertamina-blue);
      box-shadow: 0 0 0 0.2rem rgba(0, 91, 170, 0.25);
    }
    
    .input-icon {
      position: absolute;
      left: 15px;
      top: 15px;
      color: var(--pertamina-blue);
      font-size: 18px;
    }
    
    .password-toggle {
      position: absolute;
      right: 15px;
      top: 15px;
      color: var(--secondary-text);
      cursor: pointer;
      z-index: 10;
    }
    
    .remember-me {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .form-check-input {
      margin-right: 10px;
    }
    
    .login-options {
      display: flex;
      justify-content: space-between;
      margin-bottom: 25px;
    }
    
    .login-options a {
      color: var(--pertamina-blue);
      text-decoration: none;
      font-size: 14px;
      transition: all 0.3s;
    }
    
    .login-options a:hover {
      color: var(--pertamina-dark-blue);
    }
    
    .btn-login {
      height: 50px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
      background: var(--pertamina-blue);
      border: none;
      box-shadow: 0 4px 15px rgba(0, 91, 170, 0.3);
      transition: all 0.3s;
    }
    
    .btn-login:hover {
      background: var(--pertamina-dark-blue);
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(0, 91, 170, 0.4);
    }
    
    .login-footer {
      text-align: center;
      margin-top: 30px;
      color: var(--footer-text);
    }
    
    .login-footer a {
      color: var(--footer-text);
      text-decoration: none;
      margin: 0 10px;
    }
    
    .login-footer a:hover {
      color: var(--pertamina-blue);
    }
    
    .company-logo {
      max-width: 180px;
      margin-bottom: 30px;
    }
    
    .feature-list {
      margin-top: 30px;
    }
    
    .feature-item {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }
    
    .feature-icon {
      margin-right: 15px;
      color: #fff;
    }
    
    /* Alert Styles */
    .alert-notification {
      position: fixed;
      top: 20px;
      right: 20px;
      max-width: 350px;
      z-index: 9999;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
      overflow: hidden;
      border-left: 4px solid;
    }
    
    /* Theme Switcher */
    .theme-toggle {
      position: absolute;
      top: 20px;
      right: 20px;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: var(--card-bg);
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      z-index: 100;
      border: 1px solid var(--input-border);
      transition: all 0.3s ease;
    }
    
    .theme-toggle:hover {
      transform: scale(1.1);
    }
    
    /* Modal Styles */
    .modal-content {
      background-color: var(--modal-bg, var(--card-bg));
      color: var(--text-color);
      border-radius: 10px;
      border: 1px solid var(--modal-border, var(--input-border));
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
    
    .modal-header {
      border-bottom: 1px solid var(--modal-border, var(--input-border));
      padding: 20px;
    }
    
    .modal-footer {
      border-top: 1px solid var(--modal-border, var(--input-border));
      padding: 15px 20px;
    }
    
    .modal-body {
      padding: 20px;
    }
    
    .modal-title {
      color: var(--pertamina-blue);
      font-weight: 600;
    }
    
    .modal .btn-primary {
      background-color: var(--pertamina-blue);
      border-color: var(--pertamina-blue);
      padding: 8px 20px;
      border-radius: 8px;
      font-weight: 500;
      transition: all 0.3s;
    }
    
    .modal .btn-primary:hover {
      background-color: var(--pertamina-dark-blue);
      border-color: var(--pertamina-dark-blue);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0, 91, 170, 0.2);
    }
    
    .modal .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
      padding: 8px 20px;
      border-radius: 8px;
      font-weight: 500;
      transition: all 0.3s;
    }
    
    .list-group-item {
      background-color: var(--list-group-bg, transparent);
      color: var(--text-color);
    }
    
    .accordion-item {
      background-color: var(--accordion-bg, var(--card-bg));
      border-color: var(--input-border);
    }
    
    .accordion-button {
      background-color: var(--accordion-bg, var(--card-bg));
      color: var(--text-color);
    }
    
    .accordion-button:not(.collapsed) {
      background-color: rgba(0, 91, 170, 0.1);
      color: var(--pertamina-blue);
    }
    
    .accordion-body {
      background-color: var(--accordion-bg, var(--card-bg));
      color: var(--text-color);
    }
    
    /* Responsive Styles */
    @media (max-width: 992px) {
      .login-left {
        display: none;
      }
      
      .login-wrapper {
        max-width: 500px;
      }
    }
    
    @media (max-width: 576px) {
      .login-wrapper {
        border-radius: 12px;
      }
      
      .login-right {
        padding: 30px 20px;
      }
      
      .system-title {
        font-size: 24px;
      }
      
      .alert-notification {
        left: 20px;
        right: 20px;
        max-width: none;
        width: auto;
      }
      
      .login-options {
        flex-direction: column;
        gap: 10px;
        align-items: center;
      }
    }
  </style>
</head>

<body>
  <div class="background-overlay"></div>
  
  <!-- Theme Toggle Button -->
  <div class="theme-toggle" id="themeToggle">
    <i class="fas fa-moon"></i>
  </div>
  
  <!-- Alert Notifications (if needed) -->
  <?php if(isset($_GET['pesan'])): ?>
    <?php if($_GET['pesan'] == 1): ?>
      <div class="alert alert-danger alert-notification alert-dismissible fade show animate__animated animate__fadeInRight" role="alert">
        <strong><i class="fas fa-times-circle me-2"></i> Gagal Login!</strong> Username atau Password salah.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php elseif($_GET['pesan'] == 2): ?>
      <div class="alert alert-warning alert-notification alert-dismissible fade show animate__animated animate__fadeInRight" role="alert">
        <strong><i class="fas fa-exclamation-triangle me-2"></i> Peringatan!</strong> Anda harus login terlebih dahulu.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php elseif($_GET['pesan'] == 3): ?>
      <div class="alert alert-success alert-notification alert-dismissible fade show animate__animated animate__fadeInRight" role="alert">
        <strong><i class="fas fa-check-circle me-2"></i> Sukses!</strong> Anda telah berhasil logout.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
  <?php endif; ?>
  
  <div class="login-container">
    <div class="login-wrapper animate__animated animate__fadeIn">
      <!-- Left Panel -->
      <div class="login-left">
        
        <h2 class="mb-3">Sistem Inventaris ICT</h2>
        <p class="mb-4">Pengelolaan aset dan inventaris IT yang efisien dan modern untuk PT Pertamina Hulu Rokan Rantau</p>
        
        <div class="feature-list">
          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-chart-line fa-lg"></i>
            </div>
            <span>Pelacakan aset real-time</span>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-file-alt fa-lg"></i>
            </div>
            <span>Pelaporan otomatis</span>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-tools fa-lg"></i>
            </div>
            <span>Manajemen pemeliharaan preventif</span>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-tachometer-alt fa-lg"></i>
            </div>
            <span>Dashboard analitik terintegrasi</span>
          </div>
          </div>
          <div class="d-flex align-items-center mb-4">
            <div class="bg-primary text-white p-3 rounded-3 me-3">
              <i class="fas fa-user-tie"></i>
            </div>
            <div>
              <h6 class="mb-1 fw-bold">Admin Sistem</h6>
              <p class="mb-0">Ext. 5555 | itc.admin@pertamina.com</p>
            </div>
          </div>
          <div class="d-flex align-items-center mb-4">
            <div class="bg-primary text-white p-3 rounded-3 me-3">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div>
              <h6 class="mb-1 fw-bold">Kantor ICT</h6>
              <p class="mb-0">Jl Jakarta No.1, Kamp Pertamina, Rantau, Aceh Tamiang Regency, Aceh 24476</p>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div class="bg-primary text-white p-3 rounded-3 me-3">
              <i class="fas fa-clock"></i>
            </div>
            <div>
              <h6 class="mb-1 fw-bold">Jam Kerja</h6>
              <p class="mb-0">Senin - Jumat, 08.00 - 17.00 WIB</p>
            </div>
          </div>
      </div>
      
      <!-- Right Panel -->
      <div class="login-right">
        <div class="login-header">
          <img src="pertamina.png" alt="Pertamina ICT Logo" class="mb-3" width="80">
          <h1 class="system-title">SISTEM INVENTARIS ICT</h1>
          <p class="system-subtitle">PT Pertamina Hulu Rokan Rantau</p>
        </div>
        
        <!-- Login Form -->
        <form action="proses_login.php" method="post" id="loginForm">
          <div class="form-group">
            <i class="fas fa-user input-icon"></i>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
          </div>
          
          <div class="form-group">
            <i class="fas fa-lock input-icon"></i>
            <span class="password-toggle" id="passwordToggle">
              <i class="far fa-eye"></i>
            </span>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>
          
          <div class="remember-me">
            <input class="form-check-input" type="checkbox" id="rememberMe" name="rememberMe">
            <label class="form-check-label" for="rememberMe">Ingat saya</label>
          </div>
          
          <div class="login-options">
            <a href="#" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">
              <i class="fas fa-unlock-alt me-1"></i> Lupa Password?
            </a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#reportIssueModal">
              <i class="fas fa-exclamation-circle me-1"></i> Laporkan Masalah
            </a>
          </div>
          
          <button type="submit" class="btn btn-primary btn-login w-100">
            <i class="fas fa-sign-in-alt me-2"></i> MASUK
          </button>
        </form>
        
        <!-- Footer -->
        <div class="login-footer">
          <p>&copy; <?php echo date('Y'); ?> PT Pertamina Hulu Rokan Rantau - ICT Division</p>
          <div class="mt-2">
            <a href="#" data-bs-toggle="modal" data-bs-target="#helpModal"><i class="fas fa-question-circle"></i> Bantuan</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal"><i class="fas fa-envelope"></i> Kontak</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#aboutModal"><i class="fas fa-info-circle"></i> Tentang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Forgot Password Modal -->
  <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="forgotPasswordModalLabel">Reset Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="resetPasswordForm">
            <div class="mb-3">
              <label for="resetEmail" class="form-label">Email</label>
              <div class="input-group mb-2">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" id="resetEmail" placeholder="name@pertamina.com" required>
              </div>
              <div class="form-text">Masukkan email yang terdaftar untuk menerima link reset password.</div>
            </div>
            <div class="mb-3">
              <label for="employeeID" class="form-label">ID Karyawan</label>
              <div class="input-group mb-2">
                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                <input type="text" class="form-control" id="employeeID" placeholder="PH000123" required>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" id="sendResetLink">
            <i class="fas fa-paper-plane me-1"></i> Kirim Link Reset
          </button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Report Issue Modal -->
  <div class="modal fade" id="reportIssueModal" tabindex="-1" aria-labelledby="reportIssueModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="reportIssueModalLabel">Laporkan Masalah</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="reportIssueForm">
            <div class="mb-3">
              <label for="issueType" class="form-label">Jenis Masalah</label>
              <select class="form-select" id="issueType" required>
                <option value="" selected disabled>Pilih jenis masalah</option>
                <option value="login">Tidak dapat login</option>
                <option value="performance">Kinerja sistem lambat</option>
                <option value="data">Kesalahan data</option>
                <option value="ui">Masalah tampilan/UI</option>
                <option value="other">Lainnya</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="issueDescription" class="form-label">Deskripsi Masalah</label>
              <textarea class="form-control" id="issueDescription" rows="4" placeholder="Jelaskan masalah yang Anda alami secara detail..." required></textarea>
            </div>
            <div class="mb-3">
              <label for="contactEmail" class="form-label">Email Kontak</label>
              <input type="email" class="form-control" id="contactEmail" placeholder="name@pertamina.com" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" id="submitIssue">
            <i class="fas fa-paper-plane me-1"></i> Kirim Laporan
          </button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Help Modal -->
  <div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="helpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="helpModalLabel">Bantuan Penggunaan Sistem</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="accordion" id="helpAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="fas fa-sign-in-alt me-2"></i> Cara Login Sistem
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#helpAccordion">
                <div class="accordion-body">
                  <ol>
                    <li>Masukkan username yang telah diberikan oleh admin ITC</li>
                    <li>Masukkan password Anda</li>
                    <li>Klik tombol "MASUK" untuk melanjutkan</li>
                    <li>Jika lupa password, klik tautan "Lupa Password?" dan ikuti petunjuk selanjutnya</li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="fas fa-key me-2"></i> Reset Password
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#helpAccordion">
                <div class="accordion-body">
                  <p>Untuk mereset password Anda:</p>
                  <ol>
                    <li>Klik "Lupa Password?" di halaman login</li>
                    <li>Masukkan email yang terdaftar di sistem</li>
                    <li>Masukkan ID Karyawan Anda untuk verifikasi</li>
                    <li>Klik tombol "Kirim Link Reset"</li>
                    <li>Cek email Anda dan ikuti tautan yang diberikan</li>
                    <li>Buat password baru yang memenuhi persyaratan keamanan</li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="fas fa-exclamation-circle me-2"></i> Melaporkan Masalah Teknis
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#helpAccordion">
                <div class="accordion-body">
                  <p>Jika Anda mengalami masalah teknis:</p>
                  <ol>
                    <li>Klik "Laporkan Masalah" di halaman login</li>
                    <li>Pilih jenis masalah yang relevan</li>
                    <li>Berikan deskripsi detail tentang masalah tersebut</li>
                    <li>Masukkan email kontak untuk mendapatkan tanggapan</li>
                    <li>Klik "Kirim Laporan"</li>
                  </ol>
                  <p>Tim ICT akan menindaklanjuti laporan Anda dalam 24 jam kerja.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="fas fa-times me-2"></i>Tutup
          </button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- About Modal -->
  <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aboutModalLabel">Tentang Aplikasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-4">
            <div class="d-inline-block p-3 bg-primary rounded-circle mb-3">
              <i class="fas fa-database fa-3x text-white"></i>
            </div>
            <h5 class="fw-bold">Sistem Inventaris ICT</h5>
            <span class="badge bg-primary px-3 py-2">Versi 2.5.1</span>
          </div>
          <div class="mb-4">
            <h6 class="fw-bold text-primary"><i class="fas fa-info-circle me-2"></i>Tentang Aplikasi</h6>
            <p>Sistem Inventaris ICT adalah aplikasi pengelolaan dan pelacakan inventaris IT untuk PT Pertamina Hulu Rokan Rantau. Sistem ini mencakup manajemen aset hardware, software, dan perangkat jaringan.</p>
          </div>
          
          <div class="mb-4">
            <h6 class="fw-bold text-primary"><i class="fas fa-clipboard-list me-2"></i>Fitur Utama</h6>
            <div class="list-group list-group-flush border-0">
              <div class="list-group-item d-flex align-items-center border-0 ps-0 py-2">
                <i class="fas fa-check-circle text-success me-2"></i> Pencatatan dan pelacakan aset IT
              </div>
              <div class="list-group-item d-flex align-items-center border-0 ps-0 py-2">
                <i class="fas fa-check-circle text-success me-2"></i> Manajemen pemeliharaan preventif
              </div>
              <div class="list-group-item d-flex align-items-center border-0 ps-0 py-2">
                <i class="fas fa-check-circle text-success me-2"></i> Pelaporan dan analitik
              </div>
              <div class="list-group-item d-flex align-items-center border-0 ps-0 py-2">
                <i class="fas fa-check-circle text-success me-2"></i> Manajemen siklus hidup aset
              </div>
              <div class="list-group-item d-flex align-items-center border-0 ps-0 py-2">
                <i class="fas fa-check-circle text-success me-2"></i> Integrasi dengan sistem CMMS
              </div>
            </div>
          </div>
          
          <div>
            <h6 class="fw-bold text-primary"><i class="fas fa-code me-2"></i>Dikembangkan oleh</h6>
            <p>Tim Pengembangan ICT PT Pertamina Hulu Rokan Rantau<br>
            &copy; <?php echo date('Y'); ?> PT Pertamina Hulu Rokan. All rights reserved.</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="fas fa-times me-2"></i>Tutup
          </button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Contact Modal -->
  <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contactModalLabel">Kontak Support</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- About Modal -->
  <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aboutModalLabel">Tentang Aplikasi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-4">
            <div class="d-inline-block p-3 bg-primary rounded-circle mb-3">
              <i class="fas fa-database fa-3x text-white"></i>
            </div>
            <h5 class="fw-bold">Sistem Inventaris ICT</h5>
            <span class="badge bg-primary px-3 py-2">Versi 2.5.1</span>
          </div>
          <div class="mb-4">
            <h6 class="fw-bold text-primary"><i class="fas fa-info-circle me-2"></i>Tentang Aplikasi</h6>
            <p>Sistem Inventaris ICT adalah aplikasi pengelolaan dan pelacakan inventaris IT untuk PT Pertamina Hulu Rokan Rantau. Sistem ini mencakup manajemen aset hardware, software, dan perangkat jaringan.</p>
          </div>
          <div class="mb-4">
            <h6 class="fw-bold text-primary"><i class="fas fa-clipboard-list me-2"></i>Fitur Utama</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex align-items-center border-0 ps-0">
                <i class="fas fa-check-circle text-success me-2"></i> Pencatatan dan pelacakan aset IT
              </li>
              <li class="list-group-item d-flex align-items-center border-0 ps-0">
                <i class="fas fa-check-circle text-success me-2"></i> Manajemen pemeliharaan preventif
              </li>
              <li class="list-group-item d-flex align-items-center border-0 ps-0">
                <i class="fas fa-check-circle text-success me-2"></i> Pelaporan dan analitik
              </li>
              <li class="list-group-item d-flex align-items-center border-0 ps-0">
                <i class="fas fa-check-circle text-success me-2"></i> Manajemen siklus hidup aset
              </li>
              <li class="list-group-item d-flex align-items-center border-0 ps-0">
                <i class="fas fa-check-circle text-success me-2"></i> Integrasi dengan sistem CMMS
              </li>
            </ul>
          </div>
          <div>
            <h6 class="fw-bold text-primary"><i class="fas fa-code me-2"></i>Dikembangkan oleh</h6>
            <p>Tim Pengembangan ICT PT Pertamina Hulu Rokan Rantau<br>
            &copy; <?php echo date('Y'); ?> PT Pertamina Hulu Rokan. All rights reserved.</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Core JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <script>
    // Form validation
    (function() {
      'use strict';
      
      const forms = document.querySelectorAll('form');
      
      Array.from(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
    
    // Password toggle
    const passwordToggle = document.getElementById('passwordToggle');
    if (passwordToggle) {
      passwordToggle.addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');
        
        if (passwordInput.type === 'password') {
          passwordInput.type = 'text';
          icon.classList.remove('fa-eye');
          icon.classList.add('fa-eye-slash');
        } else {
          passwordInput.type = 'password';
          icon.classList.remove('fa-eye-slash');
          icon.classList.add('fa-eye');
        }
      });
    }
    
    // Theme toggle
    const themeToggle = document.getElementById('themeToggle');
    if (themeToggle) {
      themeToggle.addEventListener('click', function() {
        const htmlElement = document.documentElement;
        const themeIcon = this.querySelector('i');
        
        if (htmlElement.hasAttribute('data-theme')) {
          htmlElement.removeAttribute('data-theme');
          themeIcon.classList.remove('fa-sun');
          themeIcon.classList.add('fa-moon');
        } else {
          htmlElement.setAttribute('data-theme', 'dark');
          themeIcon.classList.remove('fa-moon');
          themeIcon.classList.add('fa-sun');
        }
      });
    }
    
    // Check system dark mode preference
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.documentElement.setAttribute('data-theme', 'dark');
      const themeIcon = document.querySelector('#themeToggle i');
      if (themeIcon) {
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
      }
    }
    
    // Auto hide alerts after 5 seconds
    const alerts = document.querySelectorAll('.alert-notification');
    alerts.forEach(function(alert) {
      setTimeout(function() {
        const bsAlert = new bootstrap.Alert(alert);
        bsAlert.close();
      }, 5000);
    });
    
    // Handle reset password form submission
    const sendResetLink = document.getElementById('sendResetLink');
    if (sendResetLink) {
      sendResetLink.addEventListener('click', function() {
        const email = document.getElementById('resetEmail').value;
        const employeeID = document.getElementById('employeeID').value;
        
        if (email && employeeID) {
          // Here would be the actual reset logic
          const modal = bootstrap.Modal.getInstance(document.getElementById('forgotPasswordModal'));
          modal.hide();
          
          // Show success message
          showNotification('success', 'Sukses!', 'Link reset password telah dikirim ke email Anda.');
        } else {
          // Show validation message
          if (!email) {
            document.getElementById('resetEmail').classList.add('is-invalid');
          }
          if (!employeeID) {
            document.getElementById('employeeID').classList.add('is-invalid');
          }
        }
      });
    }
    
    // Handle report issue form submission
    const submitIssue = document.getElementById('submitIssue');
    if (submitIssue) {
      submitIssue.addEventListener('click', function() {
        const issueType = document.getElementById('issueType').value;
        const description = document.getElementById('issueDescription').value;
        const email = document.getElementById('contactEmail').value;
        
        if (issueType && description && email) {
          // Here would be the actual issue reporting logic
          const modal = bootstrap.Modal.getInstance(document.getElementById('reportIssueModal'));
          modal.hide();
          
          // Show success message
          showNotification('success', 'Sukses!', 'Laporan masalah Anda telah dikirim. Tim ICT akan menghubungi Anda segera.');
        } else {
          // Show validation message
          if (!issueType) {
            document.getElementById('issueType').classList.add('is-invalid');
          }
          if (!description) {
            document.getElementById('issueDescription').classList.add('is-invalid');
          }
          if (!email) {
            document.getElementById('contactEmail').classList.add('is-invalid');
          }
        }
      });
    }
    
    // Function to show notification
    function showNotification(type, title, message) {
      const alertHtml = `
        <div class="alert alert-${type} alert-notification alert-dismissible fade show animate__animated animate__fadeInRight" role="alert">
          <strong><i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-triangle'} me-2"></i> ${title}</strong> ${message}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      `;
      document.body.insertAdjacentHTML('beforeend', alertHtml);
      
      // Auto hide the alert after 5 seconds
      const newAlert = document.querySelector('.alert-notification:last-child');
      setTimeout(function() {
        const bsAlert = new bootstrap.Alert(newAlert);
        bsAlert.close();
      }, 5000);
    }
    
    // Add loading animation to login button
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
      loginForm.addEventListener('submit', function(event) {
        if (this.checkValidity()) {
          const button = this.querySelector('.btn-login');
          button.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> MEMUAT...';
          button.disabled = true;
        }
      });
    }
  </script>
</body>
</html>