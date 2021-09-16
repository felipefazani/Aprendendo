def cria_matriz(linhas, colunas):
   matriz = []
   for i in range(linhas):
      lin = []
      for j in range(colunas):
         lin.append(int(input("Digite o elemento ["+ str(i) +"]["+ str(j) +"]: ")))
      
      matriz.append(lin)
   
   return matriz

def le_matriz():
   linhas = int(input("Digite a quantidade de linhas: "))
   colunas = int(input("Digite a quantidade de colunas: "))
   return cria_matriz(linhas, colunas)

def imprime_matriz(tabela):
   for i in tabela:
      print(i)

x = le_matriz()
imprime_matriz(x)