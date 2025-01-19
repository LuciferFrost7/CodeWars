alp = __import__('string').ascii_uppercase
class CaesarCipher(object):
    def __init__(self, shift):
        self.shift = shift

    def encode(self, st):
        return ''.join([alp[(alp.index(i) + self.shift) % len(alp)]if i in alp else i for i in st.upper()])
        
    def decode(self, st):
        return ''.join([alp[alp.index(i) - self.shift]if i in alp else i for i in st.upper()])