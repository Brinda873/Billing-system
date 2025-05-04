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
              <h5 class="card-title fw-semibold mb-4">Stock available</h5>
              <nav aria-label="breadcrumb">
                <a href="/st_create"><button class="btn btn-primary">+ Add product</button></a>
              </nav>
              <div class="card col-12" >
                <div class="card-body">
                    <table style="width:70%; text-align:center;">
                    <thead>
                    <tr>
                      <th>S.no</th>
                      <th>Product Name</th>
                      <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach($show as $stock)
                      <tr>
                      <td>{{$stock->id}}</td>
                      <td class="form-control">{{$stock->Product_name}}</td>
                      <td><input type="number" class="form-control" id="Qt" value="{{$stock->Quantity}}" readonly  name="quantity" ></td>
                      </tr>
                     @endforeach
                    </tbody>
                    </table>
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