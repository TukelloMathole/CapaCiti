import javax.swing.*;
import java.awt.event.*;  

public class App{
    static void Frames(){
            //creating instance of JFrame Elements
            JFrame f=new JFrame();
            JButton b1 = new JButton();
            String comboArray[] = {"Feets","Meters","Pounds","Kg","Farenheight","Celcious"};
            JComboBox Com1 = new JComboBox<>(comboArray);
            JComboBox Com2 = new JComboBox<>(comboArray);
            JTextArea t1 = new JTextArea();
            JTextArea  l1 = new JTextArea ();
            JLabel l2 = new JLabel();

            //Frame layout dimensions
            f.setSize(800, 400);
            f.setLayout(null);
            f.setVisible(true);

            //set buttons layout
            l1.setBounds(150, 250, 500, 40);
            f.add(l1);
            l2.setText("CONVERT TO");
            l2.setBounds(190, 150, 100, 30);
            f.add(l2);
            t1.setBounds(150, 100, 400, 30);
            f.add(t1);
            b1.setBounds(300, 200, 200, 30);
            b1.setText("Calculate");
            f.add(b1);
            b1.setActionCommand("Calculate");
            Com1.setBounds(550, 100, 100, 30);
            f.add(Com1);
            Com2.setBounds(300, 150, 200, 30);
            f.add(Com2);

            /// Creating Button Actions
            b1.addActionListener(new ActionListener() {
                public void actionPerformed(ActionEvent e){
                    String command = e.getActionCommand();
                   if(command.equals( "Calculate" )){
                        //converting 
                        if(Com1.getSelectedItem() == "Meters" && Com2.getSelectedItem() == "Feets"){
                            double num1 = Double.parseDouble(t1.getText());
                            double res = num1 * 3.281;
                            l1.setText(""+res);
                        }
                        if(Com1.getSelectedItem() == "Feets" && Com2.getSelectedItem() == "Meters"){
                            double num1 = Double.parseDouble(t1.getText());
                            double res = num1 * 0.305;
                            l1.setText(""+res);
                        }
                        //Converting Error Catching
                        if(Com1.getSelectedItem() == "Meters" && Com2.getSelectedItem() == "Celcious"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Meters" && Com2.getSelectedItem() == "Farenheight"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Meters" && Com2.getSelectedItem() == "Pounds"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Meters" && Com2.getSelectedItem() == "Pounds"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Meters" && Com2.getSelectedItem() == "Meters"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }
                        if(Com1.getSelectedItem() == "Feets" && Com2.getSelectedItem() == "Celcious"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Feets" && Com2.getSelectedItem() == "Farenheight"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Feets" && Com2.getSelectedItem() == "Pounds"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Feets" && Com2.getSelectedItem() == "Pounds"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Feets" && Com2.getSelectedItem() == "Feets"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }
                        //Converting
                        if(Com1.getSelectedItem() == "Kg" && Com2.getSelectedItem() == "Pounds"){
                            double num1 = Double.parseDouble(t1.getText());
                            double res = num1 * 2.205;
                            l1.setText(""+res);
                        }
                        if(Com1.getSelectedItem() == "Pounds" && Com2.getSelectedItem() == "Kg"){
                            double num1 = Double.parseDouble(t1.getText());
                            double res = num1 * 0.454;
                            l1.setText(""+res);
                        }
                        //Converting Error Catching
                        if(Com1.getSelectedItem() == "Kg" && Com2.getSelectedItem() == "Celcious"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Kg" && Com2.getSelectedItem() == "Farenheight"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Kg" && Com2.getSelectedItem() == "Meter"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Kg" && Com2.getSelectedItem() == "Feets"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Kg" && Com2.getSelectedItem() == "Kg"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }
                        if(Com1.getSelectedItem() == "Pounds" && Com2.getSelectedItem() == "Celcious"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Pounds" && Com2.getSelectedItem() == "Farenheight"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Pounds" && Com2.getSelectedItem() == "Meter"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Pounds" && Com2.getSelectedItem() == "Feets"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Pounds" && Com2.getSelectedItem() == "Pounds"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }



                        //converting
                        if(Com1.getSelectedItem() == "Farenheight" && Com2.getSelectedItem() == "Celcious"){
                            int num1=Integer.parseInt(t1.getText());
                            double res = (num1 - 32) * 5/9;
                            l1.setText(""+res);
                        }
                        if(Com1.getSelectedItem() == "Celcious" && Com2.getSelectedItem() == "Farenheight"){
                            int num1=Integer.parseInt(t1.getText());
                            double res = (num1 * 5/9) + 32;
                            l1.setText(""+res);
                        }
                        //Converting Error Catching
                        if(Com1.getSelectedItem() == "Farenheight" && Com2.getSelectedItem() == "Meter"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Farenheight" && Com2.getSelectedItem() == "Pounds"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Farenheight" && Com2.getSelectedItem() == "kg"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Farenheight" && Com2.getSelectedItem() == "Feets"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Farenheight" && Com2.getSelectedItem() == "Farenheight"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }
                        
                        if(Com1.getSelectedItem() == "Celcious" && Com2.getSelectedItem() == "Meter"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Celcious" && Com2.getSelectedItem() == "Pounds"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Celcious" && Com2.getSelectedItem() == "kg"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }else if(Com1.getSelectedItem() == "Celcious" && Com2.getSelectedItem() == "Feets"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }
                        else if(Com1.getSelectedItem() == "Celcious" && Com2.getSelectedItem() == "Celcious"){
                            l1.setText("Can not convert "+Com1.getSelectedItem()+" to "+ Com2.getSelectedItem());
                        }
                   }
                }
            });
        }
    public static void main(String[] args){
        Frames();
        
    }
}

/// pop up codeJOptionPane.showMessageDialog(f,"Hello, Welcome to Javatpoint.");