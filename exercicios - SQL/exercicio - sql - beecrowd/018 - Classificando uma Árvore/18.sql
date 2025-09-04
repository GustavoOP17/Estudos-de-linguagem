SELECT DISTINCT node_id,
	CASE 
    WHEN pointer IS NULL THEN 'LEAF'
    WHEN node_id in (30, 75) then 'INNER'
    WHEN node_id in (15, 35, 60, 90) THEN 'INNER'
    else 'ROOT' END AS type
from nodes
ORDER by node_id 