#include <stdio.h>
#include <stdlib.h>

int * initVet(int *, int *);
void printVet(int *, int, int);
int * addVet(int *, int *, int *, int);
int * remoVet(int *, int *, int *, int);
int find(int *, int, int);


int main() {
    int tamanho, tamanhomax;
    int * vet = initVet(&tamanho, &tamanhomax);
    vet = addVet(vet, &tamanho, &tamanhomax, 1);
    vet = addVet(vet, &tamanho, &tamanhomax, 1);
    vet = addVet(vet, &tamanho, &tamanhomax, 2);
    vet = addVet(vet, &tamanho, &tamanhomax, 3);
    vet = addVet(vet, &tamanho, &tamanhomax, 4);
    vet = addVet(vet, &tamanho, &tamanhomax, 5);
    vet = addVet(vet, &tamanho, &tamanhomax, 6);
    vet = addVet(vet, &tamanho, &tamanhomax, 7);
    vet = addVet(vet, &tamanho, &tamanhomax, 7);

    vet = remoVet(vet, &tamanho, &tamanhomax, 1);
    vet = remoVet(vet, &tamanho, &tamanhomax, 2);
    vet = remoVet(vet, &tamanho, &tamanhomax, 7);
    vet = remoVet(vet, &tamanho, &tamanhomax, 7);
    vet = remoVet(vet, &tamanho, &tamanhomax, 3);
    printVet(vet, tamanho, tamanhomax);
    vet = remoVet(vet, &tamanho, &tamanhomax, 4);

    printVet(vet, tamanho, tamanhomax);

    return 0;
}

int * initVet(int *size, int *maxSize){
    // retorna um vetor de maximo 4 e 0 para o size e 4 ao maxSize
    int *vet;
    *size = 0;
    *maxSize = 4;
    vet = malloc(sizeof(int) * (*maxSize));
    return vet;
}

void printVet(int *v, int size, int maxSize){
    // printa um vetor, seu tamanho maximo e quanto esta ocupado
    printf("\nVetor de tamanho maximo %d e ocupado %d:\n", maxSize, size);
    for (int i = 0; i < size; i++)
        printf("V[%d] = %d\n", i, v[i]);
}

int * addVet(int *v, int *size, int *maxSize, int element){
//    Adiciona o element ao final do vetor v. Caso nao haja espaco, um
//    novo vetor com o dobro do tamanho eh alocado
    if (*size < *maxSize){
        v[*size] = element;
        (*size)++;
        return v;
    }else{
        int i, *v_aux;
        *maxSize *= 2;
        v_aux = malloc(sizeof(int) * (*maxSize));

        for (i = 0; i < *size; i++) {
            v_aux[i] = v[i];
        }
        v_aux[*size] = element;
        (*size)++;
        free(v);
        return v_aux;
    }
}

int * remoVet(int *v, int *size, int *maxSize, int element){
//    Remove a primeira ocorrencia do element no vetor v, caso este esteja presente
    int posicao = find(v, *size, element);
    if (posicao != -1){
        for (int i = posicao; i < (*size) - 1; ++i)
            v[i] = v[i+1];
        (*size)--;
        if ((*maxSize) / 4 > (*size)){
            int *v_aux = malloc(sizeof(int) * (*maxSize) / 2);
            for (int i = 0; i < (*size); ++i)
                *(v_aux+i) = *(v+i);
            free(v);
            (*maxSize) /= 2;
            return v_aux;
        }
        return v;
    }
}

int find(int *v , int size, int element){
    // retorna a posicao da primeira vez que element aparece no vetor v, se nao aparecer retorna -1
    int i = 0;
    while (i < size){
        if(element == v[i])
            return i;
        i++;
    }
    return -1;
}