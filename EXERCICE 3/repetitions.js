let nombres = [4, 7, 2, 7, 9, 4, 5];

let repetitions = [];

let i = 0;

while (i < nombres.length) {

    let j = i + 1;

    while (j < nombres.length) {

        if (nombres[i] === nombres[j]) {

            let existe = false;
            let k = 0;

            while (k < repetitions.length) {

                if (repetitions[k] === nombres[i]) {
                    existe = true;
                }

                k++;
            }

            if (existe === false) {
                repetitions.push(nombres[i]);
            }
        }

        j++;
    }

    i++;
}

console.log(repetitions);