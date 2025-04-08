function appendToDisplay(value) {
    document.getElementById('inputDisplay').value += value;
}

function clearDisplay() {
    document.getElementById('inputDisplay').value = '';
    document.getElementById('resultDisplay').value = '';
}

function deleteLast() {
    let display = document.getElementById('inputDisplay');
    display.value = display.value.slice(0, -1);
}

function calculateResult() {
    try {
        let display = document.getElementById('inputDisplay');
        let resultDisplay = document.getElementById('resultDisplay');
        let expression = display.value.replace(/%/g, '/100*');
        resultDisplay.value = eval(expression.replace(/\*$/, ''));
    } catch {
        document.getElementById('resultDisplay').value = 'Error';
    }
}

function calculateSquareRoot() {
    let display = document.getElementById("inputDisplay");
    let resultDisplay = document.getElementById("resultDisplay");
    let value = parseFloat(display.value);
    if (!isNaN(value) && value >= 0) {
        resultDisplay.value = Math.sqrt(value);
    } else {
        resultDisplay.value = "Error";
    }
}