<?php include_once("../sub/layout/top.php"); ?>
    <main id="section_wrap" class="page_triptalk"> 
         <?php
            $activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'findPlan';

            switch ($activeTab){
                case "findPlan":
                    $sectionId = "findPlan";
                    include_once("./findPlan.php");
                    break;   
                case "board2":
                    $sectionId = "board2";
                    include_once("./board2.php");
                    break;   
                case "findFriend":
                    $sectionId = "findFriend";
                    include_once("./findFriend.php");
                    break;    
                default:
                    $sectionId = "findPlan";
                    include_once("./findPlan.php");
                    break;    
            };
        ?>
    </main>
<?php include_once("../sub/layout/bottom.php"); ?>
