let nombres = [10, 25, 77, 42, 18];

let max = nombres[0];
let i = 1;

while (i < nombres.length) {
    if (nombres[i] > max) {
        max = nombres[i];
    }

    i++;
}

console.log("La valeur maximale est :", max);