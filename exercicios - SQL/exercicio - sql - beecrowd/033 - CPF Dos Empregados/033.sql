SELECT e.cpf, e.enome, d.dnome from empregados e
LEFT join departamentos d on  e.dnumero = d.dnumero
LEFT join trabalha t on e.cpf = t.cpf_emp
WHERE t.cpf_emp is NULL
ORDER by e.cpf