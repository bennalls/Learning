/*
A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,

a2 + b2 = c2

For example, 32 + 42 = 9 + 16 = 25 = 52.

There exists exactly one Pythagorean triplet for which a + b + c = 1000.
Find the product abc.
*/

public class Problem9 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		int a = 0;
		int b = 0;
		int c = 0;
		
		loop:
		for(a = 1; a < 1000; a++)
			for(b = 1; (b+a) < 1000; b++){
				c = 1000 - a - b;
				if(((a*a + b*b)==(c*c)) && (a<b && b<c)){
					System.out.println("a is " + a);
					System.out.println("b is " + b);
					System.out.println("c is " + c);
					System.out.println("a x b x c = " + a*b*c);
					break loop;
				}
			}
	}
}
