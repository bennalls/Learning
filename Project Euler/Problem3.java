
public class Problem3 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		
		long x = 600851475143L;
		//long x = 8462696833L;
		
		long highestPrime = x;// Full remainder from divide by lowest prime
		
		for(long i = 2; i < 1000000 && i < highestPrime; i++){
			if(!(PrimeNumbers.isPrime(i)))
				if(highestPrime%i == 0){
					System.out.println(i + " and " + (highestPrime/i) + " are factors");
					highestPrime = highestPrime/i;
					i -= 1; // Prime factors may be repeated
				}
		}
		System.out.println("The highest prime factor is " + highestPrime);
	}

}

// Order of O too high. 

class PrimeNumbers{
	
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
	
