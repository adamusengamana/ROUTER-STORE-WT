<?php include 'isloggedin.php';?>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<title>Product list</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="CSS/style.css" />


</head>


<body>
<header>
<nav class="navbar navbar-expand-lg fixed-top bg-primary p-1 justify-content-center">
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
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
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
<h2 class="mx-auto" align="center" style="width: 300px">
Available products
</h2>
<div class="my-container m-5 bg-light-subtle border border-primary rounded-4 p-4 my-3">
<div class="row ">
<div class="cat col-9">
<?php
  $file = 'products.csv';
  if (($handle = fopen($file, 'r')) !== false) {
      $header = fgetcsv($handle);
      $categories = array(); // Initialize an array to store unique categories

      while (($row = fgetcsv($handle, 1000, ',')) !== false) {
          $router = array_combine($header, $row);
          $categories[] = $router['Category']; // Add the category to the categories array
      }

      fclose($handle); // Close the CSV file

      $uniqueCategories = array_unique($categories); // Remove duplicates

      foreach ($uniqueCategories as $category) {
          echo '<button class="btn btn-primary mx-2" name='.$category.'>';
          echo $category;
          echo '</button>';
      }
  }
?>
<a href="#"></a><button class="btn btn-dark ms-5 p-2  " 
name="addcat"data-bs-toggle="modal" data-bs-target="#addcat" >
  Add category
</button></a>
</a><button class="btn btn-info m-2 p-2 " data-bs-toggle="modal" data-bs-target="#upcat" name="upcat" >
  Update category
</button>
</div>
<div class="d-flex justify-content-end col-3">     
  <a href="add new product.php"><img src="Images/icons8-add-48.png" alt="add" class="p-2"/></a>
  <img src="Images/icons8-filter-50.png" alt="filter" class="p-2" />
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
<div class="list row">
<?php
$file = ('products.csv'); 
if (($handle = fopen($file, "r")) !== false) {
  $header =  fgetcsv( $handle);
  while (($row = fgetcsv($handle, 1000, ",")) !== false) {
    
      $router=array_combine($header,$row); 
      
  echo '<div class="card m-3 p-2 border border-primary" style="width: 30%">';
  echo '<div class="row">';
  echo '<div class="col-6">';
  echo '<img src="Images/icons8-picture-96.png" class="card-img-top" alt="display picture" />';
  echo '</div>';
  echo '<div class="card-body card-text col-6" id='.$router['Index'].'>';
  echo "<h5>Model name: </h5>".$router['Model name'];
  echo "<h5>Brand: </h5>".$router['Brand'];
  echo "<h5>Port numbers: </h5>".$router['Port numbers'];
  echo "<h5>Data rate: </h5>".$router['Data rate'];
  echo "<h5>Price: </h5>".$router['Price'];
  echo '</div>';
  echo '</div>';
  echo '<div class="d-flex justify-content-between">';
  echo '<a href=""><button name="delete" value="delete" class="btn btn-danger">Delete</button></a>';
  echo '<a href="product details.php?id=' .$router['Index']. '"><img src="Images/icons8-view-48.png" alt="view" /></a>';
  echo '<button name="edit" class="btn btn-outline-info "><a href="update product.php?id=' .$router['Index']. '">Edit</a></button>';
  echo '</div>';
  echo '</div>';
}}

fclose($handle);
?>  

</div>


<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="main3.js"></script>
</body>

</html>