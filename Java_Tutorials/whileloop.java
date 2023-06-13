// while loops in java
public class whileloop {
    public static void main(String[] args){
        // single while loop
        int i = 0;
        while(i<10){
            System.out.println(i);
            i++;
        }
        // nested while loop
        int count = 0;
        while(count<=15){
            System.out.println(count);
            count+=1;
            while(count<5){
                System.out.println("count is now "+count);
                count +=1;
            }
        }
        //nested if while loop
        int k = 1;
        while(k<20){
            if(k%2==0){
                System.out.println(k+" is devisible by two");
            };
            k++;
        }
    }
}
