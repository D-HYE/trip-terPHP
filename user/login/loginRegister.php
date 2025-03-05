<?php
    require_once '../../config/db.php';
    session_start();

    $userID = trim($_POST['userID']); 
    $userPW = trim($_POST['userPW']);

    $sql = "SELECT * FROM userInfo WHERE userID = :userID";
    // 아이디가 같은 정보를 전부 가져와

    $stmt = $pdo->prepare($sql);
    $stmt->execute([':userID' => $userID]);
    // 아이디 값 전달
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    if ($user && password_verify($userPW, $user['userPW'])) {
        // 로그인 성공 → 세션 저장
        $_SESSION['userID'] = $user['userID'];
        $_SESSION['userName'] = $user['userName'];

        header("Location: loginResult.php");
        // 로그인 성공 시 환영 페이지 or 대시보드
        exit;
    } else {
        // 로그인 실패
        header("Location: userForm.php?error=invalid");
        exit;
    }
?>