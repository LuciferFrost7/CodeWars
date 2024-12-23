def order_weight(strng):
    return ' '.join(map(str, sorted(sorted(list(map(str, strng.split(' ')))), key=lambda a: sum([int(i) for i in a]))))