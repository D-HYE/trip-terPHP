//스크롤해서 상단메뉴 픽스
window.addEventListener('scroll', () =>{
    const gnbbox = document.getElementById("gnbbox");
    const gnb = document.getElementById("gnb");
    const scrollPosition = window.scrollY;
    const bodydom = document.body;

    //메뉴 글씨 변경
    const menuSize = document.querySelectorAll("#menu a");
    
    if(scrollPosition > 40){
        bodydom.classList.add('scrolled');
      
        for(let i=0; i < menuSize.length; i++){
            menuSize[i].classList.add('scrolled');
        }
    } 
    else{
        bodydom.classList.remove('scrolled');
      
        for(let i=0; i < menuSize.length; i++){
            menuSize[i].classList.remove('scrolled');
        }        
    }
})

//햄버거메뉴
const hbmenu = document.querySelector("#hb-submenu"); //전체메뉴
const hamburgerButton = document.querySelector("#hb-icon"); // 햄버거 버튼
const closeButton = hbmenu.querySelector("#allMenuclose"); // X 버튼
const body = document.querySelector("body"); // 바깥 영역 클릭 감지
//dim화면
const dimBackground = document.getElementById("dim-background");

// function preventScroll(e) {
//     e.preventDefault();
// }

// 햄버거 버튼 클릭 시 메뉴 열기
hamburgerButton.addEventListener("click", () => {
    hbmenu.classList.add("open"); // 메뉴에 'open' 클래스를 추가하여 보이게 함
    dimBackground.classList.remove("d-none");
    //document.body.addEventListener('wheel', preventScroll, { passive: false });
  
});

// X 버튼 클릭 시 메뉴 닫기
closeButton.addEventListener("click", () => {
    hbmenu.classList.remove("open"); // 'open' 클래스를 제거하여 메뉴 숨기기
    dimBackground.classList.add("d-none");
    //document.body.removeEventListener('wheel', preventScroll, { passive: false });
});

// 바깥 영역 클릭 시 메뉴 닫기
body.addEventListener("click", (e) => {
    if (!hbmenu.contains(e.target) && !hamburgerButton.contains(e.target)) {
        hbmenu.classList.remove("open"); // 메뉴가 아닌 영역을 클릭하면 메뉴 숨기기
        dimBackground.classList.add("d-none");
        //document.body.removeEventListener('wheel', preventScroll, { passive: false });
    }
});

//search
const search =document.getElementById("mb-searchbox") ;
const searchIcon = document.querySelector(".search-icon"); //search아이콘

searchIcon.addEventListener("click", (e) =>{
    const windowWidth = window.innerWidth;

    if(windowWidth < 768){
        e.preventDefault();
        search.classList.toggle("d-none");
    }
})
body.addEventListener("click",(e) =>{
    const windowWidth = window.innerWidth;
    if(windowWidth > 768 || (!search.contains(e.target) && !searchIcon.contains(e.target))){
        search.classList.add("d-none");
    }
})


//고객지원
const supportMenu = document.querySelector(".support a");
const hideMenu = document.querySelector(".support .hide-menu");

supportMenu.addEventListener('click',(e) => {
    hideMenu.classList.toggle('d-none')
})
body.addEventListener('click', (e)=>{
    if(!hideMenu.contains(e.target) &&!supportMenu.contains(e.target)) {
        hideMenu.classList.add("d-none")
    }
})

//로그인 시 변경
// const isLoggedIn = false;
// const loginSection = document.getElementById("login-section");
// const loggedInSection = document.getElementById("logged-in-section");

// if (isLoggedIn) {
//     loginSection.style.display = "none";
//     loggedInSection.classList.remove("d-none");
// } else{
//     loginSection.style.display = "block";
//     loggedInSection.classList.add("d-none");
// }

//range 필터
var slider = document.getElementById('sliderbar_go');

    noUiSlider.create(slider, {
        start: [0, 100],
        connect: true,
        range: {
            'min': 0,
            'max': 100
        }
    });
var slider = document.getElementById('sliderbar_back');

    noUiSlider.create(slider, {
        start: [0, 100],
        connect: true,
        range: {
            'min': 0,
            'max': 100
        }
    });


