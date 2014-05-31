// Output a square based on user selections of size and line character

#include <stdio.h>

void main(void)
{

  int height = 0;
  float heightinput = 0.0f;
  char line = '*';
  int linenum = 0;
  int charnum = 0;

  //Request size of square from user
  while((heightinput < 1) || (heightinput > 25))
    {  
      printf("Enter height of square (1 - 25):");
      scanf("%f", &heightinput);
    }
  height = (int) heightinput;

  //Request symbol for line
  printf("Enter one letter, number or symbol:");
  scanf(" %c", &line);
  

  //Draw the Square 

  linenum = (int) height;
  while(linenum > 0)
    {
      printf("\n");
      
      // Print top and bottom of square //
      if(linenum == height || linenum == 1)
	{
	  for(int i = height; i > 0; i--)
	    printf("%c ", line);
	}
      

      // Print sides of square // 
      else
	{
	  printf("%c", line);
	  for(int i = height - 2; i > 0; i--)
	    printf("  ");
	  printf(" %c", line);
	}
      linenum--;
    }
  printf("\n\n");
}


	  

