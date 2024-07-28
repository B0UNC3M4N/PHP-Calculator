<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $display = isset($_POST['display']) ? $_POST['display'] : '0';
    $button = isset($_POST['button']) ? $_POST['button'] : '';

    switch ($button) {
        case 'AC':
            $display = '0';
            break;
        case 'DEL':
            $display = substr($display, 0, -1);
            if ($display == '') {
                $display = '0';
            }
            break;
        case '=':
            try {
                // Evaluate the expression in a safe way
                $display = eval('return ' . $display . ';');
            } catch (ParseError $e) {
                $display = 'Error';
            }
            break;
        default:
            if ($display == '0' || $display == 'Error') {
                $display = $button;
            } else {
                $display .= $button;
            }
            break;
    }

    // Store the result back in the POST data for re-display
    $_POST['display'] = $display;
}
?>
