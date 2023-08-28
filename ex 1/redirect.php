<?php
// Redirect to another page after a delay
$redirect_url = 'another_page.html';
$delay_seconds = 3;

header("Refresh: $delay_seconds; URL=$redirect_url");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Redirecting...</title>
</head>
<body>
<p>You will be redirected to another page in <?php echo $delay_seconds; ?> seconds...</p>
<p>If you are not automatically redirected, <a href="<?php echo $redirect_url; ?>">click here</a>.</p>
</body>
</html>
