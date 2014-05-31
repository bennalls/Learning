#include <stdio.h>

void main()
{
  int x = 20;
  int y = 10;
  int *Py = NULL;

  Py = &x;
  printf("Py has address %p and value %p and points to value %d\n", &Py, Py, *Py);
  printf("x has address of %p and a value of %d\n", &x, x);
  printf("y has address of %p and a value of %d\n", &y, y);
  *Py += 1;
  printf("Py has address %p and value %p and points to value %d\n", &Py, Py, *Py);
  printf("x has address of %p and a value of %d\n", &x, x);
  Py += 1;
  printf("Py has address %p and value %p and points to value %d\n", &Py, Py, *Py);
  Py += 4;
  printf("Py has address %p and value %p and points to value %d\n", &Py, Py, *Py);


}

