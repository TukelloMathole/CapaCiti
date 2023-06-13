//arrays in java
public class Arrays {
    public static void main(String[] args){
        //String array 
        String[] names = {"Tukello", "Solomon", "John", "Thabo", "Khumba"};
        for(int i = 0; i<names.length;i+=1){
            System.out.println(names[i]);//looping in an array of string and printing with indexing
        }
        // int array
        int[] age = {10,13,9,24,40};
        for(int k = 0; k<age.length;k+=1){
            System.out.println(age[k]);//looping in an array of string and printing with indexing
        }
    }
}
