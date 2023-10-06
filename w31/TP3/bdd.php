<?php

$sqlliteFile = $_SERVER['DOCUMENT_ROOT'] . '/tp3.db';
if (!file_exists($sqlliteFile)) {
    throw new Exception("Fichier inexistant !");
}

$SQL_DSN = 'sqlite:' . $sqlliteFile;



// Créer la table Users et ce que j'ai mis dedans
// CREATE TABLE Users (
// 	user_id INTEGER PRIMARY KEY AUTOINCREMENT,
// 	login varchar(52) NOT NULL,
// 	password varchar(52) NOT NULL
// );

// INSERT INTO Users (login, password) VALUES ('matmat','matmat');
// INSERT INTO Users (login, password) VALUES ('greg','greg');
// INSERT INTO Users (login, password) VALUES ('leo','leo');
// INSERT INTO Users (login, password) VALUES ('alpine','alpine');
// INSERT INTO Users (login, password) VALUES ('porsche','porsche');
// INSERT INTO Users (login, password) VALUES ('audi','audi');
// INSERT INTO Users (login, password) VALUES ('bmw','bmw');
