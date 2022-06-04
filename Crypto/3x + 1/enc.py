#!/usr/bin/env python3


flag = "tecartfestival22{ye5_+hi5_i5_@_fine_cipher}"

flag_enc = ""

def affine_cipher(inp, a_coef = 3, b_coef = 1):
    return (inp * a_coef + b_coef) % 26

for i in flag:
    if (i.islower()):
        flag_enc += chr(affine_cipher(ord(i) - ord("a")) + ord("a"))
    elif (i.isupper()):
        flag_enc += chr(affine_cipher(ord(i) - ord("A")) + ord("A"))

    else:
        flag_enc += i


with open("flag.enc", "w") as f:
    f.write(flag_enc)