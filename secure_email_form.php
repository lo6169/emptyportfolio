<?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $ata = htmlspecialchars($data);

        return $data;
    }

    $vname  = $_POST['vname'];
    $vemail = $_POST['vemail'];
    $sub = $_POST['sub'];
    $comment = $_POST['comment'];

    $vname2 = test_input($vname);
    $vemail2 = test_input($vemail);
    $sub2 = test_input($sub);
    $comment2 = test_input($comment);

    $destination_email = "lolsonform@gmail.com";

    $email_body = "$vemail2  -> $comment2";

    mail($destination_email, $sub2, $email_body);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Me</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <ul>
        <li style="float:left"> <a href="index.html"> l. olson </a></li>
    </ul>

    <hr>
    <hr class="second">
    <hr class="third">

    <h1>
        looking to buy a website or have one made? <br/>
        you've come to the right place
    </h1>

    <hr class="third">
    <hr class="second">
    <hr>

    <h2>
        thank you for reaching out
    </h2>

    <h2>
        reach me via email
    </h2>
    <div class="container">
        <div id="feedback">
            <form action="secure_email_form.php" method="POST" onsubmit="return validateForm();">
                <div class="inputkind">
                    Name:
                </div>
                <input id="vname" name="vname" placeholder="Your Name" type="text" value=""> <br/> <br/>

                <div class="inputkind">
                    Email:
                </div>
                <input id="vemail" name="vemail" placeholder="Your Email" type="text" value=""> <br/> <br/>

                <div class="inputkind">
                    Subject
                </div>
                <input id="sub" name="sub" placeholder="Subject" type="text" value=""> <br/> <br/>

                <div class="inputkind">
                    Comments:
                </div>
                <textarea id="comment" name="comment" placeholder="Please comment here"></textarea> <br/> <br/>

                <input id="send" name="submit" type="submit" value="Send">
            </form>
        </div>
    </div>

    <h2>
        reach me another way
    </h2>
    <div class="reachme">
        <a href="https://www.linkedin.com/in/l-olson/"> linkedin </a> <br/>
        (401)-318-8247 <br/>
        lo6169@rit.edu <br/>
    </div>

    <script>function validateForm(){"use strict";var isvalid=true;if(document.getElementById("vname").value==''){document.getElementById("vname").style.borderColor="red";document.getElementById("vname").style.backgroundColor='pink';isvalid=false;}else{document.getElementById("vname").style=null;}if(document.getElementById("vemail").value==''){document.getElementById("vemail").style.borderColor="red";document.getElementById("vemail").style.backgroundColor='pink';isvalid=false;}else{document.getElementById("vemail").style=null;}if(document.getElementById("sub").value==''){document.getElementById("sub").style.borderColor="red";document.getElementById("sub").style.backgroundColor='pink';isvalid=false;}else{document.getElementById("sub").style=null;}if(document.getElementById("comment").value==''){document.getElementById("comment").style.borderColor="red";document.getElementById("comment").style.backgroundColor='pink';isvalid=false;}else{document.getElementById("comment").style=null;}return(isvalid);}</script>


</body>
</html>