<?php include("../assets/noSessionRedirect.php"); ?>

<?php include("./verifyRoleRedirect.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type<link rel="shortcut icon" href="./images/logo.png">="text/css" href="style.css"> -->
    
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <title>Fee Payment</title>
    <style type="text/css">
      .payment{
        margin-bottom: 10%;
      }
      #money{
        margin-top: 5%;
      }
      #instalment{
        padding: 8px;
        width: 200px;
        margin-top: 6%;
        border-radius: 8px;
      }
      @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}

}

    </style>
</head>
<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">SCHOOL MANAGEMENT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="check-fee-recipt.php">Fee-Recipt</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index.php">Back to Main Page</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div>

    <div class="payment">
      <section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Payment Info</h3>

            <form class="px-md-2">
                <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="text" class="form-control" id="exampleDatepicker1" />
                    <label for="exampleDatepicker1" class="form-label">Select a date</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">
                  
                  <select class="form-select" aria-label="Default select example" id="select">
  <option selected>Open this select menu</option>
  <option value="nu-ukg">Pre school</option>
  <option value+"presch">Nursury schoool</option>
  <option value="1">Grade 1</option>
  <option value="2">Grade 2</option>
  <option value="3">Grade 3</option>
  <option value="4">Grade 4</option>
  <option value="5">Grade 5</option>
  <option value="6">Grade 6</option>
  <option value="7">Grade 7</option>
  <option value="8">Form 1</option>
  <option value="9">Form 2</option>
  <option value="10">Form 3</option>
  <option value="11s">Form 4 (Science)</option>
  <option value="12s">Form 5 (Science)</option>
  <option value="11c">Form 6 (Commerce)</option>
  

</select>
                  <!-- <label for="exampleDatepicker1" class="form-label">Student Name</label> -->
                  <select class="instal" aria-label="Default select example" id="instalment">
                      <option selected>Select Term</option>
                      <option value="i1">Term 1 (April)</option>
                      <option value="i2">Term 2 (July)</option>
                      <option value="i3">Term 3 (October)</option>
                     
                      <option value="bus">Bus Fee</option>
                      <option value="total">Total</option>
                  </select>
                  <br>
                  <input type="text" name="" value="Amount" id="money" enabled>
                  <label> Lipa na mpesa</label>
                  <input type="text" name="Phonenumber" value="" id="money"><br>

                 <button class="btn btn-outline-success" type="submit">Pay</button>
                </div>
              </div>
               
              <!-- <img src="images/qr.jpg" id="qr" style="height: 100%; width: 100%;"> -->
              
              <!-- <button type="submit" class="btn btn-success btn-lg mb-1"
              style="margin-top: 8%;">Scan To Pay</button> -->

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>

  </body>

  </html>