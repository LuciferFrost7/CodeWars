from itertools import chain

def pascals_triangle(num: int) -> list:
    lst = [[1]]
    for i in range(1, num):
        l, a = [], [0] + lst[-1] + [0]
        for j in range(i + 1):
            l.append((a)[j] + (a)[j + 1])
        lst.append(l)
    return list(chain(*lst))