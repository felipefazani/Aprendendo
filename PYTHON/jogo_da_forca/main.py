# Hangman Game (Jogo da Forca)
# Programação Orientada a Objetos

# Import
import random

# Board (tabuleiro)
board = ['''

>>>>>>>>>>Hangman<<<<<<<<<<

+---+
|   |
    |
    |
    |
    |
=========''', '''

+---+
|   |
O   |
    |
    |
    |
=========''', '''

+---+
|   |
O   |
|   |
    |
    |
=========''', '''

 +---+
 |   |
 O   |
/|   |
     |
     |
=========''', '''

 +---+
 |   |
 O   |
/|\  |
     |
     |
=========''', '''

 +---+
 |   |
 O   |
/|\  |
/    |
     |
=========''', '''

 +---+
 |   |
 O   |
/|\  |
/ \  |
     |
=========''']


# Classe
class Hangman:

    # Método Construtor
    def __init__(self, word):
        self.word = word
        self.wrongLetters = []
        self.rightLetters = []
        self.mistake = 0

    # Método para adivinhar a letra
    def guess(self, letter):
        if letter in self.word:
            if letter not in self.rightLetters:
                self.rightLetters.append(letter)
            return True
        else:
            if letter not in self.wrongLetters:
                self.mistake += 1
                self.wrongLetters.append(letter)
            return False

    # Método para verificar se o jogo terminou
    def hangman_over(self):
        return self.hangman_won() or self.mistake == 6

    # Método para verificar se o jogador venceu
    def hangman_won(self):
        return self.hide_word() == self.word

    # Método para não mostrar a letra no board
    def hide_word(self):
        underscored = [character if character in self.rightLetters else '_' for character in self.word]
        return "".join(underscored)

    # Método para checar o status do game e imprimir o board na tela
    def print_game_status(self):
        print(board[self.mistake])

        print("Palavra: ", self.hide_word())

        print("Letras erradas: ")
        for x in self.wrongLetters:
            print(x)

        print("\nLetras certas: ")
        for x in self.rightLetters:
            print(x)

# Função para ler uma palavra de forma aleatória do banco de palavras
def rand_word():
    with open("palavras.txt", "rt") as f:
        bank = f.readlines()
    return bank[random.randint(0, len(bank)-1)].strip()


# Função Main - Execução do Programa
def main():
    # Objeto
    game = Hangman(rand_word())
    # Enquanto o jogo não tiver terminado, print do status, solicita uma letra e faz a leitura do caracter

    # Verifica o status do jogo
    while not game.hangman_over():
        game.print_game_status()
        letter = input("\nDigite uma letra: ")
        game.guess(letter)

    # De acordo com o status, imprime mensagem na tela para o usuário
    if game.hangman_won():
        print('\nParabéns! Você venceu!!')
    else:
        print(board[6])
        print('\nGame over! Você perdeu.')
        print('A palavra era ' + game.word)

    print('\nFoi bom jogar com você! Agora vá estudar!\n')


# Executa o programa
if __name__ == "__main__":
    main()