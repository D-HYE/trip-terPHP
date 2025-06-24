<?php
    require_once '../../config/db.php';

    // 세션 시작
    session_start();

    $table_sql = "CREATE TABLE If NOT EXISTS userInfo (
		userNum INT AUTO_INCREMENT PRIMARY KEY,
        userID VARCHAR(20) NOT NULL UNIQUE,
        userPW CHAR(60) NOT NULL,
        userName VARCHAR(18) NOT NULL, 
        userNickname VARCHAR(30) NOT NULL,
        userPhone VARCHAR(20) NOT NULL UNIQUE,
        userEmail VARCHAR(191) NOT NULL UNIQUE,
        privacyAgree BOOLEAN DEFAULT FALSE,
        locationAgree BOOLEAN DEFAULT FALSE,
        createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    $pdo->query($table_sql);

    $step = isset($_POST['signup_step']) ? $_POST['signup_step'] : '';

    if($step == 1){

        $_SESSION['privacyAgree'] = isset($_POST['privacyAgree']) ? 1 : 0;
        $_SESSION['locationAgree'] = isset($_POST['locationAgree']) ? 1 : 0;

        header("Location: /user/userForm.php?user=userSignup&step=step2");
        exit();

    }else{

        $userID = trim($_POST['userID']);
        $userPW = trim($_POST['userPW']);
        $userName = $_POST['userName'];
        $userNickname = $_POST['userNickname'];
        $userPhone = trim($_POST['userPhone']);
        $userEmail = filter_var(trim($_POST["userEmail"]), FILTER_VALIDATE_EMAIL);
        $marketingAgree = isset($_POST['marketingAgree']) ? 1 : 0;

        $hashedPassword = password_hash($userPW, PASSWORD_DEFAULT);

        $sql = "INSERT INTO userInfo (`userID`, `userPW`, `userName`, `userNickname`, `userPhone`, `userEmail`, `privacyAgree`, `locationAgree`, `marketingAgree`)
        VALUES (:userID, :userPW, :userName, :userNickname, :userPhone, :userEmail, :privacyAgree, :locationAgree, :marketingAgree)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':userID' => $userID,
            ':userPW' => $hashedPassword,
            ':userName' => $userName,
            ':userNickname' => $userNickname,
            ':userPhone' => $userPhone,
            ':userEmail' => $userEmail,
            ':privacyAgree' => $_SESSION['privacyAgree'],
            ':locationAgree' => $_SESSION['locationAgree'],
            ':marketingAgree' => $marketingAgree
        ]);

        // 방금 삽입된 userNum 가져오기 (PDO의 lastInsertId 사용)
        $userNum = $pdo->lastInsertId();

        header("Location: signUpResult.php?userNum=" . urlencode($userNum));
        exit();


    }
    
?>



