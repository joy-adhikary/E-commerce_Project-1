<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joy Adhikary</title>


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
          integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

<!-- start #header section-->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-16 text-black-50 m-0">joy adhikary 18192103062</p>
        <div class="font-rale font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark">Login</a>
            <a href="#" class="px-3 border-right text-dark">Whishlist (0)</a>
        </div>
    </div>

    <!-- Primary Navigation form bootstrape-->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="#">JOY Store </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <!-- nav bar ar margin jate space pai -->
                <li class="nav-item active">
                    <a class="nav-link" href="#">On Sale</a>
                <li class="nav-item active">
                    <a class="nav-link" href="product.php">Products </a> <!-- fas fa for ^ icone-->
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cart.php">Cart Items</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="comingsoon.php">Cooming soon</a>
                </li>
            </ul>
            <!-- curt and shopping icone -->

            <!-- curt and shopping icone -->
            <form action="#" class="font-size-14 font-rale">
                <a href="#" class="py-2 rounded-pill color-primary-bg">
                    <!-- py top and bouttom pading px left and right pading -->
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- end #header section -->

<!--start #main-site-->
<main id="main-site">

    <!--Owl-carousel for bannaer -->
    <!-- it will produce slide effects-->
    <section id="banner-area">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="./assets/Banner3.png" alt="Banner1">
            </div>
            <div class="item">
                <img src="./assets/Banner2.png" alt="Banner2">
            </div>
            <div class="item">
                <img src="./assets/Banner1.png" alt="Banner3">
            </div>
        </div>
    </section>
    <!--!Owl-carousel-->

    <!--Special Price-->
    <section id="special-price">
        <div class="container">
            <h4 class="font-rubik font-size-20">Comming Soon</h4>
            <div id="filters" class="button-group text-right font-baloo font-size-14">
                <!-- bootstrap command for group buttons in right-->
                <button class="btn is-checked" data-filter="*">All Brand</button>
                <button class="btn" data-filter=".Apple">Apple</button>
                <button class="btn" data-filter=".Samsung">Samsung</button>
                <button class="btn" data-filter=".Redmi">Xiaomi</button>
                <button class="btn" data-filter=".Oneplus">Oneplus</button>
            </div>

            <div class="grid">
                <!-- filter only apple .. its work like a class .. if we send a then it sort only a -->
                <div class="grid-item Apple border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/13.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Apple iPhone 10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span> <!--fas for filled star and far for empty star -->
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Samsung border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <br>
                                <h6>Samsung Galaxy S10+</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Oneplus border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/3.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Oneplus 9 Pro</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Apple border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/2255.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Apple iphone 11 pro max</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Samsung border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/1122.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <br>
                                <h6>Samsung Note 11</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Redmi border ">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/1111.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Redmi Note 10 Pro</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Redmi border ">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/2.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Xiaomi poco X3</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Coming soon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Samsung border "> <!-- ai line ta group korar jonno use hobe .. jkn sort kori tkn samsung border ar under a aita cole jabe -->
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/1123.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <br>
                                    <h6>Samsung Note 10</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item  Oneplus border">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/88991.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Oneplus 8 pro </h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-item Apple border  ">
                    <div class="item py-2" style="width: 200px;">
                        <div class="product font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./assets/products/13.png" class="img-fluid" alt="pro1"></a>
                                <div class="text-center">
                                    <h6>Apple iPhone 10 max</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--!Special Price-->


    <!-- Blogs -->
    <section id="blogs">
        <div class="container py-4"> <!-- top and buttom pading 4-->
            <h4 class="font-rubik font-size-20">Latest Blogs</h4>
            <hr>


            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;"> <!-- border 0 karon blog ar border amra cai na-->
                        <h5 class="card-title font-size-17">Tranding News</h5>
                        <img src="./assets/blog/1122.jpg" alt="cart image" class="card-img-top"><br>
                        <p class="card-text font-size-14 text-black-50 py-1">Bangladesh University of Business and Technology (BUBT) is a powerhouse of academic excellence that champions the freedom of learning.The university has risen to one of the top ranking private universities in Bangladesh</p>
                        <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                        <h5 class="card-title font-size-17">Tranding News</h5>
                        <img src="./assets/blog/2211.jpg" alt="cart image" class="card-img-top"><br>
                        <p class="card-text font-size-14 text-black-50 py-1">The mission of Bangladesh University of Business and Technology (BUBT) is to provide students with high quality education and training that are relevant to the needs of the modern society at affordable costs</p>
                        <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0 font-rale mr-5" style="width: 18rem;">
                        <h5 class="card-title font-size-17">Upcoming Mobiles</h5>
                        <img src="./assets/blog/blog2.jpg" alt="cart image" class="card-img-top"> <br>
                        <p class="card-text font-size-14 text-black-50 py-1">Joy Ecommarce site is commited to there customer family to produce Latest phones with in short time as phone company announce there latest smartphone model.We always try to give a handsome amount of discount to our consumers.</p>
                        <a href="#" class="color-second text-left">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blogs section -->


</main>
<!--End #main-site-->




<!--start #footer-->

<footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12"> <!-- it will make 3 coloum space we do it bcz bootstrap has 12 coloum space  -->
                <h4 class="font-rubik font-size-20">Joy Ecommarce Site</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
            </div>
            <div class="col-lg-4 col-12"> <!-- it will make 4 coloum space we do it bcz bootstrap has 12 coloum space  col 12 for responsive  -->
                <h4 class="font-rubik font-size-20">Newslatter</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email *"> <!-- class form coltrol for box -->
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap"> <!-- d-flax for display flax proparty  , flex warp for responsive -->
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2"> <!-- custom class , bg dark colour , text center a thakbe , text white hobe -->
    <p class="font-rale font-size-15">&copy; Copyrights 2021. Desing By <a href="#" class="color-first">Joy Adhikary</a></p>
</div>


<!--End #footer-->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<!--Owl carousel js file-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
        integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

<!--Custom Javasript-->
<script src="./index.js"></script>
</body>

</html>