class Calcula_expressao:
   def expressao(self, ex):
      '''recebe uma expressao matematica em forma de lista e retorna seu resultado,
         nao funciona com parenteses, potenciacao e radiciacao'''

      ex = [x for x in ex] # transformar a string em lista
      while(ex.count(' ') > 0): # retirar todos espacos em branco
         ex.remove(' ')
      self.calcula_exp('*', '/', ex)
      self.calcula_exp('+', '-', ex)
      return ex[0]
      

   def existe(self, op, list):
      try:
         list.index(op)
         return True
      except ValueError:
         return False

   def calcula_op(self, op, list):
      x = list.index(op)
      if op == '+':
         resul = float(list[x-1]) + float(list[x+1])
      elif op == '-':
         resul = float(list[x-1]) - float(list[x+1])
      elif op == '*':
         resul = float(list[x-1]) * float(list[x+1])
      elif op == '/':
         resul = float(list[x-1]) / float(list[x+1])
      list[x-1] = str(resul)
      list[x:x+2] = []

   def calcula_exp(self, op1, op2, list):
      while(op1 in list or op2 in list):
         if self.existe(op1, list) and self.existe(op2, list):
            # faz o que vier primeiro
            if list.index(op1) < list.index(op2):
               # multiplica
               self.calcula_op(op1, list)
            else:
               # divide
               self.calcula_op(op2, list)
         elif self.existe(op1, list):
            # multiplica
            self.calcula_op(op1, list)
         else:
            # divide
            self.calcula_op(op2, list)