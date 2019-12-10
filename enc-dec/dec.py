import os, re
from chacha20poly1305 import ChaCha20Poly1305











### u can use input() if wnt here


cip = ChaCha20Poly1305(b'\xd3\xa6@y\xff\xbc\xf0\xcb\xf0\x99\xc1\x1av\x91\xcc||\xffs2[\xe1V\xf0\x85)\xde\xaee\x9dI\x8d')  ## key
ciphertext = bytearray(b'\xd2\xd7qFA\xd4R\xc2w\xcd\\~\xab\x96\x95\x12u\x93\xdaM5\xfceR\xaf\xd3n\x8b\xc8i') ## ciphertext to decrypt
nonce = b'\x9f\xd0\x84\xdf\x1d\xc2_\xa0\xff\xfe\xcd\x82'













plaintext = cip.decrypt(nonce, ciphertext)
print(plaintext)