<div class="container">
    <?php
    
        if(!isset($_GET['w'])){
            echo '<button>글쓰기</button>';
        }else{
            echo '<button>글수정</button>';
        }
    ?>
    
    <a href="/board/triptalk.php?tab=findFriend&mode=findFriendList">목록</a>
</div>