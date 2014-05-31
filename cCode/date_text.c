// Take user date keyboard input in dd mm yyyy format and
// output in ddth mmm yyyy format

#include <stdio.h>

void main()
{
  int day = 1;
  int month = 1;
  int year = 1;
  
  printf("Enter date in dd mm yyyy format:");
  scanf("%d %d %d", &day, &month, &year);

  switch(day)
    {
    case 1: case 21: case 31:
      printf("%dst", day);
      break;
    case 2: case 22:
      printf("%dnd", day);
      break;
    case 3: case 23:
      printf("%drd", day);
      break;
    default:
      printf("%dth", day);
      break;
    }

  switch(month)
    {
    case 1:
      printf(" January");
      break;
    case 2:
      printf(" February");
      break;
    case 3:
      printf(" March");
      break;
    case 4:
      printf(" April");
      break;
    case 5:
      printf(" May");
      break;
    case 6:
      printf(" June");
      break;
    case 7:
      printf(" July");
      break;
    case 8:
      printf(" August");
      break;
    case 9:
      printf(" September");
      break;
    case 10:
      printf(" October");
      break;
    case 11:
      printf(" November");
      break;
    case 12:
      printf(" December");
      break;
    }

  printf(" %d\n", year);
}
