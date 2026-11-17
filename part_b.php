<?php
// Set default timezone
date_default_timezone_set('Asia/Kolkata');

// Part B Requirements: Display Current Date, Time, and Day using PHP
$currentDay   = date('l');           // e.g. Tuesday
$shortDay     = date('D');           // e.g. Tue
$currentDate  = date('d-m-Y');        // e.g. 17-11-2026
$formalDate   = date('F j, Y');      // e.g. November 17, 2026
$time12       = date('h:i:s A');     // 12-hour format with AM/PM
$time24       = date('H:i:s');       // 24-hour format
$timezone     = date_default_timezone_get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 10 (b) - Current Date, Time and Day</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <a href="index.php" class="back-link">← Back to Lab 10 Home</a>

        <div class="card">
            <h2 class="card-title">Part B: Current Date, Time &amp; Day</h2>
            <p class="card-desc">Generated dynamically on the server using PHP's built-in <code>date()</code> function.</p>

            <!-- Main Display Cards -->
            <div class="datetime-display">
                <!-- Day Card -->
                <div class="dt-card">
                    <div class="icon">📅</div>
                    <div class="title">Current Day</div>
                    <div class="value" style="color: #7c3aed;"><?php echo $currentDay; ?></div>
                    <small style="color: #64748b;"><?php echo $shortDay; ?></small>
                </div>

                <!-- Date Card -->
                <div class="dt-card">
                    <div class="icon">🗓️</div>
                    <div class="title">Current Date</div>
                    <div class="value" style="color: #059669;"><?php echo $currentDate; ?></div>
                    <small style="color: #64748b;"><?php echo $formalDate; ?></small>
                </div>

                <!-- Time Card -->
                <div class="dt-card time-card">
                    <div class="icon">⏰</div>
                    <div class="title">Current Time</div>
                    <div class="value"><?php echo $time12; ?></div>
                    <small style="color: #64748b;">24-Hr: <?php echo $time24; ?></small>
                </div>
            </div>

            <!-- Detailed Breakdown Table -->
            <table class="info-table" style="margin-top: 20px;">
                <tbody>
                    <tr>
                        <th>🗓️ Current Day (<code>date('l')</code>)</th>
                        <td><strong><?php echo $currentDay; ?></strong></td>
                    </tr>
                    <tr>
                        <th>📆 Current Date (<code>date('d-m-Y')</code>)</th>
                        <td><strong><?php echo $currentDate; ?></strong></td>
                    </tr>
                    <tr>
                        <th>⏰ Current Time (<code>date('h:i:s A')</code>)</th>
                        <td><span style="color: #2563eb; font-weight: 700;"><?php echo $time12; ?></span></td>
                    </tr>
                    <tr>
                        <th>🌍 Timezone</th>
                        <td><?php echo $timezone; ?></td>
                    </tr>
                </tbody>
            </table>

            <div class="btn-group" style="justify-content: center; margin-top: 24px;">
                <button type="button" class="btn btn-primary" onclick="window.location.reload();">
                    <span>🔄</span> Refresh Date &amp; Time
                </button>
                <a href="index.php" class="btn btn-secondary">
                    <span>🏠</span> Lab 10 Home
                </a>
            </div>

        </div>
    </div>

</body>
</html>
