// String in java 
public class Demo {
    public static void main(String[] args){
        // printing out Strings and String variables
        System.out.println("Hello world");
        String name = "Tukello";

        System.out.println("Hello "+name);
        strings();
        integer();
        variables();
    }
    public static void strings(){
        // single line print in java
        System.out.println("Hello i am tukello");
        System.out.println("I am learning the java syntex");
    }
    public static void integer(){
        System.out.println(1);
        System.out.println(2);
    }
    public static void variables(){
        String name = "tukello";
        int age = 25;
        float height = 5.75f;
        double weight = 19.99d;
        boolean isMale = true;
        System.out.println("hi my name is "+ name+" i am "+age+" my height is "+height+" my weight is"+ weight+" i am "+ isMale);

    }
}
