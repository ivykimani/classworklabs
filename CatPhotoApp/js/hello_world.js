//Export is there so that the function hello() becomes available to be imported and used in other files or modules - hence other files use import to call on functions in other files
export function hello(){
    //return 'Hello, World!';
    let a = 'Hello';
    let b = 'World';
    return '${a}, ${b}!';
}