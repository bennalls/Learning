// Create half pyramids at end of mario level 1

#include <stdio.h>


void main(int argc, char *argv[])
{
  int height = 0;
  int space = 2;
  char brick = '#';
  printf("Enter height of pyramid:");
  scanf("%d", &height);
  printf("Enter spaces between pyramids:");
  scanf("%d", &space);
  printf("Enter character for the blocks of the pyramid:");
  scanf(" %c", &brick);
  char pyramid_array[height][height*2+space];


  // create pyramid_array values
  for(int row = 0; row < height; row++)
    {
      for(int column = 0; column < height; column++)
	{
	  if((row + column + 1) < height)
	    pyramid_array[row][column] = ' ';
	  else
	    pyramid_array[row][column] = brick;
	}
      for(int gap = height; gap < (height + space); gap++)
	{
	  pyramid_array[row][gap] = ' ';
	}
      for(int column = (height+space); column < (height * 2 + space); column++)
	{
	  if((column) > (height + row + space))
	    pyramid_array[row][column] = ' ';
	  else
	    pyramid_array[row][column] = brick;
	}
    }

  // print pyramid
  for(int row = 0; row < height; row++)
    {
      for(int column = 0; column < (height * 2 + space); column++)
	{
	  printf("%c", pyramid_array[row][column]);
	}
      printf("\n");
    }
}
