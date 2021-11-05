import main
import pytest

class Test:
   @pytest.mark.parametrize('entrada, valor_esperado', [
      ('4 + 4 - 2 * 3', '2.0'),
      ('3 + 2 - 7', '-2.0'),
      ('0 * 2 - 0', '0.0'),
      ('7 * 9 * 0 + 3', '3.0')
   ])

   def test_expressao(self, entrada, valor_esperado):
      assert main.Calcula_expressao().expressao(entrada) == valor_esperado