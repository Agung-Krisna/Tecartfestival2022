#!/usr/bin/env python3

from Crypto.Util.number import bytes_to_long as b2l, long_to_bytes as l2b
import random
# feistel cipher has the same decryption algorithm, however, we just need to swap the left, right blocks, and reverse the stream of keys

def generate_key(key_rounds):
    random.seed(13337)
    key = []
    for i in range(key_rounds):
        key.append(random.randint(1337, 13333337))
    return key

def feistel_cipher2(left, right):
    try:
        left = b2l(left.encode())
        right = b2l(right.encode())
    except:
        assert isinstance(left, bytes) and isinstance(right, bytes)
        left = b2l(left)
        right = b2l(right)

    key = generate_key(35)[::-1] # reversing the key
    prev_left, prev_right = left, right
    for i in range(len(key)):
        left, right = prev_right, prev_left ^ (prev_right ^ key[i])
        prev_left, prev_right = left, right
    return l2b(left), l2b(right)

enc_left = b'\x03\n\x11\n-\x1dS:\x1e\r6\x10!\x1a]@\x12M\x006[NNF0\x12\x9cS'
enc_right = b'tecartfestival22{fei5+e1_\xba\x11\xe4'

# one liner to print the flag
print(''.join(list(map(lambda x: x.decode(), feistel_cipher2(enc_right, enc_left)))[::-1]))


# for easier viewing:
decoded_left, decoded_right = feistel_cipher2(enc_right, enc_left)
decoded_left = decoded_left.decode()
decoded_right = decoded_right.decode()
print(decoded_right + decoded_left) # both give the same result