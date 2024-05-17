<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/homeStyle.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>I-GADGET</title>
</head>
<body class="animate__animated animate__bounceIn">

  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">iGADGET</a>
        </div>
        
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="category.php">Categories</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span></a></li>
            </ul>

            <div class="nav navbar-nav form-inline navbar-right">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</nav>

        <section id="home" class="home">
            <aside class="col-md-4">
              <div class="carousel slide" data-ride="carousel" id="c1">
                <ol class="carousel-indicators">
                    <li data-target="#c1" data-slide-to="0"></li>
                    <li data-target="#c1" data-slide-to="1"></li>
                    <li data-target="#c1" data-slide-to="2"></li>
                    <li data-target="#c1" data-slide-to="3"></li>
                    <li data-target="#c1" data-slide-to="4"></li>
                </ol>
    
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="image/1r.png">
                    </div>
    
                    <div class="item">
                        <img src="image/2r.png">
                    </div>
    
                    <div class="item">
                        <img src="image/3r.png">
                    </div>
                
                    <div class="item">
                        <img src="image/4r.png">
                    </div>

                    <div class="item">
                      <img src="image/5r.png">
                  </div>
                </div>
              </div>
            </aside>

            <header class="col-md-5">
              <div class="content">
                  <h1 class="title">WELCOME</h1>
                  <p class="description">Welcome to iGadget!, your one-stop shop for all things tech! We offer a wide range of high-quality laptops, mobile phones, PCs, tablets, 
                    and gaming consoles to meet all your electronic needs. Whether you're a student, a professional, or a gaming enthusiast, iGadget has the perfect device for you. 
                    Enjoy competitive prices, fast shipping, and exceptional customer service with every purchase. Explore the latest in technology and elevate your digital experience with iGadget!</p>
                    <p class="more">Scroll down to see more!</p>
              </div>
            </header>
        </section>

        <section id="categories" class="home">
            <div class="container">
              <h1>Categories</h1>
              <p>Explore Our Products</p>
              
                <div class="scrollable-cards" id="scrollable-cards">
                  <div class="card">
                    <img src="image/1.jpg" class="card-img-top" alt="Mobile Phone">
                    <div class="card-body">
                      <h5 class="card-title">Mobile Phone</h5>
                      <a href="category.php" class="btn btn-primary">Explore</a> 
                    </div>
                  </div>
            
                  <div class="card">
                    <img src="image/2.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                      <h5 class="card-title">Personal Computer</h5>
                      <a href="pc.php" class="btn btn-primary">Explore</a> 
                    </div>
                  </div>
            
                  <div class="card">
                    <img src="image/3.jpg" class="card-img-top" alt="Personal Computer">
                    <div class="card-body">
                      <h5 class="card-title">Laptop</h5>
                      <a href="laptop.php" class="btn btn-primary">Explore</a> 
                    </div>
                  </div>
            
                  <div class="card">
                    <img src="image/4.jpg" class="card-img-top" alt="Laptop">
                    <div class="card-body">
                      <h5 class="card-title">Consoles</h5>
                      <a href="console.php" class="btn btn-primary">Explore</a> 
                    </div>
                  </div>
            
                  <div class="card">
                    <img src="image/5.jpg" class="card-img-top" alt="Consoles">
                    <div class="card-body">
                      <h5 class="card-title">Tablet</h5>
                      <a href="tablet.php" class="btn btn-primary">Explore</a> 
                    </div>
                  </div>
                </div>

                <p>Horizontally Scrollable</p>
              </div>
        </section>
   
  <footer>
    <p>© 2024 iGadget. All rights reserved.</p>
  </footer>

    <!-- script para sa horizontal scrolling function -->
    <script>
        var isDown = false;
        var startX;
        var scrollLeft;
    
        document.getElementById('scrollable-cards').addEventListener('mousedown', function(e) {
          isDown = true;
          startX = e.pageX - this.offsetLeft;
          scrollLeft = this.scrollLeft;
        });
    
        document.getElementById('scrollable-cards').addEventListener('mouseleave', function() {
          isDown = false;
        });
    
        document.getElementById('scrollable-cards').addEventListener('mouseup', function() {
          isDown = false;
        });
    
        document.getElementById('scrollable-cards').addEventListener('mousemove', function(e) {
          if (!isDown) return;
          e.preventDefault();
          var x = e.pageX - this.offsetLeft;
          var walk = x - startX;
          this.scrollLeft = scrollLeft - walk;
        });
      </script>
    

</body>
</html>