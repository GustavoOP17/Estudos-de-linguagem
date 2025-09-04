WITH 
"Total Desconto" AS (
    SELECT 
        emp.matr AS matricula,
        SUM(des.valor) AS "Total Desconto"
    FROM empregado emp
    JOIN emp_desc ed ON emp.matr = ed.matr
    JOIN desconto des ON des.cod_desc = ed.cod_desc
    GROUP BY emp.matr
), 
"Salario Bruto" AS (
    SELECT 
        emp.matr AS matricula,
        SUM(v.valor) AS "Salario Bruto"
    FROM empregado emp
    JOIN emp_venc ev ON emp.matr = ev.matr
    JOIN vencimento v ON ev.cod_venc = v.cod_venc
    GROUP BY emp.matr
), 
"Salario Liquido" AS (
    SELECT 
        emp.matr AS matricula,
        COALESCE(sb."Salario Bruto", 0) - COALESCE(td."Total Desconto", 0) AS "Salario Liquido"
    FROM empregado emp
    LEFT JOIN "Salario Bruto" sb ON sb.matricula = emp.matr
    LEFT JOIN "Total Desconto" td ON td.matricula = emp.matr
), 
"media salario" as (
  SELECT round(avg(sl."Salario Liquido"), 2) as "media salario" from "Salario Liquido" sl)
SELECT
    emp.nome as nome,
    sl."Salario Liquido" as salario
FROM empregado emp
LEFT JOIN divisao div ON div.cod_divisao = emp.lotacao_div
LEFT JOIN departamento depa ON depa.cod_dep = div.cod_dep
LEFT JOIN "Salario Liquido" sl ON sl.matricula = emp.matr
JOIN "media salario" ms on 1=1
WHERE sl."Salario Liquido" >= ms."media salario" and sl."Salario Liquido" >= 8000.00
ORDER BY lotacao_div;

