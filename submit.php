<?php
function safe($k){ return isset($_POST[$k]) ? htmlspecialchars(trim($_POST[$k])) : ''; }
$fullname = safe('fullname');
$father = safe('father');
$gender = safe('gender');
$email = safe('email');
$phone = safe('phone');
$address = safe('address');
$dob = safe('dob');
$qualification = safe('qualification');
$course = safe('course');
$skills = safe('skills');
$emergency = safe('emergency');
$bio = safe('bio');
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Application Received</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <main class="container">
    <h1>Application Submitted</h1>
    <section class="summary">
      <h2>Applicant Details</h2>
      <table class="summary-table" style="width:100%;border-collapse:collapse">
        <tr><th>Full Name</th><td><?php echo $fullname; ?></td></tr>
        <tr><th>Father's Name</th><td><?php echo $father; ?></td></tr>
        <tr><th>Gender</th><td><?php echo $gender; ?></td></tr>
        <tr><th>Email</th><td><?php echo $email; ?></td></tr>
        <tr><th>Phone</th><td><?php echo $phone; ?></td></tr>
        <tr><th>Address</th><td><?php echo nl2br($address); ?></td></tr>
        <tr><th>Date of Birth</th><td><?php echo $dob; ?></td></tr>
        <tr><th>Qualification</th><td><?php echo $qualification; ?></td></tr>
        <tr><th>Course</th><td><?php echo $course; ?></td></tr>
        <tr><th>Skills</th><td><?php echo $skills; ?></td></tr>
        <tr><th>Emergency Contact</th><td><?php echo $emergency; ?></td></tr>
        <tr><th>Bio</th><td><?php echo nl2br($bio); ?></td></tr>
      </table>
    </section>
    <p style="margin-top:16px"><a href="index.html">Submit another application</a></p>
  </main>
</body>
</html>
