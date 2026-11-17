<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

// If incoming POST request with name, initialize session
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name'])) {
    $_SESSION['user_name'] = htmlspecialchars(trim($_POST['name']));
    $_SESSION['start_timestamp'] = time();
    $_SESSION['start_time_str'] = date('h:i:s A');
    $_SESSION['start_date_str'] = date('d-m-Y');
}

// Redirect back to login if session was never started
if (!isset($_SESSION['user_name'])) {
    header("Location: index.php");
    exit();
}

$userName = $_SESSION['user_name'];
$startTime = $_SESSION['start_time_str'];
$startDate = $_SESSION['start_date_str'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello <?php echo $userName; ?> - Active Session</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="container">
        <!-- Card with Top-Right Start Time Indicator -->
        <div class="card" style="padding-top: 50px;">
            
            <!-- Requirement: Start time at the right top corner of the page -->
            <div class="top-right-timer" title="Session Start Time">
                <span class="timer-label">⏱️ Start Time:</span>
                <span class="timer-value"><?php echo $startTime; ?></span>
            </div>

            <h2 class="card-title" style="font-size: 2.2rem; color: #1e3a8a;">
                Hello, <span style="color: #2563eb;"><?php echo $userName; ?></span>! 👋
            </h2>
            <p class="card-desc">Welcome to your dashboard. Your session is active and being recorded in PHP <code>$_SESSION</code>.</p>

            <table class="info-table">
                <tbody>
                    <tr>
                        <th>👤 Logged In As</th>
                        <td><?php echo $userName; ?></td>
                    </tr>
                    <tr>
                        <th>📅 Session Date</th>
                        <td><?php echo $startDate; ?></td>
                    </tr>
                    <tr>
                        <th>⏰ Start Time</th>
                        <td><span style="color: #2563eb; font-weight: 700;"><?php echo $startTime; ?></span></td>
                    </tr>
                    <tr>
                        <th>🟢 Session Status</th>
                        <td><span style="color: #16a34a; font-weight: 700;">Active</span></td>
                    </tr>
                </tbody>
            </table>

            <div style="background: #f1f5f9; padding: 14px 18px; border-radius: 8px; margin: 20px 0; font-size: 0.92rem; color: #475569;">
                💡 <em>Click the <strong>Logout</strong> button below whenever you're finished. You will be taken to a logout summary page showing your total duration of usage.</em>
            </div>

            <!-- Requirement: Provides a logout button -->
            <form action="logout.php" method="POST" style="margin-top: 15px;">
                <button type="submit" class="btn btn-danger" style="width: 100%; padding: 14px;">
                    <span>🚪</span> Logout from Session
                </button>
            </form>

        </div>
    </div>

</body>
</html>
