<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['panel'])) {
        $panel = (int) $_POST['panel'];
        $_SESSION['panel'] = $panel;
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Panel not specified']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
