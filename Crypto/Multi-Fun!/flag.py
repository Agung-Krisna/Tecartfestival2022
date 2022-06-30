#!/usr/bin/env python3

flag = open("flag.enc", "r").read()

known_plaintext = "tecartfestival22{"
key = []

for i, v in enumerate(known_plaintext):
    key.append(ord(v) ^ ord(flag[i]))

final_flag = ""
for i, v in enumerate(flag):
    final_flag += chr(ord(v) ^ key[i%(len(key))])

print(final_flag)