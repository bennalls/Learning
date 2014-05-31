
#include <stdio.h>  
#include <termios.h> //get keystroke




void main()
{

  int BoardSize = 0;
  char blank = '.';
  char cursor = '*';
  int row = 0;
  int column = 0;
  int row_position = 2;
  int column_position = 2;
  char keyboardmovement = 'a';
  char getch(void);

  // Intitialise Array all blank
  printf("Enter Size of Board:");
  scanf("%d",&BoardSize);

  char BoardArray[BoardSize][BoardSize];

  for(row = 0; row < BoardSize; row++)
    {
      for(column = 0; column < BoardSize; column++)      
	{
	  BoardArray[row][column] = blank;
	}
    }


  //Set Initial Cursor position
  BoardArray[row_position][column_position] = cursor;


    // Print Board First time
  for(row = 0; row < BoardSize; row++)
    	{
    	for(column = 0; column < BoardSize; column++)
    	  {
    	    printf("%c", BoardArray[row][column]);
    	  }
        printf("\n");
    	}



  for(int i = 100; i > 0; i--)
    {

      // User enters keyboard movement
      keyboardmovement = getch();
      //      scanf(" %c", &keyboardmovement);
      BoardArray[row_position][column_position] = blank;

      switch(keyboardmovement)
	{
	case 'a':
	  column_position -= 1;
	  break;
	case 's':
	  row_position += 1;
	  break;
	case 'd':
	  column_position += 1;
	  break;
	case 'w':
	  row_position -= 1;
	  break;
	default:
	  break;
	}

      //Set New Cursor position
      BoardArray[row_position][column_position] = cursor;

      // Print Board
      for(row = 0; row < BoardSize; row++)
	{
	  for(column = 0; column < BoardSize; column++)      
	    {
	      printf("%c", BoardArray[row][column]);
	    }
	  printf("\n");
	}
    }
}








// Read keyboard input without pressing enter
static struct termios old, new;

/* Initialize new terminal i/o settings */
void initTermios(int echo) 
{
  tcgetattr(0, &old); /* grab old terminal i/o settings */
  new = old; /* make new settings same as old settings */
  new.c_lflag &= ~ICANON; /* disable buffered i/o */
  new.c_lflag &= echo ? ECHO : ~ECHO; /* set echo mode */
  tcsetattr(0, TCSANOW, &new); /* use these new terminal i/o settings now */
}

/* Restore old terminal i/o settings */
void resetTermios(void) 
{
  tcsetattr(0, TCSANOW, &old);
}

/* Read 1 character - echo defines echo mode */
char getch_(int echo) 
{
  char ch;
  initTermios(echo);
  ch = getchar();
  resetTermios();
  return ch;
}

/* Read 1 character without echo */
char getch(void) 
{
  return getch_(0);
}

/* Read 1 character with echo */
char getche(void) 
{
  return getch_(1);
}
