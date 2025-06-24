<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="Title" content="J이고 싶은 P, 당신을 위한 플랫폼 Trip:ter"/>
    <meta property="og:title" content="J이고 싶은 P, 당신을 위한 플랫폼 Trip:ter"/>
    <meta property="og:site_name" content="Trep:ter">
    <meta property="og:description" content="반복되는 일상에 지쳤다면? 트립터에서 나만의 여행을 만나보세요."/>
    <meta property="og:image" content="https://trip-ter.vercel.app/img/logo/metatripter.jpg">
    <meta property="og:locale" content="ko_KR"/>
    <link rel="shortcut icon" href="https://trip-ter.vercel.app/img/logo/metatripter_logo.jpg">
    <link rel="apple-touch-icon" href="https://trip-ter.vercel.app/img/logo/metatripter_logo.jpg">
    <link rel="preload" as="image" href="https://trip-ter.vercel.app/img/logo/metatripter.jpg">

    <link rel="icon" type="image/x-icon" href="https://trip-ter.vercel.app/img/icon/favicon.svg">

    <title>Trip:ter J이고 싶은 P 당신을 위한 플랫폼</title>
    
    <!-- reset / CDN -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- 작업용 -->
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/header.min.css" >
    <link rel="stylesheet" href="/css/ek.min.css">
    <link rel="stylesheet" href="/css/yujin.min.css">
    <link rel="stylesheet" href="/css/dahye.min.css">

    <script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
    <script type="text/javascript">
        if(!wcs_add) var wcs_add = {};
        wcs_add["wa"] = "128201062bf0d70";
        if(window.wcs) {
        wcs_do();
        }
    </script>

