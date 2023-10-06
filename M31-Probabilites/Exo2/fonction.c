#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include "fonction.h"

float tirage(){
    float x = (float)rand()/(float)RAND_MAX;
    return x;
}

int lancerDe(){
    int face = rand() % 6;
    return face;
}

void stockeLancer(float *tab, unsigned int n){
    for (unsigned int i = 0; i < n; i++){
        int nombre = lancerDe();
        tab[nombre]++;
    }
}

void affichageLancer(float *tab, unsigned int n){
    printf("Test de loi uniforme modulo %d :\n -------------------------------------------------\n", n);
    for (unsigned int i = 0; i < n; i++){
        printf(" | %.3f", tab[i]/n);
    }
    printf(" | \n -------------------------------------------------\n");
}

void stockeTirage(float *tab, unsigned int n){
    for (unsigned int i = 0; i < n; i++){
        float nombre = tirage();
        int partieEntiere = nombre * 10;
        tab[partieEntiere]++;
    }
}

void affichageTirage(float *tab, unsigned int n){
    printf("Test de loi uniforme [0, 1], classes de largeur un dixième :\n -------------------------------------------------------------\n");
    for (unsigned int i = 0; i < 10; i++){
        printf(" | %3.f", tab[i]/(float)n);
    }
    printf(" | \n -------------------------------------------------------------\n");    
}