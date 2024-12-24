dicty = {'CM':900, 'M':1000,'CD':400, 'D':500, 'XC':90, 'C':100, 'XL':40, 'L':50, 
         'IX':9, 'X':10, 'IV':4, 'V':5, 'I':1}
dictyM = {'M':1000, 'CM':900, 'D':500, 'CD':400, 'C':100, 'XC':90, 'L':50, 'XL':40,
          'X':10, 'IX':9,'V':5, 'IV':4, 'I':1}
class RomanNumerals:
    @staticmethod
    def to_roman(val : int) -> str:
        result = ''
        for i in dictyM:
            if val // dictyM[i] > 0:
                result += i * (val // dictyM[i])
                val = val % dictyM[i]
        return result

    @staticmethod
    def from_roman(roman_num : str) -> int:
        count = 0
        for i in dicty.keys():
            if i in roman_num:
                count += roman_num.count(i) * dicty[i]
                roman_num = roman_num.replace(i, '')
        return count