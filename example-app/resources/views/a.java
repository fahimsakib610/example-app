import java.util.Scanner;

class A
{
    int l,b;
    int sum=0;
    int i=0;
    Scanner sin =new Scanner(System.in);

    void display()
    {
        while(i<5){
            l=sin.nextInt();
            sum=sum+l;
            i++;
        }
    
  System.out.println(sum);
    }
}
class Main{
    public static void main(String args[]){
        A a1=new A();
        a1.display();
    }
}