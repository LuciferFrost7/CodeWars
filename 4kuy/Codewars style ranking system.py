class User:
    rank = None
    progress = None
    
    def __init__(self) -> None:
        self.rank = -8
        self.progress = 0
        
    def inc_progress(self, lvl: int) -> None :
        def func(a, b):
            return (1 if a - b == 1 else [a, b] == [1, -1]) if a - b in [1, 2] else 0
        d = [-8, -7, -6, -5, -4, -3, -2, -1, 1, 2, 3, 4, 5, 6, 7, 8]
        if lvl in d :
            if self.rank >= 8:
                self.progress = 0
                self.rank = 8
                return None
            self.progress += 3 if self.rank == lvl else func(self.rank, lvl) if self.rank > lvl else 10 * (self.rank - lvl + (self.rank < 0 < lvl)) ** 2
            if self.progress >= 100:
                if self.rank < 0 and self.rank+ self.progress // 100 >= 0:
                    self.rank += 1
                self.rank += self.progress // 100
                self.progress %= 100
        else:
            d[100]
        if self.rank >= 8:
                self.progress = 0
                self.rank = 8
                return None