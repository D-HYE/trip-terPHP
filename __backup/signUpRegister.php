<?php
    // db 정보 불러오기
    require_once '../../config/db.php';


    // 테이블이 없으면 만들어라
    $table_sql = "CREATE TABLE If NOT EXISTS userInfo (
		userNum INT AUTO_INCREMENT PRIMARY KEY,
        userID VARCHAR(20) NOT NULL UNIQUE,
        userPW CHAR(60) NOT NULL,
        userName VARCHAR(18) NOT NULL, 
        userNickname VARCHAR(30) NOT NULL,
        userPhone VARCHAR(20) NOT NULL UNIQUE,
        userEmail VARCHAR(191) NOT NULL UNIQUE,
        marcketingAgree BOOLEAN DEFAULT FALSE,
        locationAgree BOOLEAN DEFAULT FALSE,
        createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    // $conn->query($table_sql); // sql문 실행
    $pdo->query($table_sql);

    // 폼 가져오기
    $userID = trim($_POST['userID']);  //trim 공백처리
    $userPW = trim($_POST['userPW']);
    $userName = $_POST['userName'];
    $userNickname = $_POST['userNickname'];
    $userPhone = trim($_POST['userPhone']);
    $userEmail = filter_var(trim($_POST["userEmail"]), FILTER_VALIDATE_EMAIL);
    $marcketingAgree = isset($_POST['marcketingAgree']) ? 1 : 0;
    $locationAgree = isset($_POST['locationAgree']) ? 1 : 0;
    $createdAt = date('Y-m-d H:i:s');

    // 비밀번호 해싱 (PHP 8 비밀번호 해싱 사용)
    $hashedPassword = password_hash($userPW, PASSWORD_DEFAULT);


    // 
    // $sql = "INSERT INTO userInfo (`userID`, `userPW`, `userName`, `userNickname`, `userPhone`, `userEmail`)
    // VALUES (?, ?, ?, ?, ?, ?)";
    // // 필드명은 ``백틱, 값은 ''홀따옴표로 표현 그게 귀찮아서 ? 쓰는 거임
    
    // $stmt = $conn->prepare($sql);  // SQL 준비
    // $stmt->bind_param("ssssss", $userID, $hashedPassword, $userName, $userNickname, $userPhone, $userEmail); 
    
    // if ($stmt->execute()) {
    //     $userNum = $conn->insert_id; // PK를 불러올 것
    //     header("Location: result.php?userNum=".urlencode($userNum));
    //     exit;

    // } else {
    //     echo "회원가입 실패: " . $stmt->error; // 오류메세지
    // }

    // $stmt->close();
    // $conn->close();

    $sql = "INSERT INTO userInfo (`userID`, `userPW`, `userName`, `userNickname`, `userPhone`, `userEmail`, `marcketingAgree`, `locationAgree`)
        VALUES (:userID, :userPW, :userName, :userNickname, :userPhone, :userEmail, :marcketingAgree, :locationAgree)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':userID' => $userID,
        ':userPW' => $hashedPassword,
        ':userName' => $userName,
        ':userNickname' => $userNickname,
        ':userPhone' => $userPhone,
        ':userEmail' => $userEmail,
        ':marcketingAgree' => $marcketingAgree,
        ':locationAgree' => $locationAgree
    ]);

    // 방금 삽입된 userNum 가져오기 (PDO의 lastInsertId 사용)
    $userNum = $pdo->lastInsertId();

    header("Location: signUpResult.php?userNum=" . urlencode($userNum));
    exit;

?>

