import pytest
def fibonnaci(n):
   if n < 2:
      return n                                  # base da recursao, o inicio
   else:
      return fibonnaci(n-1) + fibonnaci(n-2)    # Chamada recursiva

@pytest.mark.parametrize("entrada, esperado", [
   (0, 0),
   (1, 1),
   (2, 1),
   (3, 2),
   (4, 3),
   (5, 5),
   (6, 8),
   (7, 13)
   ])

def testa_fibonacci(entrada, esperado):
   assert fibonnaci(entrada) == esperado

