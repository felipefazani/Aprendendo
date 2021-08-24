#include <stdio.h>
/*
Escreva uma fun¸c˜ao que computa a potˆencia a
b para valores a
(double) e b (int) passados por parˆametro (n˜ao use bibliotecas como
math.h). Sua fun¸c˜ao deve ter o seguinte prot´otipo:
double pot(double a, int b);

Use a fun¸c˜ao anterior e crie um programa que imprima todas as
potˆencias:

 2^0, 2^1, 2^2 ... 2^10, 3^1 ... ... 10^10.

*/

double pot(double a, int b){
    double resul = 1;
    for(int i = 0; i < b; i++){
        resul *= a;
    }

    return resul;
}

int main() {
    int i, j;
    double a;
    int b;

    printf("Digite o valor de a: ");
    scanf("%lf", &a);
    printf("Digite o valor de b: ");
    scanf("%d", &b);

    printf("%.1lf ^ %d = %.1lf\n", a, b, pot(a, b));

    for (i = 2; i <= 10; i++) {
        for (j = 0; j <= 10; j++) {
            printf("%d ^ %d = %.0lf\n", i, j, pot(i, j));
        }
    }
    return 0;
}
