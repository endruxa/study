select
    ci.name as city_name,
    ci.population as city_p,
    c.name as country_name,
    c.population as country_p,
    cl.language
from City ci
INNER JOIN Country c ON ci.CountryCode = c.Code
INNER JOIN CountryLanguage cl on ci.CountryCode = cl.CountryCode
limit 5;



















DELETE FROM test where name='Test-12-12-12';

UPDATE test
SET
  age = 12,
  name = CONCAT(name, '-', age);
WHERE name = 'Foo 2'
LIMIT 2;


INSERT INTO test VALUES ('Test', 63, NOW());


INSERT INTO test (age, name) VALUES (5, 'Test');
INSERT INTO test (name) VALUES ('Foo');




INSERT INTO test (name, age, created_at)
VALUES
  ('Test', 63, NOW()),
  ('Test2', 22, NOW()),
  ('Test-3', 23, NOW()),
  ('Test-4', 23, NOW());













-- Показать список баз
SHOW DATABASES;

-- Показать таблицы в базе
SHOW TABLES;

-- Выбрать базу для работы
USE db_name

SELECT name, age FROM test;

SELECT * FROM test WHERE age > 30 AND name = 'Neo';

SELECT * FROM test WHERE age BETWEEN 30 and 40;
SELECT * FROM test WHERE age IN (33, 44, 12);



select name as n, age as a, created_at as birthday from test;
select name as n, age as a, created_at as birthday, NOW() as current from test;
select name as n, age as a, created_at as birthday, NOW() as current, CONCAT(name, '-', age) as full_name  FROM test;
select name as n, age as a, YEAR(created_at), CONCAT(name, '-', age) as full_name  FROM test;

select * from test where created_at BETWEEN '2016-01-01 00:00:00' AND '2016-12-31 23:59:59'
select * from test where YEAR(created_at) = 2016;

SELECT * FROM test ORDER BY age;


select age from test where age > 30 limit 1;

select * from test where age >= (select age from test where name = 'Nfo' limit 1);

SELECT * FROM test WHERE name like '%n%';