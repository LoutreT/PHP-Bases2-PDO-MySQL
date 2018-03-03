-- Create: "INSERT INTO"
--
-- Régulièrement, tes tables vont recevoir de nouvelles rangées.
--
-- Par exemple, reprenons notre exemple de la météo.
--
-- Un jour la ville d'Arlon décide que ses informations météorologiques doivent également se retrouver dans ton application. Elle va donc suivre la procédure d'inscription, et à un moment donné, son compte sera créé.
--
-- En SQL, cela signifie simplement que l'application aura ajouté une rangée en bas du tableau en lui fournissant les informations à insérer dans les colonnes.
-- Syntaxe INSERT INTO
--
-- Pour insérer des enregistrements dans une table, écris INSERT INTO suivi du nom de la table, suivi d'une parenthèse ouverte, suivie d'une liste de noms de colonnes séparés par des virgules, suivi d'une parenthèse fermée suivie par VALUES, suivi de La liste des valeurs entre parenthèses dans le même ordre que l'ordre des colonnes, séparées d'une virgule entre chaque valeur. Les valeurs que vous entrez seront conservées dans les rangées et elles correspondront aux noms de colonne que vous spécifiez. Chaque chaîne de caractères doit être mise entre guillemets simples. ex: 'chaîne de caractères' , mais pas les nombre. ex: 28
--
-- INSERT INTO nom_de_la_table
-- 	(colonne1, colonne2, colonne3... dernière_colonne)
-- VALUES
-- 	(value_colonne_1, value_colonne2, ... value_dernière_colonne)
-- ;
--
-- Note: Chaque chaîne de caractères doit être mise entre guillemets simples. ex: 'chaîne de caractères'
--
-- Donc, dans notre exemple de la météo, ajoutons une rangée pour Arlon, où les maxima est 34 et le minima est 11.
--
-- INSERT INTO Météo
--     (ville, haut, bas)
-- VALUES
--     ('Arlon', 34, 11)
-- ;

Exercice :

"Exerce-toi sur le bac à sable d'apprentissage.
Utilise le champ éditable de gauche (celui de droite ne permet que les SELECT).

Ajoute ensuite ta ville natale et ses températures min et max.
Tape à chaque fois la commande (pas de copier/coller),
pour que la syntaxe rentre dans tes doigts.

Il n'y a rien d'autre de spécial à savoir à ce sujet et tu peux passer au sujet suivant".



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
INSERT INTO Météo
    (`ville`, `haut`, `bas`)
VALUES
    ('Arlon', 40,-20)
;
________________________________________________________________________________
VERIFICATION :

SELECT * FROM Météo;

________________________________________________________________________________
RESULTAT :


ville 	    haut 	bas
Bruxelles 	27 	  13
Liège 	    25  	15
Namur 	    26   	15
Charleroi 	25 	  12
Bruges 	    28 	  16
Ixelles     40  	-20
