<?php require_once '../config/db.php';?>


<div class="section_content container_m">
    <div class="board_area">
        <div class="board_wrap board_findPlan">
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
                    <button class="icon_box icon1 ">게시판형</button>
                    <button class="icon_box icon2 active">갤러리형</button>
                </div>
            </div>
            <div class="board_list">
                <ul class="galley_board d-flex justify-content-between flex-wrap">
                    <?php
                        try{
                            $sql = "SELECT fpb .*, DATE(fpb.`postDate`) as dateOnly, u.`userNickname` FROM `findPlanBoard` as fpb INNER JOIN `userInfo` as u ON u.`userNum` = fpb.`userNum` ORDER BY fpb.`postID` DESC limit 12";
                            $stmt = $pdo->query($sql);
                            while ($post = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo '<li><div class="">';
                                echo '<div class="img_box rel"><a href="./triptalk.php?tab=findPlan&mode=findPlanView&postID='.$post['postID'].'">';
                                echo '<div class="float_info abs"><b>계획장소데이터</b></div>';
                                echo '</a></div>';
                                echo '<div class="desc_box">';
                                echo '<div class="post_tit d-flex justify-content-between"><a href="./triptalk.php?tab=findPlan&mode=findPlanView&postID='.$post['postID'].'">'.$post['postTit'].'</a><b>[00]</b></div>';
                                echo '<div class="post_nickname"><h6>'.$post['userNickname'].'</h6></div>';
                                echo '<div class="d-flex justify-content-between"><span class="post_date">'.$post['dateOnly'].'</span><span class="post_view">조회'.$post['viewCount'].'</span></div>';
                                echo '</div>';
                                echo '</div></li>';
                            }
                        } catch (PDOException $e) {
                            die("Query Failed: " . $e->getMessage());
                        }
                    ?>
                </ul>
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