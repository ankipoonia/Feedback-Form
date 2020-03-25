<?php
$academic_year = $_POST['academic_year'];
$semester = $_POST['semester'];
$feedback_date = $_POST['feedback_date'];
$branch = $_POST['branch'];
$section = $_POST['section'];
$sub = $_POST['sub'];
$code = $_POST['code'];
$answer = $_POST['answer'];
$tech = $_POST['tech'];
$comm_skill = $_POST['comm_skill'];
$availablity = $_POST['availablity'];
$pace = $_POST['pace'];
$effectiveness = $_POST['effectiveness'];
$technical_content = $_POST['technical_content'];
$lab_exp = $_POST['lab_exp'];
$remarks = $_POST['remarks'];

if (!empty($academic_year) || !empty($semester) || !empty($feedback_date) || !empty($branch) || !empty($section) || !empty($sub) || !empty($answer) || !empty($tech) || !empty($comm_skill) || !empty($availablity) || !empty($pace) || !empty($effectiveness) || !empty($technical_content) || !empty($lab_exp)){
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "feedback_form";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errno.')'. mysqli_connect_error());
    }
    else {

        $INSERT = "INSERT Into details (academic_year, semester, feedback_date, branch, section, sub, code, answer, tech, comm_skill, availablity, pace, effectiveness, technical_content, lab_exp, remark) values('$academic_year', 
        '$semester',
        '$feedback_date',
        '$branch',
        '$section',
        '$sub',
		'$code',
        '$answer',
        '$tech',
        '$comm_skill',
        '$availablity',
        '$pace',
        '$effectiveness',
        '$technical_content',
        '$lab_exp',
        '$remarks')";
        if ($conn->query($INSERT) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $INSERT . "<br>" . $conn->error;
        }    
    }
    $conn->close();
}
else{
    echo "Please Fill the required fields";
    die();
}
?>