<?php include("php/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ties Dashboard</title>
  <link rel="stylesheet" href="dashboard.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar">
    <h2 class="logo">Ties</h2>
    <ul class="nav-links">
      <li><a href="#">Profile</a></li>
      <li><a href="#">Verify Relationship</a></li>
      <li><a href="#">Certificates</a></li>
      <li><a href="login.html" class="logout">Logout</a></li>
    </ul>
  </nav>

  <section class="dashboard">
    <h1>Hello, User!</h1>
    <p>Welcome to your dashboard. Start building and verifying your strongest ties today.</p>
    <div class="cards">
      <div class="card">
        <h3>View Profile</h3>
        <p>Update your info and manage account settings.</p>
      </div>
      <div class="card">
        <h3>Relationship Requests</h3>
        <p>Approve, reject or manage requests sent to you.</p>
      </div>
      <div class="card">
        <h3>My Certificate</h3>
        <p>Download or share your official relationship badge.</p>
      </div>
    </div>
  </section>
</body>
</html>
