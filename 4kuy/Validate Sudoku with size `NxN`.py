from itertools import chain
class Sudoku(object):
    def __init__(self, data):
        self.sudoku = data
        
    def is_valid(self):
        print(*self.sudoku, sep='\n')
        rng = range(1, len(self.sudoku) + 1)
        for i in rng:
            if len(self.sudoku[i - 1]) != len(self.sudoku):
                return False
            for j in rng:
                if self.sudoku[i - 1].count(j) != 1 or type(self.sudoku[i - 1][j - 1]) != int:
                    return False
                if self.sudoku[j - 1].count(i) != 1:
                    return False
            aboba = __import__('math').floor(len(self.sudoku)**0.5)
        for j in range(0, aboba):
            subsudoku = self.sudoku[aboba * j:aboba * (j + 1)]
            for d in range(0, aboba):
                if sum(chain(*[subsudoku[i][d * aboba:(d + 1) * aboba] for i in range(0, aboba)])) != sum(rng):
                    return False
        return True