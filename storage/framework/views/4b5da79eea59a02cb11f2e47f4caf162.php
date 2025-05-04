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
              <h5 class="card-title fw-semibold mb-4">Purchase</h5>
              <nav aria-label="breadcrumb">
                <a href="/Po_create"><button class="btn btn-primary">+ Add</button></a>
              </nav>
              <br>
              <br>
              <form action="/Po_list" method="get">
                <?php echo csrf_field(); ?>
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
                      <?php $__currentLoopData = $purchase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($purc->id); ?></td>
                        <td><?php echo e($purc->created_at->format('d-m-y')); ?></td>
                        <td><?php echo e($purc->Product_name); ?></td>
                        <td><?php echo e($purc->Quantity); ?></td>
                        <td><?php echo e($purc->Price); ?></td>
                        <td><?php echo e($purc->Total); ?></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


</html><?php /**PATH C:\laravel\Product\resources\views/Purchase/list.blade.php ENDPATH**/ ?>