<?php include 'isloggedin.php';?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

<body id="dash">
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-primary p-0 shadow">
          <div class="container-fluid">
            <!-- Left side with "Company" -->
            <div class="navbar-left row">
              <div class="col-6">
                <a class="navbar-brand" href="dashboard.php">
                  <img src="Images/company.png" alt="Company Logo" />
                  COMPANY
                </a>
              </div>
              <div class="col-6">
                <a class="nav-link active" aria-current="page" href="dashboard.php">
                  <img src="Images/icons8-dashboard-50.png" alt="" /> DASHBOARD
                </a>
              </div>
            </div>
            <div class="navbar-right">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="product list.php">
                      <img src="Images/icons8-list-50.png" alt="list Icon" />List
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logout.php">
                      <img src="Images/icons8-login-50.png" alt="Logout Icon" /> LOGOUT
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header><script src="bootstrap/js/bootstrap.min.js"></script>
      <h2 class="text-body-emphasis mx-auto" align="center">DASHBOARD</h2>
      <div class="my-container d-flex p-4"> 
        <p>Welcome <em><?= $_SESSION['name']?></em></p>
        <div class="card text-bg-primary m-3" style="max-width: 18rem;">
            <div class="card-header">Sales</div>
            <div class="card-body">
              <h1 class=" position-absolute  top-0 start-50 translate-middle p-1 border rounded-2 bg-success">99+</h>
            </div>
            <h4 class="card-text p-2">We look forward to boost the sales.</h4>
      </div>
      <div class="card text-bg-primary m-3" style="max-width: 18rem;">
        <div class="card-header">Ordered</div>
        <div class="card-body">
          <h1 class=" position-absolute top-0 start-50 translate-middle p-1 border rounded-2 bg-danger">49</h>
        </div>
        <h4 class="card-text p-2">Our order are drastically decreasing.</h4>
       </div>
        <div class="card text-bg-primary m-3" style="max-width: 18rem;">
            <div class="card-header">Target</div>
            <div class="card-body">
              <h1 class=" position-absolute top-0 start-100 translate-middle p-1 border rounded-2 bg-success-subtle">200+</h>
            </div>
            <h4 class="card-text p-2">We must reach 200+ sales by next month..</h4>
      </div>
      <div class="card text-bg-primary m-3" style="max-width: 18rem;">
        <div class="card-header">Categories</div>
        <div class="card-body">
          <h1 class=" position-absolute top-0 start-100 translate-middle p-1 border rounded-2 bg-success-subtle">4</h1>
            <h2 data-bs-toggle="modal" data-bs-target="#cate" class="text-white"> Categories</h2>
        </div>
  </div>

  <div class="modal " id="cate" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Categories</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <h5>List</h5>
              <div class="mb-3">
                <ul>
                   <li>Wired <button type="button" data-bs-toggle="modal" data-bs-target="#upcat" class="btn btn-outline-success m-2">Update</button></li>
                   <li>Wireless <button type="button" data-bs-toggle="modal" data-bs-target="#upcat" class="btn btn-outline-success m-2">Update</button></li>
                   <li>Sat-link <button type="button" data-bs-toggle="modal" data-bs-target="#upcat" class="btn btn-outline-success m-2">Update</button></li>
                </ul>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <a href=""><button type="button" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#addcat">Add</button></a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="addcat" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add a category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <h5>Name</h5>
                <div class="mb-3">
                  <input type="text" class="form-control" id="cat" aria-describedby="cat">
                  <p id="error"></p>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-outline-success">Add</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal" id="upcat" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Update a category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <h5>Name</h5>
                <div class="mb-3">
                  <input type="text" class="form-control" id="cat" aria-describedby="cat" value="category_name">
                  <p id="error"></p>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
            <button type="button" class="btn btn-outline-success">Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>



    </body>

    </html>

