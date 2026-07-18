<?php
$counterFile = 'update.html';

// 1. Read the current count out from update.html
if (file_exists($counterFile)) {
    $content = file_get_contents($counterFile);
    preg_match('/<h1>(\d+)<\/h1>/', $content, $matches);
    $currentCount = isset($matches[1]) ? (int)$matches[1] : 0;
} else {
    $currentCount = 0;
}

// 2. Increment the visitor count
$newCount = $currentCount + 1;

// 3. Save the updated HTML structure back to update.html
$newContent = "<!DOCTYPE html>\n<html>\n<head>\n    <title>Total Scans</title>\n</head>\n<body>\n    <h1>$newCount</h1>\n</body>\n</html>";
file_put_contents($counterFile, $newContent);

// 4. Send the user to your Facebook page instantly
header("Location: https://www.facebook.com/zealcartbd");
exit();
?>
