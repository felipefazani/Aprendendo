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

   def bubble_sort(self, lista):
      '''Ordena a lista de forma crescente por Bubble Sort'''
      for j in range(len(lista)):
         i = 0
         while i < len(lista) - 1 - j:
            if lista[i] > lista[i+1]:
               lista[i], lista[i+1] = lista[i+1], lista[i]
            i += 1

class Lista:
   def crialista(self, tamanho):
      '''Cria uma lista de números aleatórios'''
      lista = [random.randint(-10000, 10000) for x in range(tamanho)]
      return lista
   
   def verificaListaCrescente(self, lista):
      '''Entra com uma lista e retorna True se ordenada crescentemente e False caso contrário'''
      for i in range(len(lista)-1):
         if (lista[i] > lista[i+1]):
            return False
      return True

l = Lista()
o = Ordenacao()
lista = l.crialista(50)
# print(lista)
o.bubble_sort(lista)
# print(lista)
print(l.verificaListaCrescente(lista))