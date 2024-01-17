<?php
         $localhost = 'localhost';
         $dbname = 'exp';
         $username = 'ingress';
         $password = 'ingress';

            try {
                $conn = new mysqli($this->localhost,$this->username,$this->password,$this->dbname);
            } catch (Exception $e) {
                echo 'connection error'.$e->getMessage();
            }
            include 'modal/modal.php';
            $modal = new Modal($conn);
// ?>
