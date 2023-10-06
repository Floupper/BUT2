#include <stdlib.h>
#include <stdio.h>
#include <time.h>
#include <math.h>
#include "fonction.h"

int main(int argc, char const *argv[])
{
    /* code */
    srand(time(NULL));
    printf("Tirage au sort nombre réel : %f\n", tirage());
    printf("Lancer du dé : %d\n", lancerDe());
    printf("\n");


    float tabLancer[6];
    unsigned int nbLancer = 6;

    for (size_t i = 0; i < nbLancer; i++)
    {
        tabLancer[i] = 0;
    }
    
    stockeLancer(tabLancer, nbLancer);
    affichageLancer(tabLancer, nbLancer);
    printf("\n");


    float tabTirage[10];
    unsigned int nbTirage = 10;

    for (size_t i = 0; i < 10; i++)
    {
        tabTirage[i] = 0;
    }
    
    stockeTirage(tabTirage, nbTirage);
    affichageTirage(tabTirage, nbTirage);

    return 0;
}
