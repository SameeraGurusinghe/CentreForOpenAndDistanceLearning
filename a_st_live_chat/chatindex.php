<?php
 
session_start();
if(!isset($_SESSION['user'])){

    header('location: ../login.html');
}


if(isset($_GET['out'])){    
     
    //Simple exit message
    $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>". $_SESSION['user'] ."</b> has left the chat session.</span><br></div>";
    file_put_contents("../a_co_live_chat/log.html", $logout_message, FILE_APPEND | LOCK_EX);
     
    //session_destroy();
    header("Location: ../student_acc.php"); //Redirect the user
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
 
        <title>Ramifyo Live Chat Service</title>
        <meta name="description" content="Ramifyo Live Chat Service" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
                <?php
                    if(isset($_SESSION["user"])){
                    $un= $_SESSION["user"];
                    }
                    else{}
                ?>

        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome, <?php echo "<b>".$un."</b>"; ?></p>
                <p class="out"><a id="exit" href="#">Exit Chat</a></p>
            </div>
 
            <div id="chatbox">
            <?php
            if(file_exists("../a_co_live_chat/log.html") && filesize("../a_co_live_chat/log.html") > 0){
                $contents = file_get_contents("../a_co_live_chat/log.html");          
                echo $contents;
            }
            ?>
            </div>
 
            <form name="message" action="">
                <input name="usermsg" type="text" id="usermsg" />
                <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
            </form>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            // jQuery Document
            $(document).ready(function () {
                $("#submitmsg").click(function () {
                    var clientmsg = $("#usermsg").val();
                    $.post("post.php", { text: clientmsg });
                    $("#usermsg").val("");
                    return false;
                });
 
                function loadLog() {
                    var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request
 
                    $.ajax({
                        url: "../a_co_live_chat/log.html",
                        cache: false,
                        success: function (html) {
                            $("#chatbox").html(html); //Insert chat log into the #chatbox div
 
                            //Auto-scroll           
                            var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
                            if(newscrollHeight > oldscrollHeight){
                                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                            }   
                        }
                    });
                }
 
                setInterval (loadLog, 2500);
 
                $("#exit").click(function () {
                    var exit = confirm("Are you sure you want to end the session?");
                    if (exit == true) {
                    window.location = "chatindex.php?out=true";
                    window.close();
                    }
                });
            });
        </script>
    </body>
</html>