#!/usr/bin/env python3

import os
from secret import FLAG

key = os.urandom(17)

ct = ""
for i, v in enumerate(FLAG):
    ct += chr(key[i%(len(key))] ^ ord(v))

with open ("flag.enc", "w") as f: 
    f.write(ct)