class Triangulo:
   def __init__(self, a, b, c):
      self.a = a
      self.b = b
      self.c = c

   def perimetro(self):
      return self.a + self.b + self.c
   
   def tipo_lado(self):
      if self.a == self.b == self.c:
         return "equilátero"
      elif self.a == self.b or self.a == self.c or self.b == self.c:
         return "isósceles"        
      else:
         return "escaleno"
   
   def retangulo(self):
      # if self.a > self.b > self.c:
      #    if self.a ** 2 == self.b ** 2 + self.c ** 2:
      #       return True
      # elif self.b > self.c:
      #    if self.b ** 2 == self.a ** 2 + self.c ** 2:
      #       return True
      # else:
      #    if self.c ** 2 == self.b ** 2 + self.a ** 2:
      #       return True
      # return False
      lados = [self.a, self.b, self.c]
      lados.sort()
      if lados[2] ** 2 == lados[0] ** 2 + lados[1] ** 2:
         return True
      else:
         return False
   
   def semelhantes(self, t2):
      lados1 = [self.a, self.b, self.c]
      lados2 = [t2.a, t2.b, t2.c]
      lados1.sort()
      lados2.sort()
      if lados1[0] / lados2[0] == lados1[1] / lados2[1] == lados1[2] / lados2[2]:
         return True
      else:
         return False
