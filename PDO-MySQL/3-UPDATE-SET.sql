Update: "UPDATE"

UPDATE te permet de mettre à jour une ou plusieurs rangées correspondant à une condition (clause WHERE).

UPDATE nom_de_la_table
SET nom_de_colonne = "nouvelle valeur"
WHERE nom_de_colonne OPERATEUR "valeur"
	[and|or nom_de_colonne OPERATEUR "value"];

[ ] = optionnel

--Note: n'oublie pas la clause WHERE quand tu UPDATE, sinon TOUTES les rangées de la table seront mises à jour!

EXERCICE :

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
('Bruges', 28, 16)
;

UPDATE Météo
SET haut = 56
WHERE ville = "Bruxelles"
;
_______________________________________________________________________________
--Et en même temps, mettre dans la colonne de droite  de ce siteweb, le
--lien suivant pour montrer le résultat dans la fenêtre du dessous :

SELECT * FROM Météo;
_______________________________________________________________________________
--La réponse de la nouvelle température à 27° (à Bruxelles) sera
--modifiée dans la fenêtre du dessous pour 'Bruxelles' :

________________________
Bruxelles 	| 56 |	13 |
________________________
Liège 	    | 25 |	15 |
________________________
Namur 	    | 26 |	15 |
________________________
Charleroi 	| 25 |	12 |
________________________
Bruges 	    | 28 |	16 |
________________________
