<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-com Website</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style link -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div class="container-fluid p-0">
        <!-- First nav -->
        <nav class="navbar navbar-expand-lg  bg-info">
            <div class="container-fluid">
                <img src="./image/logo.jpeg" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"><sup>1</sup></i></a>
                        </li>
                        <l class="nav-item">
                            <a class="nav-link" href="#">Total Price :100/-</a>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- Second child -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="#" class="nav-link">Welcome Guest</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </nav>


    <!-- Third child -->
    <div class="bg-light">
        <h3 class="text-center">Product Store</h3>
        <p class="text-center">"Discover unbeatable deals on top-quality products! Shop now for exclusive offers and
            fast shipping straight to your door."</p>
    </div>

    <!-- Fourth child -->

    <div class="row">
        <div class="col-12 col-md-10">
            <!-- Products -->
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="./image/kurti.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="./image/kurti-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="./image/shut.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="./image/shree.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="./image/shree-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3  mb-3">
                    <div class="card">
                        <img src="./image/lahngha.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-info">Add To Cart</a>
                            <a href="#" class="btn btn-secondary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 bg-secondary p-0">
            <!-- brands to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light ">
                        <h4>Delivery Brands</h4>
                    </a>
                </li>
                <li class="nav-item"><a href="" class="nav-link text-light">Brand1</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">Brand2</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">Brand3</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">Brand4</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">Brand5</a></li>
            </ul>

            <!-- Category to be displayed -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="" class="nav-link text-light ">
                        <h4>Category</h4>
                    </a>
                </li>
                <li class="nav-item"><a href="" class="nav-link text-light">Category1</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">Category2</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">Category3</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">Category4</a></li>
                <li class="nav-item"><a href="" class="nav-link text-light">Category5</a></li>

            </ul>
        </div>

    </div>
    </div>






    <!-- Footer -->
    <div class="bg-info p-3 text-center">
        <p>All rights Reserved @ Design By Jk</p>
    </div>


    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>