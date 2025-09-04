largura = float(input("Largura da parede: "))
altura = float(input("Altura da parede: "))
pintaArea = (largura * altura) / 2 
print("Sua parede tem a dimençãode {}x{} e sua área é de {}m².".format(largura, altura, largura * altura))
print("Para pintar essa parede, você precisará de {}l de tinta".format(pintaArea))