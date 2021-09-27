import time
import Ordem

class ContaTempo():
   def compara(self, tamanho_da_lista):
      '''Compara o tempo exercido para ordenar uma lista com o tamanho passado'''
      l = Ordem.Lista()
      lista1 = l.crialista(tamanho_da_lista)
      lista2 = lista1[:]
      
      o = Ordem.Ordenacao()
      antes = time.time()
      o.selection_sort(lista1)
      time1 = time.time() - antes
      
      antes = time.time()
      o.bubble_sort(lista2)
      time2 = time.time() - antes

      print("Bubble Sort:", time2, "\nSelection Sort:", time1, "\n", time2 / time1)

c = ContaTempo()
c.compara(1000)