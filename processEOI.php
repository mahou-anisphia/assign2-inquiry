<?php
include 'setting.php';

// Start session
session_start();
$conn = connectToDB(); // Gọi hàm connectToDB để lấy đối tượng kết nối

// Kiểm tra xem dữ liệu của biểu mẫu đã được gửi đi chưa
if (isset($_POST['jobReferenceNumber'], $_POST['firstName'], $_POST['lastName'], $_POST['streetAddress'], $_POST['suburb'], $_POST['state'], $_POST['postcode'], $_POST['email'], $_POST['phoneNumber'], $_POST['skills'], $_POST['otherSkills'])) {
    // Lấy dữ liệu từ biểu mẫu
    $jobReferenceNumber = mysqli_real_escape_string($conn, htmlspecialchars($_POST['jobReferenceNumber']));
    $firstName = mysqli_real_escape_string($conn, htmlspecialchars($_POST['firstName']));
    $lastName = mysqli_real_escape_string($conn, htmlspecialchars($_POST['lastName']));
    $streetAddress = mysqli_real_escape_string($conn, htmlspecialchars($_POST['streetAddress']));
    $suburb = mysqli_real_escape_string($conn, htmlspecialchars($_POST['suburb']));
    $state = mysqli_real_escape_string($conn, htmlspecialchars($_POST['state']));
    $postcode = mysqli_real_escape_string($conn, htmlspecialchars($_POST['postcode']));
    $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
    $phoneNumber = mysqli_real_escape_string($conn, htmlspecialchars($_POST['phoneNumber']));
    $skills = '';
        if (isset($_POST['skills'])) {
            if (is_array($_POST['skills'])) {
                $skills = implode(',', $_POST['skills']);
            } else {
                $skills = mysqli_real_escape_string($conn, htmlspecialchars($_POST['skills']));
            }
        }
    $otherSkills = '';
        if (isset($_POST['otherSkills'])) {
            if (is_array($_POST['otherSkills'])) {
                $otherSkills = implode(',', $_POST['otherSkills']);
            } else {
                $otherSkills = mysqli_real_escape_string($conn, htmlspecialchars($_POST['otherSkills']));
            }
        }


    // Check if any of the required fields are empty
    if (!empty($jobReferenceNumber) && !empty($firstName) && !empty($lastName) && !empty($streetAddress) && !empty($suburb) && !empty($state) && !empty($postcode) && !empty($email) && !empty($phoneNumber)) {
        // Prepare SQL statement to insert data into the table
        $sql = "INSERT INTO eoi (jobReferenceNumber, firstName, lastName, streetAddress, suburbtown, state, postcode, emailaddress, phoneNumber, skill1, skill2, otherSkills) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Prepare and bind the statement
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssssssssss", $jobReferenceNumber, $firstName, $lastName, $streetAddress, $suburb, $state, $postcode, $email, $phoneNumber, $skills, $skills, $otherSkills);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                // Set session variable to indicate successful form submission
                $_SESSION['form_submitted'] = true;
                // Redirect to register-review.php
                header("Location: register-review.php");
                exit();
            } else {
                echo "Error executing statement: " . mysqli_error($conn);
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conn);
        }

    } else {
        echo "All fields are required!";
    }
} else {
    // Redirect to apply.php if accessed accidentally
    header("Location: apply.php");
    exit();
}
?>
