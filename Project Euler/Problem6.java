
public class Problem6 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {

		int sumofnumbers = 0;
		int sumofsquares = 0;
		long squareofsumofnumbers = 0L;
		
		for(int i = 1; i<=100; i++) {
			sumofnumbers += i;
			sumofsquares += i*i;
		}
		squareofsumofnumbers = sumofnumbers*sumofnumbers;
		
		System.out.print(squareofsumofnumbers - sumofsquares);
		
		
			
		

	}

}
