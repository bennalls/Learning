
public class Problem5 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {

		outerloop:
		for(int i = 1; ; i++)
			for(int j = 2; j <= 20; j++){
				if(i%j == 0){
					if(j != 20)
						continue;
					else {
					System.out.print(i);
					break outerloop;
					}
				}
				else
					break;
		}

	}
}


