

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

<h3><span><?php echo htmlspecialchars($userName); ?></span>님의 회원가입이 완료되었습니다.</h3>
<p>ㅎㅇㅎㅇ</p>