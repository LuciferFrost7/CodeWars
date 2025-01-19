def is_solved(board):
    for i in [1, 2]:
        if [i, i, i] in board:
            return i
        if board[0][2] == i and board[1][1] == i and board[2][0] == i:
            return i
        if board[0][0] == i and board[1][1] == i and board[2][2] == i:
            return i
        for k in range(3):
            if board[0][k] == i and board[1][k] == i and board[2][k] == i:
                return i
    return -(list(__import__('itertools').chain(*board)).count(0) != 0)