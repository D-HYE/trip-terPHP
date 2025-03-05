<section id="<?php echo $sectionId?>">
    <div class="section_banner" >
        <div class="color-active-blue">
            <h3>동행 구해요</h3>
            <p>나와 딱 맞는 동행 여행자를 구해보세요</p>
        </div>
    </div>
    <div class="section_list">
        <ul class="d-flex justify-content-center container_m">
            <li ><a href="./triptalk.php?tab=board1" class="d-flex">계획 둘러보기<span></span></a></li>
            <li><a href="./triptalk.php?tab=board2" class="d-flex">후기 둘러보기<span></span></a></li>
            <li class="active"><a href="./triptalk.php?tab=findFriend&mode=findFriendList" class="d-flex">동행구해요<span></span></a></li>
        </ul>
    </div>
    <?php
        $mode = isset($_GET['mode']) ? $_GET['mode'] : 'findFriendList';
        switch ($mode) {

            case 'findFriendList':
                include_once('findFriendList.php');
                break;
            case 'findFriendView':
                include_once('findFriendView.php');
                break;
            case 'findFriendWrite':
                include_once('findFriendWrite.php');
                break;
            default:
                echo '잘못된 mode 값입니다.';
                break;
        }
    ?>


</section>