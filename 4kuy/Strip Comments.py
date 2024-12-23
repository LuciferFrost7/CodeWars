def strip_comments(strng, markers):
    print(markers)
    lst = []
    for i in strng.split('\n'):
        print(i)
        for j in markers:
            if j in i:
                i = i[:i.index(j)].rstrip()
        lst.append(i)
    return '\n'.join(lst)