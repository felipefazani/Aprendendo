#include <stdio.h>

void imprimeVetor(int vetor[], int tamanho);
void troca(int vetor[], int indice1, int indice2);
void selectionSort(int vetor[], int tamanho);
void bubbleSort(int vetor[], int tamanho);

int main() {
    int vet[10] = {5, 8, 3, 9, 10, 7, 4, 6, 1, 2};
    int vet1[10] = {1, 2, 3, 4, 5, 6, 7, 8, 9, 10};
    int vet2[10] = {10, 9, 8, 7, 6, 5, 4, 3, 2, 1};

    bubbleSort(vet, 10);
    bubbleSort(vet1, 10);
    bubbleSort(vet2, 10);

    imprimeVetor(vet, 10);
    imprimeVetor(vet1, 10);
    imprimeVetor(vet2, 10);

    return 0;
}

void imprimeVetor(int vetor[], int tamanho){
    printf("\n");
    for (int i = 0; i < tamanho; ++i) {
        printf("%d, ", vetor[i]);
    }
}

void troca(int vetor[], int indice1, int indice2){
    int aux = vetor[indice1];
    vetor[indice1] = vetor[indice2];
    vetor[indice2] = aux;
}

void selectionSort(int vetor[], int tamanho){
    int maior;
    for (int i = 0; i < tamanho - 1; ++i) {
        maior = i;
        for (int j = i + 1; j < tamanho; ++j) // procurando o maior
            if (vetor[j] > vetor[maior])
                maior = j;
        troca(vetor, maior, i);
    }
}

void bubbleSort(int vetor[], int tamanho){
    while(tamanho > 0){
        for (int i = 0; i < tamanho - 1; ++i) // empurrando os menores valores para o final
            if(vetor[i] < vetor[i+1])
                troca(vetor, i, i+1);
        tamanho--;
    }
}

