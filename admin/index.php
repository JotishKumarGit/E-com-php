<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- css file -->
    <link rel="stylesheet" href="../css/style.css" class="logo">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap css Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .admin-image {
            width: 100px;
            object-fit: contain;
        }
    </style>


</head>

<body>

    <!-- navbar -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../image/logo.jpeg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="nav-navbar">
                        <li class="nav-item">
                            <a href="" class="nav-link ">Welcome Jotish</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>


        <!-- Second Child -->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- Third Child -->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div>
                    <a href="#"><img src="../image/shree-3.jpg" alt="" class="admin-image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button><a href="" class="nav-link text-light bg-info my-1 px-4 py-2">Insert Products</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 px-4 py-2">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1 px-4 py-2">Insert Category</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 px-4 py-2">View Category</a></button>
                    <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1 px-4 py-2">Insert Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 px-4 py-2">View Brands</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 px-4 py-2">All Orders</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 px-4 py-2">All Payments</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 px-4 py-2">List Users</a></button>
                    <button><a href="" class="nav-link text-light bg-info my-1 px-4 py-2">Logout</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fourth Child -->
     <div class="container my-5">
        <?php 
        if(isset($_GET['insert_category'])){
            include('insert_category.php');
        }
        if(isset($_GET['insert_brands'])){
            include('insert_brands.php');
        }
        ?>
     </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Bootstrap js Link -->
</body>

</html>