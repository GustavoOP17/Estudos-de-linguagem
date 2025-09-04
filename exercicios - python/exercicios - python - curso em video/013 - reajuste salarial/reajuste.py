salario = float(input("Qual é o salário do funcionarios? R$"))
reajuste = salario + (salario * 0.15)
print("Um funcionário que ganhava R${}, com 15% de aumento, passa a receber R${:.2f}".format(salario, reajuste))