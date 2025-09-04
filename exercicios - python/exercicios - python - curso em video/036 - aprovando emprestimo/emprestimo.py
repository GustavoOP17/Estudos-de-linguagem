valor = float(input('Valor da casa: R$'))
salario =  float(input('Salário do comprador: R$'))
anos = int(input('Quantos anos de financiamento? '))
prestacao = valor / (anos * 12)

if prestacao < salario * (0.30): 
    print('Para pagar uma casa de R${} em {} anos a prestação será de R${:.2f}'.format(valor, anos, prestacao))
    print('Emprestimo APROVADO')
else:
    print('Emprestimo NEGADO')