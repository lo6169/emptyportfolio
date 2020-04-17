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

    $destination_email = "YOUR EMAIL";

    $email_body = "$vemail2  -> $comment2";

    mail($destination_email, $sub2, $email_body);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
    <div>
        <ul>
            <li style="float:left"> <a href="index.html"> YOUR NAME </a></li>
            <li style="float:right"> <a href="contact.html"> Contact </a></li>
            <li style="float:right"> <a href=""> GitHub </a></li>
            <li style="float:right"> <a href=""> Dribbble </a></li>
            <li style="float:right"> <a href=""> LinkedIn </a></li>
        </ul>
    </div>

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

    <div class="footer">
        Created by: <a href="http://people.rit.edu/lo6169/portfolio"> L. Olson </a> - 2020
    </div>

    <script>function validateForm(){"use strict";var isvalid=true;if(document.getElementById("vname").value==''){document.getElementById("vname").style.borderColor="red";document.getElementById("vname").style.backgroundColor='pink';isvalid=false;}else{document.getElementById("vname").style=null;}if(document.getElementById("vemail").value==''){document.getElementById("vemail").style.borderColor="red";document.getElementById("vemail").style.backgroundColor='pink';isvalid=false;}else{document.getElementById("vemail").style=null;}if(document.getElementById("sub").value==''){document.getElementById("sub").style.borderColor="red";document.getElementById("sub").style.backgroundColor='pink';isvalid=false;}else{document.getElementById("sub").style=null;}if(document.getElementById("comment").value==''){document.getElementById("comment").style.borderColor="red";document.getElementById("comment").style.backgroundColor='pink';isvalid=false;}else{document.getElementById("comment").style=null;}return(isvalid);}</script>


</body>
</html>

