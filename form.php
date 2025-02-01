//<?php
// $servername = "127.0.0.1:3307";
// $username = "root";
// $password = "";
// $dbname = "freelancer";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Collect and validate form data
//     $fname = isset($_POST['fname']) ? trim($_POST['fname']) : null;
//     $sname = isset($_POST['sname']) ? trim($_POST['sname']) : null;
//     $email = isset($_POST['email']) ? trim($_POST['email']) : null;
//     $phone = isset($_POST['phone']) ? trim($_POST['phone']) : null;
//     $address = isset($_POST['address']) ? trim($_POST['address']) : null;
//     $pan = isset($_POST['pan']) ? trim($_POST['pan']) : null;
//     $aadhar = isset($_POST['aadhar']) ? trim($_POST['aadhar']) : null;
//     $acc_no = isset($_POST['acc_no']) ? trim($_POST['acc_no']) : null;
//     $ifsc = isset($_POST['ifsc']) ? trim($_POST['ifsc']) : null;
//     $bank= isset($_POST['bank']) ? trim($_POST['bank']) : null;
//     $gst = isset($_POST['gst']) ? trim($_POST['gst']) : null;
//     $experience = isset($_POST['experience']) ? trim($_POST['experience']) : null;
//     $job = isset($_POST['job']) ? trim($_POST['job']) : null;
//     $reference = isset($_POST['reference']) ? trim($_POST['reference']) : null;
//     $district = isset($_POST['district']) ? trim($_POST['district']) : null;
//     $workloads = isset($_POST['workloads']) ? trim($_POST['workloads']) : null;

//     // File uploads
//     $img_aadhar = isset($_FILES['img_aadhar']['name']) ? $_FILES['img_aadhar']['name'] : null;
//     $img_pan = isset($_FILES['img_pan']['name']) ? $_FILES['img_pan']['name'] : null;
//     $resume = isset($_FILES['resume']['name']) ? $_FILES['resume']['name'] : null;
//     $photo = isset($_FILES['photo']['name']) ? $_FILES['photo']['name'] : null;
//     $address_proof = isset($_FILES['address_proof']['name']) ? $_FILES['address_proof']['name'] : null;

//     $upload_dir = "uploads/";

//     // Ensure directory exists
//     if (!is_dir($upload_dir)) {
//         mkdir($upload_dir, 0755, true);
//     }

//     $img_aadhar_path = $img_aadhar ? $upload_dir . basename($img_aadhar) : null;
//     $img_pan_path = $img_pan ? $upload_dir . basename($img_pan) : null;
//     $resume_path = $resume ? $upload_dir . basename($resume) : null;
//     $photo_path = $photo ? $upload_dir . basename($photo) : null;
//     $address_proof_path = $address_proof ? $upload_dir . basename($address_proof) : null;

//     // Move uploaded files
//     if ($img_aadhar && !move_uploaded_file($_FILES['img_aadhar']['tmp_name'], $img_aadhar_path)) {
//         echo json_encode(array("status_code" => 500, 'msg' => "Failed to upload Aadhaar image."));
//         exit;
//     }
//     if ($img_pan && !move_uploaded_file($_FILES['img_pan']['tmp_name'], $img_pan_path)) {
//         echo json_encode(array("status_code" => 500, 'msg' => "Failed to upload PAN image."));
//         exit;
//     }
//     if ($resume && !move_uploaded_file($_FILES['resume']['tmp_name'], $resume_path)) {
//         echo json_encode(array("status_code" => 500, 'msg' => "Failed to upload resume."));
//         exit;
//     }
//     if ($photo && !move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path)) {
//         echo json_encode(array("status_code" => 500, 'msg' => "Failed to upload photo."));
//         exit;
//     }
//     if ($address_proof && !move_uploaded_file($_FILES['address_proof']['tmp_name'], $address_proof_path)) {
//         echo json_encode(array("status_code" => 500, 'msg' => "Failed to upload address proof."));
//         exit;
//     }
    


//     // Ensure input values are not empty
//     if (!empty($fname) && !empty($sname)) {
//         // Prepare the SQL statement with placeholders
//         $stmt = $conn->prepare("INSERT INTO application1 
//             (first_name, second_name, email, phone, address, pancard_no, pancard, aadhar_no, aadhar, acc_no, ifsc,bank_name, gst_no, experience, job, reference, district, workloads, resume, photo, address_proof) 
//             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
//         if (!$stmt) {
//             echo json_encode(array("status_code" => 500, 'msg' => "Error preparing statement: " . $conn->error));
//             exit;
//         }

