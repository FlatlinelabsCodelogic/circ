<?php

        function dbConnect(){
            $host   = "localhost";
            $db     = "dbhoerster";
            $user   = "root";
            $pwd   = "";

            $conn = @ new mysqli($host, $user, $pwd, $db);
            if ($conn->connect_error) {
                exit($conn->connect_error);
            }
            return $conn;
        }

       
