<!DOCTYPE html>
<html>
    <head>
        <title>Result Page</title>
    </head>
    <body>
        <?php
            require 'database.php';
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password2'];
            $firstname_input = set_string($db_connect, $firstName);
            $lastname_input = set_string($db_connect, $lastName);
            $email_input = set_string($db_connect, $email);
            $username_input = set_string($db_connect, $username);
            $password_input = set_string($db_connect, $password);

            $s = "INSERT INTO dbtable(firstname, lastname, email, username, confirmedpass) VALUES (?,?,?,?,?)";

            $user_registration_input = mysqli_prepare($db_connect, $s);

            mysqli_stmt_bind_param(
                $user_question_input,
                'sssss',
                $firstname_input,
                $lastname_input,
                $email_input,
                $username_input,
                $password_input
            );

            $input = mysqli_stmt_execute($user_registration_input);
            if ($input) {
                echo "<p><b>You have been registered!</b></p>";
            }
            else {
                echo "<p><b>You could not be registered due to an internal system error. We apologize for any inconvenience.</b></p>";
            }
        ?>
    </body>
</html>