<html>
    <head>
        <title>Aliens Abducted Me - Report an Abduction</title>
    </head>
    
    <body>
        <h2>Aliens Abducted Me - Report an Abduction</h2>
        
        <!-- <?php

            /*$dbc = mysqli_connect('localhost', 'root', 'root', 'aliens_database')
            or die('Error connecting to MySQL server.');

            $name = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $when_it_happened = $_POST['whenithappened'];
            $how_long = $_POST['howlong'];
            $how_many = $_POST['howmany'];
            $alien_description = $_POST['aliendescription'];
            $what_they_did = $_POST['whattheydid'];
            $fang_spotted = $_POST['fangspotted'];
            $email = $_POST['email'];
            $other = $_POST['other'];

            $query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happened, how_long, how_many, alien_description, what_they_did, fang_spotted, other, email) VALUES ('$name', '$lastname', '$when_it_happened', '$how_long', '$how_many', '$alien_description', '$what_they_did', '$fang_spotted', '$other', '$email')";

            $result = mysqli_query($dbc, $query)
            or die('Error querying database.');

            mysqli_close($dbc);

            header("refresh:1; url=report.html");*/
        ?> -->

        <?php
            $name =$_POST['firstname'].' '.$_POST['lastname'];
            $how_many =$_POST['howmany'];
            $when_it_happened = $_POST['whenithappened'];
            $how_long = $_POST['howlong'];
            $alien_description = $_POST['aliendescription'];
            $what_they_did = $_POST['whattheydid'];
            $fang_spotted = $_POST['fangspotted'];
            $email = $_POST['email'];
            $other = $_POST['other'];
            
            $to = 'fabi.ampuero.chalco@gmail.com';
            $subject = 'Aliens Abducted Me - Abduction Report';
            $msg = "$name was abducted $when_it_happened and was gone for $how_long.\n" .
                "Number of aliens: $how_many\n" .
                "Alien description: $alien_description\n" .
                "What they did: $what_they_did\n" .
                "Fang spotted: $fang_spotted\n" .
                "Other comments: $other";
            mail($to, $subject, $msg, 'From: '. $email);
        
            echo 'Thanks for submitting the form.<br />';
            echo 'You were abducted ' . $when_it_happened;
            echo ' and were gone for ' . $how_long . '<br />';
            echo 'Describe them: ' . $alien_description . '<br />';
            echo 'They did to you: ' . $what_they_did . '<br />';
            echo 'Was Fang there? ' . $fang_spotted . '<br />';
            echo 'Your email address is: ' . $email . '<br />';
            echo 'Your name is: ' . $name . '<br />';
            echo 'You saw: ' . $how_many . '<br />';
            echo 'You add: ' . $other . '<br />';

            ?>
        
    

        
        
    </body>
</html>