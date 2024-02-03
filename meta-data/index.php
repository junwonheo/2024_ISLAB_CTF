<?php
function fetchUrl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

if (isset($_POST['url'])) {
    $url = $_POST['url'];
    $response = fetchUrl($url);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SSRF Test Application</title>
</head>
<body>
    <h1>Cloud Vulnerability Test</h1>
    <form action="" method="POST">
        <input type="text" name="url" placeholder="Enter URL">
        <input type="submit" value="Fetch URL">
    </form>
    <?php
    if (isset($response)) {
        echo "<p>Response:</p>";
        echo "<pre>" . htmlspecialchars($response, ENT_QUOTES, 'UTF-8') . "</pre>";
    }
    ?>
</body>
</html>