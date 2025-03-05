<?php

    require_once '../config/db.php';

    if (!isset($_GET['userNum'])) {
        echo "<script>alert('잘못된 접근입니다.'); location.href='userList.php';</script>";
        exit;
    }

$userNum = $_GET['userNum'];

try {
    $sql = "SELECT userID, userName, userNickname FROM userInfo WHERE userNum = :userNum";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userNum', $userNum, PDO::PARAM_INT);
    $stmt->execute();

    $user_list = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user_list) {
        echo "<h1>" . htmlspecialchars($user_list['userID']) . "</h1>";
        echo "<p>이름: " . htmlspecialchars($user_list['userName']) . "</p>";
        echo "<div>" . nl2br(htmlspecialchars($user_list['userNickname'])) . "</div>";
    } else {
        echo "<script>alert('게시글을 찾을 수 없습니다.'); location.href='userList.php';</script>";
        exit;
    }
} catch (PDOException $e) {
    die("Query Failed: " . $e->getMessage());
}

?>

<a href="/user/userList.php">목록</a>
<a href="/user/write.php?w=update">수정</a>
