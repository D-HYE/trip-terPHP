<?php require_once '../config/db.php';?>

<section>
    <div class="section_banner" id="<?php echo $sectionId?>">
        <div class="color-active-blue">
            <h3>계획 둘러보기</h3>
            <p>다른 여행자님의 계획을 훔쳐보세요</p>
        </div>
    </div>
    <div class="section_list">
        <ul class="d-flex justify-content-center container_m">
            <li class="active"><a href="./triptalk.php?tab=board1" class="d-flex">계획 둘러보기<span></span></a></li>
            <li><a href="./triptalk.php?tab=board2" class="d-flex">후기 둘러보기<span></span></a></li>
            <li ><a href="./triptalk.php?tab=findFriend&mode=findFriendList" class="d-flex">동행구해요<span></span></a></li>
        </ul>
    </div>
    <div class="container_m">
        여기가 계획 둘러보기 페이지
    </div>
</section>