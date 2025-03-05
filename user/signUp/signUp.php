<section class="" id="<?php echo $sectionId;?>">
    <div class="section_banner">

    </div>
    <div class="form_area container_m">
        <?php
            $step = isset($_GET['step']) ? $_GET['step'] : 'setp1';

            if($step == 'step1'){
                include_once("step1.php");
    
            }else if($step == 'step2'){
    
                include_once("step2.php");
            }
        ?>
    </div>
</section>

<script>
    function validateForm(event) {
        // 전화번호 합치기
        const phone1 = document.getElementById("phone1").value;
        const phone2 = document.getElementById("phone2").value;
        const phone3 = document.getElementById("phone3").value;
        document.getElementById("phone").value = phone1 + "-" + phone2 + "-" + phone3;

        // 비밀번호 확인 검증
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm_password").value;
        if (password !== confirmPassword) {
            alert("비밀번호가 일치하지 않습니다.");
            event.preventDefault();
        }
    }
</script>