</head>
<body>
    
        <div id="mb-top" class="d-flex mb " >
            
              <div class="container d-flex">
                   <div id="mb-top-text">
                      <h5>오직 나만을 위한 Trip:ter
                         <span class="d-block">앱으로 쿠폰 받기</span>
                      </h5>
                    </div> 
                    <a href="http://">앱에서 보기>
                    </a>  
              </div>
            <button class="close-btn abs align-items-start">
                <img src="https://trip-ter.vercel.app/img/icon/x-01_mb.svg" alt="닫기...">
            </button>    
        </div>

    <!-- 상단 -->
       <header id="hd">
        <div class="header_inner">
            <div id="user" class="trip-bl pc">
                <div class="py-1 container d-flex justify-content-end">
                    <ul class="d-flex gap-3 align-items-center">
                        <li ><a href="/user/userForm.php" class="text-white">로그인/회원가입</a></li>
                        <li class="support rel"><a href="#none" class="text-white">고객지원
                            <img src="https://trip-ter.vercel.app/img/icon/polygon-1.svg" alt="더보기">
                        </a>
                            <ul class="hide-menu abs d-none">
                                <li><a href="#none">이용가이드</a></li>
                                <li><a href="#none">FAQ</a></li>
                                <li><a href="#none">문의게시판</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>      
            <div id="gnbbox">
                <div id="gnb" class="container d-flex justify-content-between align-items-center">
                    <h1 class="logo order-2 mx-auto">
                        <a href="http://tripterweb.dothome.co.kr/"><img src="https://trip-ter.vercel.app/img/logo/logo_TRT_basic.svg" alt="트립터">
                        <span class="d-none">트립터</span>                   
                        </a>
                    </h1>
                    <div class="hb-iconbox"> 
                        <button id="hb-icon" class="p-0"><img src="https://trip-ter.vercel.app/img/icon/menu-all.svg" alt="메뉴"></button>
                    </div>
                    <!-- dim 배경 -->
                    <div id="dim-background" class="dim d-none"></div>
                    
                    <ul id="menu" class="d-flex gap-3 order-1 pc">                   
                        <li><a href="/page/tripRoute.php?tab=myfeelter">계획짜기</a></li>
                        <li><a href="/board/triptalk.php">트립톡</a></li>
                        <li><a href="#none">이벤트</a></li>
                    </ul>
                    <ul class= "icon d-flex align-items-center order-3">
                        <li class="search">
                            <form action="#none" class="d-flex align-items-center">
                                <input type="text" class="search-bar pc" name="search" placeholder="눈의 나라 훗카이도로~!">
                                <input type="image" class="search-icon py-0" src="https://trip-ter.vercel.app/img/icon/search-02.svg" alt="검색버튼">
                            </form>
                        </li>
                        <li>
                            <button class="wishlist-btn p-0"><a href="#none"><img src="https://trip-ter.vercel.app/img/icon/travel_bl.svg" alt="찜"></a></button>
                        </li>
                    </ul>
                </div>
                <div id="mb-searchbox" class="d-none mb">
                    <!-- resize시 설정 초기화 넣기 지금은 눈가림용~ -->
                    <form action="#none" class=" mb-search d-flex  align-items-center justify-content-end">
                        <input type="text" class="mb-searchbar" name="search" placeholder="눈의 나라 훗카이도로~!">
                        <input type="image" class="mb-searchicon" src="https://trip-ter.vercel.app/img/icon/search-01.svg" alt="검색버튼">
                    </form>                       
                </div>
            </div>

              <!-- 햄버거 소메뉴 -->  
        <div id="hb-submenu">
            <div id="hb-item" class="d-flex flex-column">
                <div class="d-flex justify-content-end">
                    <button class="p16 mx-1" id="allMenuclose"><img src="https://trip-ter.vercel.app/img/icon/x-01.svg" class="d-block" alt="닫기버튼"></button>
                </div>
                <!-- 로그인 전 -->
            <div id="login" class="d-none">
                <div class="m-2 ">
                    <span>
                        로그인/회원가입
                    </span>                
                </div>
                <ul class="social-icon d-flex justify-content-center gap-3">
                    <li><a class="naver" href=""><img src="https://trip-ter.vercel.app/img/icon/naver.svg" alt="naver"></a></li>
                    <li><a class="kakao" href=""><img src="https://trip-ter.vercel.app/img/icon/kakao.svg" alt="kakao"></a></li>
                    <li><a class="google" href=""><img src="https://trip-ter.vercel.app/img/icon/google.svg" alt="google"></a></li>
                </ul>
            </div>
            
            
                <!-- 로그인 후 -->
                <div class="mainheader">              
                    <div class="user-box d-flex align-content-end justify-content-between">
                        <div class="profileicon"><img src="https://trip-ter.vercel.app/img/icon/user-profile-02.svg" class="d-block" alt=""></div>
                        <div class="userprofile">
                            <div class="hi"><span>안녕하세요!</span></div>
                            <div>트립터<span class="username">###</span>님</div>
                        </div> 
                        <a class="settings" href=""><img class="d-block" src="https://trip-ter.vercel.app/img/icon/settings.svg" alt="설정"></a>
                    </div>
                    <ul class="menu-icon d-flex justify-content-between ">
                        <li><a class="heart" href="">
                            <img src="https://trip-ter.vercel.app/img/icon/heart_02.svg" class="d-block" alt="내찜">
                            <span >내 찜</span>
                        </a></li>
                        <li><a href="#none">
                            <img src="https://trip-ter.vercel.app/img/icon/travel.svg"  class="d-block" alt="내여행">
                            <span >내 여행</span>
                        </a></li>
                        <li><a href="#none"><img src="https://trip-ter.vercel.app/img/icon/layer.svg"  class="d-block" alt="가계부">
                            <span>내 가계부</span></a></li>
                        <li><a href="#none"><img src="https://trip-ter.vercel.app/img/icon/pencil-02.svg"  class="d-block" alt="내후기">
                            <span>내 후기</span>
                        </a></li>
                    </ul>
                </div>
                <!-- 메뉴리스트 -->
                <div id="hb-list" class="d-flex flex-column">
                    
                    <ul class="tapPart d-flex flex-column">
                        <li class="feelter"><a class="d-flex align-items-center" href="/page/tripRoute.php?tab=myfeelter">
                            <span class="color-active-blue">MY FEEL:TER</span>

                        </li>
                        <li class="planner"><a class="d-flex align-items-center" href="#none">
                            <span class="color-active-blue">계획짜기</span>
                        </li>
                    </ul>
                    <div class="d-flex flex-column scroll">
                        <!-- <ul class="d-flex communitymenu flex-wrap">
                            <li><a class="mbrecomm" href="">MD추천</a></li>
                            <li><a class="bestreview" href="">BEST 후기</a></li>
                        </ul> -->
                        <ul class="d-flex communitymenu flex-wrap">
                            <li><a class="planaround" href="/board/triptalk.php?tab=board1">계획 둘러보기</a></li>                        
                            <li><a class="reviewaround" href="/board/triptalk.php?tab=board2">후기 둘러보기</a></li>
                            <li><a class="friendfind" href="/board/triptalk.php?tab=findFriend&mode=findFriendList">동행 구해요</a></li>
                        </ul>
                        <ul class="d-flex communitymenu flex-wrap">
                        <li><a class="mbrecomm" href="">MD추천</a></li>                        
                            <li><a class="event" href="">이벤트</a></li>
                        </ul>

                        <ul id="hb-sublist">  
                            <li>
                                <div><a class="" href="">항공권</a></div>
                                <ul class="sublist d-flex flex-wrap">
                                    <li><a href="#none">특가항공</a></li>
                                    <li><a href="#none">국내항공</a></li>
                                    <li><a href="#none">국외항공</a></li>
                                </ul>
                            </li>
                            <li>
                                <div><a class="" href="">숙소</a></div>
                                <ul class="sublist d-flex flex-wrap">
                                    <li><a href="#none">특가숙소</a></li>
                                    <li><a href="#none">호텔</a></li>
                                    <li><a href="#none">게스트하우스</a></li>
                                    <li><a href="#none">펜션&캠핑</a></li>
                                </ul>
                            </li>
                            <li>
                                <div><a class="" href="">티켓&투어</a></div>
                                <ul id="ticket" class="sublist d-flex flex-wrap">
                                    <li><a class="allPass color-active-blue" href="#none">올패스권</a></li>
                                    <li><a href="#none">현지투어</a></li>
                                    <li><a href="#none">테마파크</a></li>
                                    <li><a href="#none">전시체험</a></li>
                                    <li><a href="#none">철도여행</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="#tel:01084896369" onclick="trackAndCall(event, '01084896369')">전화문의</a></li>
                                    <li><a href="https://map.naver.com/p/search/%ED%95%98%EC%9D%B4%EB%94%94%EB%9D%BC%EC%98%A4/place/653467130?c=15.00,0,0,0,dh&placePath=/booking" 
                                    target="_blank" rel="noopener" onclick="trackNaverReservation(event)">네이버예약</a></li>

                                    <script type="text/javascript">
                                        function trackAndCall(event, phoneNumber) {
                                            // 기본 동작 중단
                                            event.preventDefault();
        
                                            // 데이터 수집 로직
                                            if (window.wcs) {
                                                wcs.inflow("http://tripterweb.dothome.co.kr/"); 
                                                var _conv = {};
                                                _conv.type = "custom001"; 
                                                wcs.trans(_conv); // 전환 데이터 전송
                                            }
        
                                            // 전화 연결
                                            setTimeout(() => {
                                                window.location.href = `tel:${phoneNumber}`;
                                            }, 500); // 데이터 전송 후 0.5초 후 전화 연결
                                        }

                                        function trackNaverReservation(event) {
                                            event.preventDefault();
                                            if (window.wcs) {
                                            wcs.inflow("http://tripterweb.dothome.co.kr/"); 
                                                var _conv = {};
                                                _conv.type = "purchase"; // 전환 유형 설정
                                                wcs.trans(_conv); // 전환 데이터 전송
                                            }
                                            window.open("https://map.naver.com/p/search/%ED%95%98%EC%9D%B4%EB%94%94%EB%9D%BC%EC%98%A4/place/653467130?c=15.00,0,0,0,dh&placePath=/booking", "_blank");
                                        }

                                    </script>
                                </ul>
                                
                            </li>
                        </ul>
                    </div>            
                </div>
            </div>
        </div>
    </header>