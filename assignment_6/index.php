<?php
// ─────────────────────────────────────────
//  BMI Calculator — Assignment 6
//  Method : POST  |  Validation : PHP
// ─────────────────────────────────────────

$name       = "";
$weight     = "";
$height     = "";
$bmi        = null;
$category   = "";
$errors     = [];
$showResult = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // 1. Read & sanitize
    $name   = trim($_POST["name"]   ?? "");
    $weight = trim($_POST["weight"] ?? "");
    $height = trim($_POST["height"] ?? "");

    // 2. Validate empty fields
    if ($name === "") {
        $errors[] = "Name cannot be empty.";
    }

    if ($weight === "") {
        $errors[] = "Weight cannot be empty.";
    } elseif (!is_numeric($weight) || (float)$weight <= 0) {
        $errors[] = "Weight must be a positive number.";
    }

    if ($height === "") {
        $errors[] = "Height cannot be empty.";
    } elseif (!is_numeric($height) || (float)$height <= 0) {
        $errors[] = "Height must be a positive number.";
    }

    // 3. Calculate BMI if no errors
    if (empty($errors)) {
        $weight = (float)$weight;
        $height = (float)$height;

        // Prevent division by zero (height = 0 already blocked above)
        $bmi = round($weight / pow($height, 2), 2);

        // BMI category ladder
        if ($bmi < 18.5) {
            $category = "Underweight";
        } elseif ($bmi < 25) {
            $category = "Normal";
        } elseif ($bmi < 30) {
            $category = "Overweight";
        } else {
            $category = "Obese";
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
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page-wrapper">

    <!-- ── Header ── -->
    <header class="site-header">
        <p class="header-label">Assignment 6</p>
        <h1>BMI Calculator</h1>
        <p class="subtitle">Body Mass Index &mdash; based on weight and height</p>
    </header>

    <!-- ── Reference Table ── -->
    <div class="card">
        <h2 class="card-title">BMI Reference Chart</h2>
        <table class="ref-table">
            <thead>
                <tr>
                    <th>BMI Range</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Below 18.5</td>
                    <td><span class="badge badge-underweight">Underweight</span></td>
                </tr>
                <tr>
                    <td>18.5 &ndash; 24.9</td>
                    <td><span class="badge badge-normal">Normal</span></td>
                </tr>
                <tr>
                    <td>25 &ndash; 29.9</td>
                    <td><span class="badge badge-overweight">Overweight</span></td>
                </tr>
                <tr>
                    <td>30 and above</td>
                    <td><span class="badge badge-obese">Obese</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- ── Form ── -->
    <div class="card">
        <h2 class="card-title">Enter Your Details</h2>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-error">
                <strong>Please fix the following:</strong>
                <ul>
                    <?php foreach ($errors as $err): ?>
                        <li><?= htmlspecialchars($err) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="">

            <div class="form-group">
                <label for="name">Full Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="e.g. Rahul Mehta"
                    value="<?= htmlspecialchars($name) ?>"
                >
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="weight">Weight <span class="unit">(kg)</span></label>
                    <input
                        type="number"
                        id="weight"
                        name="weight"
                        placeholder="e.g. 70"
                        min="1"
                        step="any"
                        value="<?= htmlspecialchars($weight) ?>"
                    >
                </div>

                <div class="form-group">
                    <label for="height">Height <span class="unit">(metres)</span></label>
                    <input
                        type="number"
                        id="height"
                        name="height"
                        placeholder="e.g. 1.75"
                        min="0.1"
                        step="any"
                        value="<?= htmlspecialchars($height) ?>"
                    >
                </div>
            </div>

            <div class="btn-row">
                <button type="submit"  class="btn btn-primary">Calculate BMI</button>
                <button type="reset"   class="btn btn-secondary">Reset</button>
            </div>

        </form>
    </div>

    <!-- ── Result ── -->
    <?php if ($showResult): ?>
    <?php
        // Map category to CSS modifier
        $categoryClass = strtolower($category);
    ?>
    <div class="card result-card result-<?= $categoryClass ?>">
        <h2 class="card-title">Result</h2>
        <div class="result-grid">

            <div class="result-row">
                <span class="result-label">Name</span>
                <span class="result-value"><?= htmlspecialchars($name) ?></span>
            </div>

            <div class="result-row">
                <span class="result-label">Weight</span>
                <span class="result-value"><?= htmlspecialchars($weight) ?> kg</span>
            </div>

            <div class="result-row">
                <span class="result-label">Height</span>
                <span class="result-value"><?= htmlspecialchars($height) ?> m</span>
            </div>

            <div class="result-row result-highlight">
                <span class="result-label">BMI Score</span>
                <span class="result-value bmi-score"><?= number_format($bmi, 2) ?></span>
            </div>

            <div class="result-row">
                <span class="result-label">Category</span>
                <span class="result-value">
                    <span class="badge badge-<?= $categoryClass ?>"><?= $category ?></span>
                </span>
            </div>

        </div>
    </div>
    <?php endif; ?>

    <footer class="site-footer">
        <p>Assignment 6 &mdash; BMI Calculator &nbsp;|&nbsp; PHP &amp; HTML</p>
    </footer>

</div>

</body>
</html>