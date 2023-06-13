// for loops in java
public class Forloops {
    public static void main(String[] args){
        //single for loop in java
        for(int i = 0; i < 5; i++){
            System.out.println(i);
        }
        //nested for loop printing a block
        for(int k = 0; k < 10; k++){
            for(int l = 0; l < 10; l++){
                System.out.print("*");
            }
            System.out.println(" ");
        }
        // nested loop printing out a diamond pattern
        for(int k = 0; k < 10; k++){
            for(int l = k; l < 10; l++){
                System.out.print("* ");
            }
            System.out.println(" ");
        }
    }
}
