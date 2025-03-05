<?php require_once '../config/db.php';?>


<div class="section_content container_m">
    <ul class="board_area">                    
        <?php
            try {
                $sql = "SELECT ffb.`postTit`, ffb.`postDate`, ffb.`postID`, u.`userNickname` FROM `findFriendBoard` as ffb INNER JOIN `userInfo` as u ON u.`userNum` = ffb.`userNum` ORDER BY ffb.`PostDate` DESC";
                $stmt = $pdo->query($sql);
                
                $postList = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($postList as $post) {
                    echo "<li><a class='d-flex justify-content-between' href='./triptalk.php?tab=findFriend&mode=findFriendView&postID=".$post['postID']."'><span class='post_num'>".$post['postID']."</span> <span class='post_tit'>".$post['postTit']."</span><span class='post_user'>" . $post['userNickname']."</span></a></li>";
                }
            } catch (PDOException $e) {
                die("Query Failed: " . $e->getMessage());
            }
        ?>
    </ul>  

</div>