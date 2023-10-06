all: main

fonction.o: fonction.h fonction.c
	gcc -Wall -c fonction.c

main: fonction.o main.c
	gcc -Wall -o main fonction.o main.c