class Buscador():
   def busca_sequencial(self, lista, elemento):
      '''Realiza uma busca sequencial em uma lista'''
      for i in range(len(lista)):
         if lista[i] == elemento:
            return i
      return -1

   def busca_binaria(self, lista, elemento): # o número máximo de iterações sempre será de log₂(n), sendo n o tamanho da lista
      '''Realiza uma busca em uma lista ordenada'''
      primeiro = 0
      ultimo = len(lista) - 1
      while primeiro <= ultimo:
         meio = (primeiro + ultimo) // 2
         if lista[meio] == elemento:
            return meio
         else:
            if lista[meio] < elemento:
               primeiro = meio + 1
            else:
               ultimo = meio - 1
      return -1