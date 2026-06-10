<?php
// ─────────────────────────────────────────
//  Electricity Bill Calculator — Assignment 3
//  Method : POST  |  Validation : PHP
// ─────────────────────────────────────────

$name        = "";
$units       = "";
$bill        = null;
$errors      = [];
$showResult  = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 1. Read & sanitize inputs
    $name  = trim($_POST["customer_name"] ?? "");
    $units = trim($_POST["units"] ?? "");

    // 2. Validate: empty fields
    if ($name === "") {
        $errors[] = "Customer name cannot be empty.";
    }

    if ($units === "") {
        $errors[] = "Units consumed cannot be empty.";
    } elseif (!is_numeric($units)) {
        $errors[] = "Units must be a valid number.";
    } elseif ((float)$units < 0) {
        $errors[] = "Units cannot be negative.";
    }

    // 3. Calculate bill if no errors
    if (empty($errors)) {
        $units = (float)$units;

        // if-else ladder (as required)
        if ($units <= 100) {
            $bill = $units * 5;
        } elseif ($units <= 200) {
            $bill = (100 * 5) + (($units - 100) * 7);
        } else {
            $bill = (100 * 5) + (100 * 7) + (($units - 200) * 10);
        }

        $showResult = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page-wrapper">

    <!-- ── Header ── -->
    <header class="site-header">
        <div class="header-icon"></div>
        <h1>Electricity Bill Calculator</h1>
        <p class="subtitle">Enter your details to calculate your monthly bill</p>
    </header>

    <!-- ── Rate Card ── -->
    <div class="rate-card">
        <h2 class="rate-title">Current Tariff Rates</h2>
        <table class="rate-table">
            <thead>
                <tr>
                    <th>Slab</th>
                    <th>Units</th>
                    <th>Rate</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Slab 1</td>
                    <td>First 100 units</td>
                    <td>₹5 / unit</td>
                </tr>
                <tr>
                    <td>Slab 2</td>
                    <td>Next 100 units</td>
                    <td>₹7 / unit</td>
                </tr>
                <tr>
                    <td>Slab 3</td>
                    <td>Above 200 units</td>
                    <td>₹10 / unit</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- ── Form ── -->
    <div class="card">
        <h2 class="card-title">Bill Details</h2>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-error">
                <strong>Please fix the following:</strong>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="">

            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input
                    type="text"
                    id="customer_name"
                    name="customer_name"
                    placeholder="e.g. Riya Sharma"
                    value="<?= htmlspecialchars($name) ?>"
                >
            </div>

            <div class="form-group">
                <label for="units">Units Consumed (kWh)</label>
                <input
                    type="number"
                    id="units"
                    name="units"
                    placeholder="e.g. 250"
                    min="0"
                    step="any"
                    value="<?= htmlspecialchars($units) ?>"
                >
            </div>

            <div class="btn-row">
                <button type="submit" class="btn btn-primary">Calculate Bill</button>
                <button type="reset"  class="btn btn-secondary">Reset</button>
            </div>

        </form>
    </div>

    <!-- ── Result ── -->
    <?php if ($showResult): ?>
    <div class="card result-card">
        <div class="result-header">
            <span class="result-icon"></span>
            <h2>Bill Summary</h2>
        </div>
        <div class="result-grid">
            <div class="result-item">
                <span class="result-label">Customer Name</span>
                <span class="result-value"><?= htmlspecialchars($name) ?></span>
            </div>
            <div class="result-item">
                <span class="result-label">Units Consumed</span>
                <span class="result-value"><?= htmlspecialchars($units) ?> kWh</span>
            </div>
            <div class="result-item highlight">
                <span class="result-label">Total Bill</span>
                <span class="result-value amount">₹<?= number_format($bill, 2) ?></span>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <footer class="site-footer">
        <p>Assignment 3 &mdash; Electricity Bill Calculator &nbsp;|&nbsp; PHP &amp; HTML</p>
    </footer>

</div><!-- /page-wrapper -->

</body>
</html>