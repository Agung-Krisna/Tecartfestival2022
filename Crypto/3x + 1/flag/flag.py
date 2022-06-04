#!/usr/bin/env python3

from Crypto.Util.number import inverse

flag = "gnhbagqndgzmbi22{vn5_+wz5_z5_@_qzon_hzuwna}"

def rev_affine_cipher(inp, a_coef = 3, b_coef = 1):
    return ((inp - b_coef) * inverse(a_coef, 26)) % 26 
    # no division in modulo, only multiplicative inverse

flag_enc = ""
for i in flag:
    if (i.islower()):
        flag_enc += chr(rev_affine_cipher(ord(i) - ord("a")) + ord("a"))
    elif (i.isupper()):
        flag_enc += chr(rev_affine_cipher(ord(i) - ord("A")) + ord("A"))

    else:
        flag_enc += i

print(flag_enc)