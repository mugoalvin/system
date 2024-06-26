<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Route</title>

    <link rel="stylesheet" href="../../css/color.css">
    <link rel="stylesheet" href="../../css/desktop/manager/create_profile.css">


    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>

<?php
include ("navbar.php");
$matatuCompanies = include ('../../controller/manager/getAvailableMatatus.php');
$_SESSION['matatuCompanies'] = $matatuCompanies;
?>

<script>
    let selectedMatatu = <?php echo json_encode($matatuDetails); ?>;
</script>
<main>
    <div id="formDiv">
        <form class="form" action="../../controller/manager/newRoute_proc.php" method="post">
            <h2>Create New Destination</h2>
            <?php
            echo "
            <div>
                <label>Departure:</label>
                <input readonly type='text' name='departure' value='$matatuDetails->name, $matatuDetails->city'>
            </div>
            ";

            echo "
            <div>
                <label>Destination:</label>
                <select name='destination' id='destination'>
                    <option selected disabled>Choose Destination</option> ";
            foreach ($matatuCompanies as $company) {
                if ($company->name == $matatuDetails->name && $company->city !== $matatuDetails->city) {
                    echo "<option>$company->name, $company->city</option>";
                } else {
                    continue;
                }
            }
            echo "
                </select>
            </div>
            ";

            ?>
            <div>
                <label>Price</label>
                <input type='number' name='price'>
            </div>
            <div>
                <label>ETA</label>
                <input type="text" id="duration" name="eta" placeholder="HH:MM" pattern="[0-9]{2}:[0-9]{2}"
                    title="Enter a duration in the format HH:MM" />
            </div>
            <div>
                <input type="submit" value="Submit" class="formBtn" id="submitBtn">
            </div>
        </form>
        <div id="mapDiv">
            <section id="map"></section>
        </div>
    </div>
    <div>
        <p><strong>NB: </strong>Locate on the map presented to fill the Latitude and the Longitude inputs.</p>
    </div>
</main>
<script>
    var matatuCompanies = <?php echo json_encode($matatuCompanies) ?>;
</script>
<script src="../../javascript/manager/home.js"></script>
<script src="../../javascript/manager/newRoute.js"></script>