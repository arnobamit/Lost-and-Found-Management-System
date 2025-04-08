<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="calculator.css">
    
</head>
<body>
    <div class="calculator">
        <div class="display">
            <input type="text" id="inputDisplay" disabled>
            <input type="text" id="resultDisplay" disabled>
        </div>
        <div class="buttons">
            <button class="clear" onclick="clearDisplay()">C</button>
            <button onclick="deleteLast()">⌫</button>
            <button onclick="appendToDisplay('%')">%</button>
            <button onclick="appendToDisplay('/')">/</button>

            <button onclick="appendToDisplay('7')">7</button>
            <button onclick="appendToDisplay('8')">8</button>
            <button onclick="appendToDisplay('9')">9</button>
            <button onclick="appendToDisplay('*')">*</button>
            
            <button onclick="appendToDisplay('4')">4</button>
            <button onclick="appendToDisplay('5')">5</button>
            <button onclick="appendToDisplay('6')">6</button>
            <button onclick="appendToDisplay('-')">-</button>
            
            <button onclick="appendToDisplay('1')">1</button>
            <button onclick="appendToDisplay('2')">2</button>
            <button onclick="appendToDisplay('3')">3</button>
            <button onclick="appendToDisplay('+')">+</button>
            
            <button onclick="appendToDisplay('0')">0</button>
            <button onclick="appendToDisplay('.')">.</button>
            <button onclick="calculateSquareRoot()">√</button>
            <button class="equal" onclick="calculateResult()">=</button>
        </div>
    </div>
    <script src="calculator.js"></script>
</body>
</html>
