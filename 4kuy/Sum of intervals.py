def sum_of_intervals(intervals):
    def interval_type(a, b):
        return 1 if a[1] < b[0] else 2 if b[1] < a[0] else 3 if b[0] <= a[0] and a[1] <= b[1] else 4 if a[0] <= b[0] and b[1] <= a[1] else 5 if a[0] <= b[0] and b[0] <= a[1] and a[1] <= b[1] else 6
        
    def obhod(intervals):
        for i in range(len(intervals)):
            for j in range(len(intervals)):
                if i != j:
                    match interval_type(intervals[i], intervals[j]):
                        case 3: intervals[i] = [0, 0]
                        case 4: intervals[j] = [0, 0]
                        case 5: intervals[i] = [intervals[i][0], intervals[j][1]]; intervals[j] = [0, 0]
                        case 6: intervals[i] = [intervals[j][0], intervals[i][1]]; intervals[j] = [0, 0]
        return [i for i in intervals if i != [0, 0]]
    
    return sum([max(i) - min(i) for i in obhod(obhod(intervals))])