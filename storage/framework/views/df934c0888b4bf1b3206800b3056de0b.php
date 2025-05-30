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
    <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Product Entry</h5>
              <div class="card">
                <div class="card-body">
                  <form action="/Pr_store" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                     <div class="mb-3"> 
                      <label for="exampleInputEmail1" class="form-label">Date</label>
                      <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="date">
                       <div id="emailHelp" class="form-text"></div> 
                     </div> 
                     <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Product name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                         <div id="emailHelp" class="form-text"></div> 
                       </div> 
                        <div class="mb-3"> 
                        <label for="exampleInputEmail1" class="form-label">Price per product</label>
                        <input type="number" class="form-control" id="Prc" aria-describedby="emailHelp" name="price" >
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

</html><?php /**PATH C:\laravel\Product\resources\views/Product/Create.blade.php ENDPATH**/ ?>