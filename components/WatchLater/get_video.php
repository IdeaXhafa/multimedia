<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['videoSrc'])) {
    $videoSrc = $_POST['videoSrc'];
    // Perform any necessary processing

    $response = array(
      'success' => true,
      'videoSrc' => $videoSrc
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
  }
}

$response = array(
  'success' => false,
  'error' => 'Invalid request'
);
header('Content-Type: application/json');
echo json_encode($response);
exit;
?>
