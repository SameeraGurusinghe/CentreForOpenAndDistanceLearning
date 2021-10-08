<?php
session_start();
if(isset($_SESSION['user'])){
    $text = $_POST['text'];


    date_default_timezone_set('Asia/Colombo');
     
    $text_message = "<div class='msgln'><span class='chat-time'>".date("g:i A")."</span> <b class='user-name'>".$_SESSION['user']."</b> ".stripslashes(htmlspecialchars($text))."<br></div>";
    file_put_contents("../a_co_live_chat/log.html", $text_message, FILE_APPEND | LOCK_EX);
}
?>