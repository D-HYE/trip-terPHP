<?php include_once("../sub/layout/top.php"); ?>

<main id="section_wrap" class="page_login"> 
     <?php
        $sectionId = isset($_GET['user']) ? $_GET['user'] : 'userLogin';

        
        if($sectionId == 'userLogin'){
            include_once("./login/login.php");

        }else if($sectionId == 'userSignup'){

            include_once("./signUp/signUp.php");
        }

    ?>
</main>

<?php include_once("../sub/layout/bottom.php"); ?>