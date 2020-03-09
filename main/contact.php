<div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>You can stop by our office or just use the contact form below for any questions and inquiries</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>2nd Floor, Sunshine Building, Muthaiga Square, Nairobi</li>
                            <li><i class="fas fa-phone"></i><a href="tel:0715773374">+254715773374</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:application@ritiassociation.or.ke">application@ritiassociation.or.ke</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:director.ritiassociation@gmail.com">director.ritiassociation@gmail.com</a></li>
                        </ul>
                        <h3>Follow RITI On Social Media</h3>

                        <span class="fa-stack">
                            <a target="_blank" href="https://www.facebook.com/stnicholasrehab/?view_public_for=103764411216977">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <!-- <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span> -->
                        <span class="fa-stack">
                            <a target="_blank" href="https://www.instagram.com/rehab.nicholas/">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <!-- <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span> -->
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                <?php if(isset($_SESSION['message'])): ?>
                    <?php require 'message.php'; ?>
                <?php endif ?>
                   
                    
                    <!-- Contact Form -->
                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                       
                        <div class="form-group">
                            <button name="contact" type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->