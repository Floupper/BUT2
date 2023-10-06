#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include "fonction.h"

char bernoulli(double p)
{
    double x = (double)rand() / (double)RAND_MAX;
    if (x > p)
    {
        printf("succès ! p = %f, x = %f\n", p, x);
        return 1;
    }
    else
    {
        printf("échec ! p = %f, x = %f\n", p, x);
        return 0;
    }
}

unsigned int bernoulli_scheme(unsigned int n, double p, char *results)
{
    double x = (double)rand() / (double)RAND_MAX;
    int nbSucces = 0;

    if (x > p)
    {
        printf("succès ! p = %f, x = %f\n", p, x);
        for (int i = 0; i < n; i++)
        {
            /* code */
            results[i] = 1;
        }
    }

    for (int i = 0; i < n; i++)
    {
        results[i] = bernoulli(p);
        if (results[i] == 1)
        {
            nbSucces++;
        }
    }

    return nbSucces;
}