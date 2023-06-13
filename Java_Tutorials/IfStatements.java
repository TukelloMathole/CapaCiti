public class IfStatements {
    public static void main(String[] args){
        /// these are my variables 
        String name = "tukello";
        float height = 5.75f;
        boolean isMale = true;
        
        String isThere = (name == null)? "Enter your name" : "hi your name is "+name; // one line if statement
        System.out.println(isThere);// displayign
        System.out.println("What can i do for you "+name); // concatinating name with statement
        //multi line if statement
        if(isMale == false){
            System.out.println("you are not male");
        }else{
            System.out.println("you are male");
        }
        // nulti line if statements...........
        if(isMale == true && height > 4){
            System.out.println("you are male and at average sized human");
            System.out.println(height);
        }else{
            System.out.println("you are male but not averaged height");
        }
    }
}
