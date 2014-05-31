
public class TestPrimes {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		
		
		//NEED TO ADD SOME PRIME NUMBERS TO TEST
		
		//NEED TO TEST INPUTS (ie. negative number, decimals, etc)
		
		
		
		
		
		//Test if subsequent call of is much faster (ie. 
		//isPrime is not regenerating new array each time.
		
		System.out.println("*********************************************************");		
		System.out.println("Starting test of array reuse");
		System.out.println("2nd run should be quicker as array should be made already");
		
		long time_1_run_start = System.nanoTime();
		Primes.isPrime(101001000);
		long time_1_run_end = System.nanoTime();
		long total_1_run_time = time_1_run_end - time_1_run_start;
		System.out.println("Time for first run " + total_1_run_time);
		
		
		long time_2_run_start = System.nanoTime();
		Primes.isPrime(101000000);
		long time_2_run_end = System.nanoTime();
		long total_2_run_time = time_2_run_end - time_2_run_start;
		System.out.println("Time for second run with lower number " + total_2_run_time);
		
		long fracof_total_1_run_time = (total_1_run_time / 1000);
		System.out.print("Test reuse of existing prime test array: ");
		System.out.println((fracof_total_1_run_time > total_2_run_time) ? "PASSED" : "FAILED");
		System.out.println("*********************************************************");		
	}

}
