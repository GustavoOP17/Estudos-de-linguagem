SELECT p.name, f.name, p.price FROM providers f
JOIN products p on f.id = p.id_providers
join categories c on c.id = p.id_categories
WHERE p.price > '1000' and c.name = 'Super Luxury'