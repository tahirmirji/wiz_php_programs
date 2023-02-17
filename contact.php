<?php

    if(isset($_POST['Submit']))
    {
        if(isset($_POST['txt1']) && isset($_POST['txt2']) && isset($_POST['course']))
        {
            echo "Hi, ".$_POST['txt1'];
            echo ", Your email is ".$_POST['txt2'];
            echo " and contact number is ".$_POST['txt3'];
        }

    }
?>