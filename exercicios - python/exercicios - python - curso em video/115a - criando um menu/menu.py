from lib.interlace import cabeçalho, menu, leiaInt
from lib.interlace.arquivos import arquivoExiste, criarArquivo, lerArquivo, cadastrar
from time import sleep

arquivo = 'cadastros.txt'

if not arquivoExiste(arquivo):
    criarArquivo(arquivo)

while True:
    respota = menu(['Ver pessoas cadastradas', 'Cadastrar nova Pessoa', 'Sair do Sistema'])

    if respota == 1:
        lerArquivo(arquivo)
    
    elif respota == 2:
        cabeçalho('NOVO CADASTRO')
        nome = input('Nome:')
        idade = leiaInt('Idade: ')
        cadastrar(arquivo, nome, idade)

    elif respota == 3:
        cabeçalho('Saindo do sitema... Até logo!')
        break
    
    else:
        print('\033[33mERRO! Digite uma opção  válido!\033[m')
    sleep(2)