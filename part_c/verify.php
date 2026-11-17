<?php
// Validate incoming POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['name']) || !isset($_POST['age'])) {
    header("Location: index.html");
    exit();
}

$rawName = trim($_POST['name']);
$name = htmlspecialchars($rawName);
$age = intval($_POST['age']);

// Part C Requirement Logic:
// If age < 18: "Hello <name>, you are not authorized to visit the site"
// Otherwise:   "Welcome <name> to this site" / "Welcome to this site"
if ($age < 18) {
    $isAuthorized = false;
    $headline = "Access Denied";
    $message = "Hello {$name}, you are not authorized to visit the site.";
    $boxClass = "denied";
    $icon = "⛔";
} else {
    $isAuthorized = true;
    $headline = "Access Granted";
    $message = "Welcome {$name} to this site.";
    $boxClass = "granted";
    $icon = "🎉";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 10 (c) - <?php echo $headline; ?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="container">
        <a href="../index.php" class="back-link">← Back to Lab 10 Home</a>

        <div class="card">
            <h2 class="card-title">Authorization Status</h2>
            <p class="card-desc">Result of server-side age verification based on input credentials.</p>

            <!-- Status Banner Message -->
            <div class="auth-box <?php echo $boxClass; ?>">
                <div class="auth-icon"><?php echo $icon; ?></div>
                <div>
                    <div style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.5px; opacity: 0.8; margin-bottom: 4px;">
                        <?php echo $headline; ?>
                    </div>
                    <div class="auth-message"><?php echo $message; ?></div>
                </div>
            </div>

            <!-- Submission Details Summary -->
            <table class="info-table">
                <tbody>
                    <tr>
                        <th>👤 Name</th>
                        <td><strong><?php echo $name; ?></strong></td>
                    </tr>
                    <tr>
                        <th>🎂 Submitted Age</th>
                        <td><?php echo $age; ?> years old</td>
                    </tr>
                    <tr>
                        <th>⚖️ Legal Age Threshold</th>
                        <td>18 years minimum</td>
                    </tr>
                    <tr>
                        <th>📋 Authorization Verdict</th>
                        <td>
                            <?php if ($isAuthorized): ?>
                                <span style="background: #dcfce7; color: #166534; padding: 4px 12px; border-radius: 20px; font-weight: 700;">
                                    ✅ Authorized (Age ≥ 18)
                                </span>
                            <?php else: ?>
                                <span style="background: #fee2e2; color: #991b1b; padding: 4px 12px; border-radius: 20px; font-weight: 700;">
                                    ❌ Unauthorized (Age &lt; 18)
                                </span>
                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="btn-group">
                <a href="index.html" class="btn btn-primary">
                    <span>←</span> Check Another Name &amp; Age
                </a>
                <a href="../index.php" class="btn btn-secondary">
                    <span>🏠</span> Lab 10 Home
                </a>
            </div>

        </div>
    </div>

</body>
</html>
