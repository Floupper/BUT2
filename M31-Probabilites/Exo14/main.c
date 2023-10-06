#include <stdlib.h>
#include <stdio.h>
#include <time.h>
#include <math.h>
#include "fonction.h"

int main(int argc, char const *argv[])
{
    /* code */
    double p = 0.4;
    const unsigned int lancer = 10;
    char results[10];
    unsigned int nbSucces = bernoulli_scheme(lancer, p, results);
    unsigned int nbEchecs = lancer - nbSucces;

    printf("Il y a eu %d succès et %d échecs !\n", nbSucces, nbEchecs);
    return 0;
}
