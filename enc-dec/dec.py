import os, re
import binascii
from chacha20poly1305 import ChaCha20Poly1305

#inkeyx = int(input("[+] Key : ")

keyx = binascii.unhexlify(inkeyx)    # 'dd7a5410eef857a4dace7375beb8097aeb2b26d077be6c6084c794b6a5a2ee88'
ciphertextx = binascii.unhexlify('70a66c7a1ebf4b99c963da1d97c96de6c3f70607f30516feaf5a223c5541')
noncex = binascii.unhexlify('2f474660dd4a2d8756ca98f6')

### u can use input() if wnt here

cip = ChaCha20Poly1305(keyx)  ## key
ciphertext = ciphertextx      ## ciphertext to decrypt
nonce = noncex                ## nonce

plaintext = cip.decrypt(nonce, ciphertext)
print("")
print(plaintext)
print("")