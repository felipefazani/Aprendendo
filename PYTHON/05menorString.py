'''
   Escreva uma função que recebe um array de strings como parâmetro e devolve
   o primeiro string na ordem lexicográfica, ignorando-se letras maiúscula e 
   minúsculas
'''

def primeiro(lista):
   """Recebe uma lista de strings e retorna o primeiro lexicograficamente"""
   j = 0
   while type(lista[j]) != type("String"):
      j += 1
   
   if(j != 0):
      return -1 # erro, há algum tipo diferente de string na lista
   
   prim = lista[0]
   for i in lista:
      if prim.lower() > i.lower():
         prim = i
   return prim

def testa_primeiro():
   lista1 = ["Xandao", "Roberto", "ana", "Ana"]
   if primeiro(lista1) != "ana":
      print("Erro na lista 1:", primeiro(lista1))
   
   lista2 = ["carlos", "Carla", "  "]
   if primeiro(lista2) != "  ":
      print("Erro na lista 2:", primeiro(lista2))

testa_primeiro()