<?php
require './processor/processor.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './main/head.php';?>
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <?php require './main/preloader.html';?>
    <!-- end of preloader -->


    <!-- Navbar -->
    <?php require './main/navbar.php';?>
    <!-- end of navbar -->

    <div class="logo-main-separator"></div>

    <!-- Header -->
    <header id="header" class="header">

        <!-- mobile -->
        <div class="header-content">
            <div class="container mobile">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>RITI <span id="js-rotating">Association of Unemployed Professionals</span></h1>
                            <p class="p-heading p-large">
                                <marquee behavior="" direction="alternate">Restoring Lost Hope, Dreams and Talents
                                </marquee>
                                <marquee behavior="" direction="right">Financing Dreams, and Talents</marquee>

                            </p>
                            <a class="btn-solid-lg page-scroll" href="#intro">DISCOVER</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->



        <!-- desktop -->
        <div class="logo-container">
            <div class="logo-image-center">
                <img src="./images/RITILOGOFINAL(1).png" alt="logo" class="logo-image">

            </div>
            <div class="discover-btn">
                <a class="btn-solid-lg page-scroll" href="#intro">DISCOVER</a>
            </div>
        </div>
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <?php require './main/about-summary.html'; ?>
    <!-- end of intro -->


    <!-- Description -->
    <div class="cards-1 description-services">
        <div class="container">
            <h2 class="serivces-title">What we Offer</h2>
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card p-3 shadow-lg rounded">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-handshake fa-stack-1x "></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title text-center">Employement Opportunities</h4>
                            <p>RITI Association acts as an employment recruitment agency through the National Employment
                                Agency to provide direct or indirect employment and internship opportunities.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card p-3 shadow-lg">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title text-center">Business Enterprises</h4>
                            <p>RITI provides business avenues awaiting ready and energetic professionals to act as
                                directors. RITI business enterprises accommodate all professionals from various domains
                            </p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card p-3 shadow-lg">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-chart-pie fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title text-center">Loans and Youth Funds</h4>
                            <p>RITI Association will guide Youth on how to access Government Funds and provide them with
                                affordable loans to start income generation projects.</p>
                        </div>
                    </div>
                    <!-- end of card -->
                    <!-- Card -->
                    <div class="card p-3 shadow-lg">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-bed fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title text-center">Rehabilitation</h4>
                            <p>RITI Association through St Nicholas Rehabilitation Center and Nursing Home provides
                                rehabilitation services to achieve high-level functional recovery.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card p-3 shadow-lg">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-users fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title text-center">Counselling</h4>
                            <p>RITI association provides counseling sessions that include group counselling, individual
                                therapy and personalized counselling that focus on specific problems</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->





    <!-- Details 2 -->
    <div class="tabs">
        <div class="container">
            <div class="row">
                <div class="area-1 col-12 col-md-6 ">
                    <div class="tabs-container">

                        <!-- Tabs Links -->
                        <ul class="nav nav-tabs" id="ariaTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab"
                                    aria-controls="tab-2" aria-selected="false"><i class="fas fa-th"></i>
                                    Eligibility</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab"
                                    aria-controls="tab-3" aria-selected="false"><i class="fas fa-th"></i> RITI
                                    Businesses</a>
                            </li>
                        </ul>
                        <!-- end of tabs links -->

                        <!-- Tabs Content -->
                        <div class="tab-content" id="ariaTabsContent">

                            <!-- Tab -->
                            <div class="tab-pane fade" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                                <h4>Business Services For Companies</h4>
                                <p>RITI Association provides the most innovative and customized business services in the
                                    industry. Our <a class="green page-scroll" href="#services">Services</a> section
                                    shows how
                                    flexible we are for all types of budgets.</p>

                                <!-- Progress Bars -->
                                <div class="progress-container">
                                    <div class="title">Business Development 100%</div>
                                    <div class="progress">
                                        <div class="progress-bar first" role="progressbar" aria-valuenow="0"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="title">Opportunity Spotting 76%</div>
                                    <div class="progress">
                                        <div class="progress-bar second" role="progressbar" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="title">Online Marketing 90%</div>
                                    <div class="progress">
                                        <div class="progress-bar third" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div> <!-- end of progress-container -->
                                <!-- end of progress bars -->

                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                            <!-- Tab -->
                            <div class="tab-pane fade show active" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                                <ul class="list-unstyled li-space-lg first mr-2">
                                    <li class="media">
                                        <div class="media-bullet">1</div>
                                        <div class="media-body"><strong></strong> One should be above the age of 18.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-bullet">2</div>
                                        <div class="media-body"><strong></strong> Must be a holder of diploma,
                                            bachelors,
                                            master’s, or/and Ph.D. in any field.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-bullet">3</div>
                                        <div class="media-body"><strong></strong> Must be a registered member.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-bullet">4</div>
                                        <div class="media-body"><strong></strong> Must be free from alcohol and drug
                                            abuse.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-bullet">5</div>
                                        <div class="media-body"><strong></strong>One must be ready to undergo training
                                            and
                                            counseling sessions.
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled li-space-lg last">

                                    <li class="media">
                                        <div class="media-bullet">6</div>
                                        <div class="media-body"><strong></strong> One must be disciplined, social, and
                                            ready to
                                            work in a group.</div>
                                    </li>
                                    <li class="media">
                                        <div class="media-bullet">7</div>
                                        <div class="media-body"><strong></strong> One must meet the requirement of
                                            leadership
                                            and integrity.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-bullet">8</div>
                                        <div class="media-body"><strong></strong> One must be willing to undergo the
                                            rehabilitation process if battling alcoholism and substance use
                                            disorders.</div>
                                    </li>

                                </ul>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                            <!-- Tab -->
                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                                <ul class="list-unstyled li-space-lg">
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Counselling Centers </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Group of Psychiatric Clinics</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">St Nicholas School of Counseling Psychology</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Medical Clinics</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI food and Dietic Clinic</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Medical Laboratory Center</div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Dental Clinics </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Physiotherapy Clinics </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Construction Company LTD. </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Auto Garage </div>
                                    </li>

                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">St Nicholas Nursing Home </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Horticulture Grounds </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Food Packaging and Supplies </div>
                                    </li>
                                    <li class="media">
                                        <i class="fas fa-square"></i>
                                        <div class="media-body">RITI Uniform Distributors </div>
                                    </li>
                                </ul>
                            </div> <!-- end of tab-pane -->
                            <!-- end of tab -->

                        </div> <!-- end of tab-content -->
                        <!-- end of tabs content -->

                    </div> <!-- end of tabs-container -->
                </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space -->
                <div class="area-2 col-12 col-md-6 h-100">

                    <img class="img-fluid" src="./images/bg.jpg" alt="" srcset="">

                </div>
            </div>
        </div>
    </div> <!-- end of tabs -->
    <!-- end of details 2 -->



    <!-- Call Me -->
    <div id=" callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CALL US</div>
                        <h2 class="white">Have Us Contact You By Filling And Submitting The Form</h2>
                        <p class="white">You are just a few steps away from joining the association. Just fill in
                            the
                            form and send it to us and we'll get right back with a call to help you decide what
                            service
                            package works.</p>
                        <ul class="list-unstyled li-space-lg white">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">It's very easy just fill in the form so we can call</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">During the call we'll require some info about you</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Don't hesitate to email us for any questions or inquiries
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <?php 
                            //  decaring variables
                            $email = '';
                            $name = '';
                            $message='';

                            if(is_post_request()) {
                                $email = clean_text($_POST['email']);
                                $name = clean_text($_POST['name']);
                                $message =clean_text($_POST['message']);

                                $results =insert_into_contact($db,$name, $email, $message);

                               
                            }

                            ?>

                    <!-- Call Me Form -->
                    <form id="callusForm" data-toggle="validator" method="post"
                        action="<?php echo $_SERVER['PHP_SELF'];?>" data-focus="false">
                        <div class="form-group">
                            <label for="lname">Name</label>
                            <input type="text" class="form-control-input" id="name" name="name" required>

                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="lemail">Email</label>
                            <input type="email" class="form-control-input" id="email" name="email" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control-input" id="message" name="message" required></textarea>
                        </div>


                        <div class="form-group">
                            <button id="callusbtn" type="submit" class="form-control-submit-button">Send</button>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of call me form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of call me -->






    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/work.jpeg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <h2>We're Passionate About Delivering Growth Services</h2>
                        <p>Our goal is to provide the right business growth services at the appropriate time so
                            professionals can benefit from the created momentum and thrive for a long period of time
                        </p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Everything we recommend has direct positive impact</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">You will become an important partner the association</div>
                            </li>
                        </ul>


                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->
    <?php include './main/button.html' ?>







    <?php require './main/footer.php'; ?>



</body>

</html>