<?php
    session_start();

    if (!isset($_SESSION['userID'])) {
        header("Location: userForm.php");
        exit;
    } 
    $userName = $_SESSION['userName'];
?>

<?php include_once("../../sub/layout/top.php"); ?>

<main id="section_wrap" class="page_login">
    <section class="" id="">
        <div class="section_banner">

        </div>
        <div class="container_m">
            <h2><?php echo htmlspecialchars($userName); ?>님, 환영합니다!</h2>
            <p>트립터와 함께 멋진 여행을 떠나보세요.</p>
            <a href="http://tripterweb.dothome.co.kr/">메인페이지</a>
            <a href="#none">로그아웃</a>
        </div>
    </section>
</main>

<?php include_once("../../sub/layout/bottom.php"); ?>