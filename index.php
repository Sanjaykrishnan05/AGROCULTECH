<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="index-style.css">
        <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
        <title>AGRICULTECH</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="">


</head>


<body style="background-color: rgb(126, 189, 126)";><header>
        <div class="banner">
            <video autoplay loop muted plays-inline>
                <source src="video.mp4" type="video/mp4">
            </video>
            <div class="navbar">
                <span style ="font-size: 30px;" text-align="left">AGRICULTECH</span>
            </p>
                <ul>
                    <li class="link"><a href="#"><i class="ri-home-fill"></i> Home</a></li>
                    <li class="link"><a href="#about"><i class="ri-article-fill"></i> About</a></li>
                    <li class="link"><a href="#ai"><i class="ri-robot-fill"></i> AI-ASSTITANCE</a></li>
                    <li class="link"><a href="#contact"><i class="ri-customer-service-fill"></i> Contact</a></li>
                </ul>
            </div>
            <div class="content">
                <h1><i>"" In the field of Agriculture,Digital marketing cultivates growth.""</i></h1>
                <div>
            <form action="login.php" method="POST">
                <button type="submit" name="register"><span style="color : white;  font-size: 30px">Sign-Up</span></button>
                </form></div>
        </div>
</div></header>
    <section id="about" class="">
        <div class= "about2 ">
            <div class="overlay-text">
         
        <p class="text-center"><span style ="color:white; font-size: 50px;">About Us</p><span>
        
        <p>This is an online portal for the <b>farmers</b> for their farming needs.</br>
        In this website the the farmers can sell their yields at a reasonable price.They can buy fertilizers, machineries.
      
</br>The <b>Sellers</b> can login to the system and sell fertilizers and machineries.
       
</br> The <b>Users</b> can login to the system and buy crops,fertilizers and machineries.
        </p> 
            </div>
    </div>
</section>
        <section>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="min-height: 30vh; max-height:30vh;">
                    <h5 class="card-title">
                    <i class="ri-seedling-fill"></i> Farmer
                    </h5>
                    <p class="card-text">Farmers can sell their yields at reasonable prices. They can also buy fertilizers, machiners, hire labours.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="min-height: 30vh; max-height:30vh;">
                    <h5 class="card-title">
                    <i class="ri-user-fill"></i>User
                    </h5>
                    <p class="card-text">Users can buy crops, machineries, fertilizers from Agricultural management system.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="min-height: 30vh; max-height:30vh;">
                    <h5 class="card-title">
                    <i class="ri-briefcase-2-fill"></i> Seller
                    </h5>
                    <p class="card-text">Sellers can sell machineries, fertilizers in Agricultural management system.</p>
                    </div>
                </div>
            </div>
        <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="min-height: 30vh; max-height:30vh;">
                    <h5 class="card-title">
                    <i class="ri-coins-fill"></i>Labour
                    </h5>
                    <p class="card-text">Labours can recieve Job hiring request from Farmers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ai" class="container-fluid mt-3">
        <div class ="span1">
        <div class="span12" >
              <form action="" method="post">
                
                <h3 class="text-center"><span  style ="font-size: 40px; color : rgb(14, 107, 21); ">AGRI-AI BOT</span></h3>
               <h3 class="text-center"><span  style ="font-size: 30px;"><i>AI-ASSTITANCE to the Farmers for Optimized Farming.</i></span></h3>
            </div>
            <div class="button" style="text-align: center;"><button type="submit" name="ai-button"><span style="color : white;  font-size: 30px">Open-Bot</span></button>
            </form></div>
        </div>
        
    </section>
    <section id="rate-us" class="container-fluid mt-3">
    <div class="review">
        <h3 class="text-center">Rate Us</h3>
        <form action="review.php" method="POST">
        <div class="form-group">
        <label for="formControlRange"><span style="color:white">Rate Us(0-5):</span></label>
        <input type="range" class="form-control-range" id="formControlRange" id="points" name="points" min="0" max="5" required>
        </div>
        <div class="form-group">
            <label for="feedback"><span style="color:white">Review:</span></label>
            <textarea class="form-control" rows="5" required name="review"></textarea>
        </div>
        <div class="form group">
            <button class="btn btn-primary form-control"><span style="color:white">submit:</span></button>
        </div>
        </form>
    </div>
    </section>


    <section id="contact" class="mt-4 container-fluid text-center bg-light" style="background-color: darkgreen;">
        <h3 class="text-center">Contact Us</h3>
        <p><b>Address:</b>Agrocultech<br>SANJAY.K BE<br>VELLORE<br>Pin: 632506</p>
        <p><b>Phone:</b> +91-6384659780</p>
        <p><b>E-mail:</b> Sanjaykrishnamurthy2003@gmail.com</p>
    </section>

    <footer class="bg-dark text-white container-fluid">
        <span>&copy AGRICULTECH</span>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>

</html>