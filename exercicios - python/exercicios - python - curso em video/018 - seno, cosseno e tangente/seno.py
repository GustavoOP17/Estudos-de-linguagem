from math import cos, sin, tan, radians

angulo = int(input("Digite o ângulo que você deseja: "))

radianos = radians(angulo)

print("O ângulo de {} tem o SENO de {:.4f}".format(angulo, sin(radianos)))
print("O ângulo de {} tem o COSSENO de {:.4f}".format(angulo, cos(radianos)))
print("O ângulo de {} tem a TANGENTE de {:.4f}".format(angulo, tan(radianos))) 