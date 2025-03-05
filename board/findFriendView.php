<?php require_once '../config/db.php';?>

<div class="container_m">
    <div class="view_area">
        <?php
            if (!isset($_GET['postID'])) {
                echo "<script>alert('잘못된 접근입니다.'); location.href='/board/triptalk.php?tab=findFriendList';</script>";
                exit;
            }
            $postID = $_GET['postID'];
            try {
            $sql = "SELECT ffb.*, u.`userNickname`, u.`userID` FROM `findFriendBoard` as ffb INNER JOIN `userInfo` as u ON u.`userNum` = ffb.`userNum` WHERE ffb.`postID` = :postID";
            // = :postID $pdo를 쓰면서 무슨 보안상 뭐시기를 썼기 때문에 그걸 위해서
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':postID', $postID, PDO::PARAM_INT);
            $stmt->execute();
            $postList = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($postList) {
                echo "<h3>" . htmlspecialchars($postList['postTit']) . "</h3>";
                echo "<div class='d-flex justify-content-between'><span>".htmlspecialchars($postList['userNickname'])."(".htmlspecialchars($postList['userID']).")</span><span>".htmlspecialchars($postList['postDate'])."</span></div>";
                echo "<ul><li>".htmlspecialchars($postList['tripSpot'])."</li><li>".htmlspecialchars($postList['tripDate'])."</li></ul>";
                echo "<p>". htmlspecialchars($postList['postCont']) . "</p>";
                // htmlspecialchars는 mySQL에서 온 거라 뭔...암튼 안 꺠지게? 잘 해줌
                // nl2br br뿌수기 ex. nl2br(htmlspecialchars($user_list['userNickname']))
            
            } else {
                echo "<script>alert('게시글을 찾을 수 없습니다.'); location.href='/board/triptalk.php?tab=findFriendList';</script>";
                exit;
            }
            } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
            }
        ?>
    </div>
    <a href="/board/triptalk.php?tab=findFriend&mode=findFriendList">목록</a>
    <a href="/board/triptalk.php?tab=findFriend&mode=findFriendWrite&w=update">수정</a>
</div>