document.addEventListener("DOMContentLoaded", async function () {
    const airplaneArea = document.getElementById("airplaneArea");

    function shuffle(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]]; // Swap
        }
    }

    try {
        const response = await fetch("../data/airplaneInfo.json");
        if (!response.ok) throw new Error(`HTTP 오류! 상태: ${response.status}`);

        const flightData = await response.json();
        let html = "";

        let roundTripFlights = flightData.flightproduct.filter(flight => flight.go && flight.back);
        shuffle(roundTripFlights);
        roundTripFlights = roundTripFlights.slice(0, 3);

        let oneWayFlights = [];
        const selectedAirlines = new Set();

        shuffle(flightData.flightproduct);

        for (let flight of flightData.flightproduct) {
            if (flight.go && !selectedAirlines.has(flight.go.airline)) {
                selectedAirlines.add(flight.go.airline);
                oneWayFlights.push({ go: flight.go });
            }
            if (oneWayFlights.length === 2) break;
        }

        const selectedFlights = [...roundTripFlights, ...oneWayFlights];

        // ✅ 항공권 HTML 생성 함수
        function getFlightHTML(flight) {
            const goAirlineInfo = flightData.airways[flight.go.airline];
            const backAirlineInfo = flight.back ? flightData.airways[flight.back.airline] : null;

            let totalPrice = (parseInt(flight.go.price.replace(/,/g, ""), 10) || 0) +
                            (flight.back ? parseInt(flight.back.price.replace(/,/g, ""), 10) || 0 : 0);
            totalPrice = totalPrice.toLocaleString();

            return `
            <div class="plane_section_time d-flex justify-content-between gap-5">
                <div class="planeLogo_wrap d-flex align-items-center gap-1">
                    <img src="${goAirlineInfo.logo}" alt="${goAirlineInfo.name}" class="planeLogo">
                    <span class="airline_name">${goAirlineInfo.name}</span>
                </div>
                <div class="d-flex gap-5">
                    <div class="plane_time d-flex flex-column align-items-end gap-1">
                        <p>${flight.go.depTime}</p>
                        <p class="airport">${flight.go.depLoc}</p>
                    </div>
                    <div class="flight-time d-flex flex-column align-items-center gap-1">
                        <p>소요시간 n시간</p>
                        <div class ="arrow-right"></div>
                        <p>직항</p>
                    </div>
                    <div class="plane_time d-flex flex-column align-items-end gap-1">
                        <p>${flight.go.arrTime}</p>
                        <p class="airport">${flight.go.arrLoc}</p>                    
                    </div>
                </div>
            </div>    
                ${flight.back ? `
                <li class="d-flex justify-content-between gap-5">    
                    <div class="d-flex align-items-center gap-1">
                        <img src="${backAirlineInfo.logo}" alt="${backAirlineInfo.name}" class="planeLogo">
                        <span class="airline_name">${backAirlineInfo.name}</span>
                    </div>    
                    <div class="d-flex gap-5">
                        <div class="plane_time d-flex flex-column align-items-end gap-1">
                            <p>${flight.back.depTime}</p>
                            <p>${flight.back.depLoc}</p>
                        </div>
                        <div class="flight-time d-flex flex-column align-items-center gap-1">
                            <p>소요시간 n시간</p>
                            <div class ="arrow-right"></div>
                            <p>직항</p>
                        </div>
                        <div class="plane_time d-flex flex-column align-items-end gap-1">    
                        <p>${flight.back.arrTime}</p>
                        <p class="airport"> ${flight.back.arrLoc}</p>
                        </div>
                    </div>
                </li>    
                ` : ""   
                }
                <div class="share_heart_group d-flex gap-1">
                    <button class="share-btn" alt="공유">
                        <span class="share_icon"></span>
                    </button>
                    <button class="heart-btn" alt="찜">
                        <span class="heart_icon"></span>
                    </button>
                </div>   
                <div class="plane_price">
                    <p>₩${totalPrice}</p>
                    <button class="add_plan"><span>계획에 담기</span></button>
                </div>
            `;
        }
        // ✅ 최종 HTML 생성
        html = selectedFlights.map(getFlightHTML).join("");

        airplaneArea.innerHTML = html;
    } catch (error) {
        console.error("JSON 로딩 오류:", error);
    }
});
    
    
    
    
    
    
    