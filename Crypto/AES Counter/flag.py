#!/usr/bin/env python3

from binascii import unhexlify as unhex

test=b'We never stop investigating. We are never satisfied that we know enough to get by. Every question we answer leads on to another question. This has become the greatest survival trick of our species.'
flag_enc="28264466fa0b4aef4ca4f176fa6b7f77e738302cb9d73217dec3c09e110eb5f47b10b18d"
test_enc="0b260769ed0949f81fa3ec6feb27242bea2f262de5d93d5ae8c694c96e30e58b7822b0d06390144a917a24f662b2327a39c239265c8f7f6935b3726d0d2ba4ada72d682dae139a7f08369dd10a922bf3562272f56e0cfe685fff5b96fda41fe735d475c0a3cc7d77cbec28aa191dd1f2f035ce614ae9eea12b08653e50b89fd7ef9893e3e6bb26d933b63ce1611697548062cbe63efeb068ef0274b82aee99f71b929e419489c64114e4f6d31913cdc0f883a90a6e9f47c36c5e8e6ed2ceb46bbc69339339"

def decrypt(flag_enc, test_enc, test):
    flag = ""
    flag_bytes = unhex(flag_enc)
    test_bytes = unhex(test_enc)
    for i in range(len(flag_bytes)):
        flag += chr(flag_bytes[i] ^ test_bytes[i] ^ test[i])
    return flag

print(decrypt(flag_enc, test_enc, test))