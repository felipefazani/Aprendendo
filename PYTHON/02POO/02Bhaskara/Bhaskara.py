class Bhaskara:
   def delta(self, a, b, c):
      return b ** 2 - 4 * a * c
   
   def calcula_raizes(self, a, b, c):
      delta = self.delta(a, b, c)
      if delta > 0:
         x1 = ((-b) + delta ** (1 / 2)) / (2 * a)
         x2 = ((-b) - delta ** (1 / 2)) / (2 * a)
         return (2, x1, x2) # 2 raízes, e o valor de x1 e x2
      elif delta == 0:
         x = (-b) / (2 * a)
         return (1, x) # 1 raíz, e seu valor
      else:
         return 0 # 0 raízes
   
   def main(self):
      a = float(input("Digite o valor de a: "))
      b = float(input("Digite o valor de b: "))
      c = float(input("Digite o valor de c: "))
      x = self.calcula_raizes(a, b, c)
      if(x == 0):
         print("Não há raízes reais")
      elif(x[0] == 1):
         print("Há uma raíz e seu valor é:", x[1])
      else:
         print("Há duas raízes sendo x1 =", x[1], "e x2 =", x[2])