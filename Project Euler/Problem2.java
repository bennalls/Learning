
// Add all even fibinnaci number below 4,000,000
public class Problem2 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {

		int evenCount = 2;
		int previousNum = 2;
		
		for(int i = 3; i < 4000000; ){
			if(i%2 == 0)
				evenCount += i;
			i += previousNum;
			previousNum = i - previousNum;

		}
		
		System.out.print(evenCount);

	}

}
