def validate_number(st):
    st = ''.join([i for i in st if i in '0123456789+'])
    return ['Plenty more fish in the sea', 'In with a chance'][len(st) == 11 if st.startswith('07') else st.startswith('+44') and len(st) == 13]