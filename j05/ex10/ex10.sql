SELECT `titre` AS 'Titre', `resum` AS 'Resume', `annee_prod`
FROM `db_cglavieu`.`film` AS f
INNER JOIN `db_cglavieu`.`genre` AS g ON g.`id_genre` = f.`id_genre`
WHERE g.`nom` = 'erotic';