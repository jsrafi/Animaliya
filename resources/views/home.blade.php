
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="{{url('css/style1.css')}}">
    <link rel="stylesheet" href="{{url('css/all.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">"
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 
</head>


<body>
    <nav>
    <input type="checkbox" id="check1">
                <label for="check1" class="checkbtn1">
                    <i class="fas fa-bars"></i></label>
                <label class="name">Animaliya</label>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="http://localhost/animalia/contact-form/contact.php">Contact Us</a></li>
                <li><a href="http://127.0.0.1:8000/dashboard">Profile&Logout</a></li>
               
            </ul>
        
        </nav>

    <!-- Use Carousel -->
    
    <section class="container mb-5 " style="margin-top: 100px; background-color:rgba(219, 166, 175, 0.25);">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row d-flex align-items-center p-5">
                    <div class="col-md-7">
                        <h1>PET FOOD</h1>
                        <p>From us one can have the best food for their pet . In our country its a hasel to find the pet food . So through our website you can bye pet food from your home . 
                        </p>
                        <br>
                        <a href="petfood"> <button type="button" class="btn btn-warning" style="margin-left: 100px">Visit Now</button></a>
                    </div>
                    <div class="col-md-5">
                        <img src="img/dogcat.png" class="photo d-block w-100" alt="...">
                    </div>
                </div>
              </div>
            
              <div class="carousel-item">
                <div class="row d-flex align-items-center p-5">
                    <div class="col-md-7">
                        <h1>PET VET</h1>
                        <p>In our country its quite tough to find a vet nearby . our website will make it easy for you . you can contact them via phone and can get the important information .</p>
                        <br>
                        <a href="doctor"><button type="button" class="btn btn-warning" style="margin-left: 100px">Visit Now</button></a>
                    </div>
                    <div class="col-md-5">
                        <img src="img/doc.png" class="photo d-block w-100" alt="...">
                    </div>
                </div>
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

    </section>

<!-- main part -->

    <main>
        <section id="Shoes" class="container overflow-hidden mt-5 mb-5 justify-content-around ">
            <div class="row gx-5">
              <div class="col">
               <div class="p-3 border align-items-center  justify-content-between d-flex rounded bg-warning">
                   <h1 class=" text-white">PET FOOD Shop</h1>
                   <img class=" w-25 " src="img/style-png.webp" alt="">
                </div>
              </div>
              <div class="col">
                <div class="p-3 border align-items-center text-white justify-content-between d-flex rounded bg-info">
                    <h1 class=" text-white">ANIMAL VET</h1>
                    <img class=" w-25 " src="img/1.png" alt="">
                </div>
              </div>
              <div class="col">
                <div class="p-3 border align-items-center text-white justify-content-between rounded d-flex bg-success">
                    <h1 class=" text-white" >RESCUE CENTER</h1>
                    <img class=" w-25 " src="img/3.png" alt="">
                </div>
              </div>
            </div>
        </section>

       
       


        
        
    </main>


</body>
</html>

