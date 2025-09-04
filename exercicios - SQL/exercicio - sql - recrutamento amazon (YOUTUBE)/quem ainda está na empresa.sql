use hospital;
select c.* 
from catraca c
join (
	select emp_id,
    max(data_hora) as ultima_passagem
    from catraca 
    group by emp_id
    )
ultimo
on c.emp_id = ultimo.emp_id
and c.data_hora = ultimo.ultima_passagem
where tipo = 'entrou'
