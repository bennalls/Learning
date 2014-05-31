
public class Problem3improved {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		
		long startTime = System.nanoTime();	
		
		long x = 600851475143L;
		//Primes.isPrime(10000);
		
		long highestPrime = x;// Full remainder from divide by lowest prime
		
		for(long i = 2; i < 1000000 && i < highestPrime; i++){
			if(highestPrime%i == 0){
				if((Primes.isPrimeLowMem(i))) {				
					System.out.println(i + " and " + (highestPrime/i) + " are factors");
					highestPrime = highestPrime/i;
					i -= 1; // Prime factors may be repeated
				}
			}	
		}
		System.out.println("The highest prime factor is " + highestPrime);
		
		long endTime = System.nanoTime();
		System.out.println("Took " + (endTime - startTime)/1000 + " x1000ns");
		
	}
}

class PrimeNumbersimproved{
	
	public static boolean isPrime(long x){
		if(x < 2)
			return false;
		
		if(x == 2)
			return true;
		
		for(long i = 2; i <= ((x/2)+1); i++){
			if (x%i == 0)
				return false;
		}
		return true;
	}
}
