def majority(arr):
    dct = {i:arr.count(i) for i in set(arr)}
    return sorted(dct, key=lambda a: arr.count(a))[-1] if not ((len(dct) > 1 and list(dct.values()).count(max(dct.values())) > 1) or len(dct) == 0) else None