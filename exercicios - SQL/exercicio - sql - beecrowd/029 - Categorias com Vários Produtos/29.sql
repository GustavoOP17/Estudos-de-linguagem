SELECT p.name, c.name FROM products p  
JOIN categories c on c.id = p.id_categories
WHERE amount > 100 and c.id in (1,2,3,6,9)
ORDER by c.id 



