<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Login</title>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="CSS/style.css" />

</head>

<body>
  <div class="container p-5">
    <form id="lform" action="login.php" method="post">
      <h3 align="center">Login</h3>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="usern">
        <div id="username-error" class="error-message"></div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        <div id="password-error" class="error-message"></div>
      </div>
      <div align="center">
        <button type="submit" class="btn btn-success" id="login">Login</button>
      </div>
    </form>
    
  </div>
  <script src="main1.js"></script>
</body>

</html>
