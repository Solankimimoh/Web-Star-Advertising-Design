<?php
$con = mysqli_connect("localhost", "root", "", "star_advertising") or die("Connection Error");

if (isset($_REQUEST['sbmt'])) {
    $name = $_POST['name'];
    $company = $_POST['companyName'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $requirement = $_POST['requirement'];


    if ($name != "" && $company != "" && $mobile != "" && $email != "" && $requirement != "") {


        $insertQuery = "INSERT INTO `inquiry`( `name`, `company`, `mobile`, `email`, `requirement`) VALUES ('$name','$company','$mobile','$email','$requirement')";

        $numRow = mysqli_query($con, $insertQuery);
        if ($numRow > 0) {
            $from = "MIME-Version: 1.0" . "\r\n";
            $from .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $from .= 'From: inquirystaradvertising@gmail.com' . "\r\n";
            $toemail = "inquirystaradvertising@gmail.com";
            $subject = "Inquiry";
            $message = "<html><head> 
                <title>Welcome to CodexWorld</title> 
            </head><body>
            <table border='1'>
            <tr><td>Name</td><td>$name</td></tr>
            <tr><td>Company</td><td>$company</td></tr>
            <tr><td>Mobile</td><td>$mobile</td></tr>
            <tr><td>Email</td><td>$email</td></tr>
            <tr><td>Requirement</td><td>$requirement</td></tr></table>
            <a href='http://staradvertising.in/exportsheet.php' style='background-color: #c02f1d;
            padding: 13px;
            text-decoration: none;
            margin: 15px auto;
            color: #fff;
            box-shadow: 0 0 12px 0px #c9c9c9d6;
            display: inline-block;'>DOWNLOAD DATASHEET</a> 
            </body> 
            </html>";

            $result = mail($toemail, $subject, $message, $from);
            if ($result) {
                ?>
                <script>
                    alert("inquiry Submitted");
                    window.location.href = "contact.html";
                </script>
        <?php
                    } else {
                        echo 'FAIL';
                    }
                }
            } else {

                ?>
        <script>
            alert("Please Fill the details");
        </script>
<?php
    }
}
?>