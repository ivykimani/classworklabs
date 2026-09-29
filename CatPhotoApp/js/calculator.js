function appendToDisplay(value) {
    const display = document.getElementById('display');

    if (display.value === 'Error') {
        display.value = '';
    }

    display.value += value;
}

function clearDisplay() {
    document.getElementById('display').value = '';
}

function calculateResult() {
    const display = document.getElementById('display');
    const expression = display.value.replace(/\s+/g, '');
    const tokens = expression.match(/(?:\d+\.?\d*|\.\d+)|[+\-*/]/g);

    if (!expression || !tokens || tokens.join('') !== expression) {
        display.value = 'Error';
        return;
    }

    let position = 0;

    function parseExpression() {
        let value = parseTerm();

        while (tokens[position] === '+' || tokens[position] === '-') {
            const operator = tokens[position++];
            const nextValue = parseTerm();
            value = operator === '+' ? value + nextValue : value - nextValue;
        }

        return value;
    }

    function parseTerm() {
        let value = parseNumber();

        while (tokens[position] === '*' || tokens[position] === '/') {
            const operator = tokens[position++];
            const nextValue = parseNumber();

            if (operator === '/' && nextValue === 0) {
                throw new Error('Cannot divide by zero');
            }

            value = operator === '*' ? value * nextValue : value / nextValue;
        }

        return value;
    }

    function parseNumber() {
        let sign = 1;

        if (tokens[position] === '+' || tokens[position] === '-') {
            sign = tokens[position++] === '-' ? -1 : 1;
        }

        const token = tokens[position++];
        if (!token || !/^(?:\d+\.?\d*|\.\d+)$/.test(token)) {
            throw new Error('Invalid expression');
        }

        return sign * Number(token);
    }

    try {
        const result = parseExpression();
        if (position !== tokens.length || !Number.isFinite(result)) {
            throw new Error('Invalid expression');
        }
        display.value = String(Number(result.toFixed(10)));
    } catch (error) {
        display.value = 'Error';
    }
}