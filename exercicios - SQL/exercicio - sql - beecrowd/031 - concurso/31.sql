SELECT DISTINCT 
    c.name, 
    ROUND(AVG(((math*2) + (specific*3) + (project_plan*5)) / 10), 2) AS avg
FROM score s
JOIN candidate c ON c.id = s.candidate_id
GROUP BY c.name
ORDER BY avg DESC