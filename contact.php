<?php
    if (isset($_POST['fullname'], $_POST['contact'])) {
        $fullname = $_POST['fullname'];
        $contact = $_POST['contact'];

        if (!empty($fullname) && !empty($contact)) {
            $msg = "יצירת קשר מאתר אירופה.\n";
            $msg .= "שם מלא: " . $fullname . "\n";
            $msg .= "יצירת קשר: " . $contact;

            if (isset($_POST['message'])) {
                $msg .= "הודעה: " . $_POST['message'];
            }

            $msg = wordwrap($msg,70);

            // send email
            mail("yakovd33@gmail.com", "יצירת קשר מאתר אירופה", $msg);
            echo "פרטייך נשלחו. ניצור עמך קשר בהקדם 😀";
        } else {
            echo 'ייתכן שחלק מהשדות ריקים.';

        }
    } else {
        echo 'ייתכן שחלק מהשדות ריקים.';
    }
?>