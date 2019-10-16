SELECT *
FROM `country`;

SELECT *
FROM `country`
WHERE `Population` > 20000000;

SELECT *
FROM `country`
WHERE `Population` > 20000000
ORDER BY `Population` DESC;
--OR YOU CAN WRITE LIKE THIS: select * from country where Population > 20000000 order by Population desc;

SELECT *
FROM `country`
WHERE `Population` > 20000000
ORDER BY `Population` DESC
LIMIT 10; 
--LIMIT 0,10 MEANS SKIP 0 SHOW 10, OR LIMIT 10,10 SKIP 10, SHOW 10 etc.