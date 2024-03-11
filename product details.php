<?php include 'isloggedin.php';?>
    <!DOCTYPE html>
    <html>

    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Product details</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
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
    <h2 align="center" class="mx-auto">Product details</h2>
    <div class="card mx-auto p-2 border-primary bg-primary-subtle   rounded-4 " style="margin: 50px ;
    width: 800px;">
    <?php
$index=$_GET['id'];
   $file = ('products.csv'); 
    if (($handle = fopen($file, "r")) !== false) {
        $header =  fgetcsv( $handle);
        while (($row = fgetcsv($handle, 1000, ",")) !== false) {
            $router=array_combine($header,$row); 
            if($router['Index']==$index){ 
        
        echo '<div class="row p-3">';
        echo '<div class="col-6  ">';
        echo '<img src="Images/icons8-picture-96.png" class="card-img-top " alt="display 
        picture">';
        echo'</div>';
        echo '<div class="card-body card-text col-6 bg-body border-dark border rounded p-1 ">';
        echo "<h5>Model name: <p> ".$router['Model name']."</p></h5>";
        echo "<h5>Brand:<p> ".$router['Brand']."</p></h5>";
        echo "<h5>Port numbers:<p> ".$router['Port numbers']."</p></h5>";
        echo "<h5>Frequency band class:<p> ".$router['Frequency band class']."</p></h5>";
        echo "<h5>Wireless standard:<p>".$router['Wireless standard']."</p></h5>";
        echo "<h5>Data rate:<p>".$router['Data rate']."</p></h5>";
        echo "<h5>Warranty:<p>".$router['Warranty']."</p></h5>";
        echo "<h5>Power:<p>".$router['Power']."</p></h5>";
        echo "<h5>Types of ports:<p>".$router['Types of ports']."</p></h5>";
        echo "<h5>Price:<p>".$router['Price']."</p></h5>";
        echo "<h5>Category:<p>".$router['Category']."</p></h5>";
       echo' </div>';
       echo' </div>';
echo'<div class=" d-flex justify-content-between">';
echo' <button name="delete" style="margin-left: 440px;" value="delete" class="btn btn-danger">Delete</button>';
echo' <button name="edit" value="edit" class="btn btn-outline-info"><a href="update product.php">Edit</a></button>';
echo' </div>';
            }
            else{
             continue;
            }
          }
        }
        ?>
    </div>   
    <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>

    </html>