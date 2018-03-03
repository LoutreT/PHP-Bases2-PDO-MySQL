Delete: "DELETE FROM"

DELETE from nom_de_la_table
WHERE nom_de_colonne OPERATEUR "valeur"
[ and|or "nom_de_colonne" OPERATEUR "valeur"];

[ ] = optionnel

--Note: n'oublie pas la clause WHERE quand tu DELETE, sinon TOUTES les rangées de la table seront effacées!

CREATE TABLE Météo
    (`ville` varchar(9), `haut` int, `bas` int)
;

INSERT INTO Météo
    (`ville`, `haut`, `bas`)
VALUES
    ('Bruxelles', 27, 13),
    ('Liège', 25, 15),
    ('Namur', 26, 15),
    ('Charleroi', 25, 12),
    ('Bruges', 28, 16),
    ('Ixelles', 40, -20)
;
DELETE from Météo
WHERE ville = "charleroi"
;
_______________________________________________________________________________

VERIFICATION dans le MySQL Fiddle (d-essai) :

SELECT * FROM Météo ;
_______________________________________________________________________________

RESULTAT dans le MySQL Fiddle (d-essai) :

ville 	   haut 	bas
Bruxelles  27 	  13
Liège 	   25 	  15
Namur 	   26   	15
Bruges 	   28   	16
Ixelles 	 40   	-20
