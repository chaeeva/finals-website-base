<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Ez Tickets</title>
</head>

<style> 
body{
    margin: 0px;
    background-color: #001f30;
}

h3{
    padding-top: 18px;
    padding-left: 20px;
    padding-right: 40px;
    margin: 0px;
    color: white;
}
ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #6baeb0;
    position: sticky;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

}

li {
    float: left;
}

#login-to-right {
    float: right;
    margin-right: 50px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 20px 18px;
    text-decoration: none;
    
}

li a:hover{
    background-color: #8ec3c5;
}

#search-bar{
    border-radius: 25px;
    border: none;
    width: 300px;
    height: 30px;
    margin-top: 14px;
    margin-left: 100px;
    margin-right: 20px;
}

.active{
    background-color: #54989b;
}

        .img-container {
            position: relative;
            display: inline-block;
        }
        .img-container img {
            display: block;
            width: 100%;
            height: auto;
			transition: filter 0.3s ease;
        }
		.btn-custom {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.9);
            display: none;
            background-color: #001F30; /* Custom background color */
            border-color: #2DBEF4; /* Custom border color */
			border-width: 2px;
            color: #fff; /* Custom text color */
            border-radius: 30px; /* Custom border radius */
            padding: 10px 30px; /* Custom padding */
            font-size: 1rem; /* Custom font size */
			opacity: 0; /* Start invisible */
			transition: all 0.3s ease; /* Smooth transition for all properties */
			animation: fadeInUp 1s ease forwards; /* Add animation */
        }
        .btn-hover {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
			
        }
		.img-container:hover img {
            filter: brightness(30%);  /* Dim the image */
        }
        .img-container:hover .btn-hover {
            display: block;
			opacity: 1; /* Fade in */
            transform: translate(-50%, -50%) scale(1); /* Scale up to normal size */
        }
		.btn-custom:hover {
            background-color: #2DBEF4; /* Custom hover background color */
            border-color: #2DBEF4; /* Custom hover border color */
        }
		        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translate(-50%, -100%);
            }
            100% {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }
		.custom-box {
            background-color: #6BAEB0; /* Box background color */
            padding: 3px; /* Padding inside the box */
            border-radius: 5px; /* Rounded corners */
        }
</style> 
<body>
 
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

     <div id="navbar">
        <div>
            <div id="logo"></div>
            <ul>
                <li><h3>EZ TICKETS</h3></li>
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="ticketOutlets.php">Ticket Outlets</a></li>
                <li><a href="ticketPurchase.php">Ticket Purchase</a></li>
                <li><a href="faqSupport.php">FAQ and Support</a></li>
                <li><input type="text" placeholder="   Search..." id="search-bar"></li>
                <li id="login-to-right"><a href="login.php">Login/Sign Up</a></li>
            </ul>
        </div>
    </div>
	
	
	
	<section>
	<div class="d-flex justify-content-center align-items-center" style="background: #ffffff; height: 78vh; background-size: 100%;">
	    <div class="container-fluid">   
            <div class="text-center bg-white container py-4 rounded-5 eee img-fluid">
                <h1 class="welcome pb-3">asdasdasfasf</h1> 
		        <h4 class="">asdasdasd</p>			
				<a href="#get-started-section" class="btn btn-primary btn-lg active py-3 px-5 mt-3 rounded-pill" role="button" aria-pressed="true">asdasfasf</a>
				<span class="button-space"></span>
				<a href="#get-started-section" class="btn btn-primary btn-lg active py-3 px-5 mt-3 rounded-pill" role="button" aria-pressed="true">asdasdasdf</a>
				<span class="button-space"></span>
		    </div>			 
        </div>		
      </div>		
	</section>
	
	
	
		<section class="mt-5">
        <div class="jumbotron jumbotron-fluid bg-light p-5 darkbluehead">
            <div class="container my-5">
			   <div class="p-5 bg-white rounded-4 col-md eeeee">
                 <h1 class="">asdasfasfasf</h1>
                 <p>ashuifkhjasfjkhasfasdasfasfsf  asfda fas f</p>
				 <a href="#" class="btn btn-primary btn-lg active py-3 px-5 mt-3 rounded-pill " role="button" aria-pressed="true ">asdasfgasgasgag</a>
				<span class="button-space " ></span>
			   </div>
            </div>
        </div>     
	</section>
	
	
	
