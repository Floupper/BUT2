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
    $query = "INSERT INTO Users (login, mdp) VALUES (:username, :password)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
}

function isUserExists(string $username): bool
{
    global $pdo;
    $query = "SELECT COUNT(*) FROM Users WHERE login = :username";
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
    $query = "SELECT * FROM Users WHERE login = :username";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    // Read password
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $password = $result["mdp"];
    if (password_verify($rawPassword, $password))
        return true;
    else
        return false;
}
