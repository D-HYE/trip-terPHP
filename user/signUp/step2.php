<div class="signup_tab">
    <ul class="d-flex justify-content-center gap-2">
        <li>약관동의</li>
        <li class="active">정보입력</li>
    </ul>
</div>
<form action="/user/signUp/signUpRegister.php" method="post" onsubmit="validateForm(event)">
    <div class="signup_setp signup_setp2">
        <fieldset class="fieldset2">
            <label>아이디: </label>
            <input type="text" name="userID" required minlength="5" maxlength="20"> 
        </fieldset>

        <fieldset class="fieldset3">
            <label>비밀번호: </label>
            <input type="password" name="userPW" required minlength="8" maxlength="32" pattern="(?=.*\d)(?=.*[a-z]).{8,32}"
            title="비밀번호는 8~32자이며, 소문자, 숫자를 포함해야 합니다.">
            <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,32}" -->
        </fieldset>
        <fieldset class="fieldset3">
            <label for="confirm_password">비밀번호 확인</label>
            <input type="password" id="confirm_password" required minlength="8" maxlength="32">
        </fieldset>

        <fieldset class="fieldset4">
            <label>이름: </label>
            <input type="text" name="userName" required maxlength="18"> 
        </fieldset>

        <fieldset class="fieldset5">
            <label>닉네임: </label>
            <input type="text" name="userNickname" required maxlength="30">
            
        </fieldset>

        <fieldset class="fieldse6">
            <label for="phone1">전화번호: </label>

            <input type="tel" id="phone1" pattern="\d{2,3}" maxlength="3" required placeholder="010">
            <span>-</span>
            <input type="tel" id="phone2" pattern="\d{3,4}" maxlength="4" required placeholder="1234">
            <span>-</span>
            <input type="tel" id="phone3" pattern="\d{4}" maxlength="4" required placeholder="5678">
            <input type="hidden" id="phone" name="userPhone">
        </fieldset>

        <fieldset class="fieldset7">
            <label>이메일: </label>
            <input type="email" name="userEmail" required maxlength="191" placeholder="example@email.com">
            <button type="button" onclick="alert('이메일 인증 기능은 개발 중입니다.')">인증하기</button>
        </fieldset>
    </div>
    <button type="submit" class="submit_btn" id="submit_btn">가입하기</button>
</form>