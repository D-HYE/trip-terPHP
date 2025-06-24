

<?php
    require_once '../../config/db.php';

    $userNum = isset($_GET['userNum'])?$_GET['userNum']:'';

    // if ($userNum) {
    //     $stmt = $conn->prepare("SELECT `userName` FROM `userInfo` WHERE `userNum` = ?");
    //     $stmt->bind_param("i", $userNum); // 숫자라서 i
    //     $stmt->execute();

    //     $stmt->bind_result($userName); // 불러온 값 저장
    //     $stmt->fetch(); // 값 채워넣기
    //     $stmt->close();
    // } else {
    //     echo "잘못된 접근입니다.";
    //     exit;
    // }

    // $stmt = $conn->prepare(
    //     "SELECT `userName` FROM `userInfo` WHERE `userNum` = ?"
    // );
    // $stmt->bind_param("s", $userNum);
    // $stmt->execute();

    // $stmt->bind_result($userName);
    // $stmt->fetch(); 
    // $stmt->close();
    // $conn->close();

    if ($userNum) {
        $stmt = $pdo->prepare("SELECT `userName` FROM `userInfo` WHERE `userNum` = :userNum");
        $stmt->execute([':userNum' => $userNum]);
        $userName = $stmt->fetchColumn(); // 한 개 값만 가져올 때 fetchColumn() 사용
    } else {
        echo "잘못된 접근입니다.";
        exit;
    }
?>
<?php include_once("../../sub/layout/top.php"); ?>


<main id="section_wrap" class="page_login">
    <section class="" id="">
        <div class="section_banner">

        </div>
        <div class="signup_result container_m">
            <div class="img_box">
                <img src="https://trip-ter.vercel.app/img/illustrator/airplane.png" alt="가입을 축하합니다!">
            </div>
            <h3 class="color-active-blue"><span><?php echo htmlspecialchars($userName); ?></span>님의 가입을 축하합니다!</h3>
            <p>그럼 트립터와 함께 떠나볼까요?</p>
            <div class="btn_wrap d-flex justify-content-center gap-2">
                <a href="http://tripterweb.dothome.co.kr/">메인으로 가기</a>
                <a href="/user/userForm.php">로그인 하기</a>
            </div>
        </div>
    </section>
</main>

<?php include_once("../../sub/layout/bottom.php"); ?>