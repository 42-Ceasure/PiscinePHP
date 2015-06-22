SELECT *
FROM `db_cglavieu`.`fiche_personne`
WHERE `nom` REGEXP '(.*)-(.*)'
OR  `prenom` REGEXP '(.*)-(.*)'
ORDER BY `nom` ASC, `prenom` ASC;