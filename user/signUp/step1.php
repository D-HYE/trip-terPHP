<script>
    const tabList = document.querySelector(".signup_tab ul li:nth-child(1)");
    tabList.className += 'active'
</script>

<div class="signup_step signup_step1">
    <input type="hidden" name="signup_step" value="1">
    <h5>
        <label class="checkbox_label">
            <input type="checkbox" id="agreeAll">
            <span>약관 전체 동의</span>
        </label>
    </h5>
    <div class="require_checkbox">
        <h6>필수 동의 항목</h6>
        <fieldset class="fieldset1">
            <label class="checkbox_label">
                <input type="checkbox" required>
                <span class="color-active-blue">[필수] 이용약관 &gt;</span>
                <div>
                    <p>Duis ac ultricies augue, ut egestas turpis. Nulla sagittis ornare leo eu aliquam. Vestibulum eget tincidunt lectus.</p>
                    <p>Praesent tellus nunc, sollicitudin ac vehicula a, aliquam at metus. Nulla lobortis mauris sit amet eros viverra tristique. Nullam non mi odio. Phasellus ullamcorper lacus scelerisque, convallis magna sed, rutrum augue.</p>
                    <p>Donec augue ex, venenatis et magna in, posuere ullamcorper est. Quisque et ex vel lectus bibendum feugiat. Ut facilisis sodales tempor. Cras tempus libero ut nisl venenatis molestie.</p>
                </div>
            </label>
        </fieldset>
        <fieldset class="fieldset2">
            <label class="checkbox_label">
                <input type="checkbox" required>
                <span class="color-active-blue">[필수] 전자 금융 거래 &gt;</span>
                <div>
                    <p>Duis ac ultricies augue, ut egestas turpis. Nulla sagittis ornare leo eu aliquam. Vestibulum eget tincidunt lectus. Praesent tellus nunc, sollicitudin ac vehicula a, aliquam at metus. Nulla lobortis mauris sit amet eros viverra tristique. Nullam non mi odio. Phasellus ullamcorper lacus scelerisque, convallis magna sed, rutrum augue. Donec augue ex, venenatis et magna in, posuere ullamcorper est. Quisque et ex vel lectus bibendum feugiat. Ut facilisis sodales tempor. Cras tempus libero ut nisl venenatis molestie.</p>
                </div>
            </label>
        </fieldset>
        <fieldset class="fieldset3">
            <label class="checkbox_label">
                <input type="checkbox" required>
                <span class="color-active-blue">[필수] 개인정보 수집동의서 &gt;</span>
                <div>
                    <p>Duis ac ultricies augue, ut egestas turpis. Nulla sagittis ornare leo eu aliquam. Vestibulum eget tincidunt lectus.</p>
                    <p>Praesent tellus nunc, sollicitudin ac vehicula a, aliquam at metus. Nulla lobortis mauris sit amet eros viverra tristique. Nullam non mi odio. Phasellus ullamcorper lacus scelerisque, convallis magna sed, rutrum augue.</p>
                    <p>Donec augue ex, venenatis et magna in, posuere ullamcorper est. Quisque et ex vel lectus bibendum feugiat. Ut facilisis sodales tempor. Cras tempus libero ut nisl venenatis molestie.</p>
                </div>
            </label>
        </fieldset>
    </div>
    <div class="option_checkbox">
        <h6>선택 동의 항목</h6>
        <fieldset class="fieldset4">
            <label class="checkbox_label">
                <input type="checkbox" name="marketingAgree">
                <span class="color-active-blue">[선택] 개인정보 수집 동의서 &gt;</span>
                <div>
                    <p>Duis ac ultricies augue, ut egestas turpis. Nulla sagittis ornare leo eu aliquam. Vestibulum eget tincidunt lectus. Praesent tellus nunc, sollicitudin ac vehicula a, aliquam at metus. Nulla lobortis mauris sit amet eros viverra tristique. Nullam non mi odio. Phasellus ullamcorper lacus scelerisque, convallis magna sed, rutrum augue. Donec augue ex, venenatis et magna in, posuere ullamcorper est. Quisque et ex vel lectus bibendum feugiat. Ut facilisis sodales tempor. Cras tempus libero ut nisl venenatis molestie.</p>
                </div>
            </label>
        </fieldset>
        <fieldset class="fieldset4">
            <label class="checkbox_label">
                <input type="checkbox" name="locationAgree">
                <span class="color-active-blue">[선택] 위치기반 서비스 이용약관 &gt;</span>
                <div>
                    <p>Duis ac ultricies augue, ut egestas turpis. Nulla sagittis ornare leo eu aliquam. Vestibulum eget tincidunt lectus. Praesent tellus nunc, sollicitudin ac vehicula a, aliquam at metus. Nulla lobortis mauris sit amet eros viverra tristique. Nullam non mi odio. Phasellus ullamcorper lacus scelerisque, convallis magna sed, rutrum augue. Donec augue ex, venenatis et magna in, posuere ullamcorper est. Quisque et ex vel lectus bibendum feugiat. Ut facilisis sodales tempor. Cras tempus libero ut nisl venenatis molestie.</p>
                    
                </div>
            </label>
        </fieldset>
    </div>
</div>
<div class="btn_wrap">
    <button type="submit" class="submit_btn">다음 단계</button>
</div>


<script>
    // const agreeAll = document.getElementById("agreeAll");
    // const checkboxes = document.querySelectorAll(".checkbox_label input[type='checkbox']"); 

    //agreeAll.addEventListener("change", function () {
        //checkboxes.forEach((checkbox) => {
            //checkbox.checked = agreeAll.checked;
        //});
    //});

    // 개별 체크박스 클릭 시
    //checkboxes.forEach((checkbox) => {
        //checkbox.addEventListener("change", function () {
            //const allChecked = [...checkboxes].every((cb) => cb.checked);
            // [...] 스프레드 연산자: 유사 배열을 진짜 배열로 변환해주는 친구
            // every() 배열의 모든 요소가 특정 조건을 만족하는지 확인해주는 친구
            //agreeAll.checked = allChecked;
        //});
    //});

    const agreeAll = document.getElementById("agreeAll");
    const checkboxes = document.querySelectorAll(".checkbox_label input[type='checkbox']");
    const requiredCheckboxes = document.querySelectorAll(".require_checkbox input[type='checkbox']");
    const nextBtn = document.querySelector(".submit_btn");

    // '전체 동의' 클릭 시 모든 체크박스 상태 변경
    agreeAll.addEventListener("change", function () {
        checkboxes.forEach((checkbox) => {
            checkbox.checked = agreeAll.checked;
        });
        updateNextButtonState();
    });

    // 개별 체크박스 클릭 시 '전체 동의' 체크 여부 업데이트
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", function () {
            const allChecked = [...checkboxes].every((cb) => cb.checked);
            agreeAll.checked = allChecked;
            updateNextButtonState();
        });
    });

    // 필수 체크박스 체크 상태 확인 후 버튼 활성화 함수
    function updateNextButtonState() {
        const allRequiredChecked = [...requiredCheckboxes].every(cb => cb.checked);
        if (allRequiredChecked) {
            nextBtn.classList.add("active");
        } else {
            nextBtn.classList.remove("active");
        }
    }
</script>