def backwards_prime(start, stop):
    def is_prime(c):
        for i in range(2, int(c**0.5) + 1):
            if not c % i: return False
        return True
    return [i for i in range(start, stop + 1) if is_prime(i) and ((is_prime(int(str(i)[::-1]))) and str(i)[::-1] != str(i))]