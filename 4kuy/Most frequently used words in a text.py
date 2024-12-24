def top_3_words(text):
    lst = text.lower().translate(str.maketrans('.,!&-:/?;_', '          '))
    d = {i:lst.split(' ').count(i) for i in lst.split(' ') if i != '' and len(i) != i.count("'")}
    return sorted(d, key=lambda a:d[a])[-3:][::-1]