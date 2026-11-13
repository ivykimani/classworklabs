//Export is there so that the function hello() becomes available to be imported and used in other files or modules - hence other files use import to call on functions in other files
export function hello(){
    //return 'Hello, World!';
    let a = 'Hello';
    let b = 'World';

    //return `${a}, ${b}!`;
    //console.log(a,b);

    let fullWord = a + " " + b;//this is an example of concatenation

    console.log(fullWord);
    console.log("I love to code!");
    return fullWord;
}

export function introduction() {
    let str1 = 'Hello, This are the first lessons';
    let str2 = 'on my journey into learning more JavaScript.';
    let str3 = 'I am happy to be on this journey.'

    //using the concat() to join multiple strings together
    let result = str1.concat(' ', str2, ' ', str3);
    console.log(result);
}

export function add(num1, num2) {
 return num1 + num2;
}

alert(hello());

introduction();

const result = add(54, 36);
console.log(result);
//syntax are the rules we have to follow in javascript
