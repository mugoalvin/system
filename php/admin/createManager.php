<?php
include('navbar.php');
include("../../controller/admin/getLastCompanyID.php");
session_start();
$_SESSION['newCompanyID'] = $company_id + 1;

// If Manager was added successfully
if ($_SESSION['isManagerAdded']): ?>
<script>
    alert("Manager successfully Added")
</script>
<?php endif; $_SESSION['isManagerAdded'] = false ?>

<head>
    <link rel="stylesheet" href="../../css/color.css">
    <link rel="stylesheet" href="../../css/desktop/manager/create_profile.css">
</head>
<style>
body {
    background-color: var(--overallBackground);
}

</style>
<main>
    <div id="formDiv">
        <form class="form" action="../../controller/admin/addManager.php" method="post">
            <h2>Create Manager</h2>
            <div>
                <label>First Name:</label>
                <input type="text" name="first_name">
            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" name="last_name">
            </div>
            <div>
                <label>Username:</label>
                <input type="text" name="username">
            </div>
            <div>
                <label>Password:</label>
                <input type="text" name="password">
            </div>
            <div>
                <input type="submit" value="Submit" class="formBtn" id="submitBtn">
            </div>
        </form>
    </div>
</main>