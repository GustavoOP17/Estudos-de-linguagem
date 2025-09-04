times = (
    "Chelsea",
    "PSG",
    "Grêmio",
    "Real Madrid",
    "HIL",
    "Sete",
    "Bayern de Munique",
    "Borussia Dortmund",
    "Inter",
    "Manchester City",
    "Botafogo",
    "SLB",
    "Flamengo",
    "Juventus",
    "CFM",
    "Desaparecido"
)

print('-=' * 20)
print(f'Lista de times que passaram para a fase de classificação: {times}')
print('-=' * 20)
print(f'Os 5 primeiros são {times[0:5]}')
print('-=' * 20)
print(f'Os 4 ultimos são {times[-4:]}')
print('-=' * 20)
print(f'Times em ordem alfabética: {sorted(times)}')
print('-=' * 20)
print(f'O Inter está na {times.index("Inter")}ª posição')