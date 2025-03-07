<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Festava Live - Ticket HTML Form</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">
<!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->

    </head>
    
    <body>

        <main>

            <header class="site-header">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12 col-12 d-flex flex-wrap">
                            <p class="d-flex me-4 mb-0">
                                <i class="bi-person custom-icon me-2"></i>
                                <strong class="text-dark">Welcome to Music Festival 2023</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </header>


            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        Festava Live
                    </a>

                    <a href="ticket.html" class="btn custom-btn d-lg-none ms-auto me-4">Buy Ticket</a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.html#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.html#section_2">About</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.html#section_3">Artists</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.html#section_4">Schedule</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.html#section_5">Pricing</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="index.html#section_6">Contact</a>
                            </li>
                        </ul>

                        <a href="ticket.html" class="btn custom-btn d-lg-block d-none">Buy Ticket</a>
                    </div>
                </div>
            </nav>


            <section class="ticket-section section-padding">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-10 mx-auto">
                            <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                <h2 class="text-center mb-4">Get started here</h2>

                                <div class="ticket-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="ticket-form-name" id="ticket-form-name" class="form-control" placeholder="Full name" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="ticket-form-email" id="ticket-form-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                        </div>
                                    </div>

                                    <input type="tel" class="form-control" name="ticket-form-phone" placeholder="Ph 085-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">

                                    <h6>Choose Ticket Type</h6>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-check form-control">
                                                <input class="form-check-input" type="radio" name="TicketForm" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Eary bird $120
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-check form-check-radio form-control">
                                                <input class="form-check-input" type="radio" name="TicketForm" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Standard $240
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="number" name="ticket-form-number" id="ticket-form-number" class="form-control" placeholder="Number of Tickets" required>

                                    <textarea name="ticket-form-message" rows="3" class="form-control" id="ticket-form-message" placeholder="Additional Request"></textarea>

                                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Buy Ticket</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </section>
        </main>


        <?php
        $file_path = "parts/footer.php";
        if(!include($file_path)) {
            echo"Failed to include $file_path";
        }
        ?>

<!--

T e m p l a t e M o

-->
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>