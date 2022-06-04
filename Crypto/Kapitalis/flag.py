#!/usr/bin/env python3

ct = open("flag.enc", "r").read()

flag = ""
for char in ct:
    if (char.isupper()):
        flag += char

print(flag)