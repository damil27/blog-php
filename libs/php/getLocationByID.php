<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$executionStartTime = microtime(true);

include("config.php");

header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');

try {
    $conn = new mysqli($cd_host, $cd_user, $cd_password, $cd_dbname, $cd_port, $cd_socket);
} catch (mysqli_sql_exception $e) {
    $output['status']['code'] = "300";
    $output['status']['name'] = "Database connection failed.";
    $output['status']['description'] = $e->getMessage();
    $output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
    $output['data'] = [];
    echo json_encode($output);
    exit;
}

try {

    $id = $_REQUEST['id'];

    // 1. Get the location itself
    $locationQuery = $conn->prepare('SELECT `id`, `name` FROM `location` WHERE `id` = ?');
    $locationQuery->bind_param("i", $id);
    $locationQuery->execute();
    $locationResult = $locationQuery->get_result();
    $location = mysqli_fetch_assoc($locationResult);

    // 2. Get every department attached to this location
    $deptQuery = $conn->prepare('SELECT `id`, `name` FROM `department` WHERE `locationID` = ?');
    $deptQuery->bind_param("i", $id);
    $deptQuery->execute();
    $deptResult = $deptQuery->get_result();

    $departments = [];
    while ($row = mysqli_fetch_assoc($deptResult)) {
        array_push($departments, $row);
    }

    // 3. Count personnel across all departments at this location
    $countQuery = $conn->prepare('
        SELECT COUNT(p.id) AS personnelCount
        FROM personnel p
        JOIN department d ON p.departmentID = d.id
        WHERE d.locationID = ?
    ');
    $countQuery->bind_param("i", $id);
    $countQuery->execute();
    $countResult = $countQuery->get_result();
    $countRow = mysqli_fetch_assoc($countResult);
    $personnelCount = (int) $countRow['personnelCount'];

} catch (mysqli_sql_exception $e) {

    $output['status']['code'] = "400";
    $output['status']['name'] = "SQL statement failed.";
    $output['status']['description'] = $e->getMessage();
    $output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
    $output['data'] = [];

    echo json_encode($output);
    exit;

}

if (empty($location)) {

    $output['status']['code'] = "404";
    $output['status']['name'] = "Not found";
    $output['status']['description'] = "No location found with id: {$id}";
    $output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
    $output['data'] = [];

    echo json_encode($output);
    exit;

}

$output['status']['code'] = "200";
$output['status']['name'] = "ok";
$output['status']['description'] = "success";
$output['status']['returnedIn'] = (microtime(true) - $executionStartTime) / 1000 . " ms";
$output['data']['location'] = $location;
$output['data']['departments'] = $departments;
$output['data']['personnelCount'] = $personnelCount;

echo json_encode($output);

mysqli_close($conn);

?>