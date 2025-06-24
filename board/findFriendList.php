<?php require_once '../config/db.php';?>


<div class="section_content container_m">
    <div class="board_area">
        <div class="board_wrap board_findFriend">
            <div class="board_filter d-flex justify-content-between align-items-center">
                <div class="select_box">
                    <div class="select_btn d-flex justify-content-between align-items-center gap-1">
                        <div class="selected_val">최신순</div>
                        <span class="arrow"></span>
                    </div>
                    <div class="option_list">
                        <ul class="d-flex flex-column">
                            <li class="option option1 selected">최신순</li>
                            <li class="option option2">조회수순</li>
                            <li class="option option3">좋아요순</li>
                        </ul>
                    </div>
                </div>
                <div class="icon_wrap d-flex gap-1">
                    <button class="icon_box icon1 active">게시판형</button>
                    <button class="icon_box icon2">갤러리형</button>
                </div>
            </div>
            <div class="board_list">
                <table class="table_board">
                    <thead>
                        <tr>
                            <th class="post_id"></th>
                            <th class="post_tit">제목</th>
                            <th class="post_nickname">작성자</th>
                            <th class="post_date">작성일</th>
                            <th class="post_view">조회</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            try {
                                $sql = "SELECT ffb.*, DATE(ffb.`postDate`) as dateOnly, u.`userNickname` FROM `findFriendBoard` as ffb INNER JOIN `userInfo` as u ON u.`userNum` = ffb.`userNum` ORDER BY ffb.`PostDate` DESC";
                                $stmt = $pdo->query($sql);
                                while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    echo '<tr>';
                                    echo '<td class="post_id"><span>'.$post['postID'].'</span></td>';
                                    echo '<td class="post_tit d-flex gap-1"><a href="./triptalk.php?tab=findFriend&mode=findFriendView&postID='.$post['postID'].'">'.$post['postTit'].'</a><b>[00]</b></td>';
                                    echo '<td class="post_nickname"><span>'.$post['userNickname'].'</span></td>';
                                    echo '<td class="post_date"><span>'.$post['dateOnly'].'</span></td>';
                                    echo '<td class="post_view"><span>'.$post['viewCount'].'</span></td>';
                                    echo '</tr>';
                                }
                                // $postList = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                //foreach ($postList as $post) {
                                    //echo "<li><a class='d-flex justify-content-between' href='./triptalk.php?tab=findFriend&mode=findFriendView&postID=".$post['postID']."'><span class='post_num'>".$post['postID']."</span> <span class='post_tit'>".$post['postTit']."</span><span class='post_user'>" . $post['userNickname']."</span></a></li>";
                                //}
                            } catch (PDOException $e) {
                                die("Query Failed: " . $e->getMessage());
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="board_pagenation">
                <div class="pagenation_wrap d-flex justify-content-center align-items-center gap-2">
                    <button class="icon_box icon1">이전</button>
                    <ul class="d-flex gap-2">
                        <li class="num active">1</li>
                        <li class="num">2</li>
                        <li class="num">3</li>
                        <li class="num">4</li>
                        <li class="num">5</li>
                    </ul>
                    <button class="icon_box icon2">다음</button>
                </div>
            </div>
        </div>                    
    </div>  

</div>