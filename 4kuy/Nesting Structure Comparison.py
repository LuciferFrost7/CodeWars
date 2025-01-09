def recurs(a):
    count = []
    for i in a:
        if type(i) == list:
            count += recurs(i)
            count.append('list')
        count.append('number')
    return count

def same_structure_as(original, other):
    if(isinstance(original, list) and isinstance(other, list)):
        return recurs(original) == recurs(other)
    return False