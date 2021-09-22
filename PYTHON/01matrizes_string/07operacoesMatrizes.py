matriz = __import__('01matriz')

def verifica_quadrada(X):
   for i in range (len(X)):
      if len(X[i]) != len(X):
         return False
   return True


def soma_mat(matA, matB):
   if verifica_quadrada(matA) and verifica_quadrada(matB):
      tam = len(matA)
      res = matriz.cria_matriz(tam, tam, 0)
      for i in range(tam):
         for j in range(tam):
            res[i][j] = matA[i][j] + matB[i][j]
      return res

def mult_mat(A, B):
   if verifica_quadrada(A) and verifica_quadrada(B):
      tam = len(A)
      res = matriz.cria_matriz(tam, tam, 0)
      for i in range(tam):
         for j in range(tam):
             for k in range(tam):
                res[i][j] += A[i][k] * B[k][j]
      return res