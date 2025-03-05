<?php
    $currentQuestion = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    // 현재의 질문 번호를 가져오고 없으면 1부터 시작

    switch ($currentQuestion) {
        case 1:
            $question = "어디로 떠나고 싶은가요?";
            $answers = [
                ['label' => '국내 여행', 'value' => 'a'],
                ['label' => '해외 여행', 'value' => 'b']
            ];
            $className = "table2";
            break;

        case 2:
            $question = "여행 기간은 어떻게 되시나요?";
            $answers = [
                ['label' => '2일 이내', 'value' => 'a'],
                ['label' => '7일 이내', 'value' => 'b'],
                ['label' => '8일 이상', 'value' => 'c'],
                ['label' => '한 달 살기 등 장기 여행', 'value' => 'd']
            ];
            $className = "table2";
            break;
            
        case 3:
            $question = "최대 예산 범위를 알려주세요";
            $answers = [
                ['label' => '50만원 이하', 'value' => 'a'],
                ['label' => '100만원 이하', 'value' => 'b'],
                ['label' => '300만원 이하', 'value' => 'c'],
                ['label' => '300만원 이상', 'value' => 'd']
            ];
            $className = "table2";
            break;

        case 4:
            $question = "나의 여행 스타일은?";
            $answers = [
                ['label' => '즉흥형', 'value' => 'a'],
                ['label' => '계획형', 'value' => 'b'],
            ];
            $className = "table2";
            break;
        case 5:
            $question = "여행에서 가장 선호하는 숙소 유형은?";
            $answers = [
                ['label' => '고급 호텔/리조트', 'value' => 'a'],
                ['label' => '가성비 호텔', 'value' => 'b'],
                ['label' => '게스트하우스/호스텔', 'value' => 'c'],
                ['label' => '현지 민박', 'value' => 'd']
            ];
            $className = "table2";
            break;
            
        case 6:
            $question = "숙소를 선택하는 기준은?";
            $answers = [
                ['label' => '시설과 서비스', 'value' => 'a'],
                ['label' => '위치와 접근성', 'value' => 'b'],
                ['label' => '후기 및 평점', 'value' => 'c'],
                ['label' => '가격대', 'value' => 'd']
            ];
            $className = "table2";
            break;
            
        case 7:
            $question = "여행 중 이동 수단으로 선호하는 것은?";
            $answers = [
                ['label' => '대중교통', 'value' => 'a'],
                ['label' => '렌트(오토바이, 자전거 포함)', 'value' => 'b'],
                ['label' => '택시', 'value' => 'c'],
                ['label' => '걷기', 'value' => 'd']
            ];
            $className = "table2";
            break;

        case 8:
            $question = "여행 중 가장 즐기고 싶은 활동은?";
            $answers = [
                ['label' => '유명 관광지 방문', 'value' => 'a'],
                ['label' => '액티비티', 'value' => 'b'],
                ['label' => '역사/문화체험', 'value' => 'c'],
                ['label' => '쇼핑&맛집 탐방', 'value' => 'd'],
                ['label' => '자연 풍경', 'value' => 'e'],
            ];
            $className = "table3";
            break;
        case 9:
            $question = "여행지를 선택하는 기준 1순위는?";
            $answers = [
                ['label' => '일정에 맞춤', 'value' => 'a'],
                ['label' => '예산에 맞춤', 'value' => 'b'],
                ['label' => '여행지의 안전', 'value' => 'c'],
                ['label' => '새로운 여행지', 'value' => 'd']
            ];
            $className = "table2";
            break;
        case 10:
            $question = "추구하는 여행 스타일은?";
            $answers = [
                ['label' => '자유로운 탐험가', 'value' => 'a'],
                ['label' => '완벽한 플래너', 'value' => 'b'],
                ['label' => '휴식이 우선인 힐링러', 'value' => 'c'],
                ['label' => '핵심만 콕콕! 알뜰 여행자', 'value' => 'd']
            ];
            $className = "table2";
            break;
        case 11:
            $question = "여행 중 가장 중요한 정보는?";
            $answers = [
                ['label' => '음식점 추천', 'value' => 'a'],
                ['label' => '교통 수단과 경로', 'value' => 'b'],
                ['label' => '현지 문화와 규칙', 'value' => 'c'],
                ['label' => '후기 정보', 'value' => 'd']
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
        <ul class="d-flex justify-content-center container_m">
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
                <div class="back_btn hidden"></div>
            <?php } ?>
                <div class="question_num">
                    <span><?php echo $currentQuestion;?></span><span>/11</span>
                </div>   
            </div>
        </div>
        <!-- 질문파트 -->
        <form action="myfeelterResult.php" method="POST" id="myfeelterForm" class="m-3">
            <fieldset class="filset<?php echo $currentQuestion; ?>">
                <!-- 질문 -->
                <legend><span>Q<?php echo $currentQuestion; ?>.</span><?php echo $question; ?></legend>

                <!-- 보기파트 -->
                <div class="d-flex justify-content-between <?php echo $className; ?>">
                    <?php foreach ($answers as $answer): ?>
                        <input type="radio" name="q<?php echo $currentQuestion; ?>" value="<?php echo $answer['value']; ?>" id="q<?php echo $currentQuestion . '_' . $answer['value']; ?>" class="d-none">
                        <label for="q<?php echo $currentQuestion . '_' . $answer['value']; ?>"><?php echo $answer['label']; ?></label>
                    <?php endforeach; ?>
                </div>
            </fieldset>
        </form>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll("#myfeelterForm label").forEach(label => {
                label.addEventListener("click", function () {
                    const radioCheck = document.getElementById(this.getAttribute("for"));
                    if (radioCheck) {
                        radioCheck.checked = true; // 라디오 버튼 체크
                        nextQuestion();
                    }
                });
            });
        });

        function nextQuestion() {
            const urlParams = new URLSearchParams(window.location.search); // url 값 가져옴
            // 쿼리스트링을 오브젝트로 만들어서 처리해줘 먼 소린진 몰루겟지만
            
            let currentQuestion = urlParams.get("page") ? parseInt(urlParams.get("page")) : 1;

            const selectedInput = document.querySelector(`input[name="q${currentQuestion}"]:checked`);

            const answer = selectedInput.value;
            
            // 기존 URL에 선택한 값 추가
            urlParams.set("q" + currentQuestion, answer);

            // 마지막 질문인지 확인
            const lastQuestion = 11;
            
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