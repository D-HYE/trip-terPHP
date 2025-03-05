<?php include_once("../sub/layout/top.php"); ?>


<main id="section_wrap" class="page_plan">
    <?php

        $sectionId = $_GET['tab'];

        if($sectionId == 'myfeelter'){
            include_once("./myfeelter.php");

        }else if($sectionId == 'planmaker'){

            include_once("./planmaker.php");
        }
    ?>


</main>


<?php include_once("../sub/layout/bottom.php"); ?>