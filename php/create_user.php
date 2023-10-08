<?php
include_once 'connection.php';

if (isset($_POST['save'])) {
    $empno = mysqli_real_escape_string($conn, $_POST['empno']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $designation = mysqli_real_escape_string($conn, $_POST['designation']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $role = "user";

    // Validating fields
    if (!preg_match("/^[a-zA-Z0-9]{5,}$/", $empno)) {
        echo "<script>
        window.alert('Invalid EMP NUMBER');
        window.location.href = '../admin/users.html';
        </script>";
    } elseif (!preg_match("/^[a-zA-Z0-9]{5,}$/", $fname)) {
        echo "<script>
        window.alert('Invalid First Name');
        window.location.href = '../admin/users.html';
        </script>";
    } elseif (!preg_match("/^[a-zA-Z0-9]{5,}$/", $lname)) {
        echo "<script>
        window.alert('Invalid Last Name');
        window.location.href = '../admin/users.html';
        </script>";
    } elseif (strlen($contact) !== 10 || !is_numeric($contact)) {
        echo "<script>
        window.alert('Invalid Phone number, please enter ten numbers');
        window.location.href = '../admin/users.html';
        </script>";
    } else {
        // Generating Password
        function generateRandomPassword($length = 10) {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            $password = '';
            for ($i = 0; $i < $length; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $password .= $characters[$index];
            }
            return $password;
        }

        $password = generateRandomPassword();
        $hashPassword = md5($password);
        
        $insert = "INSERT INTO users(empno, fname, lname, gender, department, designation, contact, password, role)
        VALUES('$empno', '$fname', '$lname', '$gender', '$department', '$designation', '$contact', '$hashPassword', '$role')";

        $executeQuery = mysqli_query($conn, $insert);
        
        if ($executeQuery) {
            echo "<script>
            window.alert('User has been created successfully');
            window.location.href = '../admin/users.html';
            </script>";
        } else {
            echo "<script>
            window.alert('An error occurred. Please try again');
            window.location.href = '../admin/users.html';
            </script>"; 
        }
    }
}
?>
