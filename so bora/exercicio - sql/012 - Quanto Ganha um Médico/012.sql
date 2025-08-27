SELECT
    d.name,
    round(sum(a.hours*150 + ws.bonus*0.01*a.hours*150),1) AS SALARY
FROM attendances a
JOIN doctors d ON a.id_doctor = d.id
JOIN work_shifts ws ON a.id_work_shift = ws.id
GROUP BY d.name
ORDER BY SALARY DESC;
