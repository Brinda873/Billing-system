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
              <h5 class="card-title fw-semibold mb-4">Add quantity</h5>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/Po_list"></a>purchase</li>
                  <li class="breadcrumb-item active" aria-current="page">Add </li>
                </ol>
              </nav>
              <div class="card">
                <div class="card-body">
                <form action= "/Po_store" method="Post" enctype="multipart/form-data">
                   <?php echo csrf_field(); ?>
                    <table style="height: 200px; width:100%;text-align:center;">
                    <thead>
                     <tr>
                      <th>S.no</th>
                      <th>Date</th>
                      <th>Product Name</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Total Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                     <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                      <tr class="product">
                      <td><input class="form-control" name="id[]" value="<?php echo e($purc->id); ?>" type="hidden" ></td>
                      <td><input class="form-control" name="date[]" value="<?php echo e($purc->Date); ?>" readonly></td>
                      <td><input type="text"class="form-control" name="name[]" value="<?php echo e($purc->Product_name); ?>"></td>
                      <td><input type="number"class="form-control quan" id="Qt"   name="quantity[]" value="<?php echo e($purc->Quantity); ?>"oninput="Billing()" min="1"></td>
                      <td><input type="number" class="form-control  price" id="Prc"  name="price[]" value="<?php echo e($purc->Price); ?>" readonly></td>
                      <td><input type="text" class="form-control total" id="tot"  name="total[]" ></td>
                      </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                     <tr>
                      <td colspan="6">
                          <input type="text" class="form-control" id="gtotal"  name="grandtotal" >
                      </td>
                    </tr>
                      <tr>
                        <td>
                          <button type="submit" class="btn btn-primary">Submit</button>
                          </td>
                      </tr>
                </table>
                </form>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>  

function Billing()
    {
      let grandtotal=0;
      document.querySelectorAll(".product").forEach(row=>{
        let qut=parseFloat(row.querySelector(".quan").value) || 0;
       let price=parseFloat(row.querySelector(".price").value )|| 0;
      //  console.log("price",price);
      //  console.log("qut",qut);
       let total=qut*price;
      // console.log("total",total);
       row.querySelector(".total").value=total.toFixed(2);
       grandtotal+=total;
      });
      document.getElementById("gtotal").value=grandtotal.toFixed(2);
   }
   </script>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html><?php /**PATH C:\laravel\Product\resources\views/Purchase/Create.blade.php ENDPATH**/ ?>