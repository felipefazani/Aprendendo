import random
class Ordenacao:
   def selection_sort(self, lista):
      '''Ordena a lista de forma crescente por Selection Sort'''
      tamanho = len(lista) - 1
      for i in range(tamanho):
         menor_posicao = i
         j = i + 1
         while j <= tamanho:
            # print(i, j, sep= " ")
            if lista[j] < lista[menor_posicao]:
               menor_posicao = j
            j += 1
         lista[menor_posicao], lista[i] = lista[i], lista[menor_posicao]

class Lista:
   def crialista(self, tamanho):
      '''Cria uma lista de números aleatórios'''
      lista = []
      while tamanho > 0:
         lista.append(random.randint(0, 10))
         tamanho -= 1
      return lista
   
   def verificaListaCrescente(self, lista):
      '''Entra com uma lista e retorna True se ordenada crescentemente e False caso contrário'''
      for i in range(len(lista)-1):
         if (lista[i] > lista[i+1]):
            return False
      return True

