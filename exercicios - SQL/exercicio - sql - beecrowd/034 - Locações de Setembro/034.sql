SELECT c.name, r.rentals_date from customers c
JOIN rentals r on r.id_customers = c.id 
WHERE rentals_date BETWEEN '2016-09-01' and '2016-09-30'