class Calculator {
    
    private int a;
    private int b;
    private int result;

    public Calculator(int a, int b) {
        this.a = a;
        this.b = b;
        printNumbers();
        calculateAndPrintAll();
    }

    private void printNumbers() {
        System.out.println("First num = " + a);
        System.out.println("Second num = " + b);
    }

    private void calculateAndPrintAll() {
        result = a + b;
        System.out.println("Sum = " + result);
        result = a - b;
        System.out.println("Difference = " + result);
        result = a * b;
        System.out.println("Product = " + result);
        result = a / b;
        System.out.println("Quotient = " + result);
    }

    public int power() {
        int result = 1;
        for (int i = 1; i <= b; i++) {
            result *= a;
        }
        return result;
    }
}

class Factorial {
    public int calculate(int n) {
        int result = 1;
        for (int i = 1; i <= n; i++) {
            result *= i;
        }
        return result;
    }
}