def vota(nascimento):
    from datetime import datetime
    hoje = datetime.today().year
    idade = hoje - nascimento

    if idade < 16:
        return f'Com {idade} anos: NÃO PODE VOTAR.'
    elif 16 <= idade < 18 or idade > 65:
        return f'Com {idade} anos: VOTO OPCIONAL.'
    else:
        return f'Com {idade} anos: PODE VOTAR.'

nascimento = int(input('Em que ano você nasceu? '))
print(vota(nascimento))