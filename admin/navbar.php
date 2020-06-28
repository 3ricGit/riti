<nav id="riti-Navbar" class="navbar navbar-expand-md navbar-dark navbar-custom top-nav-collapse fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

    <!-- Image Logo -->

    <a class="navbar-brand" href="#"><img src="../images/final.png" alt="logo" style="width: 100%; height:auto;"></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?php echo url_for('index.php')?>">APPLICATIONS</a>
            </li>


            <!-- Dropdown Menu -->
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?php echo url_for('contact.php')?>">CONTACTS</a>
            </li>

            <!-- end of dropdown menu -->

            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?php echo url_for('login.php')?>">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?php echo url_for('logout.php')?>">LOGOUT</a>
            </li>



        </ul>

    </div>
</nav> <!-- end of navbar -->