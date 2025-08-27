select p.name, f.name from providers f
join products p on f.id = p.id_providers 
where f.name = 'Ajax SA'