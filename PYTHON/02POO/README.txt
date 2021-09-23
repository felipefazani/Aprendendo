anotacoes sobre POO

OBJETO
-armazena em si alguns dados (atributos) e códigos (métodos)
-os códigos são instruções que manipulam esses dados
-fazemos o encapsulamento dos objetos, para que códigos de um objeto não interfira em outro objeto


CLASSES
-definem os tipos de objetos
-definem quais dados e códigos dos objetos

DADOS => atributos
CÓDIGO => métodos
OBJETOS => instâncias das classes

EXEMPLO

-Classe: Carro
-Instâncias: meu_carro, carro_da_empresa
  -atributos: ano, modelo, cor, velocidade
  -métodos: -acelera(velocidade)
            -pare()


CRIAÇÂO DE CLASSE EM PYTHON

   class Nome_da_Classe:
      # códigos
   
OBJETO EM PYTHON

   nome_do_objeto = Nome_da_Classe() # objeto criado dentro da classe Nome_da_Classe()

ATRIBUTO NO OBJETO

   nome_do_objeto.nome_do_atributo = 'valor ou string'

USANDO CONSTRUTOR NA CLASSE
- o construtor serve para criar atributos pré-estabelecidos e facilitar a criação de objetos
- sintaxe:

   class Carro:
      def __init__(self, modelo, ano, cor):
         self.modelo = modelo
         self.ano = ano
         self.cor = cor

- o '__init__' é o construtor e o único método da classe Carro
- self é a primeira váriavel que refere-se ao próprio objeto, por isso chamamos de self, o interpretador vai passar o endereço de memória
- modelo, ano e cor são moldes de atributos da classe Carro
- CRIANDO OBJETOS COM CONSTRUTOR
   - sintaxe:
      nome_do_objeto = Carro("nome_do_modelo", ano_do_carro, "cor_do_carro")
   - isso facilita para criar um objeto

FIXTURE
- um valor fixo para um conjunto de testes, ajuda na redução de códigos repetidos
- também é muito utilizado para guardar um objeto que requer um esforço maior para ser criado
- DEFININDO UM FIXTURE
   - basta criar uma função que cria o objeto e marcamos-a com

      @pytest.fixture
