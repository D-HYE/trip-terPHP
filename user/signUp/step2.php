<script>
    const tabList = document.querySelector(".signup_tab ul li:nth-child(2)");
    tabList.className += 'active'
</script>

<div class="signup_step signup_step2">
    <input type="hidden" name="signup_step" value="2">
    <fieldset class="fieldset1">
        <label class="fieldset_tit">아이디</label>
        <input type="text" name="userID" required minlength="5" maxlength="20" placeholder="6~20자 영문, 숫자"> 
    </fieldset>
    <fieldset class="fieldset2">
        <label class="fieldset_tit">비밀번호 </label>
        <input type="password" name="userPW" required minlength="8" maxlength="32" pattern="(?=.*\d)(?=.*[a-z]).{8,32}"
        title="비밀번호는 8~32자이며, 소문자, 숫자를 포함해야 합니다." placeholder="8~12자의 영문, 숫자, 특수문자 중 2가지 이상">
        <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,32}" -->
    </fieldset>
    <fieldset class="fieldset2">
        <label for="confirm_password" class="fieldset_tit">비밀번호 확인</label>
        <input type="password" id="confirm_password" required minlength="8" maxlength="32" placeholder="8~12자의 영문, 숫자, 특수문자 중 2가지 이상">
    </fieldset>
    <fieldset class="fieldset3">
        <label class="fieldset_tit">이름</label>
        <input type="text" name="userName" required maxlength="18"> 
    </fieldset>
    <fieldset class="fieldset4">
        <label for="phone1" class="fieldset_tit">전화번호</label>
        <div class="d-flex align-items-center">
            <input type="tel" id="phone1" pattern="\d{2,3}" maxlength="3" required placeholder="010">
            <span>-</span>
            <input type="tel" id="phone2" pattern="\d{3,4}" maxlength="4" required placeholder="1234">
            <span>-</span>
            <input type="tel" id="phone3" pattern="\d{4}" maxlength="4" required placeholder="5678">
            <input type="hidden" id="phone" name="userPhone">
            <button type="button" onclick="alert('전화번호 인증 기능은 개발 중입니다.')">인증하기</button>
        </div>
    </fieldset>
    <fieldset class="fieldset5">
        <label class="fieldset_tit">이메일</label>
        <div class="d-flex align-items-center">
            <input type="email" name="userEmail" required maxlength="191" placeholder="example@email.com">
            <button type="button" onclick="alert('이메일 인증 기능은 개발 중입니다.')">인증하기</button>
        </div>
    </fieldset>
    <fieldset class="fieldset6">
        <label class="fieldset_tit">닉네임</label>
        <input type="text" name="userNickname" required maxlength="30">
    </fieldset>
    <fieldset class="fieldset7">
        <label class="checkbox_label">
            <input type="checkbox">
            <span class="color-active-blue">SMS, 이메일로 상품 및 이벤트 정보를 받겠습니다.(선택)</span>
        </label>
    </fieldset>
    <fieldset class="fieldset8">
        <label class="checkbox_label">
            <input type="checkbox">
            <span class="color-active-blue">14세 미만입니다.</span>
        </label>
    </fieldset>
</div>
<button type="submit" class="submit_btn" id="submit_btn">가입하기</button>