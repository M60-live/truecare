<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TrueCare</title>
        <!-- Fonts -->
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white ">
            <img src="{{ '/img/TrueCare-trans-tri.png' }}" style="height:auto; width:250px;" />
  <div class="container text-end">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
       <p class="pt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
</svg> 21 Help Dr, Halfway House, Midrand, 0009</p>
      <ul class="navbar-nav text-black">
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
        
    </div>
  </div>
</nav>

<div class="container pb-5">
    <h1 class="text-center pt-5">A Holistic Approach To Every Smile</h1>
</div>

<div class="container justify-content-center gp-1">
    <div class="row">
        <!-- First Card -->
        <div class="col">
            <div class="card text-white">
                <img src="img/bg.jpg" class="card-img" alt="First card background">
                <div class="card-img-overlay">
                    <!-- Button trigger modal -->
                    <button  style="text-align: right;" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Make Your Booking
                    </button>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="card text-white">
            <img src="img/bg1.jpg" class="card-img" alt="Second card background">
            <div class="card-img-overlay">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Make Your Booking
                </button>
            </div>
        </div>
        </div>
        <!-- End Second Card -->
    </div>
</div>
    <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Booking Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Book</button>
      </div>
    </div>
  </div>
</div>    

<section>
  <div class="container pb-5">
    <div class="row">
      <div class="col">
        <h2 class="pt-5 pb-5">Our Services</h2>
      </div>
    </div>
    <div class="row pb-4">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Teeth Whitening</h6>
            <i style="font-size: small;">30min</i>
            <p class="card-text">Description: A professional gently brushing your teeth with clinical material that have immediate results.</p>
            <a href="#" class="btn btn-dark ">Make Booking</a>
          </div>
        </div>
      </div>
    </div>
     <div class="row pb-4">
      <div class="col-8">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Teeth Whitening</h6>
            <i style="font-size: small;">30min</i>
            <p class="card-text">Description: A professional gently brushing your teeth with clinical material that have immediate results.</p>
            <a href="#" class="btn btn-dark ">Make Booking</a>
          </div>
        </div>
      </div>
    </div>
     <div class="row ">
      <div class="col-lg-4 align-right">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Operating Hours</h5>
            <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
              <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
              </svg><b> Weekdays:</b> Mon: 8:30am - 4:30pm<br><b>Saturdays:</b> Walk-ins 10:00am - 13:00pm<br><b>Sundays:</b> <b style="color: red;">Closed</b>
            </p>
            <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
              </svg> 21 Help Dr, Halfway House, Midrand, 0009
            </p>
          </div>
        </div>
      </div>
    </div> 
  </div>

</section>    

<footer class="main-footer text-center"  style="background-color: black;">
		
			<section class="pt-5">
				<div class="container">
					<div class="row d-flex flex-wrap">
	
						<div class="lqd-column col-md-3 col-sm-6">
	
							<figure class="mb-4">
							<img src="{{ '/img/TrueCare-trans-tri.png' }}" style="height:auto; width:250px;" />
							</figure>
					    
	
						</div><!-- /.col-md-3 -->
	
						<div class="lqd-column col-md-3 col-sm-6">
	
							<h3 class="widget-title text-white font-size-15 text-uppercase ltr-sp-2">Menu</h3>
							<ul class="lqd-custom-menu reset-ul font-size-14 lh-2 ">
								<li class="mb-1 text-white"><a href="#" target="_blank" style="text-decoration:none; color: white">Booking</a></li>
								<li class="mb-1 text-white"><a href="#" target="_blank" style="text-decoration:none; color: white">Services</a></li>
								<li class="mb-1 "><a href="#" target="_blank" style="text-decoration:none; color: white">Contact</a></li>
							</ul>
	
						</div><!-- /.col-md-3 -->
	
						<div class="lqd-column col-md-3 col-sm-6">
	
							<h3 class="widget-title  text-white font-size-15 text-uppercase ltr-sp-2">Shop</h3>
							<ul class="lqd-custom-menu reset-ul font-size-14 lh-2">
								<li class="mb-1"><a href="#" target="_blank" style="text-decoration:none; color: white">Teas</a></li>
								<li class="mb-1"><a href="#" target="_blank" style="text-decoration:none; color: white">Tooth Paste</a></li>
								<li class="mb-1"><a href="#" target="_blank" style="text-decoration:none; color: white">Juices</a></li>
							</ul>
	
						</div><!-- /.col-md-3 -->

						<div class="lqd-column col-md-3 col-sm-6">
	
							<h3 class="widget-title  text-white font-size-15 text-uppercase ltr-sp-2">Socials</h3>

              <ul>
								<li><a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-facebook" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/></svg></a></li>
								<li><a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-instagram" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/></svg></a></li>	
							</ul>
	
						</div><!-- /.col-md-3 -->
	
						
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
	
			<section class="pt-5 pb-3 mt-70">
				<div class="container bt-fade-white-01 pt-5 pb-0">
					<div class="row">
						<div class="lqd-column col text-center">
							<p class="my-0 font-size-15 text-white">© Copyright 2024. Built by King Dev. Pty Ltd</p>
						</div><!-- /.col-md-6 text-md-right -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
</footer><!-- /.main-footer -->

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>
