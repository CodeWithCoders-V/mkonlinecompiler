<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'];
    $language = $_POST['language'];

    $language_map = [
        'c' => 50,
        'cpp' => 54,
        'java' => 62,
        'python' => 71,
        'javascript' => 63
    ];

    $language_id = $language_map[$language] ?? 71;

    $post_data = [
        "language_id" => $language_id,
        "source_code" => $code,
        "stdin" => "" // You can add any standard input here if required
    ];

    $ch = curl_init("https://judge0-ce.p.rapidapi.com/submissions?base64_encoded=false&wait=true");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "X-RapidAPI-Key: 779daf192cmshc09a64889fcf448p12eb3cjsn68d4c039fbfe",
        "X-RapidAPI-Host: judge0-ce.p.rapidapi.com"
    ]);

    $response = curl_exec($ch);
    curl_close($ch);

    // Decode the response from JSON to an associative array
    $response_data = json_decode($response, true);

    // Check if the response contains stdout
    if (isset($response_data['stdout'])) {
        echo $response_data['stdout'];
    } elseif (isset($response_data['stderr'])) {
        echo "Error: " . $response_data['stderr'];
    } elseif (isset($response_data['compile_output'])) {
        echo "Compilation Error: " . $response_data['compile_output'];
    } else {
        echo "Unknown error occurred.";
    }
}
?>
