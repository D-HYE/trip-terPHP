<?php
    $currentQuestion = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    // 현재의 질문 번호를 가져오고 없으면 1부터 시작

    switch ($currentQuestion) {
        case 1:
            $question = "어디로 떠나고 싶은가요?";
            $answers = [
                ['label' => '국내 여행', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/1-1.jpg'],
                ['label' => '해외 여행', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/1-2.jpg']
            ];
            $className = "table2";
            break;

        case 2:
            $question = "여행 기간은 어떻게 되시나요?";
            $answers = [
                ['label' => '2일 이내', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/2-1.jpg'],
                ['label' => '7일 이내', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/2-2.jpg'],
                ['label' => '8일 이상', 'value' => 'c','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/2-3.jpg'],
                ['label' => '한 달 살기 등 장기 여행', 'value' => 'd','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/2-4.jpg']
            ];
            $className = "table2";
            break;
            
        case 3:
            $question = "최대 예산 범위를 알려주세요";
            $answers = [
                ['label' => '50만원 이하', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/3-1.jpg'],
                ['label' => '100만원 이하', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/3-2.jpg'],
                ['label' => '300만원 이하', 'value' => 'c','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/3-3.jpg'],
                ['label' => '300만원 이상', 'value' => 'd','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/3-4.jpg']
            ];
            $className = "table2";
            break;

        case 4:
            $question = "나의 여행 스타일은?";
            $answers = [
                ['label' => '즉흥형', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/4-1.jpg'],
                ['label' => '계획형', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/4-2.jpg'],
            ];
            $className = "table2";
            break;
        case 5:
            $question = "여행에서 가장 선호하는 숙소 유형은?";
            $answers = [
                ['label' => '고급 호텔/리조트', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/5-1.jpg'],
                ['label' => '가성비 호텔', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/5-2.jpg'],
                ['label' => '게스트하우스/호스텔', 'value' => 'c','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/5-3.jpg'],
                ['label' => '현지 민박', 'value' => 'd','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/5-4.jpg']
            ];
            $className = "table2";
            break;
            
        case 6:
            $question = "숙소를 선택하는 기준은?";
            $answers = [
                ['label' => '시설과 서비스', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/6-1.jpg'],
                ['label' => '위치와 접근성', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/6-2.jpg'],
                ['label' => '후기 및 평점', 'value' => 'c','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/6-3.jpg'],
                ['label' => '가격대', 'value' => 'd','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/6-4.jpg']
            ];
            $className = "table2";
            break;
            
        case 7:
            $question = "여행 중 이동 수단으로 선호하는 것은?";
            $answers = [
                ['label' => '대중교통', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/7-1.jpg'],
                ['label' => '렌트(오토바이, 자전거 포함)', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/7-2.jpg'],
                ['label' => '택시', 'value' => 'c','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/7-3.jpg'],
                ['label' => '걷기', 'value' => 'd','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/7-4.jpg']
            ];
            $className = "table2";
            break;

        case 8:
            $question = "여행 중 가장 즐기고 싶은 활동은?";
            $answers = [
                ['label' => '유명 관광지 방문', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/8-1.jpg'],
                ['label' => '액티비티', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/8-2.jpg'],
                ['label' => '역사/문화체험', 'value' => 'c','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/8-3.jpg'],
                ['label' => '쇼핑&맛집 탐방', 'value' => 'd','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/8-4.jpg'],
                ['label' => '자연 풍경', 'value' => 'e','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/8-5.jpg'],
            ];
            $className = "table3";
            break;
        case 9:
            $question = "여행지를 선택하는 기준 1순위는?";
            $answers = [
                ['label' => '일정에 맞춤', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/9-1.jpg'],
                ['label' => '예산에 맞춤', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/9-2.jpg'],
                ['label' => '여행지의 안전', 'value' => 'c','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/9-3.jpg'],
                ['label' => '새로운 여행지', 'value' => 'd','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/9-4.jpg']
            ];
            $className = "table2";
            break;
        case 10:
            $question = "추구하는 여행 스타일은?";
            $answers = [
                ['label' => '자유로운 탐험가', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/10-1.jpg'],
                ['label' => '완벽한 플래너', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/10-2.jpg'],
                ['label' => '휴식이 우선인 힐링러', 'value' => 'c','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/10-3.jpg'],
                ['label' => '핵심만 콕콕! 알뜰 여행자', 'value' => 'd','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/10-4.jpg']
            ];
            $className = "table2";
            break;
        case 11:
            $question = "여행 중 가장 중요한 정보는?";
            $answers = [
                ['label' => '음식점 추천', 'value' => 'a','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/11-1.jpg'],
                ['label' => '교통 수단과 경로', 'value' => 'b','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/11-2.jpg'],
                ['label' => '현지 문화와 규칙', 'value' => 'c','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/11-3.jpg'],
                ['label' => '후기 정보', 'value' => 'd','image' =>'http://trip-ter.vercel.app/img/myfeelterimage/11-4.jpg']
            ];
            $className = "table2";
            break;
             
        default:
            // 마지막 질문을 넘어가면 결과 페이지로 이동
            header("Location: myfeelterResult.php?" . http_build_query($previousAnswers));
            exit;
    }
?>
<section class="myfeelterSect" id="<?php echo $sectionId;?>"> 
    <div class="section_banner">
        <div class="color-active-blue">
            <h3>MY FEEL:TER</h3>
            <p>나만을 위한 여행, 특별한 나만의 여행 만들어보세요</p>
        </div>
    </div>
    <!-- 탭메뉴 -->
    <div class="section_list">
        <ul class="d-flex justify-content-center container_m flex-wrap">
            <li class="active"><a href="./tripRoute.php?tab=myfeelter" class="d-flex">MY FEEL:TER<span></span></a></li>
            <li><a href="./tripRoute.php?tab=planmaker" class="d-flex">계획짜기<span></span></a></li>
        </ul>
    </div>
    
    <!-- 화살표 -->
    <div class="form_area container_m">
        <div class="question_info">
            <div class="d-flex justify-content-between align-items-center">
            <?php if ( isset($_GET["page"])){ ?>
                <div class="back_btn" onclick="window.history.back();"></div>
                <?php }else{ ?>
                    <div class="back_btn none-active" ></div>
                    <?php } ?>
                <div class="question_num">
                    <span><?php echo $currentQuestion;?></span><span>/11</span>
                </div>   
            </div>
        </div>
        <!-- 질문파트 -->
        <form action="myfeelterResult.php" method="POST" id="myfeelterForm">
            <fieldset class="filset<?php echo $currentQuestion; ?>">
                <!-- 질문 -->
                <div class="questionBox"><legend><span>Q<?php echo $currentQuestion; ?>.</span><?php echo $question; ?></legend></div>

                <!-- 보기파트 -->
                <div class="answerBox d-flex justify-content-center <?php echo $className; ?>" >
                    <?php foreach ($answers as $answer): ?>
                        <input type="radio" name="q<?php echo $currentQuestion; ?>" value="<?php echo $answer['value']; ?>" id="q<?php echo $currentQuestion . '_' . $answer['value']; ?>" class="d-none">
                        <label class="d-flex justify-content-center align-items-center" for="q<?php echo $currentQuestion . '_' . $answer['value']; ?>" style="background-image: url('<?php echo $answer['image']?>')"><span><?php echo $answer['label']; ?></span>
                        </label>
                    <?php endforeach; ?>
                </div>
            </fieldset>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            
            const savedScroll = sessionStorage.getItem('pageScroll');
            if (savedScroll !== null) {
                window.scrollTo(0, parseInt(savedScroll, 10));
                //페이지의 스크롤 값이 0이 아닐 때만 현재의 값(저장된 값)을 10진수로 뱉어서 옮겨라
            }

            document.querySelectorAll("#myfeelterForm label").forEach(label => {

                label.addEventListener("click", function () {
                    const radioCheck = document.getElementById(this.getAttribute("for")); //이 라벨의 라디오
                    if (radioCheck) {
                        sessionStorage.setItem('pageScroll', window.scrollY);
                        //라벨(라디오)버튼이 눌렸을 때 현재 페이지 값을 저장해라
                        radioCheck.checked = true; //라디오 트루처리
                        nextQuestion();
                    }
                    
                });
            });

        });


        function nextQuestion() {
            const urlParams = new URLSearchParams(window.location.search); // url 값 가져옴
            // 쿼리스트링을 오브젝트?로 만들어서 처리해줘 먼 소린진 몰루겟지만
            
            let currentQuestion = urlParams.get("page") ? parseInt(urlParams.get("page")) : 1;

            const selectedInput = document.querySelector(`input[name="q${currentQuestion}"]:checked`);

            const answer = selectedInput.value;
            
            
            urlParams.set("q" + currentQuestion, answer);
            // 기존 URL에 선택한 값 추가

            const lastQuestion = 11;
            // 마지막 질문 확인을 위한 마지막 숫자
            
            if (currentQuestion >= lastQuestion) {
                window.location.href = "myfeelterResult.php" // 마지막 질문이면 결과 페이지로 이동
                //window.location.href = "myfeelterResult.php?" + urlParams.toString();
            } else {
                urlParams.set("page", currentQuestion + 1);
                window.location.href = window.location.pathname + "?" + urlParams.toString(); // 다음 질문으로 이동
            }
        } 
        
    </script>
</section>