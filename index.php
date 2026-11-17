<?php
date_default_timezone_set('Asia/Kolkata');
$today = date('l, F j, Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Programming Lab 10 - PHP Applications</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <!-- Main Header -->
        <header class="main-header">
            <h1>Web Programming - Lab 10</h1>
            <p>PHP Server-Side Web Applications &bull; <?php echo $today; ?></p>
        </header>

        <!-- Navigation Portal Cards -->
        <div class="portal-grid">
            
            <!-- Part A -->
            <a href="part_a/index.php" class="portal-card">
                <div class="portal-info">
                    <div class="portal-badge">A</div>
                    <div class="portal-content">
                        <h3>Session &amp; Usage Duration Tracker</h3>
                        <p>Accepts user name, initializes PHP session, displays start time at top-right corner, and on logout computes total duration of usage.</p>
                    </div>
                </div>
                <div class="arrow-icon">→</div>
            </a>

            <!-- Part B -->
            <a href="part_b/index.php" class="portal-card">
                <div class="portal-info">
                    <div class="portal-badge" style="background: #f0fdf4; color: #16a34a;">B</div>
                    <div class="portal-content">
                        <h3>Current Date, Time &amp; Day Script</h3>
                        <p>Dynamic PHP script displaying the current server day of the week, formatted date, and 12-hr/24-hr time using built-in date functions.</p>
                    </div>
                </div>
                <div class="arrow-icon">→</div>
            </a>

            <!-- Part C -->
            <a href="part_c/index.html" class="portal-card">
                <div class="portal-info">
                    <div class="portal-badge" style="background: #fef2f2; color: #dc2626;">C</div>
                    <div class="portal-content">
                        <h3>Age Verification Gatekeeper</h3>
                        <p>HTML form capturing Name and Age. PHP verifies if Age &lt; 18 (Unauthorized page) or Age &ge; 18 (Welcome page).</p>
                    </div>
                </div>
                <div class="arrow-icon">→</div>
            </a>

        </div>

        <!-- Information Footer Card -->
        <div class="card" style="margin-top: 30px; padding: 22px 28px; background: #ffffff;">
            <h4 style="margin-bottom: 8px; color: #1e293b; font-size: 1rem;">📋 Lab 10 Execution Guide:</h4>
            <ul style="color: #64748b; font-size: 0.92rem; padding-left: 20px; line-height: 1.6;">
                <li>Run these files using a local PHP environment such as <strong>XAMPP</strong> (inside <code>htdocs/</code>), <strong>WAMP</strong>, or the PHP built-in web server: <code>php -S localhost:8000</code>.</li>
                <li>Navigate directly to individual modules or use the cards above to test each application interactively.</li>
            </ul>
        </div>
    </div>

</body>
</html>
