def decode_bits(bits):
    # ToDo: Accept 0's and 1's, return dots, dashes and spaces
    bits = bits.strip('0')
    b_count, count = [], 1
    for i in range(len(bits)):
        if i != 0:
            if bits[i - 1] == bits[i]:
                count += 1
            else:
                b_count.append(count)
                count = 1
    time_point = min(set(b_count + [count]))
    print(time_point)
    bits = bits.replace('1'* time_point * 3, '-').replace('1'*time_point, '.').replace('0'* time_point * 3, ' ').replace('0', '')
    return bits






def decode_morse(morseCode):
    # ToDo: Accept dots, dashes and spaces, return human-readable message
    return ''.join([MORSE_CODE[i] if i != '' else ' ' for i in decode_bits(morseCode).split(' ')])