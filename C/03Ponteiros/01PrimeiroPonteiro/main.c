/*Escreva uma funcao strcat que recebe como parametro 3 strings: s1, s2,
e sres. A funcao deve retornar em sres a concatenacao de s1 e s2.
Obs: O usuario desta funcao deve tomar cuidado para declarar sres com
espaco suficiente para armazenar a concatenacao de s1 e s2!
 */

#include <stdio.h>
#define MAX 100

void strcati(char *, char *, char *);
int tamString(const char *s);

int main() {
    int t1, t2;
    char string1[MAX], string2[MAX], resu[MAX];
    printf("Digite a primeira string(MAX: %d): ", MAX-1);
    scanf("%s", string1);
    t1 = tamString(string1);
    while(t1 > MAX-1){
        printf("A primeira string deve ter no máximo %d caracteres", MAX-1);
        scanf("%s", string1);
        t1 = tamString(string1);
    }
    printf("Digite a segunda string(MAX: %d): ", MAX-t1);
    scanf("%s", string2);
    t2 = tamString(string2);
    while(t2 > MAX-t1){
        printf("A segunda string deve ter no máximo %d caracteres", MAX-t1);
        scanf("%s", string2);
        t2 = tamString(string2);
    }
    strcati(string1, string2, resu);
    printf("\n\nresultado: %s", resu); // isso aqui não traz o resultado e não sei pq // BUG RESOLVIDO (VER LINHA 38)
    return 0;
}

void strcati(char *s1, char *s2, char *res){ // já tentei usar res[] e *res e no final, ele concatena as strings, mas não 'devolve'  BUG RESOLVIDO (VER LINHA 38)
//    res = s1  // aparentemente o que estava dando o erro era inicializar res como s1 e dps adicionar o s2 dps
    int tam1 = tamString(s1), tam2 = tamString(s2);
    for (int i = 0; i < tam1; ++i)
        res[i] = s1[i];
    for (int i = 0; i <= tam2; ++i){
        res[tam1+i] = s2[i];
    }

    // printf("%s", res); // mostra as strings concatenadas
}

int tamString(const char *s){
    int i = 0;
    while(*(s+i) != '\0')
        i++;
    return i;
}

