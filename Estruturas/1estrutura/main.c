#include <stdio.h>
#define MAX 5

/*
 Defina uma estrutura para aluno com RA e idade
 Faça a leitura de 5 alunos em uma função
 Calcule e imprima a média das idades dos alunos
*/

struct Aluno{
    int RA;
    int idade;
};

struct Aluno leitura();
void leitTurma(struct Aluno lista[MAX]);


int main() {
    int soma = 0;
    float media;
    struct Aluno alunos[MAX];
    leitTurma(alunos);

    for (int i = 0; i < MAX; ++i)
        soma += alunos[i].idade;

    media = soma / MAX;

    printf("A media das idades eh: %.2f", media);

    return 0;
}

struct Aluno leitura(){
    struct Aluno a;
    printf("-=-=-=-=-=-=-=-=-=-\n");
    printf("Digite o RA:");
    scanf("%d", &a.RA);
    printf("Digite a idade:");
    scanf("%d", &a.idade);

    return a;
}

void leitTurma(struct Aluno lista[MAX]){
    for (int i = 0; i < MAX; ++i)
        lista[i] = leitura();
}


