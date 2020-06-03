--------------------------
-- DATABASE flight 2 -----
-- -----------------------
-- USE app_vol;

CREATE TABLE Utilisateur (
    id_user    INT NOT NULL PRIMARY KEY,
    nom        VARCHAR(50) NOT NULL,
    prenom     VARCHAR(254) NOT NULL,
    tel        VARCHAR(15) NOT NULL,
    email      VARCHAR(254) NOT NULL,
    num_passport INT(11) NOT NULL,
    mot_de_passe VARCHAR(50),
    cree_a       DATETIME DEFAULT CURRENT_TIMESTAMP
);
