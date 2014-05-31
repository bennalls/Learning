/*
  You are given the following information, but you may prefer to do some research for yourself.
  o1 Jan 1900 was a Monday.
  oThirty days has September,
  April, June and November.
  All the rest have thirty-one,
  Saving February alone,
  Which has twenty-eight, rain or shine.
  And on leap years, twenty-nine.
  oA leap year occurs on any year evenly divisible by 4, but not on a century unless it is divisible by 400.

  How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)?

 */

#include <stdio.h>
	
#include <time.h>

int daysInMonthLookup(int month, int year);

int main(void)
{

time_t start, end;
double duration = 0;
	time(&start);

int firstSundayOfMonth = 6;
int month = 1;
int year = 1901;
int daysInMonth = daysInMonthLookup(month, year);
int countSundaysOnFirst = 0;

	
	
do {
    firstSundayOfMonth = 7 - ((daysInMonth - firstSundayOfMonth) % 7);

    if(firstSundayOfMonth == 1){
        countSundaysOnFirst++;
    }

    if (month < 12) {
        month++;
    } 
    else {
        month = 1;
        year++;

    }
    daysInMonth = daysInMonthLookup(month, year);


} while (!((year == 2000) && (month == 12)));
printf("Number of Sundays that are 1st Sunday of month: %d",countSundaysOnFirst);
time(&end);
duration = difftime(end, start);
printf("Time elapsed: %f\n", duration);
}

int daysInMonthLookup(month, year) {
    switch (month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            return 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            return 30;
            break;
        case 2:
            if (year % 4 == 0) {
                if (year % 100 == 0) {
                    if (year % 400 == 0) {
                        return 29;
                    } else {
                        return 28;
                    }
                } else {
                    return 29;
                }
            } else {
                return 28;
            }
    }
}



