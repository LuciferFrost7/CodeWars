def generate_hashtag(s):
    a = '#' + ''.join([i.title() for i in s.split(' ')]) if len(s) != 0 else ''
    return a if (141 > len(a) and len(a) > 0) else False