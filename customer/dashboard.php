<?php include "../auth/auth.php";?>
<?php include "authentication.php";?>

<html>

<head>
<title>Dashboard</title>
<link rel="stylesheet" href="../css/style.css">
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap"
      rel="stylesheet"
    />

</head>
<body>
<!------including header here --------->
<?php include "header.php";?>
<!------end header here --------->
<div class="container-fluid">
      <!-- banner ni nato -->
      <div class="row banner" color="primary">
        <div class="row col-md inner-banner m-4">
          <div class="col-md-6 content bg-circle align-self-center text-center">
            <h1 class="text-center">Hello Customer!</h1>
            <h5>Enjoy This Amazing Online Store</h5>
            <p class="dummy-desc">
             Jesel Coleen
            </p>
            <div class="button">
              <button type="button" class="btn">
                Enjoy Shopping <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <div class="col-md-6 image alig-end">
            <div class=""></div>
          </div>
        </div>
      </div>
    </div>
    <!-- About daw -->
    <div class="container text-center about my-5">
      <div class="row">
        <div class="col-lg col-md col-sm col-xs">
          <h2 class="custom-title my-5">
            What We Offer
          </h2>
        </div>
      </div>
    </div>
    <!-- mga baligya -->
      <div class="container" style="width: 65%">
     


    <!--  mao ni gikan sa data base -->
      <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                      <div class="col-md-4">
                      <div class="card" style="width: 18rem;">


                            <div class="product">

                                <img class="card-img-top"  alt="Card image cap" src="<?php echo $row["image"]; ?>" class="img-responsive">

                                <h5 class="text-info"><?php echo $row["productname"]; ?></h5>
                                <h5 class="text-danger">P <?php echo $row["price"]; ?></h5>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["productname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">



                            </div>

                    </div>
                  </div>
             
    <?php
                }
            }
        ?>  
    <!-- cart -->
 <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-widget one">
            <strong class="logo">Eggtraordinary</strong>
            <div class="row">
              <div class="col-md">
                <p class="dummy-desc">
                unsa ni
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 footer-widget two">
            <h5>Help Us!</h5>
             <p class="dummy-desc">
                  by providing feedback 
                </p>
          </div>
          <div class="col-md-3 footer-widget three">
            <h5>Folow Us on Social Media</h5>
            <div class="row"></div>
            <div class="social-icons col-md">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-google"></a>
              <a href="#" class="fa fa-linkedin"></a>
              <a href="#" class="fa fa-youtube"></a>
              <a href="#" class="fa fa-instagram"></a>
            </div>
          </div>
          <div class="col-md-3 footer-widget four">
            <h5>What's New</h5>
            <div class="news">
              <div></div>
              <div class="media my-2">
                <img
                  src="a.jpg"
                  class="mx-2"
                  height="64px"
                  width="64px"
                  alt="..."
                />
                <div class="media-body">
                  kwak kwak.
                </div>
              </div>
              <div class="media">
                <img
                  src="a.jpg"
                  class="mx-2"
                  height="64px"
                  width="64px"
                  alt="..."
                />
                <div class="media-body">
                  kwek kwek.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright text-center">
      <span class="text-center"
        >Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2020 |
        Developed By <b> Egg egg eggegegege</b></span
      >
    </div>

</body>
</html>