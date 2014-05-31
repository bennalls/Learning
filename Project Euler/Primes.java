
public class Primes {
	
	static int isprimelastcalled = 0;
	static boolean[] is_prime_array; //holds values upto last call of isPrime
			
	
	//Find a prime number using Sieve
	public static boolean isPrime(int a){
		
		if(a<2) return false;
		if(a > isprimelastcalled){ // Only recreate index if number larger.
			isprimelastcalled = a;
			is_prime_array = new boolean[a];
			
			//Initialize entire array to true
			for(int i = 0; i < a; i++)
				is_prime_array[i] = true; 
			
			is_prime_array[0] = false; // 1 is not a prime
			
			for(int i = 1; i < a; i++){
				if(is_prime_array[i] == true){
					for(int indexvalue = (i+1); (indexvalue+i+1) <= a;){
						indexvalue += i+1;
						is_prime_array[indexvalue-1] = false;
					}
				}
			}
		}

		
		return is_prime_array[a-1]; 
	}
	
		
	//Find prime through division testing - less memory, high CPU
	//grows expodentially with size of number
	public static boolean isPrimeLowMem(long x){
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

