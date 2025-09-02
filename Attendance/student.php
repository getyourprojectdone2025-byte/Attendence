<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="navbar-fixed-top.css" rel="stylesheet">

  <style>
    body {
      opacity: 0;
      transition: opacity 0.6s ease-in;
      background: #f8f9fa;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }
    body.loaded {
      opacity: 1;
    }

    /* Navbar animation */
    .navbar {
      transition: background 0.5s ease;
    }
    .navbar:hover {
      background: #222831;
    }

    /* Image styling */
    .hero-img {
      max-width: 100%;
      height: auto;
      display: block;
      margin: 40px auto;
      border-radius: 12px;
      box-shadow: 0px 4px 20px rgba(0,0,0,0.2);
      transition: transform 0.4s ease;
    }
    .hero-img:hover {
      transform: scale(1.05);
    }

    /* Footer */
    footer {
      padding: 20px;
      background: #222;
      color: #bbb;
      text-align: center;
    }
    footer a { color: #00adb5; text-decoration: none; }
    footer a:hover { color: #fff; }
  </style>
</head>
<body>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">📘 Online Attendance</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php">🏠 Home</a></li>
          <li><a href="about.html">ℹ️ About</a></li>
          <li><a href="contact.html">📞 Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <br><br><br><br><br><br>

  <div class="container text-center">
    <!-- Replace image src with your own -->
    <img src="img/attendance.jpg" alt="Attendance System" class="hero-img">

  </div>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 GetYourProjectDone</p>
  </footer>

<script>
  // Fade-in body
  $(document).ready(function(){
    $('body').addClass('loaded');
  });
</script>
</body>
</html>
