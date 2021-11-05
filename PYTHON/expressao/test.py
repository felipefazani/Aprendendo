import main
import pytest

class Test:

   @pytest.fixture
   def obj(self):
      return main.Calcula_expressao()
   
   def exp1(self, obj):
      assert obj.expressao('4 + 4 - 2 * 3') == 2
      assert obj.expressao('2 * 2 * 2 0') == 80
      assert obj.expressao('2 / 2 * 2 0') == 20
      assert obj.expressao('3 + 2 - 7') == -2
      assert obj.expressao('0 * 2 - 0') == 0
      assert obj.expressao('7 * 9 * 0 + 3') == 3

