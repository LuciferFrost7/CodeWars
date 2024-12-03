def persistence(n):
    count = 0
    while n > 9:
        n = __import__('functools').reduce(lambda a, b: a * b, [int(i) for i in str(n)])
        count += 1
    return count