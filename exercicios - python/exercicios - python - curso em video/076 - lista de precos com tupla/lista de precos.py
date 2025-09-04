produtos_papelaria = (
    ("Caderno", 12.90),
    ("Caneta esferográfica", 2.50),
    ("Lápis", 1.20),
    ("Borracha", 1.50),
    ("Apontador", 3.25),
    ("Régua 30cm", 5.80),
    ("Cola bastão", 4.90),
    ("Tesoura escolar", 8.75),
    ("Mochila escolar", 89.90),
    ("Estojo", 15.60),
    ("Corretivo", 3.40),
    ("Marcador de texto", 3.90),
    ("Folha sulfite A4 (100 folhas)", 10.50),
    ("Compasso", 12.30),
    ("Transferidor", 6.45)
)

print("-=" * 20)
print("{:=^40}".format(' LISTAGEM DE PREÇOS DE PAPELARIA '))
print("-=" * 20)
for produto, preco in produtos_papelaria:
    print(f"{produto:.<30} R$ {preco:>6.2f}")
print("-=" * 20)