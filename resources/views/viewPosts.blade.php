<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>    

     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        
    
</head>
<body>
    
    <section>
        <div class="col-sm-12 text-center mb-5">
         <h1>Item Name</h1>
        </div>
    </section>
    
        <div class="container ">
            <div class="row mb-5 ">
                <div class="col-lg-6 mb-5 mb-lg-0 px-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="https://cdn.pixabay.com/photo/2021/11/19/08/20/strawberries-6808367_960_720.jpg" class="d-block w-100" >
                            </div>
                            <div class="carousel-item">
                            <img src="https://cdn.pixabay.com/photo/2022/07/10/17/22/poppies-7313398_960_720.jpg" class="d-block w-100" >
                            </div>
                            <div class="carousel-item">
                            <img src="https://cdn.pixabay.com/photo/2022/07/19/00/25/grass-7331052__340.jpg" class="d-block w-100">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                </div>

                <div class="col-lg-6 mb-4 mb-lg-0 px-4">
                    <h4><b>Catagory : </b>Electronics</h4>
                    <br>
                    <h4><b>Location : </b>Dhaka</h4>
                    <br>
                    <h4><b>Contact number : </b>014796586253</h4>
                    <br>
                    <h4><b>Description : </b></h4>
                    <p>The field of electronics is a branch of physics and electrical engineering that deals with the
                     emission, behaviour and effects of electrons using electronic devices. Electronics uses active 
                     devices to control electron flow by amplification and rectification, which distinguishes it from
                     classical electrical engineering, which only uses passive effects such as resistance, capacitance
                     and inductance to control electric current flow.</p>
                     <h1>rgdtg</h1>
               
                </div>


            </div>
        </div>
        <div class= "container">
            <div class="d-grid gap-2 col-4 mx-auto mb-5">
            <button class="btn btn-primary" type="button">Report This Post</button>
            </div>    
        </div>

        <footer class="bg-dark footer mt-lg-5">
            <hr>
            <div class="container-fluid text-center text-white">
                <p>Copyright&#9400;
                    <script>
                        document.write(new Date().getFullYear())
                    </script> | Lost & Found | All Rights Reserved
                </p>
                <div class="footer-links d-flex justify-content-around container mt-5">
                    <a href="">About Us</a>
                    <a href="">Terms & Conditions</a>
                    <a href="">Privacy Policy</a>
                    <a href="">Contact Us</a>
                </div>
            </div>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>