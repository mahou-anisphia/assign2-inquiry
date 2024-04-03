<?php
session_start();

// Kiểm tra xem người dùng đã submit form EOI chưa
if (!isset($_SESSION['jobReferenceNumber'])) {
    header("Location: apply.php"); // Nếu chưa, chuyển hướng về trang apply.php
    exit();
}

// Lấy thông tin từ session
$jobReferenceNumber = $_SESSION['jobReferenceNumber'];
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$dateOfBirth = isset($_SESSION['dateOfBirth']) ? $_SESSION['dateOfBirth'] : ''; // Kiểm tra xem ngày sinh có được nhập không
$gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : ''; // Kiểm tra xem giới tính có được nhập không
$streetAddress = $_SESSION['streetAddress'];
$suburb = $_SESSION['suburb'];
$state = $_SESSION['state'];
$postcode = $_SESSION['postcode'];
$email = $_SESSION['email'];
$phoneNumber = $_SESSION['phoneNumber'];
$skills = $_SESSION['skills'];
$otherSkills = $_SESSION['otherSkills'];

// Xóa các session để chuẩn bị cho việc nhập mới
unset($_SESSION['jobReferenceNumber']);
unset($_SESSION['firstName']);
unset($_SESSION['lastName']);
unset($_SESSION['dateOfBirth']);
unset($_SESSION['gender']);
unset($_SESSION['streetAddress']);
unset($_SESSION['suburb']);
unset($_SESSION['state']);
unset($_SESSION['postcode']);
unset($_SESSION['email']);
unset($_SESSION['phoneNumber']);
unset($_SESSION['skills']);
unset($_SESSION['otherSkills']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Review</title>
    <style>
        /* Định dạng cho giao diện */
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Review Your Registration</h2>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Job Reference Number</td>
                <td><?php echo $jobReferenceNumber; ?></td>
            </tr>
            <tr>
                <td>First Name</td>
                <td><?php echo $firstName; ?></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><?php echo $lastName; ?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?php echo $dateOfBirth; ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <td>Street Address</td>
                <td><?php echo $streetAddress; ?></td>
            </tr>
            <tr>
                <td>Suburb/Town</td>
                <td><?php echo $suburb; ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo $state; ?></td>
            </tr>
            <tr>
                <td>Postcode</td>
                <td><?php echo $postcode; ?></td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><?php echo $phoneNumber; ?></td>
            </tr>
            <tr>
                <td>Skills</td>
                <td><?php echo $skills; ?></td>
            </tr>
            <tr>
                <td>Other Skills</td>
                <td><?php echo $otherSkills; ?></td>
            </tr>
        </table>
        <form action="processEOI.php" method="post">
            <input type="hidden" name="jobReferenceNumber" value="<?php echo $jobReferenceNumber; ?>">
            <input type="hidden" name="firstName" value="<?php echo $firstName; ?>">
            <input type="hidden" name="lastName" value="<?php echo $lastName; ?>">
            <input type="hidden" name="dateOfBirth" value="<?php echo $dateOfBirth; ?>">
            <input type="hidden" name="gender" value="<?php echo $gender; ?>">
            <input type="hidden" name="streetAddress" value="<?php echo $streetAddress; ?>">
            <input type="hidden" name="suburb" value="<?php echo $suburb; ?>">
            <input type="hidden" name="state" value="<?php echo $state; ?>">
            <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="phoneNumber" value="<?php echo $phoneNumber; ?>">
            <input type="hidden" name="skills" value="<?php echo $skills; ?>">
            <input type="hidden" name="otherSkills" value="<?php echo $otherSkills; ?>">
            <input type="submit" value="Submit" class="button">
        </form>
    </div>
</body>

</html>
