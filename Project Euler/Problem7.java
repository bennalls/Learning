
public class Problem7 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		int counter = 0;
		int nthprime = 0;
		Primes.isPrime(1000000);
		for(int i=0; counter<10001 ; i++) {
			if(Primes.isPrime(i)){
				counter += 1;
				nthprime = i;
			}
		}
		System.out.print("The " + counter + " number prime is " + nthprime );
	}

}
