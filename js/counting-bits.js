var divMod = function (x, y) {
    return [Math.floor(x / y), x % y];
};

var toBinary = function (n) {
    var [quotient, remainder] = divMod(n, 2);

    if (quotient < 2) {
        return quotient + '' + remainder;
    }

    var bits = [remainder];
    while (quotient) {
        [quotient, remainder] = divMod(quotient, 2);
        bits.push(remainder);
    }

    return bits.reverse().join('');
};

var countBits = function (n) {
    var binary = toBinary(n);

    return binary.split('').filter((bit) => bit === '1').length;
};

module.exports = {
    countBits,
};
