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
              <h5 class="card-title fw-semibold mb-4">Product</h5>
              <nav aria-label="breadcrumb">
                <a href="/Pr_create"><button class="btn btn-primary">+ Add product</button></a>
              </nav>
              <div class="card col-12" >
                <div class="card-body">
                    <table style="height: 200px; width:100%;text-align:center;">
                    <thead>
                     <tr>
                      <th>S.no</th>
                      <th>Date</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                     <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                      <td><?php echo e($deta->id); ?></td>
                      <td><input class="form-control" name="date" value="<?php echo e($deta->Date); ?>" readonly></td>
                      <td> <input type="text"class="form-control" name="name" value="<?php echo e($deta->Product_name); ?>"></td>
                      <td><input type="number" class="form-control  price" id="Prc"  name="price" value="<?php echo e($deta->Price); ?>" readonly></td>
                      <td class="form-control">
                           <a href="/Pr_edit/<?php echo e($deta->id); ?>"><i class="ti ti-pencil"></i></a>
                           <a href="/Pr_delete/<?php echo e($deta->id); ?>"><i class="ti ti-trash"></i></a>
                      </td>
                      </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


</html><?php /**PATH C:\laravel\Product\resources\views/Product/list.blade.php ENDPATH**/ ?>