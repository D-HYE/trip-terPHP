<?php include_once("../sub/layout/top.php"); ?>
    <main id="section_wrap" class="page_triptalk"> 
         <?php
            $activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'findFriend';

            switch ($activeTab){
                case "board1":
                    $sectionId = "board1";
                    include_once("./board1.php");
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
                    $sectionId = "findFriend";
                    include_once("./findFriend.php");
                    break;    
            };
        ?>
    </main>
<?php include_once("../sub/layout/bottom.php"); ?>
