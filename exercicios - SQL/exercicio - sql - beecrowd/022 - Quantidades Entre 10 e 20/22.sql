SELECT p.name from products p
join providers f on p.id_providers = f.id
WHERE p.amount BETWEEN 10 AND 20 and f.name LIKE 'P%'