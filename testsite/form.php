<?php
    date_default_timezone_set('Europe/Copenhagen');

    if(isset($_POST['fornavn']))
    {
        $fornavn = $_POST['fornavn'];
        $efternavn = $_POST['efternavn'];
        $email = $_POST['email'];
        $adgangskode = $_POST['adgangskode'];
        $newdate = date('Y-m-d', strtotime($_POST['dato']));

        //database details. You have created these details in the third step. Use your own.

        $server = "localhost";
        $user = "root";
        $pw = "";
        $db = "tantegr";

        // Create connection
          $conn = new mysqli($server, $user, $pw, $db);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          echo "Connected successfully";



        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO brugere (Fornavn, Efternavn, Email, Adgangskode, Fødselsdato ) VALUES ('$fornavn', '$efternavn', '$email', '$adgangskode', '$newdate')";
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

      }
?>
