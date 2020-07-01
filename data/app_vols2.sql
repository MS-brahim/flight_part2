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



-- CREATE TABLE vols (
--   id_vol int(11) NOT NULL AUTO_INCREMENT,
--   nom_vol varchar(254) DEFAULT NULL,
--   departure varchar(254) DEFAULT NULL,
--   arrival varchar(254) DEFAULT NULL,
--   d_depart datetime DEFAULT NULL,
--   d_arrival datetime DEFAULT NULL,
--   prix int(11) DEFAULT NULL,
--   place int(11) DEFAULT NULL,
--   PRIMARY KEY (id_vol)

-- )

create table Reservation
(
   id_reservation       int not null AUTO_INCREMENT,
   id_client            int not null,
   id_vol               int not null,
   id_user              int not null,
   date_reservation     int,
   primary key (id_reservation),
   FOREIGN KEY (id_client) REFERENCES client (id_client),
   FOREIGN KEY (id_vol) REFERENCES Vols (id_vol),
   FOREIGN KEY (id_user) REFERENCES utilisateur (id_user)
)

CREATE TABLE client (
  id_client int(11) NOT NULL AUTO_INCREMENT,
  nom varchar(254) NOT NULL,
  prenom varchar(254) NOT NULL,
  phone int(20) NOT NULL,
  email varchar(254) NOT NULL,
  num_passport int(11) NOT NULL,
  id_user int(11) NOT NULL,
  primary key (id_client),
  FOREIGN KEY (id_user) REFERENCES utilisateur (id_user)
) 