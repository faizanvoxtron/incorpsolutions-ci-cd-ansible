<?php


$post_data = $_POST;

$response = submitLead($post_data);
if ($response->status) {
    // $brief_page_url = "../brief.php?lead_id=";
    if (!isset($_POST['selected_service']) || $_POST['selected_service'] == 'trademark') {
        $page_location = "../questionnaire/trademark-registration.php?lead_id=";
    } else {
        $page_location = "../questionnaire/copyright-registration.php?lead_id=";
    }
    $brief_page_url = $page_location . $response->lead_id . "&package=" . urlencode($post_data['package']) . "&price=" . urlencode($post_data['price']) . "&name=" . urlencode($post_data['name']) . "&email=" . urlencode($post_data['email']);

    // $brief_page_url = "../thankyou.php";
    header("LOCATION: " . $brief_page_url);
} else {
    // CATCH ERRORS

    $lead_page_url = "../index.php";
    session_start();
    $_SESSION['error'] = $response->message;
    header("LOCATION: " . $lead_page_url);
}

return;


function submitLead(array $data_to_send)
{
    $url = "https://dashboard.theincorpsolutions.com/api/leads";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'authtoken:eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoiQnJhbmQiLCJuYW1lIjoiQnJhbmQiLCJBUElfVElNRSI6MTcyOTI4ODk5OX0.DGjmop4J-MuBQBnBXk_hLVrLzPhUSC40nF6MH91WL_8',
    ]);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data_to_send));
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
    return $response;
}
