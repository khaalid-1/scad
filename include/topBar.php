<div class="wrapper  " >
            <!-- Top Bar Start -->
            <div class="top-bar"  >
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12 d-none d-lg-block">
                        <h6 class="text-dark">  <i class="flaticon-call"></i>
                        +2526-15940303/+252-65940303 </h6>
                        </div>
                        <div class="col-lg-4 col-md-12 text-center">
                            <div class="logo text-center">
                                <a href="#">
                                    <h1>Scad</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 text-right d-none d-lg-block">
                            
                        <div class="">
                                    <a class="header-social " href=""><i class="fab fa-twitter "></i></a>
                                    <a class="header-social" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="header-social" href=""><i class="fab fa-youtube"></i></a>
                                    <a class="header-social" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="header-social" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar"  >
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link active">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                                <a href="service.php" class="nav-item nav-link">Service</a>
                                <a href="team.php" class="nav-item nav-link">Team</a>
                                <a href="portfolio.php" class="nav-item nav-link">Project</a>
                                <!-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Blog Page</a>
                                        <a href="single.html" class="dropdown-item">Single Page</a>
                                    </div>
                                </div> -->
                                <a href="contact.php" class="nav-item nav-link">Contact</a>
                            </div>
                            
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            <script>
        // Get all nav links
        const navLinks = document.querySelectorAll('.nav-link');
        // Get the current page URL
        const currentPage = window.location.pathname.split('/').pop();

        // Loop through each link
        navLinks.forEach(link => {
            // Check if the link's href matches the current page
            if (link.getAttribute('href') === currentPage) {
                // Add the 'active' class
                link.classList.add('active');
            } else {
                // Remove the 'active' class if not on the current page
                link.classList.remove('active');
            }
        });
    </script>