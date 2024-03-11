<?php include 'isloggedin.php';?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Add new product</title>

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="CSS/style.css" />

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top bg-primary p-0">
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
  </header>
  <h2 class="mx-auto" align="center">
    Add new product
  </h2>
  <div class="my-container container-lg bg-primary-subtle border rounded-4 top-4 p-4">

    <form id="form" class="row g-3">
      <img src="Images/icons8-picture-96.png" class="mx-0 p-2" style="width: auto" alt="display picture" />
    
      <div class="col-md-12">
        <div class="input-group mb-3">
          <input type="file" class="form-control" name="Display picture" id="dp" />
          <label class="input-group-text" for="dp">Add the image</label>
        </div>
        <div class="error ">
          <p>Please select display picture!</p>
        </div>
      </div>
    
      <div class="col-md-6">
        <label for="bra" class="form-label">Brand</label>
        <select name="Brand" id="bra" class="form-select">
          <option>Choose...</option>
          <option>TP-Link</option>
          <option>Cisco</option>
        </select>
        <div class="error">
          <p>Please enter Brand name</p>
        </div>
      </div>
    
      <div class="form-check col-md-6">
        <label for="warranty" class="form-label">Warranty</label>
        <div class="row border border-light-subtle rounded-2 bg-body" id="warranty">
          <div class="col-lg-3">
            <input class="form-check-input mx-2" type="radio" name="warranty" id="warranty1" value="1 year" />
            <label class="form-check-label" for="warranty1">1 year</label>
          </div>
          <div class="col-lg-3">
            <input class="form-check-input" type="radio" name="warranty" id="warranty2" value="2 years" />
            <label class="form-check-label" for="warranty2">2 years</label>
          </div>
        </div>
        <div class="error">
          <p>Please select warranty</p>
        </div>
      </div>
    
      <div class="col-6">
        <label for="model" class="form-label">Model Name</label>
        <input type="text" class="form-control" id="model" name="Model name" />
        <div class="error">
          <p>Please enter Model name</p>
        </div>
      </div>
    
      <div class="form-check col-md-6">
        <label class="form-label">Power</label>
        <div class="row border border-light-subtle rounded-2 bg-body">
          <div class="col-md-3">
            <input class="form-check-input mx-2" type="radio" name="power" id="power1" value="120v" />
            <label class="form-check-label" for="power1">120v</label>
          </div>
          <div class="col-md-3">
            <input class="form-check-input" type="radio" name="power" id="power2" value="220v" />
            <label class="form-check-label" for="power2">220v</label>
          </div>
        </div>
        <div class="error">
          <p>Please select power</p>
        </div>
      </div>
    
      <div class="form-check col-md-6">
        <label for="portno" class="form-label">Ports number</label>
        <div class="row border border-light-subtle rounded-2 bg-body">
          <div class="col-md-3">
            <input class="form-check-input mx-2" type="radio" name="portno" id="portno1" value="24 ports" />
            <label class="form-check-label" for="portno1">24 Ports</label>
          </div>
          <div class="col-md-3">
            <input class="form-check-input" type="radio" name="portno" id="portno2" value="48 ports" />
            <label class="form-check-label" for="portno2">48 Ports</label>
          </div>
        </div>
        <div class="error">
          <p>Please select ports number</p>
        </div>
      </div>
    
      <div class="form-check col-md-6">
        <label for="type" class="form-label">Types of ports</label>
        <div class="row border border-light-subtle rounded-2 bg-body">
          <div class="col-md-3">
            <input class="form-check-input mx-2" type="checkbox" name="type" id="type1" value="ethernet" />
            <label class="form-check-label" for="type1">Ethernet</label>
          </div>
          <div class="col-md-3">
            <input class="form-check-input" type="checkbox" name="type" id="type2" value="console" />
            <label class="form-check-label" for="type2">Console</label>
          </div>
        </div>
        <div class="error">
          <p>Please select types of ports</p>
        </div>
      </div>
    
      <div class="form-check col-md-6">
        <label for="frequency" class="form-label">Frequency band class</label>
        <div class="row border border-light-subtle rounded-2 bg-body">
          <div class="col-md-3">
            <input class="form-check-input mx-2" type="radio" name="frequency" id="frequency1" value="2.4 ghz" />
            <label class="form-check-label" for="frequency1">2.4 Ghz</label>
          </div>
          <div class="col-md-3">
            <input class="form-check-input" type="radio" name="frequency" id="frequency2" value="5 ghz" />
            <label class="form-check-label" for ="frequency2">5 Ghz</label>
          </div>
        </div>
        <div class="error">
          <p>Please select frequency</p>
        </div>
      </div>
    
      <div class="col-md-6">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="Price" />
        <div class="error">
          <p>Please provide the price</p>
        </div>
      </div>
    
      <div class="form-check col-md-6">
        <label class="form-label">Wireless Standard</label>
        <div class="row border border-light-subtle rounded-2 bg-body">
          <div class="col-md-3">
            <input class="form-check-input mx-2" type="radio" name="wireless" id="wire1" value="IEEE 802.11n" />
            <label class="form-check-label" for="wire1">IEEE 802.11n</label>
          </div>
          <div class="col-md-3">
            <input class="form-check-input" type="radio" name="wireless" id="wire2" value="IEEE 802.11g" />
            <label class="form-check-label" for="wire2">IEEE 802.11g</label>
          </div>
        </div>
        <div class="error">
          <p>Please select wireless standard</p>
        </div>
      </div>
    
      <div class="col-md-6">
        <label for="cat" class="form-label">Category</label>
        <select name="Category" id="cat" class="form-select">
          <option>Choose...</option>
          <option>Wired Router</option>
          <option>Wireless Router</option>
        </select>
        <div class="error">
          <p>Please select category</p>
        </div>
      </div>
    
      <div class="form-check col-md-6">
        <label class="form-label">Data rate</label>
        <div class="row border border-light-subtle rounded-2 bg-body">
          <div class="col-md-3">
            <input class="form-check-input mx-2" type="radio" name="data-rate" id="data1" value="100 Mbps" />
            <label class="form-check-label" for="data1">100 Mbps</label>
          </div>
          <div class="col-md-3">
            <input class="form-check-input" type="radio" name="data-rate" id="data2" value="10 Gbps" />
            <label class="form-check-label" for="data2">10 Gbps</label>
          </div>
        </div>
        <div class="error">
          <p>Please select Data rate</p>
        </div>
      </div>
    
      <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-outline-danger mx-2">
          Close
        </button>
        <button type="button" class="btn btn-primary mx-2" id="save">Save</button>
      </div>
    </form>
    
    
  </div>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="main2.js"></script>
</body>

</html>