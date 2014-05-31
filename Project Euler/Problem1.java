// Add all multiple of 3 and 5 below 1000
public class Problem1 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		int total = 0;
		for(int i = 3; i < 1000; i += 3) {
			if(i%5 == 0) 
				continue;
			else
				total += i;
		}
			
		for(int i = 5; i < 1000; i += 5)
			total += i;
		System.out.print(total);
		

	}

}
