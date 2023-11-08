// Andreyan Renaldi
// 121140186

let display = document.getElementById('display');
let errorMessages = {
    'Invalid Expression': 'Invalid Expression',
    'Division by Zero': 'Division by Zero'
};

function input(value) {
    display.value += value;
}

function calculate() {
    try {
        let result = evaluateExpression(display.value);
        display.value = result;
    } catch (error) {
        display.value = errorMessages[error.message] || 'Error';
    }
}

function clears() {
    display.value = '';
}

function back() {
    display.value = display.value.slice(0, -1);
}

function evaluateExpression(expression) {
    let result = Function('"use strict";return (' + expression + ')')();
    if (isNaN(result)) {
        throw new Error('Invalid Expression');
    }
    if (!isFinite(result)) {
        throw new Error('Division by Zero');
    }
    return result;
}

document.addEventListener('keydown', function (event) {
    const key = event.key;
    const allowedKeys = ['1', '2', '3', '4', '5', '6', '7', '8', '9', 
    'Enter', 'Backspace', 'Delete', '0', '+', '-', '*', '/',  '=','.'];

    if (allowedKeys.includes(key)) {
        if (key === 'Delete') {
            clears();
        } else if (key === 'Backspace') {
            back();
        } else if (key === 'Enter' || key === '=') {
            calculate();
        } else {
            input(key);
        }
    }
});