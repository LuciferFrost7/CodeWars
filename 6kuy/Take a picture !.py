def sort_photos(pics):
    def next_image(img):
        return f'{img[:4]}.img{int(img[8:]) + 1}'
    pics = sorted(sorted(pics, key=lambda a: int(a[8:])), key=lambda a: int(a[:4]))
    return pics[-5:] + [next_image(pics[-1])]