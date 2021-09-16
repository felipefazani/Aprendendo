'''
   Escrever uma função que recebe uma lista de Strings, contendo nomes de pessoas como
   parâmetro e devolve o nome mais curto. A função deve ignorar espaços antes e depois
   do nome "capitalizado" (apenas com a primeira letra maiúscula).
'''

def mais_curto(lista_nomes):
   """Recebe uma lista de strings e retorna o mais curto (desconsiderando espaços iniciais e finais)"""
   j = 0
   while type(lista_nomes[j]) != type("String"):
      j += 1
   
   if(j != 0):
      return -1 # erro, há algum tipo diferente de string na lista

   while lista_nomes[j].strip() == "":
      j += 1

   menor = lista_nomes[j]

   for i in lista_nomes:
      if(len(menor.strip()) > len(i.strip()) and len(i.strip()) != 0):
         menor = i
   return menor.strip().capitalize()

def testa_mais_curto():
   lista1 = ["     roberto", "     aNA", "marcio  ", "  "]
   if mais_curto(lista1) != "Ana":
      print("Deu errado com a lista1:", mais_curto(lista1))
   
   lista2 = [0, "     roberto", " kaRLOS "]
   if mais_curto(lista2) != -1:
      print("Deu errado com a lista2:", mais_curto(lista2))
   
   lista3 = ["     ", "anA", "abacate"]
   if mais_curto(lista3) != "Ana":
      print("Deu errado com a lista3:", mais_curto(lista3))
   
testa_mais_curto()