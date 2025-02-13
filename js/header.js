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