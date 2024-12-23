def rgb(r, g, b):
    return "".join([hex(i)[2:].rjust(2, '0').upper() if 256 > i >= 0 else '00' if i < 256 else 'FF' for i in [r, g, b]])