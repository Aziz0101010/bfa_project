<?php
function getAllUsers($pdo) {
    $stmt = $pdo->query("SELECT * FROM users ORDER BY created_at DESC");
    return $stmt->fetchAll();
}

function createUser($pdo, $username, $email, $password, $role, $employeeId = null, $techId = null) {
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT INTO users (username, password_hash, email, role, codeEmp, codeTech, created_at) 
                          VALUES (?, ?, ?, ?, ?, ?, NOW())");
    return $stmt->execute([$username, $passwordHash, $email, $role, $employeeId, $techId]);
}

function deleteUser($pdo, $userId) {
    $stmt = $pdo->prepare("DELETE FROM users WHERE user_id = ?");
    return $stmt->execute([$userId]);
}

// Remove this duplicate function
// function isAdmin() {
//     return isset($_SESSION['role']) && $_SESSION['role'] === 'admin';
// }


?>