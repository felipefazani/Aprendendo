/*
    Faca uma funcao que recebe como parametro dois vetores de inteiros
    representando conjuntos de numeros inteiros, e devolve um outro
    vetor com o resultado da uniao dos dois conjuntos. O vetor resultante
    deve ser alocado dinamicamente.
*/
#include <stdio.h>
#include <stdlib.h>

int * uniao(int [], int, int [], int);
void selectionSort(int [], int);
void imprimeVet(int [], int);

int main() {
    int a[] = {3, 4, 1, 2}, b[] = {7, 6, 4, 5, 3}, *c;
    c = uniao(a, 4, b, 5);
    imprimeVet(c, 7);
    return 0;
}

int * uniao(int v1[], int n1, int v2[], int n2) { // recebe dois vetores e devolve a uniao entre eles
    int i, vet[n1+n2], aux, repetidas = 0;
    int *res;
    for (i = 0; i < n1; i++)
        vet[i] = v1[i];
    for (i = 0; i < n2; i++)
        vet[n1+i] = v2[i];

    selectionSort(vet, n1+n2);

    for (i = 1; i < n1+n2; i++)
        if (vet[i] == vet[i-1])
            repetidas++;

    res = malloc((n1+n2-repetidas) * sizeof(int));
    aux = 1;
    res[0] = vet[0];
    for (i = 1; i < n1+n2; i++)
        if (vet[i] != vet[i-1]){
            res[aux] = vet[i];
            aux++;
        }
    return res;
}

void selectionSort(int vet[], int tamVet){ // entra com um array de inteiros e os ordena em ordem crescente
    int i, j, aux;
    int menor;
    for (i = 0; i < tamVet - 1; i++) {
        menor = i;
        for (j = i + 1; j < tamVet; j++)
            if(vet[menor] >= vet[j])
                menor = j;
        aux = vet[i];
        vet[i] = vet[menor];
        vet[menor] = aux;
    }
}

void imprimeVet(int a[], int tamA){ // recebe um vetor de inteiro e imprime
    printf("\n");
    for (int i = 0; i < tamA; ++i)
        printf("[%d] = %d\n", i, a[i]);
}