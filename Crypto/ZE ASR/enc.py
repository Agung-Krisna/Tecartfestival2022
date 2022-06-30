#!/usr/bin/env python3

from Crypto.Util.number import getPrime
from secret import FLAG

def reverse(list_int):
    result = []
    for x in list_int:
        result.append(int(str(x)[::-1]))
    return (result)


p, q = getPrime(40), getPrime(40)
e = 65537
n = p*q
flag_int = []

for m in FLAG:
    flag_int.append(pow(ord(m), e, n))

ct = reverse(flag_int)

with open("flag.enc", "w") as f:
    f.write(f"n = {n}\ne = {e}\nc = {ct}")