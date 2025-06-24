<?php include_once("../sub/layout/top.php"); ?>

<main class="page_plan">
    <section class="" >
        <div class="section_banner">
            <div class="color-active-blue">
                <h3>MY FEEL:TER</h3>
                <p>나만을 위한 여행, 특별한 나만의 여행 만들어보세요</p>
            </div>
        </div>
        <div class="section_list">
            <ul class="d-flex justify-content-center container_m">
                <li class="active"><a href="./tripRoute.php?tab=myfeelter" class="d-flex">MY FEEL:TER<span></span></a></li>
                <li><a href="./tripRoute.php?tab=planmaker" class="d-flex">계획짜기<span></span></a></li>
            </ul>
        </div>
        
        <div class="container" id="myftresult">
            <h3 class="d-flex justify-content-center align-items-center"><span>여행자님께 추천드리는 여행지입니다.</span></h3>
            <ul class="result d-flex justify-content-center align-items-center">
                <li class="img-wrap">
                    <img src="https://trip-ter.vercel.app/img/main_img/md_slide3.jpg" alt="대표이미지" class="profile-img" >
                    <a href="" class="txt-wrap">국내여행지</a>
                </li>
                <li class="img-wrap">
                    <img src="https://trip-ter.vercel.app/img/main_img/md_slide3.jpg" alt="대표이미지" class="profile-img">
                    <a href="" class="txt-wrap">해외여행지</a>
                </li>
                <li class="img-wrap">
                    <img src="https://trip-ter.vercel.app/img/main_img/md_slide3.jpg" alt="대표이미지" class="profile-img">
                    <a href="" class="txt-wrap">MD추천</a>
                </li>
            </ul>
            <ul class="result_bt d-flex justify-content-center align-items-center">
                <li class="restart"><a href="/page/tripRoute.php?tab=myfeelter"></a>다시하기</li>
                <li class="save"><a href=""></a>결과 저장하기</li>
                <li class="share"><a href=""></a>공유하기</li>
            </ul>        
            
           
        
            <div class="review d-flex justify-content-center align-items-center">
                <ul class="review-list">
                    <li class="d-flex justify-content-center align-items-center">
                        <div class="review-info">
                            <img src="https://trip-ter.vercel.app/img/main_img/md_slide3.jpg" alt="대표이미지" class="review-img">
                            <strong class="nickname">닉네임</strong>
                            <p class="review-title">후기 제목</p>
                            <a href="http://tripterweb.dothome.co.kr/board/triptalk.php?tab=board2" class="review-btn">후기 확인하기</a>
                        </div>                             
                        <div class="review-info">
                            <img src="https://trip-ter.vercel.app/img/main_img/md_slide3.jpg" alt="대표이미지" class="review-img">
                            <strong class="nickname">닉네임</strong>
                            <p class="review-title">후기 제목</p>
                            <a href="http://tripterweb.dothome.co.kr/board/triptalk.php?tab=board2" class="review-btn">후기 확인하기</a>
                        </div>                             
                        <div class="review-info">
                            <img src="https://trip-ter.vercel.app/img/main_img/md_slide3.jpg" alt="대표이미지" class="review-img">
                            <strong class="nickname">닉네임</strong>
                            <p class="review-title">후기 제목</p>
                            <a href="http://tripterweb.dothome.co.kr/board/triptalk.php?tab=board2" class="review-btn">후기 확인하기</a>
                        </div>                             
                        <div class="review-info">
                            <img src="https://trip-ter.vercel.app/img/main_img/md_slide3.jpg" alt="대표이미지" class="review-img">
                            <strong class="nickname">닉네임</strong>
                            <p class="review-title">후기 제목</p>
                            <a href="http://tripterweb.dothome.co.kr/board/triptalk.php?tab=board2" class="review-btn">후기 확인하기</a>
                        </div>                             
                        <div class="review-info">
                            <img src="https://trip-ter.vercel.app/img/main_img/md_slide3.jpg" alt="대표이미지" class="review-img">
                            <strong class="nickname">닉네임</strong>
                            <p class="review-title">후기 제목</p>
                            <a href="http://tripterweb.dothome.co.kr/board/triptalk.php?tab=board2" class="review-btn">후기 확인하기</a>
                        </div>                             
                    </li>
                </ul>

                <!-- 나중에 absolute로 위로 띄우고 백그라운드 그라데이션 걸기-->
                <div class="before-login"> 
                <h3><span>트립터 여행자님들의 계획과 후기를 확인해보세요!</span></h3>
                <button class="login_bt"><p class="login_bt_txt">로그인 하기</p></button>
                </div> 
        </div>
</div> 

</section>


</main>

<?php include_once("../sub/layout/bottom.php"); ?>