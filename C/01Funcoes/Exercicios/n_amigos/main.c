/*
 *  Escreva uma função que recebe dois números inteiros positivos a e b por parâmetro e
determina se eles são amigos ou não, devolvendo 1 caso sejam amigos, e 0 caso contrário.
1
    Dois números são amigos se cada número é igual à soma dos divisores próprios do outro
(os divisores próprios de um número m são os divisores estritamente menores que m). Por
exemplo, os divisores próprios de 220 são 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 e 110, cuja soma
é 284; e os divisores próprios de 284 são 1, 2, 4, 71 e 142, cuja soma é 220. Logo, 220 e
284 são números amigos. O protótipo da função deve ser
 *
 * int amigos(int a, int b);
 * */
#include <stdio.h>

int amigos(int a, int b);
int som_div(int n);

int main() {
    int a, b;
    printf("Digite o valor de A:");
    scanf("%d", &a);
    printf("Digite o valor de B:");
    scanf("%d", &b);
    printf("%d", amigos(a, b));
    return 0;
}

int amigos(int a, int b){ // função exigida pelo enunciado, retorna 1 para a e b amigos e 0 caso contrário
    int amigo = 0;
    if ((som_div(a) == b) &&(som_div(b) == a))
        amigo = 1;
    return amigo;
}

int som_div(int n){ // esta função calcula a soma dos divisores de n
    int soma = 1;
    for (int i = 2; i <= n / 2; i++)
        if(n % i == 0)
            soma += i;
    return soma;
}