<section style="background: #001F30;">
	    <div class="container ">
            <h2 class="text-center text-dark py-5 text-white fw-bold">UPCOMING EVENTS</h2> 
		</div> 
         <div class="container ">
            <div class="row ">
                <div class="col-md-3 py-4 pt-0 px-0 pb-5 ">
				
                    <div class="container-fluid text-center py-1 rounded-3 eeeee" >
                        <div class="card-body">
                            <div class="img-container">
                               <img src="images/testing_img.jpg" alt="qualify" class="img-fluid rounded-3" border="0">
                               <a href="#" class="btn btn-custom rounded-5 btn-hover fw-semibold">Buy Ticket</a>
                            </div>
                              <h2 class="card-title semi-welcome my-2 text-light text-start fs-4">Demon Slayer</h2>
                              <p class="card-text text-light text-start">Gateway Mall 2, Araneta City</p>
							  <p class="card-text text-light text-center fw-semibold custom-box " >Jul 20 - Oct 20,2024</p>
                        </div>	
                    </div>							
                </div> 
                <div class="col-md-3 py-4 pt-0 px-0 pb-5 ">
				
                    <div class="container-fluid text-center py-1 rounded-3 eeeee" >
                        <div class="card-body">
                            <div class="img-container">
                               <img src="images/testing_img.jpg" alt="qualify" class="img-fluid rounded-3" border="0">
                               <a href="#" class="btn btn-custom rounded-5 btn-hover fw-semibold">Buy Ticket</a>
                            </div>
                              <h2 class="card-title semi-welcome my-2 text-light text-start fs-4">Demon Slayer</h2>
                              <p class="card-text text-light text-start">Gateway Mall 2, Araneta City</p>
							  <p class="card-text text-light text-center fw-semibold custom-box " >Jul 20 - Oct 20,2024</p>
                        </div>	
                    </div>							
                </div> 
                <div class="col-md-3 py-4 pt-0 px-0 pb-5 ">
				
                    <div class="container-fluid text-center py-1 rounded-3 eeeee" >
                        <div class="card-body">
                            <div class="img-container">
                               <img src="images/testing_img.jpg" alt="qualify" class="img-fluid rounded-3" border="0">
                               <a href="#" class="btn btn-custom rounded-5 btn-hover fw-semibold">Buy Ticket</a>
                            </div>
                              <h2 class="card-title semi-welcome my-2 text-light text-start fs-4">Demon Slayer</h2>
                              <p class="card-text text-light text-start">Gateway Mall 2, Araneta City</p>
							  <p class="card-text text-light text-center fw-semibold custom-box " >Jul 20 - Oct 20,2024</p>
                        </div>	
                    </div>							
                </div> 
                <div class="col-md-3 py-4 pt-0 px-0 pb-5 ">
				
                    <div class="container-fluid text-center py-1 rounded-3 eeeee" >
                        <div class="card-body">
                            <div class="img-container">
                               <img src="images/testing_img.jpg" alt="qualify" class="img-fluid rounded-3" border="0">
                               <a href="#" class="btn btn-custom rounded-5 btn-hover fw-semibold">Buy Ticket</a>
                            </div>
                              <h2 class="card-title semi-welcome my-2 text-light text-start fs-4">Demon Slayer</h2>
                              <p class="card-text text-light text-start">Gateway Mall 2, Araneta City</p>
							  <p class="card-text text-light text-center fw-semibold custom-box " >Jul 20 - Oct 20,2024</p>
                        </div>	
                    </div>							
                </div> 				
                <div class="col-md-3 py-4 pt-0 px-0 pb-5 ">
				
                    <div class="container-fluid text-center py-1 rounded-3 eeeee" >
                        <div class="card-body">
                            <div class="img-container">
                               <img src="images/testing_img.jpg" alt="qualify" class="img-fluid rounded-3" border="0">
                               <a href="#" class="btn btn-custom rounded-5 btn-hover fw-semibold">Buy Ticket</a>
                            </div>
                              <h2 class="card-title semi-welcome my-2 text-light text-start fs-4">Demon Slayer</h2>
                              <p class="card-text text-light text-start">Gateway Mall 2, Araneta City</p>
							  <p class="card-text text-light text-center fw-semibold custom-box " >Jul 20 - Oct 20,2024</p>
                        </div>	
                    </div>							
                </div> 
                <div class="col-md-3 py-4 pt-0 px-0 pb-5 ">
				
                    <div class="container-fluid text-center py-1 rounded-3 eeeee" >
                        <div class="card-body">
                            <div class="img-container">
                               <img src="images/testing_img.jpg" alt="qualify" class="img-fluid rounded-3" border="0">
                               <a href="#" class="btn btn-custom rounded-5 btn-hover fw-semibold">Buy Ticket</a>
                            </div>
                              <h2 class="card-title semi-welcome my-2 text-light text-start fs-4">Demon Slayer</h2>
                              <p class="card-text text-light text-start">Gateway Mall 2, Araneta City</p>
							  <p class="card-text text-light text-center fw-semibold custom-box " >Jul 20 - Oct 20,2024</p>
                        </div>	
                    </div>							
                </div> 
                <div class="col-md-3 py-4 pt-0 px-0 pb-5 ">
				
                    <div class="container-fluid text-center py-1 rounded-3 eeeee" >
                        <div class="card-body">
                            <div class="img-container">
                               <img src="images/testing_img.jpg" alt="qualify" class="img-fluid rounded-3" border="0">
                               <a href="#" class="btn btn-custom rounded-5 btn-hover fw-semibold">Buy Ticket</a>
                            </div>
                              <h2 class="card-title semi-welcome my-2 text-light text-start fs-4">Demon Slayer</h2>
                              <p class="card-text text-light text-start">Gateway Mall 2, Araneta City</p>
							  <p class="card-text text-light text-center fw-semibold custom-box " >Jul 20 - Oct 20,2024</p>
                        </div>	
                    </div>							
                </div> 
                <div class="col-md-3 py-4 pt-0 px-0 pb-5 ">
				
                    <div class="container-fluid text-center py-1 rounded-3 eeeee" >
                        <div class="card-body">
                            <div class="img-container">
                               <img src="images/testing_img.jpg" alt="qualify" class="img-fluid rounded-3" border="0">
                               <a href="#" class="btn btn-custom rounded-5 btn-hover fw-semibold">Buy Ticket</a>
                            </div>
                              <h2 class="card-title semi-welcome my-2 text-light text-start fs-4">Demon Slayer</h2>
                              <p class="card-text text-light text-start">Gateway Mall 2, Araneta City</p>
							  <p class="card-text text-light text-center fw-semibold custom-box " >Jul 20 - Oct 20,2024</p>
                        </div>	
                    </div>							
                </div> 		
		
				
					
                </div> 
            </div>
		</div>
</section>



</body>
</html>
