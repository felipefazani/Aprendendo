def soma_matrizes(m1, m2): # soma termo a termo da matriz, [0][0] com o [0][0], [0][1] com o [0][1] ...
   if (len(m1) == len(m2) and len(m1[0]) == len(m2[0])): # verifica se são de tamanhos iguais e retorna a soma, caso contrário retorna False
      soma = []
      for i in range(len(m1)):
         linha = []
         for j in range(len(m1[0])):
            linha.append(m1[i][j] + m2[i][j])
         soma.append(linha)
      return soma
   else:
      return False