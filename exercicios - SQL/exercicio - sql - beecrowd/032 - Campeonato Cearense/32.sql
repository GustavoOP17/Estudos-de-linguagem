SELECT 
    t.name AS team_name,
    COUNT(CASE WHEN m.team_1 = t.id OR m.team_2 = t.id THEN 1 END) AS total_matches,
    COUNT(CASE WHEN (m.team_1 = t.id AND m.team_1_goals > m.team_2_goals) OR 
                    (m.team_2 = t.id AND m.team_2_goals > m.team_1_goals) THEN 1 END) AS wins,
    COUNT(CASE WHEN (m.team_1 = t.id AND m.team_1_goals < m.team_2_goals) OR 
                    (m.team_2 = t.id AND m.team_2_goals < m.team_1_goals) THEN 1 END) AS losses,
    COUNT(CASE WHEN m.team_1_goals = m.team_2_goals AND (m.team_1 = t.id OR m.team_2 = t.id) THEN 1 END) AS draws,
    3 * COUNT(CASE WHEN (m.team_1 = t.id AND m.team_1_goals > m.team_2_goals) OR 
                    (m.team_2 = t.id AND m.team_2_goals > m.team_1_goals) THEN 1 END) + 
    1 * COUNT(CASE WHEN m.team_1_goals = m.team_2_goals AND (m.team_1 = t.id OR m.team_2 = t.id) THEN 1 END) AS points
FROM teams t
LEFT JOIN matches m ON t.id = m.team_1 OR t.id = m.team_2
GROUP BY t.name
ORDER BY points DESC;
