def cria_matriz(linhas, colunas, valor):
   matriz = []
   for i in range(linhas):
      lin = []
      for j in range(colunas):
         lin.append(valor)
      
      matriz.append(lin)
   
   return matriz

def le_matriz():
   linhas = int(input("Digite a quantidade de linhas: "))
   colunas = int(input("Digite a quantidade de colunas: "))
   return cria_matriz(linhas, colunas)

def imprime_matriz(tabela):
   for i in tabela:
      print(i)