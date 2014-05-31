


public class Problem4 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		
		int highestPalendrome = 0;
		int first_number = 100;
		int second_number = 100;
		
		for(int i = first_number; i < 1000; i++){
			for(int j = second_number; j < 1000; j++){
				if(Palindrome.isPalindrome(i, j) &&
					(i * j)>highestPalendrome)
					highestPalendrome = i * j;
			}
		}
		System.out.println("Highest Palendrome = " + highestPalendrome);			

	}

}



class Palindrome {
	
	static int productOfNumbers = 0;
	static int numberOfDigits = 0;
	
	/**
	 * @param a
	 * @param b
	 * @return
	 */
	public static boolean isPalindrome(int a, int b) {
		productOfNumbers = a * b;
		String stringnumber = "" + productOfNumbers;
		numberOfDigits = stringnumber.length();
		
		if(numberOfDigits % 2 == 0){
			for(int first = 0, last = (numberOfDigits - 1); first <= (numberOfDigits / 2);
					first++, last--) {
				if(stringnumber.charAt(first) == stringnumber.charAt(last))
					continue;
				else
					return false;
			}
		}
		return true;

	}
}