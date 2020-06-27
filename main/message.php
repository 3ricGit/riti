<div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']); 
            session_unset();

            ?>

</div>