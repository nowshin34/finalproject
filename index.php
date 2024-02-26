<!DOCTYPE html>
<html>
<head>
    <title>Job Portal</title>
</head>
<body>
    <h1>Welcome to the Job Portal</h1>
    <?php
    // Include the job list and forms from job_functions.php
    include 'job_functions.php';
    displayJobList();
    displayJobForm();
    ?>
</body>
</html>