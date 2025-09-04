SELECT p.name, v.name, c.name from products p
join categories c on c.id =  p.id_categories
join providers v on p.id_providers = v.id
where v.name = 'Sansul SA' and c.name = 'Imported'
