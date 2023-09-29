<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate form data here
    $name = sanitizeInput($_POST["name"]);
    $email = sanitizeInput($_POST["email"]);
    $phone = sanitizeInput($_POST["phone"]);
    $message = sanitizeInput($_POST["message"]);

    // Add validation for other fields as needed
   

    //  email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        sendResponse(false, "Please enter a valid email address.");
    }

    // phone validation
    if (!preg_match("/^(?:\+1\d{10}|\+92\d{10}|0[1-9]\d{9})$/", $phone)) {
        sendResponse(false, "Please enter a valid phone number.");
    }
   if(empty($name)){
    sendResponse(false, "Please enter a valid Name.");
   }
   if(empty($message)){
    sendResponse(false, "Please enter your Message.");
   }
   
    // If all validations pass, you can insert data into the database
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=consultation", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get the current date and time
        $currentDate = date("Y-m-d");
        $currentTime = date("H:i:s");
        
        // Prepare and execute the SQL insert statement
        $stmt = $pdo->prepare("INSERT INTO contact (name, email, phone,message,currentdate,currenttime) VALUES (:name, :email, :phone,:message,:currentdate, :currenttime)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":message", $message);
        $stmt->bindParam(":currentdate", $currentDate);
        $stmt->bindParam(":currenttime", $currentTime);
        $stmt->execute();

        // Return a success message
        
        sendResponse(true, "Message sent successfully!");
    } catch (PDOException $e) {
        // Handle database connection or insertion error
        sendResponse(false, "Database error: " . $e->getMessage());
    }
} else {
    // Invalid request method
    sendResponse(false, "Invalid request.");
}

function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

function sendResponse($success, $message) {
    $response = array("success" => $success, "message" => $message);
    header("Content-Type: application/json");
    echo json_encode($response);
    exit;
}
?>
