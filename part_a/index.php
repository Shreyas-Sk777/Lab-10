<?php
// Start session to see if already logged in
session_start();
if (isset($_SESSION['user_name'])) {
    header("Location: hello.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 10 (a) - User Login &amp; Session Tracker</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="container">
        <a href="../index.php" class="back-link">← Back to Lab 10 Home</a>

        <div class="card">
            <h2 class="card-title">Part A: Session &amp; Duration Tracker</h2>
            <p class="card-desc">Enter your name to begin your session. The system will track your login start time and usage duration.</p>

            <form action="hello.php" method="POST">
                <div class="form-group">
                    <label for="userName">Enter Your Name <span style="color: #ef4444;">*</span></label>
                    <input type="text" id="userName" name="name" placeholder="e.g. John Doe" required autofocus autocomplete="off">
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn btn-primary">
                        <span>🚀</span> Submit &amp; Start Session
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        <span>🔄</span> Clear
                    </button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
