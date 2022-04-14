import unittest
from minha_soma import soma


class TestaSoma(unittest.TestCase):
   
   def test_list_int(self):
      ''' Testa se a função soma uma lista de inteiros '''
      lista = [1, 2, 3]
      resultado = soma(lista)
      self.assertEqual(resultado, 6)

   def test_list_float(self):
      ''' Testa se a função soma uma lista de float '''
      lista = [1.0, 2.5, 3.5]
      resultado = soma(lista)
      self.assertEqual(resultado, 7)


if __name__ == "__main__":
   unittest.main()
