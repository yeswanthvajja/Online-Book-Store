<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>MyBrary</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/76ef0530ca.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->

    <script type="text/javascript">
    function jsFunction(){
        
    window.onscroll = () =>{
        searchForm.classList.remove('active');
        if(window.scrollY > 80){
            document.querySelector('.header-2').classList.add('active');
        }else{
            document.querySelector('.header-2').classList.remove('active');
        }
    }
    window.onload = () =>{
        if(window.scrollY > 80){
            document.querySelector('.header-2').classList.add('active');
        }else{
            document.querySelector('.header-2').classList.remove('active');
        }
        fadeOut();
    }
    function loader(){
        document.querySelector('.loader-container').classList.add('active');
    }
    function fadeOut(){
        setTimeout(loader, 4000);
    }
    var swiper = new Swiper(".books-slider", {
        loop:true,
        centeredSlides: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });

    var swiper = new Swiper(".featured-slider", {
            loop:true,
            centeredSlides: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        var swiper = new Swiper(".arrivals-slider", {
            spaceBetween: 10,
            loop:true,
            centeredSlides: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        var swiper = new Swiper(".reviews-slider", {
            spaceBetween: 10,
            loop:true,
            centeredSlides: true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

        var swiper = new Swiper(".blogs-slider", {
            spaceBetween: 10,
            loop:true,
            centeredSlides: true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
        }
</script>
    
    
</head>
<body>
    
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <a class="navbar-brand" href="home.php">MyBrary</a>
            <span style="font-size: 2em; color: white;">
                <i class="fas fa-book-open"></i>
            </span>
         
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto ">
              <a class="nav-item nav-link " href="home.php" style = "color: antiquewhite";>Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="about.html" style = "color: antiquewhite";>About Us</a>
              <a class="nav-item nav-link" href="favorite.php" style = "color: antiquewhite";>Favorite</a> 
              <a class="nav-item nav-link" href="cart.php" style = "color: antiquewhite";>My cart</a>    
              <a class="nav-item nav-link" href="logout.php" style = "color: antiquewhite";>Logout</a>
              </div >
          </div> 
            
        </nav>
    </div> 


    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#arrivals">new arrivals</a>
            <a href="#featured">featured</a>
            <a href="#blogs">blogs</a>
            <a href="#reviews">reviews</a>
        </nav>
    </div>
    
    <!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    <a href="#featured" class="fas fa-list"></a>
    <a href="#arrivals" class="fas fa-tags"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="#blogs" class="fas fa-blog"></a>
</nav>



    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-300" src="p1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-300" src="p2.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-300" src="p3.jpeg" alt="Third slide">
        </div>
        </div>
     
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
      
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>    
    </div>
    
    <div class = "container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Academics</h5>
                        <a href="academicandprofessional.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Literature</h5>
                        <a href="literatureandfiction.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Biographies</h5>
                        <a href="biographies.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Books</h5>
                        <a href="otherbooks.php" class="btn btn-primary">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="http://localhost/online_bookstore/description.php?ID=DIC-1" class="swiper-slide"><img src="img/books/DIC-1.jpg" alt=""></a>
                <a href="http://localhost/online_bookstore/description.php?ID=DIC-2" class="swiper-slide"><img src="img/books/DIC-2.jpg" alt=""></a>
                <a href="http://localhost/online_bookstore/description.php?ID=DIC-3" class="swiper-slide"><img src="img/books/DIC-3.jpg" alt=""></a>
                <a href="http://localhost/online_bookstore/description.php?ID=DIC-4" class="swiper-slide"><img src="img/books/DIC-4.jpg" alt=""></a>
                <a href="http://localhost/online_bookstore/description.php?ID=DIC-5" class="swiper-slide"><img src="img/books/DIC-5.jpg" alt=""></a>
                <a href="http://localhost/online_bookstore/description.php?ID=DIC-6" class="swiper-slide"><img src="img/books/DIC-6.jpg" alt=""></a>
            </div>
            <img src="" class="stand" alt="">
        </div>

        <div class="content">
            <h3>Deal of the day</h3>
            <h3>upto 50% off</h3>
            <a href="discount.php" class="btn btn-primary">Shop Now</a>
        </div>

    </div>

</section>

<!-- home section ense  -->


<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span style="color:rgb(61, 158, 228)">new arrivals</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="http://localhost/online_bookstore/description.php?ID=new_book1" class="swiper-slide box">
                <div class="image">
                    <img src="img/books/new_book1.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">Two Women</h3>
                    <div class="price">$15.99 <span>$20.99</span> </div>
                </div>
            </a>

            <a href="http://localhost/online_bookstore/description.php?ID=new_book2" class="swiper-slide box">
                <div class="image">
                    <img src="img/books/new_book2.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">Loaded</h3>
                    <div class="price">$19.99 <span>$20.99</span></div>
                </div>
            </a>

            <a href="http://localhost/online_bookstore/description.php?ID=new_book3" class="swiper-slide box">
                <div class="image">
                    <img src="img/books/new_book3.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">How Civil Wars Start</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                </div>
            </a>

            <a href="http://localhost/online_bookstore/description.php?ID=new_book4" class="swiper-slide box">
                <div class="image">
                    <img src="img/books/new_book4.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">The Days of Bluegrass Love</h3>
                    <div class="price">$20.99 <span>$30.99</span></div>
                </div>
            </a>

            <a href="http://localhost/online_bookstore/description.php?ID=new_book5" class="swiper-slide box">
                <div class="image">
                    <img src="img/books/new_book5.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">Fair Play</h3>
                    <div class="price">$25.99 <span>$35.99</span></div>
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="http://localhost/online_bookstore/description.php?ID=new_book6" class="swiper-slide box">
                <div class="image">
                    <img src="img/books/new_book6.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">Big Magic</h3>
                    <div class="price">$16.99 <span>$20.99</span></div>
                </div>
            </a>

            <a href="http://localhost/online_bookstore/description.php?ID=new_book7" class="swiper-slide box">
                <div class="image">
                    <img src="img/books/new_book7.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">Victor LaValle's Destroyer</h3>
                    <div class="price">$17.99 <span>$20.99</span></div>
                </div>
            </a>

            <a href="http://localhost/online_bookstore/description.php?ID=new_book8" class="swiper-slide box">
                <div class="image">
                    <img src="img/books/new_book8.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">The Taking of Jake Livingston</h3>
                    <div class="price">$30.99 <span>$50.99.99</span></div>
                </div>
            </a>

            <a href="http://localhost/online_bookstore/description.php?ID=new_book9" class="swiper-slide box">
                <div class="image">
                    <img src="img/books/new_book9.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">White is for Witching</h3>
                    <div class="price">$10.99 <span>$15.99</span></div>
                </div>
            </a>

            <a href="http://localhost/online_bookstore/description.php?ID=new_book10" class="swiper-slide box">
                <div class="image">
                    <img src="img/books/new_book10.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">The Pomegranate Witch</h3>
                    <div class="price">$25.99 <span>$30.99</span></div>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- arrivals section ends -->


<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span style="color:rgb(61, 158, 228)">featured books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="http://localhost/online_bookstore/description.php?ID=new_book1" class="fas fa-eye"></a>
                    <a href="http://localhost/online_bookstore/favorite.php?ID=new_book1&quantity=1" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="img/books/new_book1.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">Two Women</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="http://localhost/online_bookstore/cart.php?ID=new_book1&quantity=1" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="http://localhost/online_bookstore/description.php?ID=new_book2" class="fas fa-eye"></a>
                    <a href="http://localhost/online_bookstore/favorite.php?ID=new_book2&quantity=1" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="img/books/new_book2.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">Loaded</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="http://localhost/online_bookstore/cart.php?ID=new_book2&quantity=1" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="http://localhost/online_bookstore/description.php?ID=new_book3" class="fas fa-eye"></a>
                    <a href="http://localhost/online_bookstore/favorite.php?ID=new_book3&quantity=1" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="img/books/new_book3.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">How Civil Wars Start</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="http://localhost/online_bookstore/cart.php?ID=new_book3&quantity=1" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="http://localhost/online_bookstore/description.php?ID=new_book4" class="fas fa-eye"></a>
                    <a href="http://localhost/online_bookstore/favorite.php?ID=new_book4&quantity=1" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="img/books/new_book4.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">The Days of Bluegrass Love</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="http://localhost/online_bookstore/cart.php?ID=new_book4&quantity=1" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="http://localhost/online_bookstore/description.php?ID=new_book5" class="fas fa-eye"></a>
                    <a href="http://localhost/online_bookstore/favorite.php?ID=new_book5&quantity=1" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="img/books/new_book5.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">Fair Play</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="http://localhost/online_bookstore/cart.php?ID=new_book5&quantity=1" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="http://localhost/online_bookstore/description.php?ID=new_book6" class="fas fa-eye"></a>
                    <a href="http://localhost/online_bookstore/favorite.php?ID=new_book6&quantity=1" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="img/books/new_book6.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">Big Magic</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="http://localhost/online_bookstore/cart.php?ID=new_book6&quantity=1" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="http://localhost/online_bookstore/description.php?ID=new_book7" class="fas fa-eye"></a>
                    <a href="http://localhost/online_bookstore/favorite.php?ID=new_book7&quantity=1" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="img/books/new_book7.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">Victor LaValle's Destroyer</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="http://localhost/online_bookstore/cart.php?ID=new_book7&quantity=1" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="http://localhost/online_bookstore/description.php?ID=new_book8" class="fas fa-eye"></a>
                    <a href="http://localhost/online_bookstore/favorite.php?ID=new_book8&quantity=1" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="img/books/new_book8.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">The Taking of Jake Livingston</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="http://localhost/online_bookstore/cart.php?ID=new_book8&quantity=1" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="http://localhost/online_bookstore/description.php?ID=new_book9" class="fas fa-eye"></a>
                    <a href="http://localhost/online_bookstore/favorite.php?ID=new_book9&quantity=1" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="img/books/new_book9.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">White is for Witching</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="http://localhost/online_bookstore/cart.php?ID=new_book9&quantity=1" class="btn">add to cart</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="http://localhost/online_bookstore/description.php?ID=new_book10" class="fas fa-eye"></a>
                    <a href="http://localhost/online_bookstore/favorite.php?ID=new_book10&quantity=1" class="fas fa-heart"></a>
                </div>
                <div class="image">
                    <img src="img/books/new_book10.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">The Pomegranate Witch</h3>
                    <div class="price">$15.99 <span>$20.99</span></div>
                    <a href="http://localhost/online_bookstore/cart.php?ID=new_book10&quantity=1" class="btn">add to cart</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span style="color:rgb(61, 158, 228)">client's reviews</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="img/pic-1.png" alt="">
                <h3 style="color:rgb(61, 158, 228)">john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="img/pic-2.png" alt="">
                <h3 style="color:rgb(61, 158, 228)">john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="img/pic-3.png" alt="">
                <h3 style="color:rgb(61, 158, 228)">john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="img/pic-4.png" alt="">
                <h3 style="color:rgb(61, 158, 228)">john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="img/pic-5.png" alt="">
                <h3 style="color:rgb(61, 158, 228)">john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="img/pic-6.png" alt="">
                <h3 style="color:rgb(61, 158, 228)">john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>
    
</section>

<!-- reviews section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span style="color:rgb(61, 158, 228)">our blogs</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3 style="color:rgb(61, 158, 228)">blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fa-brands fa-fedex"></i>
        <div class="content">
            <h3>free FedEx shipping</h3>
            <p>order over $100</p>
        </div>
    </div>

    <div class="icons">
        <i class="fa-solid fa-shield-halved"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p>100 secure payment</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>easy returns</h3>
            <p>10 days returns</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p>call us anytime</p>
        </div>
    </div>

</section>

<!-- icons section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#featured"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#arrivals"> <i class="fas fa-arrow-right"></i> arrivals </a>
            <a href="#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#blogs"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="about.html"> <i class="fas fa-arrow-right"></i> About Us </a>
            <a href="login.php"> <i class="fas fa-arrow-right"></i> Login </a>
            <a href="register.php"> <i class="fas fa-arrow-right"></i> Register </a>
            <a href="favorite.php"> <i class="fas fa-arrow-right"></i> Favorite </a>
            <a href="cart.php"> <i class="fas fa-arrow-right"></i> My cart </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-envelope"></i> xyz@wayne.edu </a>
            <img src="image/worldmap.png" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class = "container">
        <hr class = "footerhr">
    </div>
    <div class="credit"> Developed by <span>Nithish(Gang leader), Yeswanth and Pranav </span> | all rights reserved!
    </div>

</section>

<!-- footer section ends -->



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

    body{
            background-color: #ede7f6;
        }
        .container .row{
            margin-top: 20px;
        }
        .container .footerhr{
            margin-top: 80px;
            border-width: thin;
            box-shadow: 1px 1px 1px skyblue;
        }

:root{
    --green:rgb(61, 158, 228);
    --dark-color:rgb(61, 158, 228);
    --black:rgb(68, 68, 68);
    --light-color:#666;
    --border:.1rem solid rgba(0,0,0,.1);
    --border-hover:.1rem solid var(--black);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition:all .2s linear;
    transition:width none;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width:2.3rem;
}

html::-webkit-scrollbar-track{
    background:transparent;
}

html::-webkit-scrollbar-thumb{
    background:var(--black);
}

section{
    padding:5rem 9%;
}

.heading{
    text-align: center;
    margin-bottom: 2rem;
    position: relative;

}

.heading::before{
    content: '';
    position: absolute;
    top:50%; left:0;
    transform: translateY(-50%);
    width: 100%;
    height:.01rem;
    background: rgba(0,0,0,.1);
    z-index: -1;
}

.heading span{
    font-size: 3rem;
    padding:.5rem 2rem;
    color:var(--black);
    background: #fff;
    border:var(--border);
}

.btn{
    margin-top: 1rem;
    display:inline-block;
    padding:.9rem 3rem;
    border-radius: .5rem;
    color:#fff;
    background:var(--green);
    font-size: 1.7rem;
    cursor: pointer;
    font-weight: 500;
}

.btn:hover{
    background:var(--dark-color);
}

#search-btn{
    display: none;
}

.header-2{
    background:var(--green);
}

.header-2 .navbar{
    text-align: center;
}

.header-2 .navbar a{
    color:#fff;
    display: inline-block;
    padding:1.2rem;
    font-size: 1.7rem;
}

.header-2 .navbar a:hover{
    background:var(--dark-color);
    color: red;
}

.header-2.active{
    position: fixed;
    top:0; left:0; right:0;
    z-index: 1000;

}

.bottom-navbar{
    text-align: center;
    background:var(--green);
    position: fixed;
    bottom:0; left:0; right:0;
    z-index: 1000;
    display: none;
}

.bottom-navbar a{
    font-size: 2.5rem;
    padding:2rem;
    color:#fff;
}

.bottom-navbar a:hover{
    background:var(--dark-color);
}

.home{
    background: url() no-repeat;
    background-size: cover;
    background-position: center;
}

.home .row{
    display:flex;
    align-items: center;
    flex-wrap: wrap-reverse;
    gap:1.5rem;
}

.home .row .content{
    flex:1 1 42rem;
}

.home .row .books-slider{
    flex:1 1 42rem;
    text-align: center;
    margin-top: 2rem;
}

.home .row .books-slider a img{
    height: 25rem;
}

.home .row .books-slider a:hover img{
    transform: scale(.8);
}

.home .row .books-slider .stand{
    width:100%;
    margin-top: -2rem;
}

.home .row .content h3{
    color:var(--black);
    font-size: 4.5rem;
}

.home .row .content p{
    color:var(--light-color);
    font-size: 1.4rem;
    line-height: 2;
    padding:1rem 0;
}

.icons-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.icons-container .icons{
    display: flex;
    align-items: center;
    gap:1.5rem;
    padding:2rem 0;
}

.icons-container .icons i{
    font-size: 3.5rem;
    color:var(--green);
}

.icons-container .icons h3{
    font-size: 2.2rem;
    color:var(--black);
    padding-bottom: .5rem;
}

.icons-container .icons p{
    font-size: 1.4rem;
    color:var(--light-color);
}

.featured .featured-slider .box{
    margin:2rem 0;
    position: relative;
    overflow: hidden;
    border:var(--border);
    text-align: center;
}

.featured .featured-slider .box:hover{
    border:var(--border-hover);
}

.featured .featured-slider .box .image{
    padding:1rem;
    background: linear-gradient(15deg, #eee 30%, #fff 100%);
}

.featured .featured-slider .box:hover .image{
    transform: translateY(6rem);
}

.featured .featured-slider .box .image img{
    height: 25rem;
}

.featured .featured-slider .box .icons{
    border-bottom: var(--border-hover);
    position: absolute;
    top:0; left:0; right: 0;
    background: #fff;
    z-index: 1;
    transform: translateY(-105%);
}

.featured .featured-slider .box:hover .icons{
    transform: translateY(0%);
}

.featured .featured-slider .box .icons a{
    color:var(--black);
    font-size: 2.2rem;
    padding:1.3rem 1.5rem;
}

.featured .featured-slider .box .icons a:hover{
    background:var(--green);
    color:#fff;
}

.featured .featured-slider .box .content{
    background:#eee;
    padding:1.5rem;
}

.featured .featured-slider .box .content h3{
    font-size: 2rem;
    color:var(--black);
}

.featured .featured-slider .box .content .price{
    font-size: 2.2rem;
    color:var(--black);
    padding-top: 1rem;
}

.featured .featured-slider .box .content .price span{
    font-size: 1.5rem;
    color:var(--light-color);
    text-decoration: line-through;
}

.swiper-button-next,
.swiper-button-prev{
    border:var(--border-hover);
    height:4rem;
    width:4rem;
    color:var(--black);
    background: #fff;
}

.swiper-button-next::after,
.swiper-button-prev::after{
    font-size: 2rem;
}

.swiper-button-next:hover,
.swiper-button-prev:hover{
    background: var(--black);
    color:#fff;
}

.newsletter{
    background:url(../image/letter-bg.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

.newsletter form{
    max-width: 45rem;
    margin-left: auto;
    text-align: center;
    padding:5rem 0;
}

.newsletter form h3{
    font-size: 2.2rem;
    color:#fff;
    padding-bottom: .7rem;
    font-weight: normal;
}

.newsletter form .box{
    width: 100%;
    margin: .7rem 0;
    padding:1rem 1.2rem;
    font-size: 1.6rem;
    color:var(--black);
    border-radius: .5rem;
    text-transform: none;
}

.arrivals .arrivals-slider .box{
    display: flex;
    align-items:center;
    gap:1.5rem;
    padding:2rem 1rem;
    border:var(--border);
    margin:1rem 0;
}

.arrivals .arrivals-slider .box:hover{
    border:var(--border-hover);
}

.arrivals .arrivals-slider .box .image img{
    height:15rem;
}

.arrivals .arrivals-slider .box .content h3{
    font-size: 2rem;
    color:var(--black);
}

.arrivals .arrivals-slider .box .content .price{
    font-size: 2.2rem;
    color:var(--black);
    padding-bottom: .5rem;
}

.arrivals .arrivals-slider .box .content .price span{
    font-size: 1.5rem;
    color:var(--light-color);
    text-decoration: line-through;
}

.arrivals .arrivals-slider .box .content .stars i{
    font-size: 1.5rem;
    color:var(--green);
}

.deal{
    background:#f3f3f3;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:1.5rem;
}

.deal .content{
    flex:1 1 42rem;
}

.deal .image{
    flex:1 1 42rem;
}

.deal .image img{
    width: 100%;
}

.deal .content h3{
    color:var(--green);
    font-size: 2.5rem;
    padding-bottom: .5rem;
}

.deal .content h1{
    color:var(--black);
    font-size: 4rem;
}

.deal .content p{
    padding:1rem 0;
    color:var(--light-color);
    font-size: 1.4rem;
    line-height: 2;
}

.reviews .reviews-slider .box{
    border:var(--border);
    padding:2rem;
    text-align: center;
    margin:2rem 0;
    border-radius: 100px;
}

.reviews .reviews-slider .box:hover{
    border:var(--border-hover);
}

.reviews .reviews-slider .box img{
    height:7rem;
    width:7rem;
    border-radius: 50%;
    object-fit: cover;
}

.reviews .reviews-slider .box h3{
    color:var(--black);
    font-size: 2.2rem;
    padding:.5rem 0;
}

.reviews .reviews-slider .box p{
    color:var(--light-color);
    font-size: 1.4rem;
    padding:1rem 0;
    line-height: 2;
}

.reviews .reviews-slider .box .stars{
    padding-top: .5rem;
}

.reviews .reviews-slider .box .stars i{
    font-size: 1.7rem;
    color:var(--green);
}

.blogs .blogs-slider .box{
    margin:2rem 0;
    border:var(--border);
}

.blogs .blogs-slider .box:hover{
    border:var(--border-hover);
}

.blogs .blogs-slider .box .image{
    height: 25rem;
    width: 100%;
    overflow: hidden;
}

.blogs .blogs-slider .box .image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.blogs .blogs-slider .box:hover .image img{
    transform: scale(1.1);
}

.blogs .blogs-slider .box .content{
    padding:1.5rem;
}

.blogs .blogs-slider .box .content h3{
    font-size: 2.2rem;
    color:var(--black);
}

.blogs .blogs-slider .box .content p{
    font-size: 1.4rem;
    color:var(--light-color);
    padding:1rem 0;
    line-height: 2;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    font-size: 2.2rem;
    color:var(--black);
    padding:1rem 0;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.4rem;
    color:var(--light-color);
    padding:1rem 0;
}

.footer .box-container .box a i{
    color:var(--green);
    padding-right: .5rem;
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .box-container .box .map{
    width:100%;
}

.footer .share{
    padding:1rem 0;
    text-align: center;
}

.footer .share a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    color:#fff;
    background:var(--green);
    margin:0 .3rem;
    border-radius: 50%; 
}

.footer .share a:hover{
    background:var(--black);
}

.footer .credit{
    margin-top: 2rem;
    padding:0 1rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color:var(--light-color);
    text-align: center;
}

.footer .credit span{
    color:var(--green);
}

.loader-container{
    position: fixed;
    top:0; left: 0;
    height:100%;
    width: 100%;
    z-index: 10000;
    background:#f7f7f7;
    display: flex;
    align-items: center;
    justify-content: center;
}

.loader-container.active{
    display: none;
}

.loader-container img{
    height:10rem;
}

    </style>



    <?php
echo '<script type="text/javascript">jsFunction();</script>';
?>


</body>
</html>

