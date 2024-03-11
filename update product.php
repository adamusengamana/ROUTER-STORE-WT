<?php include 'isloggedin.php';?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Update product</title> <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="CSS/style.css" />
 
</head>


<body>
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
  </header><h2 class="mx-auto" align="center">
    Update product
  </h2>
  
  <div class="my-container container-md bg-primary-subtle border rounded-top-4 p-4">
  
    <form id="form" class="row g-3">
      <?php
      $index=$_GET['id'];
      $file = ('products.csv'); 
       if (($handle = fopen($file, "r")) !== false) {
           $header =  fgetcsv( $handle);
           while (($row = fgetcsv($handle, 1000, ",")) !== false) {
               $router=array_combine($header,$row); 
               if($router['Index']==$index){
      echo '<img src="Images/icons8-picture-96.png" class="mx-0 p-2" style="width: auto" alt="display picture" />';
    
      echo '<div class="col-md-12">';
        echo '<div class="input-group mb-3">';
          echo '<input type="file" class="form-control" name="Display picture" id="dp" />';
          echo '<label class="input-group-text" for="dp">Add the image</label>';
        echo '</div>';
        echo '<div class="error ">';
          echo '<p>Please select display picture!</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="col-md-6">';
        echo '<label for="bra" class="form-label">Brand</label>';
        echo '<select name="Brand" id="bra" class="form-select">';
          echo '<option>Choose...</option>';
          echo '<option selected>TP-Link</option>';
          echo '<option>Cisco</option>';
        echo '</select>';
        echo '<div class="error">';
          echo '<p>Please enter Brand name</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="form-check col-md-6">';
        echo '<label for="warranty" class="form-label">Warranty</label>';
        echo '<div class="row border border-light-subtle rounded-2 bg-body" id="warranty">';
          echo '<div class="col-lg-3">';
            echo '<input checked class="form-check-input mx-2" type="radio" name="warranty" id="warranty1" value="1 year" />';
            echo '<label  class="form-check-label" for="warranty1">1 year</label>';
          echo '</div>';
          echo '<div class="col-lg-3">';
            echo '<input class="form-check-input" type="radio" name="warranty" id="warranty2" value="2 years" />';
            echo '<label class="form-check-label" for="warranty2">2 years</label>';
          echo '</div>';
        echo '</div>';
        echo '<div class="error">';
          echo '<p>Please select warranty</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="col-6">';
        echo '<label for="model" class="form-label">Model Name</label>';
        echo '<input type="text" class="form-control" id="model" name="Model name" value="'.$router['Model name'].'" />';
        echo '<div class="error">';
          echo '<p>Please enter Model name</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="form-check col-md-6">';
        echo '<label class="form-label">Power</label>';
        echo '<div class="row border border-light-subtle rounded-2 bg-body">';
          echo '<div class="col-md-3">';
            echo '<input checked class="form-check-input mx-2" type="radio" name="power" id="power1" value="120v" />';
            echo '<label class="form-check-label" for="power1">120v</label>';
          echo '</div>';
          echo '<div class="col-md-3">';
            echo '<input class="form-check-input" type="radio" name="power" id="power2" value="220v" />';
            echo '<label class="form-check-label" for="power2">220v</label>';
          echo '</div>';
        echo '</div>';
        echo '<div class="error">';
          echo '<p>Please select power</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="form-check col-md-6">';
        echo '<label for="portno" class="form-label">Ports number</label>';
        echo '<div class="row border border-light-subtle rounded-2 bg-body">';
          echo '<div class="col-md-3">';
            echo '<input checked class="form-check-input mx-2" type="radio" name="portno" id="portno1" value="24 ports" />';
            echo '<label class="form-check-label" for="portno1">24 Ports</label>';
          echo '</div>';
          echo '<div class="col-md-3">';
            echo '<input class="form-check-input" type="radio" name="portno" id="portno2" value="48 ports" />';
            echo '<label class="form-check-label" for="portno2">48 Ports</label>';
          echo '</div>';
        echo '</div>';
        echo '<div class="error">';
          echo '<p>Please select ports number</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="form-check col-md-6">';
        echo '<label for="type" class="form-label">Types of ports</label>';
        echo '<div class="row border border-light-subtle rounded-2 bg-body">';
          echo '<div class="col-md-3">';
            echo '<input class="form-check-input mx-2" type="checkbox" name="type" id="type1" value="ethernet" />';
            echo '<label class="form-check-label" for="type1">Ethernet</label>';
          echo '</div>';
          echo '<div class="col-md-3">';
            echo '<input checked class="form-check-input" type="checkbox" name="type" id="type2" value="console" />';
            echo '<label  class="form-check-label" for="type2">Console</label>';
          echo '</div>';
        echo '</div>';
        echo '<div class="error">';
          echo '<p>Please select types of ports</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="form-check col-md-6">';
        echo '<label for="frequency" class="form-label">Frequency band class</label>';
        echo '<div class="row border border-light-subtle rounded-2 bg-body">';
          echo '<div class="col-md-3">';
            echo '<input class="form-check-input mx-2" type="radio" name="frequency" id="frequency1" value="2.4 ghz" />';
            echo '<label class="form-check-label" for="frequency1">2.4 Ghz</label>';
          echo '</div>';
          echo '<div class="col-md-3">';
            echo '<input checked class="form-check-input" type="radio" name="frequency" id="frequency2" value="5 ghz" />';
            echo '<label class="form-check-label" for ="frequency2">5 Ghz</label>';
          echo '</div>';
        echo '</div>';
        echo '<div class="error">';
          echo '<p>Please select frequency</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="col-md-6">';
        echo '<label for="price" class="form-label">Price</label>';
        echo '<input type="text" class="form-control" id="price" name="Price" value='.$router['Price']. ' "rs" />';
        echo '<div class="error">';
          echo '<p>Please provide the price</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="form-check col-md-6">';
        echo '<label class="form-label">Wireless Standard</label>';
        echo '<div class="row border border-light-subtle rounded-2 bg-body">';
          echo '<div class="col-md-3">';
            echo '<input checked class="form-check-input mx-2" type="radio" name="wireless" id="wire1" value="IEEE 802.11n" />';
            echo '<label class="form-check-label" for="wire1">IEEE 802.11n</label>';
          echo '</div>';
          echo '<div class="col-md-3">';
            echo '<input class="form-check-input" type="radio" name="wireless" id="wire2" value="IEEE 802.11g" />';
            echo '<label class="form-check-label" for="wire2">IEEE 802.11g</label>';
          echo '</div>';
        echo '</div>';
        echo '<div class="error">';
          echo '<p>Please select wireless standard</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="col-md-6">';
        echo '<label for="cat" class="form-label">Category</label>';
        echo '<select name="Category" id="cat" class="form-select">';
          echo '<option>Choose...</option>';
          echo '<option selected>Wired Router</option>';
          echo '<option>Wireless Router</option>';
        echo '</select>';
        echo '<div class="error">';
          echo '<p>Please select category</p>';
        echo '</div>';
      echo '</div>';
    
      echo '<div class="form-check col-md-6">';
        echo '<label class="form-label">Data rate</label>';
        echo '<div class="row border border-light-subtle rounded-2 bg-body">';
          echo '<div class="col-md-3">';
            echo '<input checked class="form-check-input mx-2" type="radio" name="data-rate" id="data1" value="100 Mbps" />';
            echo '<label class="form-check-label" for="data1">100 Mbps</label>';
          echo '</div>';
          echo '<div class="col-md-3">';
            echo '<input class="form-check-input" type="radio" name="data-rate" id="data2" value="10 Gbps" />';
            echo '<label class="form-check-label" for="data2">10 Gbps</label>';
          echo '</div>';
        echo '</div>';
        echo '<div class="error">';
          echo '<p>Please select Data rate</p>';
        echo '</div>';
      echo '</div>';
               }}}
      ?>
    
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