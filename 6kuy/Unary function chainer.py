def chained(functions):
    def a(arg):
        for i in functions: arg = i(arg)
        return arg
    return a