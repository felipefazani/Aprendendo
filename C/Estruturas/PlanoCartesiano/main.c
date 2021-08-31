/*
Crie um novo tipo de registro para armazenar coordenadas no plano
cartesiano.
Crie uma funcao para imprimir um ponto do tipo criado.
Crie uma funcao para cada uma destas operacoes: soma de dois
pontos, subtracao de dois pontos, multiplicacao por um escalar.
*/
#include <stdio.h>

struct Coordenada{
    float x;
    float y;
};

typedef struct Coordenada Ponto;

Ponto leCoordenada();
void imprimePnt(Ponto);
Ponto soma(Ponto, Ponto);
Ponto subt(Ponto, Ponto);
Ponto mult(Ponto, float);

int main() {
    Ponto p1, p2;
    float esc;

    printf("ENTRADA DAS COORDENADAS\nP1:\n");

    p1 = leCoordenada();
    printf("P2:\n");
    p2 = leCoordenada();
    printf("Digite o escalar:");
    scanf("%f", &esc);

    printf("A soma de p1 com p2:\n");
    imprimePnt(soma(p1, p2));

    printf("A subtracao de p1 com p2:\n");
    imprimePnt(subt(p1, p2));

    printf("A multiplicacao de p1 com escalar:\n");
    imprimePnt(mult(p1, esc));
    return 0;
}

Ponto leCoordenada(){
    Ponto aux;
    printf("Digite o valor do x:");
    scanf("%f", &aux.x);
    printf("Digite o valor do y:");
    scanf("%f", &aux.y);
    return aux;
}

void imprimePnt(Ponto p){
    printf("X: %.2f\nY: %.2f\n", p.x, p.y);
}

Ponto soma(Ponto a, Ponto b){
    Ponto aux;
    aux.x = a.x + b.x;
    aux.y = a.y + b.y;

    return aux;
}

Ponto subt(Ponto a, Ponto b){
    Ponto aux;
    aux.x = a.x - b.x;
    aux.y = a.y - b.y;

    return aux;
}

Ponto mult(Ponto a, float escalar){
//    Ponto aux;
//    aux.x = a.x * escalar;
//    aux.y = a.y * escalar;
    a.x *= escalar;
    a.y *= escalar;
    return a;
}