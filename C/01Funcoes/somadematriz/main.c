#include <stdio.h>
#define MAX 100

void somaMat(double mat1[MAX][MAX], double mat2[MAX][MAX], double matRes[MAX][MAX], int n);
void leitura(int tamanho, double m[MAX][MAX]);


int main() {
    int tam, i, j;
    double m1[MAX][MAX], m2[MAX][MAX], r[MAX][MAX];
    printf("Digite o tamanho do lado da matriz (MAX.%d): ", MAX);
    scanf("%d", &tam);
    printf("PRIMEIRA MATRIZ: \n");
    leitura(tam, m1);

    printf("SEGUNDA MATRIZ: \n");
    leitura(tam, m2);

    somaMat(m1, m2, r, tam);


    for (i = 0; i < tam; ++i) {
        for (j = 0; j < tam; ++j) {
            printf("%.2lf\t", r[i][j]);
        }
        printf("\n");
    }
    return 0;
}

void somaMat(double mat1[MAX][MAX], double mat2[MAX][MAX], double matRes[MAX][MAX], int n){
    for (int i = 0; i < n; ++i) {
        for (int j = 0; j < n; ++j) {
            matRes[i][j] = mat1[i][j] + mat2[i][j];
        }
    }
}

void leitura(int tamanho, double m[MAX][MAX]){
    for (int i = 0; i < tamanho; ++i) {
        for (int j = 0; j < tamanho; ++j) {
            printf("[%d][%d]:  ", i, j);
            scanf("%lf", &m[i][j]);
        }
    }
}