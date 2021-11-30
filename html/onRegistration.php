<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if ( (isset($_POST['registerToken'])) && (isset($_POST['nameBox'])) && (isset($_POST['emailBox'])) && (isset($_POST['usernameBox'])) && (isset($_POST['passwordBox'])) && (isset($_POST['passwordConfirmBox'])) ){
            if ( (!empty($_POST['registerToken'])) && (!empty($_POST['nameBox'])) && (!empty($_POST['emailBox'])) && (!empty($_POST['usernameBox'])) && (!empty($_POST['passwordBox'])) && (!empty($_POST['passwordConfirmBox'])) ){
                if ($_POST['registerToken'] == 'QnyP&ZtwYUk6MP7awp_^=D63B*$qPbY5' ){
                    if ( $_POST['passwordBox'] == $_POST['passwordConfirmBox']){
                
                        $nameText = $_POST['nameBox'];
                        $emailText = $_POST['emailBox'];
                        $usernameText = $_POST['usernameBox'];
                        $passwordText = $_POST['passwordBox'];
                        $passwordConfirmText = $_POST['passwordConfirmBox'];

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "submissions";

                        $conne = new mysqli($servername, $username, $password, $dbname);

                        if ($conne -> connect_error){
                            die("Connection failed while inserting data: " . $conne -> connect_error);
                        }

                        else {
                            $sql = "INSERT INTO registrationform (fullname,  
                                                                email, 
                                                                username,
                                                                password) 
                                                                VALUES 
                                                                ('$nameText',
                                                                '$emailText',
                                                                '$usernameText',
                                                                '$passwordText'
                                                                )";

                            if ($conne -> query($sql) == TRUE){
                                header('Location: '. 'http://localhost/index.html');
                                die();
                            } else {
                                echo "Error: " . $sql . "<br>" . $conne -> error;
                            }
                            $conne -> close();
                        }
                    } else {
                        echo "Passwords must match!";
                    }
            } else {
                echo "Invalid access";
            }
        } else {
            echo "Empty data";
        }
    } else {
        echo "Data not set";

    } 
}
?>