//
//The following iterative sequence is defined for the set of positive integers:
//
//n → n/2 (n is even)
//n → 3n + 1 (n is odd)
//
//Using the rule above and starting with 13, we generate the following sequence:
//
//13 → 40 → 20 → 10 → 5 → 16 → 8 → 4 → 2 → 1
//
//It can be seen that this sequence (starting at 13 and finishing at 1) contains 10 terms. Although it has not been proved yet (Collatz Problem), it is thought that all starting numbers finish at 1.
//
//Which starting number, under one million, produces the longest chain?
//
//NOTE: Once the chain starts the terms are allowed to go above one million.


public class Problem14 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		int n = 1;
		int highestStart = 1;
		int highestCounter = 1;
		for(long i = n; n < 1000000; n++, i=n) {
			System.out.println(n);
			int counter = 1;
			while(i != 1){
				if(i%2 == 0)
					i /= 2;
				else
					i = 3*i + 1;
				counter ++;
			}
			System.out.println(counter);
			if(counter>highestCounter){
				highestCounter = counter;
				highestStart = n;
			}
			
		}
		System.out.println("Highest Start is " + highestStart);
		System.out.println("Highest Count is " + highestCounter);
	}

}
