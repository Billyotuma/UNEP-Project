<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$servername = "localhost";
$username = "root";      // Default XAMPP/WAMP username
$password = "";          // Default XAMPP/WAMP password
$dbname = "staff_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["message" => "Connection failed: " . $conn->connect_error]));
}

$method = $_SERVER['REQUEST_METHOD'];

// --- GET: Fetch Staff ---
if ($method == 'GET') {
    $sql = "SELECT * FROM staff";
    $result = $conn->query($sql);
    $staff = [];
    while($row = $result->fetch_assoc()) {
        $staff[] = $row;
    }
    echo json_encode($staff);
}

// --- POST: Add New Staff ---
if ($method == 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    
    $stmt = $conn->prepare("INSERT INTO staff (index_number, full_names, email, current_location, highest_education, duty_station, availability_remote, software_expertise, expertise_level, language, responsibility_level) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssssssssss", 
        $data['index_number'], $data['full_names'], $data['email'], 
        $data['current_location'], $data['highest_education'], $data['duty_station'], 
        $data['availability_remote'], $data['software_expertise'], $data['expertise_level'], 
        $data['language'], $data['responsibility_level']
    );

    if ($stmt->execute()) {
        echo json_encode(["message" => "Staff created successfully"]);
    } else {
        echo json_encode(["message" => "Error: " . $stmt->error]);
    }
    $stmt->close();
}

// --- DELETE: Remove Staff ---
if ($method == 'DELETE') {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];
    
    $stmt = $conn->prepare("DELETE FROM staff WHERE id=?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo json_encode(["message" => "Staff deleted successfully"]);
    } else {
        echo json_encode(["message" => "Error deleting record"]);
    }
    $stmt->close();
}

$conn->close();
?>
