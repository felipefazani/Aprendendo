class Carro:
   # criando o construtor
   def __init__(self, modelo, cor, ano, velMax):
      self.model = modelo
      self.color = cor
      self.year = ano
      self.velo = 0
      self.maxVel = velMax
   
   def imprima(self):
      if self.velo == 0:
         print("O %s está parado\n   Cor: %s\n   Ano: %d"% (self.model, self.color, self.year))
      elif self.velo < self.maxVel:
         print("O %s está a %d km por hora\n   Cor: %s"%(self.model, self.velo, self.color))
      else:
         print("O %s está a milhão (%dkm/h)"%(self.model, self.velo))
      
   def acelera(self, velocidade):
      if self.maxVel > self.velo + velocidade:
         self.velo += velocidade
      else:
         self.velo = self.maxVel

      self.imprima()
   
   def parar(self):
      self.velo = 0
      self.imprima()
   
def main():
   gol = Carro("Gol Bolinha", "Prateado", 2007, 120)
   uno_firma = Carro("Uno da Firma, com escada", "Caracterizado da firma", 2000, 500)
   gol.acelera(50)
   gol.acelera(80)
   gol.parar()

   uno_firma.acelera(600)
   uno_firma.parar()

main()