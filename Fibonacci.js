function Fibonacci(n) {  //Gibt die n-te Fibonacci Zahl aus: mit Rekursion ist es am wenigsten Arbeit.
    if (n <= 1) return n;
    return Fibonacci(n - 1) + Fibonacci(n - 2);
}

function FibonacciRange(n) { // Funktion zur Ausgabe der Fibonacci-Zahlen
    for (let i = 1; i <= n; i++) {
        document.write(Fibonacci(i)+ "<br>");
    }
}
