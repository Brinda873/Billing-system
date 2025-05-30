<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('layouts.sidebar')
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('layouts.navbar')
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Product Entry</h5>
              <div class="card">
                <div class="card-body">
                  <form action="/Pr_update/{{$edit->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                     <div class="mb-3"> 
                      <label for="exampleInputEmail1" class="form-label">Date</label>
                      <input type="date" class="form-control" value="{{$edit->Date}}" aria-describedby="emailHelp" name="date">
                       <div id="emailHelp" class="form-text"></div> 
                     </div> 
                     <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Product name</label>
                        <input type="text" class="form-control" value="{{$edit->Product_name}}" aria-describedby="emailHelp" name="name">
                         <div id="emailHelp" class="form-text"></div> 
                       </div> 
                        <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Price per product</label>
                        <input type="number" class="form-control" value="{{$edit->Price}}" aria-describedby="emailHelp" name="price" >
                         <div id="emailHelp" class="form-text"></div> 
                       </div> 
                       <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>