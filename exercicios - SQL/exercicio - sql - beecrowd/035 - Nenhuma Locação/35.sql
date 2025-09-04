SELECT c.id, c.name 
FROM customers c
LEFT JOIN locations l on c.id = l.id_customers
WHERE l.id_customers is NULL