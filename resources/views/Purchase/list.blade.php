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
              <h5 class="card-title fw-semibold mb-4">Purchase</h5>
              <nav aria-label="breadcrumb">
                <a href="/Po_create"><button class="btn btn-primary">+ Add</button></a>
              </nav>
              <br>
              <br>
              <form action="/Po_list" method="get">
                @csrf
              <div class="row">
                <div class="col-2">
                  <label>From:</label>
                    <input type="date" name="date1">
                </div>
                <div class="col-2">
                <label>To date:</label>
                    <input type="date" name="date2">
                </div>
                <div class="col-2">
                <label>Price:</label>
                    <input type="number" name="Price">
                </div>
                <div class="col-2">
                <label>TotalPrice:</label>
                    <input type="number" name="tPrice">
                </div>
                <div class="col-2">
                    <button type="Submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
              
              <div class="card col-12" >
                <div class="card-body">
                  <table style="height: 200px; width:100%;text-align:center;">
                    <thead>
                    <tr>
                      <th>S.no</th>
                      <th>Date</th>
                      <th>Product name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Total Price</th>
                    </tr>
                    </thead>
                    <tbody>
                      @forEach($purchase as $purc)
                      <tr>
                        <td>{{$purc->id}}</td>
                        <td>{{$purc->created_at->format('d-m-y')}}</td>
                        <td>{{$purc->Product_name}}</td>
                        <td>{{$purc->Quantity}}</td>
                        <td>{{$purc->Price}}</td>
                        <td>{{$purc->Total}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
</div>
                
 <!-- <script> -->
    <!-- // function Billing()
    // {
    //    let qut=document.getElementsById("Qt").value;
    //    let price=document.getElementById("Prc").value;

    //    let total=qut*price;

    //    document.getElementById("tot").value=total.toFixed(2);
    // }
    //  -->
    
    
  <!-- </script> -->
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>


</html>