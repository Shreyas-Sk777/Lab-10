<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

// Check if an active session exists
if (!isset($_SESSION['user_name']) || !isset($_SESSION['start_timestamp'])) {
    $hasSession = false;
    $userName = "Guest";
    $durationText = "0 seconds";
    $startTime = "N/A";
    $logoutTime = date('h:i:s A');
} else {
    $hasSession = true;
    $userName = $_SESSION['user_name'];
    $startTime = $_SESSION['start_time_str'];
    $logoutTime = date('h:i:s A');

    // Calculate usage duration in seconds
    $startTimestamp = $_SESSION['start_timestamp'];
    $endTimestamp = time();
    $durationSeconds = max(0, $endTimestamp - $startTimestamp);

    // Format duration nicely into minutes and seconds
    $minutes = floor($durationSeconds / 60);
    $seconds = $durationSeconds % 60;

    if ($minutes > 0) {
        $durationText = "{$minutes} minute(s) and {$seconds} second(s) ({$durationSeconds} total seconds)";
    } else {
        $durationText = "{$durationSeconds} second(s)";
    }

    // Requirement: Clear and destroy session on logout
    $_SESSION = array();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Logout Summary</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="container">
        <a href="../index.php" class="back-link">← Back to Lab 10 Home</a>

        <div class="card" style="text-align: center;">
            <div style="font-size: 3.5rem; margin-bottom: 10px;">🙏</div>
            
            <!-- Requirement: Thank You message with the duration of usage -->
            <h2 class="card-title" style="font-size: 2rem; color: #15803d;">
                Thank You, <?php echo htmlspecialchars($userName); ?>!
            </h2>
            <p class="card-desc" style="text-align: center;">You have been logged out successfully. Here is your session summary:</p>

            <div style="background: #f0fdf4; border: 1.5px solid #bbf7d0; border-radius: 12px; padding: 24px; margin-bottom: 24px; text-align: left;">
                <table class="info-table" style="margin: 0;">
                    <tbody>
                        <tr>
                            <th>👤 User Name</th>
                            <td><?php echo htmlspecialchars($userName); ?></td>
                        </tr>
                        <tr>
                            <th>⏰ Session Started</th>
                            <td><?php echo $startTime; ?></td>
                        </tr>
                        <tr>
                            <th>🚪 Session Ended</th>
                            <td><?php echo $logoutTime; ?></td>
                        </tr>
                        <tr>
                            <th>⏳ Duration of Usage</th>
                            <td>
                                <span style="background: #dcfce7; color: #166534; padding: 4px 12px; border-radius: 20px; font-weight: 700;">
                                    <?php echo $durationText; ?>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>🔒 Session Status</th>
                            <td><span style="color: #64748b;">Terminated &amp; Destroyed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="btn-group" style="justify-content: center;">
                <a href="index.php" class="btn btn-primary">
                    <span>🔄</span> Login Again
                </a>
                <a href="../index.php" class="btn btn-secondary">
                    <span>🏠</span> Lab 10 Dashboard
                </a>
            </div>
        </div>
    </div>

</body>
</html>
