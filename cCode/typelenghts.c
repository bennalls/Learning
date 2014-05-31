#include <stdio.h>

void main()
{
  int number[10];
  int i = 0;

  for(i = 0; i < 15; i++)
    {
    printf("%d\) %p\n",i+1, &number[i]);
    printf("Size of %d\) is %d\n", i+1, sizeof(number[i]));
    }
  printf("SIZE OF ARRAY: %d\n", sizeof(number));







}
