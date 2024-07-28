<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'calculator.php'; ?>
    <div class="calculator">
        <form name="calc" method="post" action="index.php">
            <div class="display">
                <input type="text" name="display" id="display" value="<?php echo isset($_POST['display']) ? htmlspecialchars($_POST['display']) : '0'; ?>" readonly>
            </div>
            <div class="buttons">
                <input type="submit" name="button" value="AC" class="button">
                <input type="submit" name="button" value="DEL" class="button">
                <input type="submit" name="button" value="/" class="button">
                <input type="submit" name="button" value="*" class="button">
                <input type="submit" name="button" value="7" class="button">
                <input type="submit" name="button" value="8" class="button">
                <input type="submit" name="button" value="9" class="button">
                <input type="submit" name="button" value="-" class="button">
                <input type="submit" name="button" value="6" class="button">
                <input type="submit" name="button" value="5" class="button">
                <input type="submit" name="button" value="4" class="button">
                <input type="submit" name="button" value="+" class="button">
                <input type="submit" name="button" value="1" class="button">
                <input type="submit" name="button" value="2" class="button">
                <input type="submit" name="button" value="3" class="button">
                <input type="submit" name="button" value="=" class="button equals">
                <input type="submit" name="button" value="0" class="button">
                <input type="submit" name="button" value="." class="button">
            </div>
        </form>
    </div>
</body>
</html>
