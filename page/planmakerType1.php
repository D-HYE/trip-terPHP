
<?php include_once("../sub/layout/top.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.8.1/nouislider.css" integrity="sha512-MKxcSu/LDtbIYHBNAWUQwfB3iVoG9xeMCm32QV5hZ/9lFaQZJVaXfz9aFa0IZExWzCpm7OWvp9zq9gVip/nLMg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.8.1/nouislider.min.js" integrity="sha512-g/feAizmeiVKSwvfW0Xk3ZHZqv5Zs8PEXEBKzL15pM0SevEvoX8eJ4yFWbqakvRj7vtw1Q97bLzEpG2IVWX0Mg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<main class="page_plan">
<section id= "planmakerType1">
    <div class="section_banner pc">
        <div>
            <h3>계획짜기</h3>
            <p>나만을 위한 여행, 나만을 위한 이벤트도 놓치지마세요</p>
        </div>
    </div>
    <div class="section_list">
        <ul class="d-flex justify-content-center container_m">
            <li><a href="./tripRoute.php?tab=myfeelter" class="d-flex">MY FEEL:TER<span></span></a></li>
            <li class="active"><a href="./tripRoute.php?tab=planmaker" class="d-flex">계획짜기<span></span></a></li>
        </ul>
    </div>
    <!-- 장바구니 퀵메뉴 -->
    <div class="d-flex justify-content-end align-items-end">
        <div class="wishlist_quick d-flex justify-content-center align-items-center">
            <button class="wishlist_icon"alt="장바구니"></button>
        </div>

        <div class="wishlist_list">
            <div>
                <div class="타이틀">
                    <span><b>김효정곤듀예요</b>님의 계획 짜기</span>
                </div>
                <div class="유저정보">
                    <div class="여행지">
                        <ul>
                            <li>출발지</li>
                            <li>대한민국 인천</li>
                        </ul>
                        <ul>
                            <li>도착지</li>
                            <li>대만 가오슝</li>
                        </ul>
                    </div>
                    <div class="date">
                        <ul>
                            <li>여행날짜</li>
                            <li>2025.02.18 ~ 2025.03.18</li>
                        </ul>
                    </div>
                    <div class="people">
                        <ul>
                            <li>인원</li>
                            <li>2명</li>
                        </ul>
                        <ul>
                            <li><a href="">수정하기</a></li>
                        </ul>
                    </div>
                </div>
                <div class="찜목록">
                    <div class="항공">
                        <ul>
                            <li>항공권</li>
                            <li><a href="">가오슝가는편항공권</a></li>
                        </ul>
                    </div>                
                    <div class="숙소">
                        <ul>
                            <li>숙소</li>
                            <li><a href="">가오슝숙소</a></li>
                        </ul>
                    </div>                
                    <div class="티켓">
                        <ul>
                            <li>티켓</li>
                            <li><a href="">선택하러 가기</a></li>
                        </ul>
                    </div>                
                </div>
                <div class="구매창가기버튼">
                    <button><span>나의 찜과 함께 계획 짜기</span></button>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <!-- 무슨 태그 쓸지 모름 / 저장된 계획 -->
        <div class="plan_info d-flex align-items-center">
            <ul class="d-flex order-1">
                <li><span>김효정곤듀예요</span>님의 일정</li>
            </ul>
            <ul class="d-flex gap-2 order-2">
                <li>인천 - 가오슝</li>
                <li>2025.02.18 - 2025.03.18</li>
                <li>인원 2명</li>
            </ul> 
            <ul class="plan_edit d-flex justify-content-end order-3">
                <li><a href="">수정하기</a></li>
            </ul>           
        </div>
        <!--상품 페이지 탭  -->
        <div class="tab_content">
            <ul class="d-flex gap-3">
                <li><a href="#none">#항공권</a></li>
                <li><a href="#none">#숙소</a></li>
                <li><a href="#none">#투어</a></li>
                <li><a href="#none">#티켓</a></li>
                <li><a href="#none">#랜드마크</a></li>
                <li><a href="#none">#교통패스</a></li>
                <li class="tripcar_tab"><a href="#none">#트립카</a></li>
            </ul>
        </div>
        <div class="plane_title d-flex justify-content-between align-items-center">
            <ul class="d-flex align-items-center gap-3">
                <li class="plane_title_all">전체보기</li>
                <!-- 항공필터 -->
                <li>
                    <div class="select_box">
                        <div class="select_btn d-flex justify-content-between align-items-center ">
                            <div class="selected_val">필터</div>
                            <span class="arrow"></span>
                        </div>
                        <div class="option_list">
                            <div class="filter_section d-flex flex-column gap-3">
                                <div class="d-flex flex-column gap-2">
                                    <div class="filter_section_title">
                                        <span class="title">경유</span>
                                    </div>
                                    <ul class="d-flex gap-3">
                                        <li class="filter_radio d-flex align-items-center gap-1" >
                                            <button type="button" class=""></button>
                                            <span>직항</span>
                                        <li>
                                        <li class="filter_radio d-flex align-items-center gap-1" >
                                            <button type="button" class=""></button>
                                            <span>1회이상 경유</span>
                                            
                                        </li>
                                    </ul>
                                </div>
                                <!-- range필터 -->
                                <div class="d-flex flex-column gap-2">
                                    <div class="filter_section_title ">
                                        <span class="title">시간대</span>
                                    </div>
                                    <div>
                                        <p>가는 날</p>
                                        <span class="time_range">00:00 ~ 24:00</span>
                                        <div class="timeTable py-2">
                                            <!-- <input type="range" min="0" max="100" value="20" id="slider-lh" class="slider_range">
                                            <input type="range" min="0" max="100" value="80" id="slider-rh" class="slider_range"> -->
                                            <div id="sliderbar_go"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <p>오는 날</p>
                                        <span class="time_range">00:00 ~ 24:00</span>
                                        <div class="timeTable py-2">
                                            <div  id="sliderbar_back"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>    
            <ul class="d-flex gap-2">    
                <li class="before_btn"><a href="#none">이전</a></li>
                <li class="front_btn"><a href="#none">다음</a></li>
            </ul>
        </div>
         <!-- 항공권 정보 -->
         <section>
            <div class="plane_list d-flex">
                <div class="plane_left d-flex">
                    <div class="d-flex flex-column" id="airplaneArea">
                    </div>
                </div>
                <div class="plane_right">
                </div>
            </div>
         </section>

    </div>

</section>

</main>
<?php include_once("../sub/layout/bottom.php"); ?>