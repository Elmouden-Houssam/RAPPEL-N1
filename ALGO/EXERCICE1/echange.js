let a = 10;
let b = 20;

console.log("Avant :");
console.log("a =", a);
console.log("b =", b);

let c = a;
a = b;
b = c;

console.log("Après :");
console.log("a =", a);
console.log("b =", b);