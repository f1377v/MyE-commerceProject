<?php
include_once './config/database.php';
session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if ( (isset($_POST['submitToken'])) && (isset($_POST['titleBox'])) ){
            if ( (!empty($_POST['submitToken'])) && (!empty($_POST['titleBox'])) ){
                if ($_POST['submitToken'] == 'QnyP&ZtwYUk6MP7awp_^=D63B*$qPbY5' ){
                
                    $titleName = $_POST['titleBox'];
                    $LatitudeText = $_POST['LatitudeBox'];
                    $LongitudeText = $_POST['LongitudeBox'];
                    $descriptionText = $_POST['DescriptionBox'];

                    $database = new Database();
                    $db = $database->getConnection();
                  
                    if($db['status'] == '0'){
                      die("Connection failed while fetching data: ".$db['message']);
                    } else {
                        $conne = $db['connection'];
                        $sql = "INSERT INTO submissionform (Title, 
                                                            Latitude, 
                                                            Longitude, 
                                                            Description) 
                                                            VALUES 
                                                            ('$titleName',
                                                            '$LatitudeText',
                                                            '$LongitudeText',
                                                            '$descriptionText'
                                                            )";

                        if ($conne -> query($sql) == TRUE){
                            $message = 'You have submitted a new record successfully. Thanks!';
                            echo "<SCRIPT> 
                                    alert('$message')
                                    window.location.replace('http://13.59.153.66/search.php');
                                </SCRIPT>";
                            die();
                        } else {
                            echo "Error: " . $sql . "<br>" . $conne -> error;
                        }
                        $conne -> close();
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