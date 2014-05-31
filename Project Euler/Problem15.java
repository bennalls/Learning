
//
//Starting in the top left corner of a 2×2 grid, and only 
//being able to move to the right and down, 
//there are exactly 6 routes to the bottom right corner.
//
//How many such routes are there through a 20×20 grid?
//
//First attempt was not programmed. Answer seen online.
//Answer worked out using math 40!/(20!*20!)
//based on number of permutations of 40 possible moves (20a, 20d)
//divided twice 20! to remove identical combinations of a or d.


public class Problem15 {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		long[][] grid = new long[21][21]; // 21 intersections each way
		int down;
		int across;
		
		for(down = 0; down < 21; down++){
			for(across = 0; across < 21; across++){
				
				//only one possible way to go along get to points on top row or first column
				if(across == 0 || down == 0){
					grid[down][across] = 1;
					continue;
				}
				//Possible ways to get to any point is sum of ways to get to point above
				//and ways to get to point to the left
				grid[down][across] = grid[down-1][across] + grid[down][across-1];
			}

		}
		System.out.print("number of possible paths " + grid[20][20]);

	}

}
