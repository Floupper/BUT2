<?php
try {
    $pdo = new PDO($SQL_DSN);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

function addUser(string $username, string $password): void
{
    global $pdo;
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
}

function isUserExists(string $username): bool
{
    global $pdo;
    $query = "SELECT COUNT(*) FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result["COUNT(*)"] > 0) {
        return true;
    } else
        return false;
}

function loginUser(string $username, string $rawPassword): bool
{
    global $pdo;
    $query = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    // Read password
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $password = $result["password"];
    if (password_verify($rawPassword, $password))
        return true;
    else
        return false;
}
