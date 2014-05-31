#include <stdio.h>
#include <stdlib.h>

void main()
{
  int x = 0;
  int *pNumber = malloc(10000000000);
  for(int i = 0; i < 1000000000; i++)
    {
    *pNumber = 139;
    *pNumber++;
    }
  scanf("Enter a number %d", &x);
}
