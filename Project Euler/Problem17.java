//
//
//If the numbers 1 to 5 are written out in words: one, two, three, four, five, then there are 3 + 3 + 5 + 4 + 4 = 19 letters used in total.
//
//If all the numbers from 1 to 1000 (one thousand) inclusive were written out in words, how many letters would be used? 
//
//
//NOTE: Do not count spaces or hyphens. For example, 342 (three hundred and forty-two) contains 23 letters and 115 (one hundred and fifteen) contains 20 letters. The use of "and" when writing out numbers is in compliance with British usage.
//


public class Problem17 {

	int LETTERSINHUNDREDAND = 10;
	public static void main(String[] args) {
		
		int LETTERS_IN_HUNDRED = 7;
		int LETTERS_IN_AND = 3;
		
		int numberOfLetters = 0;
		int totalNumOfLetters = 0;
		for(int i = 1; i <= 1000; i++, numberOfLetters = 0){
			int j = i;
			if(i==1000)
				numberOfLetters += 11;
			else if(i/100 > 0){
				if(i%100 == 0)
					numberOfLetters += getNumLettersHundredsAndSingle(i/100) + 
							LETTERS_IN_HUNDRED;
				else {
					numberOfLetters += getNumLettersHundredsAndSingle(i/100) + 
					LETTERS_IN_HUNDRED + LETTERS_IN_AND;
					j = i % 100;
				}
			}
			if(j<=10)
				numberOfLetters += getNumLettersHundredsAndSingle(j);
			else if(j<20 && j>10)
				numberOfLetters += getNumLettersTeens(j);
			if(j>19 && j<100) {
				numberOfLetters += getNumLettersPrefix20To90(j/10);
				numberOfLetters += getNumLettersHundredsAndSingle(j%10);
			}
			totalNumOfLetters += numberOfLetters;
			System.out.println(i + ": number letters: " + numberOfLetters +
					" total number of letters: " + totalNumOfLetters);
		}

	}

	//Returns number of letters in numbers one to nine
	public static int getNumLettersHundredsAndSingle(int i){
		int numLetters = 0;
		switch(i){
			case 1: case 2: case 6: case 10:
				numLetters=3;
				break;
			case 4: case 5: case 9:
				numLetters=4;
				break;
			case 7: case 8: case 3:
				numLetters=5;
				break;
			case 0:
				numLetters=0;
				break;
		}
		return numLetters;
	}
		
		
		//Returns number of letters in numbers ten to nineteen
		public static int getNumLettersTeens(int i){
			int numLetters = 0;
			switch(i){
				case 11: case 12: 
					numLetters=6;
					break;
				case 15: case 16: 
					numLetters=7;
					break;	
				case 13: case 14: case 18: case 19:
					numLetters=8;
					break;
				case 17:
					numLetters=9;
					break;
				case 10:
					numLetters=3;
					break;
			}
			return numLetters;
		}
		
		
		//Returns number of letters in numbers prefix 20 to 90
		public static int getNumLettersPrefix20To90(int i){
			int numLetters = 0;
			switch(i){
				case 4: case 5: case 6:
					numLetters=5;
					break;
				case 2: case 3: case 8: case 9:
					numLetters=6;
					break;
				case 7:  
					numLetters=7;
					break;	
			}
			return numLetters;
		}

}

