<?php
// auth.php - обработка авторизации и регистрации
session_start();
require_once 'config.php';

header('Content-Type: application/json');

if ($_POST['action'] == 'register') {
    // Регистрация
    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    try {
        $stmt = $pdo->prepare("INSERT INTO users (full_name, email, phone, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$full_name, $email, $phone, $password]);
        
        echo json_encode(['success' => true, 'message' => 'Регистрация успешна!']);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Ошибка регистрации: ' . $e->getMessage()]);
    }
    
} elseif ($_POST['action'] == 'login') {
    // Авторизация
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'full_name' => $user['full_name'],
                'email' => $user['email']
            ];
            echo json_encode(['success' => true, 'message' => 'Вход выполнен успешно!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Неверный email или пароль!']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Ошибка авторизации: ' . $e->getMessage()]);
    }
    
} elseif ($_POST['action'] == 'logout') {
    // Выход
    session_destroy();
    echo json_encode(['success' => true, 'message' => 'Вы вышли из системы']);
}
?>