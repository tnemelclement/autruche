CREATE TABLE autruche(
    id_aut INT,
    nom_aut VARCHAR(30),
    date_naiss DATE,
    photo VARCHAR(255),
    sexe VARCHAR(1)
)

CREATE TABLE oeuf(
    id_aut INT, 
    date_ponte DATE,
    poid_oeuf INT,
    PRIMARY KEY (id_aut, date_ponte),
    CONSTRAINT fk_id_aut_oeuf FOREIGN KEY (id_aut) REFERENCES autruche(id_aut)
)

CREATE TABLE sante(
    id_aut INT,
    date_test DATE,
    etat_sante INT,
    nourriture_avale INT,
    rythme_cardiaque INT,
    PRIMARY KEY (id_aut, date_test),
    CONSTRAINT fk_id_aut_sante FOREIGN KEY (id_aut) REFERENCES autruche(id_aut)
)

CREATE TABLE mensuration(
    id_aut INT,
    date_mesu DATE,
    poid INT,
    taille INT,
    PRIMARY KEY (id_aut, date_mesu),
    CONSTRAINT fk_id_aut_mesu FOREIGN KEY (id_aut) REFERENCES autruche(id_aut)
)

CREATE TABLE localisation(
    id_aut INT,
    date_loc DATE,
    x INT,
    y INT,
    PRIMARY KEY (id_aut, date_loc),
    CONSTRAINT fk_id_aut_loc FOREIGN KEY (id_aut) REFERENCES autruche(id_aut)
)

CREATE TABLE silo(
    id_etat INT,
    date_verif DATE,
    niveau INT,
    humidite INT
)

CREATE TABLE enclos(
    id_etat_enc INT,
    date_verifi DATE,
    q_eau INT,
    q_nourriture INT,
    porte BOOLEAN
)