//         // Bind parameters
//         $stmt->bind_param("sssssssssssssssssssss", $fname, $sname, $email, $phone, $address, $pan, $img_pan, $aadhar, $img_aadhar, $acc_no, $ifsc,$bank, $gst, $experience, $job, $reference, $district, $workloads, $resume, $photo, $address_proof);

//         // Execute the query
//         if ($stmt->execute()) {
//             echo json_encode(array("status_code" => 200, 'msg' => "Updated successfully"));
//         } else {
//             echo json_encode(array("status_code" => 500, 'msg' => "Execution error: " . $stmt->error));
//         }
//         $stmt->close();
//     } else {
//         echo json_encode(array("status_code" => 400, 'msg' => "Invalid input: Fields cannot be empty"));
//     }
// }

// $conn->close();
//?>

<?php
// Database credentials
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "freelancer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize form inputs
    $fname = isset($_POST['fname']) ? trim($_POST['fname']) : null;
    $sname = isset($_POST['sname']) ? trim($_POST['sname']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : null;
    $address = isset($_POST['address']) ? trim($_POST['address']) : null;
    $pan = isset($_POST['pan']) ? trim($_POST['pan']) : null;
    $aadhar = isset($_POST['aadhar']) ? trim($_POST['aadhar']) : null;
    $acc_no = isset($_POST['acc_no']) ? trim($_POST['acc_no']) : null;
    $ifsc = isset($_POST['ifsc']) ? trim($_POST['ifsc']) : null;
    $bank = isset($_POST['bank']) ? trim($_POST['bank']) : null;
    $gst = isset($_POST['gst']) ? trim($_POST['gst']) : null;
    $experience = isset($_POST['experience']) ? trim($_POST['experience']) : null;
    $job = isset($_POST['job']) ? trim($_POST['job']) : null;
    $reference = isset($_POST['reference']) ? trim($_POST['reference']) : null;
    $district = isset($_POST['district']) ? trim($_POST['district']) : null;
    $workloads = isset($_POST['workloads']) ? trim($_POST['workloads']) : null;

    // File upload handling
    $upload_dir = "uploads/";

    function handleFileUpload($fileKey, $upload_dir) {
        if (isset($_FILES[$fileKey]['tmp_name']) && !empty($_FILES[$fileKey]['tmp_name'])) {
            $filePath = $upload_dir . basename($_FILES[$fileKey]['name']);
            if (move_uploaded_file($_FILES[$fileKey]['tmp_name'], $filePath)) {
                return $filePath;
            }
        }
        return null;
    }

    $img_aadhar = handleFileUpload('img_aadhar', $upload_dir);
    $img_pan = handleFileUpload('img_pan', $upload_dir);
    $resume = handleFileUpload('resume', $upload_dir);
    $photo = handleFileUpload('photo', $upload_dir);
    $address_proof = handleFileUpload('address_proof', $upload_dir);

    // Validate mandatory inputs
    if (!empty($fname) && !empty($sname)) {
        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO application1 
            (first_name, second_name, email, phone, address, pancard_no, pancard, aadhar_no, aadhar, acc_no, ifsc, bank_name, gst_no, experience, job, reference, district, workloads, resume, photo, address_proof) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$stmt) {
            echo json_encode(array("status_code" => 500, "msg" => "Error preparing statement: " . $conn->error));
            exit;
        }

        $stmt->bind_param(
            "sssssssssssssssssssss",
            $fname, $sname, $email, $phone, $address, $pan,
            $img_pan , $aadhar, $img_aadhar ,
            $acc_no, $ifsc, $bank, $gst, $experience, $job,
            $reference, $district, $workloads,
            $resume , $photo, $address_proof 
        );

        if ($stmt->execute()) {
            echo json_encode(array("status_code" => 200, "msg" => "Form submitted successfully!"));
        } else {
            echo json_encode(array("status_code" => 500, "msg" => "Database execution error: " . $stmt->error));
        }
        $stmt->close();
    } else {
        echo json_encode(array("status_code" => 400, "msg" => "Invalid input: First name and second name cannot be empty."));
    }
}

$conn->close();
?>
