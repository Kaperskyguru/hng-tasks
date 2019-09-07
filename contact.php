<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {

    echo $_POST['fullname'] ."<br />";
    echo $_POST['email'] ."<br />";
    echo $_POST['title'] ."<br />";
    echo $_POST['message'] ."<br />";

    echo "You just recieved a new email from "+  $_POST['fullname'];
}
