//The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
//
//Find the sum of all the primes below two million.


public class Problem10 {


	public static void main(String[] args) {
		
		long sumofprimes = 0L;
		int primes_below = 2000000;
		Primes.isPrime(primes_below); //create whole array upfront.
		for(int i = 2; i < primes_below; i++){
			if(Primes.isPrime(i))
				sumofprimes += i;
			if(i % 10000 == 0)
				System.out.println("Progress " + i);
		}
			
		System.out.print("Sum of primes below " + primes_below 
				+ " is " + sumofprimes);
	
	}

}


