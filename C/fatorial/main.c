#include <stdio.h>

/*
 * Escreva uma fun¸c˜ao que computa o fatorial de um n´umero n passado
por parˆametro. Sua fun¸c˜ao deve ter o seguinte prot´otipo:
long fat(long n); OBS: Caso n ≤ 0 seu programa deve retornar 1.
Use a fun¸c˜ao anterior e crie um programa que imprima os valores de
n! para n = 1, . . . , 20.
 */

int fat(int x){
    int resul = 1;
    for (int i = 2; i <= x; i++) {
        resul *= i;
    }
    return resul;
}

int main() {
    int i;

    for (i = 1; i <= 20; i++) {
        printf("%d! = %d\n", i, fat(i));
    }

    return 0;
}
