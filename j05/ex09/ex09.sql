SELECT COUNT(*) AS 'nb_court-metrage'
 FROM `db_cglavieu`.`film`
 WHERE CAST(duree_min AS UNSIGNED) <= 42;