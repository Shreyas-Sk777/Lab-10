<?php
// Set default timezone (e.g., Asia/Kolkata or user's local timezone)
date_default_timezone_set('Asia/Kolkata');

// Part B Requirements: Display Current Date, Time, and Day using PHP
$currentDay   = date('l');           // Full day name (e.g. Tuesday)
$shortDay     = date('D');           // Short day name (e.g. Tue)
$currentDate  = date('d-m-Y');        // Standard date format (e.g. 17-11-2026)
$formalDate   = date('F j, Y');      // Long formal date (e.g. November 17, 2026)
$time12       = date('h:i:s A');     // 12-hour format with AM/PM
$time24       = date('H:i:s');       // 24-hour format
$timezone     = date_default_timezone_get();
$dayOfYear    = date('z') + 1;       // Day of the year
$weekOfYear   = date('W');           // ISO-8601 week number
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 10 (b) - Current Date, Time and Day in PHP</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="container">
        <a href="../index.php" class="back-link">← Back to Lab 10 Home</a>

        <div class="card">
            <h2 class="card-title">Part B: Current Date, Time &amp; Day</h2>
            <p class="card-desc">Generated dynamically on the server using PHP's built-in <code>date()</code> and <code>date_default_timezone_set()</code> functions.</p>

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
                <thead>
                    <tr>
                        <th colspan="2" style="background: #1e3a8a; color: white; text-align: center; border-radius: 6px 6px 0 0;">
                            Server Timestamp Specifications
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>🗓️ Day of Week (<code>date('l')</code>)</th>
                        <td><strong><?php echo $currentDay; ?></strong></td>
                    </tr>
                    <tr>
                        <th>📆 Formatted Date (<code>date('d-m-Y')</code>)</th>
                        <td><strong><?php echo $currentDate; ?></strong></td>
                    </tr>
                    <tr>
                        <th>⏰ 12-Hour Time (<code>date('h:i:s A')</code>)</th>
                        <td><span style="color: #2563eb; font-weight: 700;"><?php echo $time12; ?></span></td>
                    </tr>
                    <tr>
                        <th>⏱️ 24-Hour Time (<code>date('H:i:s')</code>)</th>
                        <td><?php echo $time24; ?></td>
                    </tr>
                    <tr>
                        <th>🌍 Timezone (<code>date_default_timezone_get()</code>)</th>
                        <td><?php echo $timezone; ?></td>
                    </tr>
                    <tr>
                        <th>📊 Day &amp; Week Index</th>
                        <td>Day <?php echo $dayOfYear; ?> of 365 (Week <?php echo $weekOfYear; ?>)</td>
                    </tr>
                </tbody>
            </table>

            <!-- PHP Code Snippet -->
            <div style="background: #0f172a; color: #f8fafc; padding: 18px 22px; border-radius: 10px; margin-top: 24px; font-family: 'Courier New', Courier, monospace; font-size: 0.9rem; overflow-x: auto;">
                <div style="color: #94a3b8; margin-bottom: 8px;">// PHP Core Code Used in this Script</div>
                <div><span style="color: #f43f5e;">date_default_timezone_set</span>(<span style="color: #a5f3fc;">'Asia/Kolkata'</span>);</div>
                <div><span style="color: #38bdf8;">$currentDay</span>  = <span style="color: #f43f5e;">date</span>(<span style="color: #a5f3fc;">'l'</span>); &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #64748b;">// Output: "<?php echo $currentDay; ?>"</span></div>
                <div><span style="color: #38bdf8;">$currentDate</span> = <span style="color: #f43f5e;">date</span>(<span style="color: #a5f3fc;">'d-m-Y'</span>); &nbsp;&nbsp;&nbsp;<span style="color: #64748b;">// Output: "<?php echo $currentDate; ?>"</span></div>
                <div><span style="color: #38bdf8;">$currentTime</span> = <span style="color: #f43f5e;">date</span>(<span style="color: #a5f3fc;">'h:i:s A'</span>); <span style="color: #64748b;">// Output: "<?php echo $time12; ?>"</span></div>
            </div>

            <div class="btn-group" style="justify-content: center; margin-top: 24px;">
                <button type="button" class="btn btn-primary" onclick="window.location.reload();">
                    <span>🔄</span> Refresh Date &amp; Time
                </button>
                <a href="../index.php" class="btn btn-secondary">
                    <span>🏠</span> Lab 10 Home
                </a>
            </div>

        </div>
    </div>

</body>
</html>
