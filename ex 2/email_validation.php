<?php
$email = $_POST['email'] ?? '';

$isValidEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($isValidEmail) {
        $verificationMessage = "Email verification successful!";
    } else {
        $verificationMessage = "Invalid email address entered.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Verification Page</title>
</head>
<body>
<h1>Email Verification</h1>
<?php if (isset($verificationMessage)): ?>
    <p><?php echo $verificationMessage; ?></p>
<?php endif; ?>

<form method="post">
    <label for="email">Enter your email:</label>
    <input type="text" id="email" name="email" value="<?php echo $email; ?>" required>
    <button type="submit">Verify Email</button>
</form>
</body>
</html>
