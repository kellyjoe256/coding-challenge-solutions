def to_binary(n):
    quotient, remainder = divmod(n, 2)
    
    if quotient < 2:
        return '{}{}'.format(quotient, remainder)
    
    bits = [str(remainder)]
    while quotient:
        quotient, remainder = divmod(quotient, 2)
        bits.append(str(remainder))
    
    return ''.join(bits[::-1])


def count_bits(n):
    bits = list(to_binary(n))  # OR bits = list(bin(n)[2:])
    
    return len(list(bit for bit in bits if bit == '1'))


def main():
    print(count_bits(1234))


if __name__ == "__main__":
    main()