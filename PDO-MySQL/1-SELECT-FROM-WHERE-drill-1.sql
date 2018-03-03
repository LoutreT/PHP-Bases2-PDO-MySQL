-- Pour travailler avec une base de données logée, utiliser un DBMS,
-- c'est un logiciel pour gérer les données, pour cela il y
-- a le logiciel (=DBMS) : "MySQL"

CREATE TABLE Météo
    (`ville` varchar(9), `haut` int, `bas` int);

INSERT INTO Météo
    (`ville`, `haut`, `bas`)
VALUES
    ('Bruxelles', 27, 13),
    ('Liège', 25, 15),
    ('Namur', 26, 15),
    ('Charleroi', 25, 12),
    ('Bruges', 28, 16);


    -- uniquement les villes
    Réponse 1 =  SELECT * FROM météo;

    -- toutes les villes et leur température maximum
    Réponse 2 =  SELECT ville, haut FROM Météo;

    -- toutes les villes et leur température minimum
    Réponse 3 =  SELECT ville, bas FROM météo;

    -- La ou les villes dont la température maximale dépasse 27 degrés
    Réponse 4 =  SELECT ville  FROM météo  WHERE haut > 27 ;                 -- la réponse, c'est bruges

    -- La ou les villes dont la température minimale sera inférieure ou égale à 15 degrés
    Réponse 5 =  SELECT ville  FROM météo  WHERE bas >= 15 ;                 -- la réponse c'est Liège, Namur, Bruges

    -- La ou les villes dont la température minimale sera égale à 15 degrés
    Réponse 6 =  SELECT ville  FROM météo  WHERE bas = 15 ;                  -- la réponse c'est Liège, Namur

    -- La ou les villes dont la température minimale ne sera PAS égale à 15 degrés
    Réponse 7 =  SELECT ville  FROM météo  WHERE bas <> 15 ;                 -- la réponse c'est Bruxelles, Charleroi, Bruges

    -- La ou les villes dont le nom commence par "Br"
    Réponse 8 =  SELECT ville LIKE 'Br%'  FROM Météo ;                       -- la réponse c'est Bruxelles, Bruges

    -- La ou les villes dont la température maximale se situe entre 26 et 28 degrés
    Réponse 9 =  SELECT ville FROM Météo WHERE haut BETWEEN 26 AND 28;       -- la réponse c'est Bruxelles, Namur, Bruges

    -- La ou les villes dont la température minimale est égale à 14 ou est égale à 16 degrés
    Réponse 10 = SELECT ville  FROM Météo  WHERE bas BETWEEN 14 AND 16;      -- la réponse c'est Liège, Namur, Bruges

    -- La ou les villes dont la température maximale est supérieure ou égale à 26 et la température minimale est inférieure à 14
Réponse 11 = SELECT * FROM Météo WHERE bas >= 14 AND haut <= 27; -- la réponse c'est Liège, Namur
