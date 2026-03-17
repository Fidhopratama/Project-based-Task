<?php include "process.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Form tugas hari raya</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="wrapper">
    <div class="card">
        <h2>ARDAN DAPAT 1M PERTAMA DIUSIA 20 TAHUN</h2>

        <form method="POST">
            <input type="text" name="firstname" placeholder="Firstname" required>
            <input type="text" name="lastname" placeholder="Lastname" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <textarea name="address" placeholder="Address" required></textarea>

            <button type="submit">Submit</button>
        </form>

        <?php if (!empty($result)): ?>
            <div class="result">
                <hr>
                <?php echo $result; ?>
                <a href="index.php" class="reset">Reset</a>
            </div>
        <?php endif; ?>
    </div>
    <?php if (!empty($error)): ?>
    <div class="error">
        <?php echo $error; ?>
    </div>
<?php endif; ?>
</div>

</body>
</html>