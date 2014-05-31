#include <stdio.h>


void main()
{
  int boardsize = 0;
  printf("Enter size of board:");
  scanf("%d", &boardsize);

  int board[boardsize][boardsize];

  // Intialize board
  for(int i = 0, position = 1; i < boardsize; i++)
    {     
      for(int j = 0; j < boardsize; j++)
	{
	  board[i][j] = position++;
	}
    }

  // Print board
  for(int i = 0; i < boardsize; i++)
    {     
      for(int j = 0; j < boardsize; j++)
	{
	  printf("%3d  ", board[i][j]);
	}
      printf("\n");
    }

}
