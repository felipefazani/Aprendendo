import Bhaskara
import pytest

class TestaBhaskara:

   @pytest.fixture
   def a(self): # 'a' vai ser o nome do objeto a ser chamado. Retornamos um
      return Bhaskara.Bhaskaraa()

   def testa_uma_raiz(self, a):
      assert a.calcula_raizes(1, 0, 0) == (1, 0)
      assert a.calcula_raizes(1, 4, 4) == (1, -2)
      
   
   def testa_duas_raizes(self, a):
      assert a.calcula_raizes(1, -5, 6) == (2, 3, 2)
      assert a.calcula_raizes(1, 0, -9) ==(2, 3, -3)

   def testa_zero_raizes(self, a):
      assert a.calcula_raizes(1, 1, 1) == 0  
      assert a.calcula_raizes(1, 0, 9) == 0
