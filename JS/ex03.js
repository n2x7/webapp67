const digitize = (n) => [...`${Math.abs(n)}`].map((i) => parseInt(i));
console.log('Array of 123 = ' + digitize(123));
console.log('Array of 1230 = ' + digitize(1230));