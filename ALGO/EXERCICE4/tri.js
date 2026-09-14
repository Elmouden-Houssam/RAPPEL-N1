let nombres = [8, 3, 6, 1, 5];

console.log("Avant :", nombres);

for (let i = 0; i < nombres.length; i++) {

    for (let j = i + 1; j < nombres.length; j++) {

        if (nombres[i] > nombres[j]) {

            let temp = nombres[i];

            nombres[i] = nombres[j];

            nombres[j] = temp;
        }   
    }
}

console.log("Après :", nombres);   