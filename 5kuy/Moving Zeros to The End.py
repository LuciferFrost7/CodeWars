def move_zeros(lst):
    return [i for i in lst if not i is 0] + [0] * lst.count(0)