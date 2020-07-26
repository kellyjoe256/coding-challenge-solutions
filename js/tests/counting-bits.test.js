const { expect } = require('chai');
const { countBits } = require('../counting-bits');

describe('counting bits', function () {
    it('correct count', function () {
        expect(countBits(0)).to.be.equal(0);
        expect(countBits(4)).to.be.equal(1);
        expect(countBits(7)).to.be.equal(3);
        expect(countBits(9)).to.be.equal(2);
        expect(countBits(10)).to.be.equal(2);
        expect(countBits(15)).to.be.equal(4);
        expect(countBits(1234)).to.be.equal(5);
    });
});
