def notas(* notas, sit=False):
    r = dict()
    r['total'] = len(notas)
    r['maior'] = max(notas)
    r['menor'] = min(notas)
    r['media'] = sum(notas) / len(notas)

    if sit:
        if r['media'] >= 7:
            r['siatuacao'] = 'BOA'
        elif r['media'] >= 5:
            r['siatuacao'] = 'RAZOÁVEL'
        else:
            r['siatuacao'] = 'RUIM'
    return r


dados = notas(9.9, 5.5, 2.5, sit=True)
print(dados)