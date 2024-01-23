# PHP 8.2 Hashes

Exact PHP version: 8.2.15  
Number of available hash algorithms: 60

All PHP Versions: [8.2](https://github.com/Kovah/php-hashes/tree/8.2) | [8.1](https://github.com/Kovah/php-hashes/tree/8.1) | [8.0](https://github.com/Kovah/php-hashes/tree/8.0) | [7.4](https://github.com/Kovah/php-hashes/tree/7.4) | [7.3](https://github.com/Kovah/php-hashes/tree/7.3) | [7.2](https://github.com/Kovah/php-hashes/tree/7.2) | [7.1](https://github.com/Kovah/php-hashes/tree/7.1)

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro18,3 with an 
Apple M1 Pro CPU. Current Docker Engine version is 24.10.6.

All results are based on a string with a fixed length of 204800 characters, generated with the `random_bytes()` function.

```bash
# Regular output to the CLI
docker run -it --rm -v "$PWD/hashes.php":/usr/src/hashes.php -w /usr/src php:8.1-cli php hashes.php
```

Additionally, for better statistical insights, you may generate a dataset which contains the execution times for all
available algorithms, each with regular string and raw binary output and each for string lengths ranging from 512
characters up to 2^25 (~33 mil) characters.  
You can generate the csv file with the following command:

```bash
# Output to a csv file
docker run -it --rm -v "$PWD":/usr/src/app -w /usr/src/app php:8.1-cli php hashes-csv.php
```

Please notice that the resulting csv file uses the semicolon as a delimiter and all numeric values use the dot as a
decimal separator.


## Results

### Sorted by algorithm name

```
Time         Algorithm    Method     Length  Hash
0.047922 ms  adler32      hex       8 bytes  26542608
0.042915 ms  adler32      raw       8 bytes  26542608
0.185013 ms  crc32        hex       8 bytes  2237db6d
0.172138 ms  crc32        raw       8 bytes  2237db6d
0.174999 ms  crc32b       hex       8 bytes  fa9ea346
0.169039 ms  crc32b       raw       8 bytes  fa9ea346
0.169992 ms  crc32c       hex       8 bytes  305e1d07
0.178099 ms  crc32c       raw       8 bytes  305e1d07
0.083923 ms  fnv132       hex       8 bytes  82a68ab1
0.083923 ms  fnv132       raw       8 bytes  82a68ab1
0.086069 ms  fnv164       hex      16 bytes  9b2215653252dfb1
0.086069 ms  fnv164       raw      16 bytes  9b2215653252dfb1
0.085115 ms  fnv1a32      hex       8 bytes  c4674a7d
0.084877 ms  fnv1a32      raw       8 bytes  c4674a7d
0.084877 ms  fnv1a64      hex      16 bytes  3088bb7eba58c9bd
0.085115 ms  fnv1a64      raw      16 bytes  3088bb7eba58c9bd
0.936985 ms  gost         hex      64 bytes  dd8f51dde702f9f9e26c0be22f8eb1b8804fb74e856650c6fc962c7c6cb1e820
0.962019 ms  gost         raw      64 bytes  dd8f51dde702f9f9e26c0be22f8eb1b8804fb74e856650c6fc962c7c6cb1e820
0.910997 ms  gost-crypto  hex      64 bytes  8d9be2ec5ad5cbaeb328f4fb3c242daa53067865b84148f2b1bc3e1f798cc016
0.926018 ms  gost-crypto  raw      64 bytes  8d9be2ec5ad5cbaeb328f4fb3c242daa53067865b84148f2b1bc3e1f798cc016
0.227928 ms  haval128,3   hex      32 bytes  0ce5a8178df8a106dc50379a20701f7d
0.226021 ms  haval128,3   raw      32 bytes  0ce5a8178df8a106dc50379a20701f7d
0.319958 ms  haval128,4   hex      32 bytes  f7796afa2436eae5effb9ff87a019d31
0.331163 ms  haval128,4   raw      32 bytes  f7796afa2436eae5effb9ff87a019d31
0.402927 ms  haval128,5   hex      32 bytes  11edc2eed2208c1bb15ac61e5013046a
0.390053 ms  haval128,5   raw      32 bytes  11edc2eed2208c1bb15ac61e5013046a
0.255108 ms  haval160,3   hex      40 bytes  34fa12a3deb68b53e8b68ca66adb9cd467d62bc3
0.241995 ms  haval160,3   raw      40 bytes  34fa12a3deb68b53e8b68ca66adb9cd467d62bc3
0.321865 ms  haval160,4   hex      40 bytes  2a894b0bbe68b1e32111d414a3afabd9534f7670
0.335932 ms  haval160,4   raw      40 bytes  2a894b0bbe68b1e32111d414a3afabd9534f7670
0.390053 ms  haval160,5   hex      40 bytes  b704ae3140f87bd2d7c39a4c9fae482add2e5bc6
0.399113 ms  haval160,5   raw      40 bytes  b704ae3140f87bd2d7c39a4c9fae482add2e5bc6
0.226021 ms  haval192,3   hex      48 bytes  518ea774a0719bdc4ca613932ccc7a143a83c46bbe020043
0.236034 ms  haval192,3   raw      48 bytes  518ea774a0719bdc4ca613932ccc7a143a83c46bbe020043
0.340939 ms  haval192,4   hex      48 bytes  d0424a666194104413758c603837425b21d4078a97a696d4
0.344992 ms  haval192,4   raw      48 bytes  d0424a666194104413758c603837425b21d4078a97a696d4
0.401020 ms  haval192,5   hex      48 bytes  07eef52087f4d4653908f80c6f3465581f617e667fd8fe07
0.411987 ms  haval192,5   raw      48 bytes  07eef52087f4d4653908f80c6f3465581f617e667fd8fe07
0.227928 ms  haval224,3   hex      56 bytes  e9ae55766864c7042dbff240aa93d02fee8b3e25d94e2cdf0d3e324f
0.236034 ms  haval224,3   raw      56 bytes  e9ae55766864c7042dbff240aa93d02fee8b3e25d94e2cdf0d3e324f
0.338078 ms  haval224,4   hex      56 bytes  f50493717682839a08e3a98d8cfd52a1b24c5e7e65e1fb1d3023f714
0.339985 ms  haval224,4   raw      56 bytes  f50493717682839a08e3a98d8cfd52a1b24c5e7e65e1fb1d3023f714
0.392914 ms  haval224,5   hex      56 bytes  cca3025b301c3eac41bd94fa39d0d65559dd2713fab10e0c3de7ce05
0.401020 ms  haval224,5   raw      56 bytes  cca3025b301c3eac41bd94fa39d0d65559dd2713fab10e0c3de7ce05
0.232935 ms  haval256,3   hex      64 bytes  875932fc272c8d024a913de10b648a3ba8f4cb2b6a889cf2d3a64ff01f529e7b
0.235081 ms  haval256,3   raw      64 bytes  875932fc272c8d024a913de10b648a3ba8f4cb2b6a889cf2d3a64ff01f529e7b
0.319958 ms  haval256,4   hex      64 bytes  8f68c8b7145c344ffaca5e97e012bdbc9e9b26378f16684a8bb9028107b057f7
0.324011 ms  haval256,4   raw      64 bytes  8f68c8b7145c344ffaca5e97e012bdbc9e9b26378f16684a8bb9028107b057f7
0.395060 ms  haval256,5   hex      64 bytes  a24cf241d2a0e3e0b47796aa3c942563e83499501ff66fbbc7c99fc371d5763a
0.392914 ms  haval256,5   raw      64 bytes  a24cf241d2a0e3e0b47796aa3c942563e83499501ff66fbbc7c99fc371d5763a
0.104904 ms  joaat        hex       8 bytes  f2b75615
0.105143 ms  joaat        raw       8 bytes  f2b75615
6.970167 ms  md2          hex      32 bytes  2f10532b4617cede0ad733da8f86ce55
6.978989 ms  md2          raw      32 bytes  2f10532b4617cede0ad733da8f86ce55
0.079870 ms  md4          hex      32 bytes  5297c90c6468ed2b3a36a2ce990c511e
0.072956 ms  md4          raw      32 bytes  5297c90c6468ed2b3a36a2ce990c511e
0.131130 ms  md5          hex      32 bytes  59e8464477db4842ebe1659677953797
0.128031 ms  md5          raw      32 bytes  59e8464477db4842ebe1659677953797
0.030994 ms  murmur3a     hex       8 bytes  a58a5d54
0.030041 ms  murmur3a     raw       8 bytes  a58a5d54
0.022888 ms  murmur3c     hex      32 bytes  78384fbd3296a24d040e55cd0b490652
0.015020 ms  murmur3c     raw      32 bytes  78384fbd3296a24d040e55cd0b490652
0.014067 ms  murmur3f     hex      32 bytes  9e45853bebda4a5afdfb2711edd1fd7a
0.011921 ms  murmur3f     raw      32 bytes  9e45853bebda4a5afdfb2711edd1fd7a
0.169992 ms  ripemd128    hex      32 bytes  ff5304ebd9ed0497e81e52ba41b68dd8
0.233889 ms  ripemd128    raw      32 bytes  ff5304ebd9ed0497e81e52ba41b68dd8
0.232935 ms  ripemd160    hex      40 bytes  c0576d2c9ba19398a8186ede276871f4e2454d8c
0.210047 ms  ripemd160    raw      40 bytes  c0576d2c9ba19398a8186ede276871f4e2454d8c
0.154972 ms  ripemd256    hex      64 bytes  72a697440065a10aad3807723fc542f220836f1ffb7a1dede34639eeaf3ea2c7
0.154018 ms  ripemd256    raw      64 bytes  72a697440065a10aad3807723fc542f220836f1ffb7a1dede34639eeaf3ea2c7
0.220060 ms  ripemd320    hex      80 bytes  b5a687a2f453a2b05c802bb4edf0e5ce129e479a1a4749ac19e66410fa7fbf909227968ec13a829a
0.210047 ms  ripemd320    raw      80 bytes  b5a687a2f453a2b05c802bb4edf0e5ce129e479a1a4749ac19e66410fa7fbf909227968ec13a829a
0.092983 ms  sha1         hex      40 bytes  35b828fca81f468dbc973fee1b9cc00318bf18ed
0.084877 ms  sha1         raw      40 bytes  35b828fca81f468dbc973fee1b9cc00318bf18ed
0.482082 ms  sha224       hex      56 bytes  e857eaa9019a16a7f0b82808562a273e35919bd178de6e25ff12af4c
0.466108 ms  sha224       raw      56 bytes  e857eaa9019a16a7f0b82808562a273e35919bd178de6e25ff12af4c
0.495911 ms  sha256       hex      64 bytes  cc858cd371d1ce4650495bc393b4082cfe6a2973c463c3c96392153e27dab497
0.478029 ms  sha256       raw      64 bytes  cc858cd371d1ce4650495bc393b4082cfe6a2973c463c3c96392153e27dab497
0.154018 ms  sha3-224     hex      56 bytes  1e3475078d5a9a1e5ad0d7f2b5e213e6d2ac6be7f5e8247674929148
0.102997 ms  sha3-224     raw      56 bytes  1e3475078d5a9a1e5ad0d7f2b5e213e6d2ac6be7f5e8247674929148
0.114918 ms  sha3-256     hex      64 bytes  a2950bfb8d6448bf4e6c93958ad3564d07e78348adb5dd142d768e8ecb40e176
0.190973 ms  sha3-256     raw      64 bytes  a2950bfb8d6448bf4e6c93958ad3564d07e78348adb5dd142d768e8ecb40e176
0.154018 ms  sha3-384     hex      96 bytes  d528da833a74e3be60990d120697cb77e0765b3bbac47fe325893788173a25bda4ef5a491a696d6dd5df7fcf51a5c1f8
0.140905 ms  sha3-384     raw      96 bytes  d528da833a74e3be60990d120697cb77e0765b3bbac47fe325893788173a25bda4ef5a491a696d6dd5df7fcf51a5c1f8
0.202894 ms  sha3-512     hex     128 bytes  e70d54eb45446e0b1c3430d29f00d24f4c566359e52f309c1cd8e80917a4e05e14733562a55ebbb6bd58ed4bf3f383b712dd8761f748099c99191940ba20d654
0.202179 ms  sha3-512     raw     128 bytes  e70d54eb45446e0b1c3430d29f00d24f4c566359e52f309c1cd8e80917a4e05e14733562a55ebbb6bd58ed4bf3f383b712dd8761f748099c99191940ba20d654
0.210047 ms  sha384       hex      96 bytes  a5c140e006e20853893545f379e85d5c9b4be729bc6d80e4edef9ba810fec5b39a551f1ef89e379e87d1ffaea8d8d63a
0.211000 ms  sha384       raw      96 bytes  a5c140e006e20853893545f379e85d5c9b4be729bc6d80e4edef9ba810fec5b39a551f1ef89e379e87d1ffaea8d8d63a
0.211000 ms  sha512       hex     128 bytes  29eaa887d3289365a5090890e30de7c94d72dd848770a28ad20243726d22cb8d18a4480458a23e5f01c0ef58e3518a50b999f7ecc64605240639c5ece6e5081c
0.221014 ms  sha512       raw     128 bytes  29eaa887d3289365a5090890e30de7c94d72dd848770a28ad20243726d22cb8d18a4480458a23e5f01c0ef58e3518a50b999f7ecc64605240639c5ece6e5081c
0.210047 ms  sha512/224   hex      56 bytes  299e3e448baa5b346ad16d6a17f725f283111ea126c1b9d7e43bb0d1
0.205040 ms  sha512/224   raw      56 bytes  299e3e448baa5b346ad16d6a17f725f283111ea126c1b9d7e43bb0d1
0.209808 ms  sha512/256   hex      64 bytes  c650c29ff3b460a1ff6ac843b4a158bcf250b0fb4abe7d02f30b5b840161b0c5
0.204086 ms  sha512/256   raw      64 bytes  c650c29ff3b460a1ff6ac843b4a158bcf250b0fb4abe7d02f30b5b840161b0c5
2.137899 ms  snefru       hex      64 bytes  1d419bf2826611be8a59a1ee385cd52277662ec42d33b07c299be3249d0bca6c
2.187014 ms  snefru       raw      64 bytes  1d419bf2826611be8a59a1ee385cd52277662ec42d33b07c299be3249d0bca6c
2.187967 ms  snefru256    hex      64 bytes  1d419bf2826611be8a59a1ee385cd52277662ec42d33b07c299be3249d0bca6c
2.125978 ms  snefru256    raw      64 bytes  1d419bf2826611be8a59a1ee385cd52277662ec42d33b07c299be3249d0bca6c
0.102997 ms  tiger128,3   hex      32 bytes  d3a03593a3988c703191df28767d1a35
0.097036 ms  tiger128,3   raw      32 bytes  d3a03593a3988c703191df28767d1a35
0.126839 ms  tiger128,4   hex      32 bytes  02102fbc3fd9bc827b604937f80bae83
0.133991 ms  tiger128,4   raw      32 bytes  02102fbc3fd9bc827b604937f80bae83
0.093937 ms  tiger160,3   hex      40 bytes  d3a03593a3988c703191df28767d1a3522ae6229
0.095129 ms  tiger160,3   raw      40 bytes  d3a03593a3988c703191df28767d1a3522ae6229
0.131130 ms  tiger160,4   hex      40 bytes  02102fbc3fd9bc827b604937f80bae8303a44121
0.129938 ms  tiger160,4   raw      40 bytes  02102fbc3fd9bc827b604937f80bae8303a44121
0.093937 ms  tiger192,3   hex      48 bytes  d3a03593a3988c703191df28767d1a3522ae62293503fb33
0.096083 ms  tiger192,3   raw      48 bytes  d3a03593a3988c703191df28767d1a3522ae62293503fb33
0.125170 ms  tiger192,4   hex      48 bytes  02102fbc3fd9bc827b604937f80bae8303a44121695e4575
0.128984 ms  tiger192,4   raw      48 bytes  02102fbc3fd9bc827b604937f80bae8303a44121695e4575
0.438929 ms  whirlpool    hex     128 bytes  d1665f68eef025f2dfad10ed8cbde74cb5563581b14895ca6b85d03dd87248de83c6e6db55717f2439a92c9bfe20751e1a06619411872b064639066556258e7e
0.437975 ms  whirlpool    raw     128 bytes  d1665f68eef025f2dfad10ed8cbde74cb5563581b14895ca6b85d03dd87248de83c6e6db55717f2439a92c9bfe20751e1a06619411872b064639066556258e7e
0.010967 ms  xxh128       hex      32 bytes  d88c7ef8abadf36ee22fbc34138cc3da
0.009060 ms  xxh128       raw      32 bytes  d88c7ef8abadf36ee22fbc34138cc3da
0.015974 ms  xxh3         hex      16 bytes  e22fbc34138cc3da
0.009060 ms  xxh3         raw      16 bytes  e22fbc34138cc3da
0.010014 ms  xxh32        hex       8 bytes  ac6ae8e1
0.010014 ms  xxh32        raw       8 bytes  ac6ae8e1
0.005007 ms  xxh64        hex      16 bytes  6e486e88e34f65ce
0.005007 ms  xxh64        raw      16 bytes  6e486e88e34f65ce
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.005007 ms  xxh64        hex      16 bytes  6e486e88e34f65ce
0.005007 ms  xxh64        raw      16 bytes  6e486e88e34f65ce
0.009060 ms  xxh3         raw      16 bytes  e22fbc34138cc3da
0.009060 ms  xxh128       raw      32 bytes  d88c7ef8abadf36ee22fbc34138cc3da
0.010014 ms  xxh32        hex       8 bytes  ac6ae8e1
0.010014 ms  xxh32        raw       8 bytes  ac6ae8e1
0.010967 ms  xxh128       hex      32 bytes  d88c7ef8abadf36ee22fbc34138cc3da
0.011921 ms  murmur3f     raw      32 bytes  9e45853bebda4a5afdfb2711edd1fd7a
0.014067 ms  murmur3f     hex      32 bytes  9e45853bebda4a5afdfb2711edd1fd7a
0.015020 ms  murmur3c     raw      32 bytes  78384fbd3296a24d040e55cd0b490652
0.015974 ms  xxh3         hex      16 bytes  e22fbc34138cc3da
0.022888 ms  murmur3c     hex      32 bytes  78384fbd3296a24d040e55cd0b490652
0.030041 ms  murmur3a     raw       8 bytes  a58a5d54
0.030994 ms  murmur3a     hex       8 bytes  a58a5d54
0.042915 ms  adler32      raw       8 bytes  26542608
0.047922 ms  adler32      hex       8 bytes  26542608
0.072956 ms  md4          raw      32 bytes  5297c90c6468ed2b3a36a2ce990c511e
0.079870 ms  md4          hex      32 bytes  5297c90c6468ed2b3a36a2ce990c511e
0.083923 ms  fnv132       hex       8 bytes  82a68ab1
0.083923 ms  fnv132       raw       8 bytes  82a68ab1
0.084877 ms  sha1         raw      40 bytes  35b828fca81f468dbc973fee1b9cc00318bf18ed
0.084877 ms  fnv1a32      raw       8 bytes  c4674a7d
0.084877 ms  fnv1a64      hex      16 bytes  3088bb7eba58c9bd
0.085115 ms  fnv1a32      hex       8 bytes  c4674a7d
0.085115 ms  fnv1a64      raw      16 bytes  3088bb7eba58c9bd
0.086069 ms  fnv164       hex      16 bytes  9b2215653252dfb1
0.086069 ms  fnv164       raw      16 bytes  9b2215653252dfb1
0.092983 ms  sha1         hex      40 bytes  35b828fca81f468dbc973fee1b9cc00318bf18ed
0.093937 ms  tiger160,3   hex      40 bytes  d3a03593a3988c703191df28767d1a3522ae6229
0.093937 ms  tiger192,3   hex      48 bytes  d3a03593a3988c703191df28767d1a3522ae62293503fb33
0.095129 ms  tiger160,3   raw      40 bytes  d3a03593a3988c703191df28767d1a3522ae6229
0.096083 ms  tiger192,3   raw      48 bytes  d3a03593a3988c703191df28767d1a3522ae62293503fb33
0.097036 ms  tiger128,3   raw      32 bytes  d3a03593a3988c703191df28767d1a35
0.102997 ms  sha3-224     raw      56 bytes  1e3475078d5a9a1e5ad0d7f2b5e213e6d2ac6be7f5e8247674929148
0.102997 ms  tiger128,3   hex      32 bytes  d3a03593a3988c703191df28767d1a35
0.104904 ms  joaat        hex       8 bytes  f2b75615
0.105143 ms  joaat        raw       8 bytes  f2b75615
0.114918 ms  sha3-256     hex      64 bytes  a2950bfb8d6448bf4e6c93958ad3564d07e78348adb5dd142d768e8ecb40e176
0.125170 ms  tiger192,4   hex      48 bytes  02102fbc3fd9bc827b604937f80bae8303a44121695e4575
0.126839 ms  tiger128,4   hex      32 bytes  02102fbc3fd9bc827b604937f80bae83
0.128031 ms  md5          raw      32 bytes  59e8464477db4842ebe1659677953797
0.128984 ms  tiger192,4   raw      48 bytes  02102fbc3fd9bc827b604937f80bae8303a44121695e4575
0.129938 ms  tiger160,4   raw      40 bytes  02102fbc3fd9bc827b604937f80bae8303a44121
0.131130 ms  md5          hex      32 bytes  59e8464477db4842ebe1659677953797
0.131130 ms  tiger160,4   hex      40 bytes  02102fbc3fd9bc827b604937f80bae8303a44121
0.133991 ms  tiger128,4   raw      32 bytes  02102fbc3fd9bc827b604937f80bae83
0.140905 ms  sha3-384     raw      96 bytes  d528da833a74e3be60990d120697cb77e0765b3bbac47fe325893788173a25bda4ef5a491a696d6dd5df7fcf51a5c1f8
0.154018 ms  sha3-224     hex      56 bytes  1e3475078d5a9a1e5ad0d7f2b5e213e6d2ac6be7f5e8247674929148
0.154018 ms  sha3-384     hex      96 bytes  d528da833a74e3be60990d120697cb77e0765b3bbac47fe325893788173a25bda4ef5a491a696d6dd5df7fcf51a5c1f8
0.154018 ms  ripemd256    raw      64 bytes  72a697440065a10aad3807723fc542f220836f1ffb7a1dede34639eeaf3ea2c7
0.154972 ms  ripemd256    hex      64 bytes  72a697440065a10aad3807723fc542f220836f1ffb7a1dede34639eeaf3ea2c7
0.169039 ms  crc32b       raw       8 bytes  fa9ea346
0.169992 ms  ripemd128    hex      32 bytes  ff5304ebd9ed0497e81e52ba41b68dd8
0.169992 ms  crc32c       hex       8 bytes  305e1d07
0.172138 ms  crc32        raw       8 bytes  2237db6d
0.174999 ms  crc32b       hex       8 bytes  fa9ea346
0.178099 ms  crc32c       raw       8 bytes  305e1d07
0.185013 ms  crc32        hex       8 bytes  2237db6d
0.190973 ms  sha3-256     raw      64 bytes  a2950bfb8d6448bf4e6c93958ad3564d07e78348adb5dd142d768e8ecb40e176
0.202179 ms  sha3-512     raw     128 bytes  e70d54eb45446e0b1c3430d29f00d24f4c566359e52f309c1cd8e80917a4e05e14733562a55ebbb6bd58ed4bf3f383b712dd8761f748099c99191940ba20d654
0.202894 ms  sha3-512     hex     128 bytes  e70d54eb45446e0b1c3430d29f00d24f4c566359e52f309c1cd8e80917a4e05e14733562a55ebbb6bd58ed4bf3f383b712dd8761f748099c99191940ba20d654
0.204086 ms  sha512/256   raw      64 bytes  c650c29ff3b460a1ff6ac843b4a158bcf250b0fb4abe7d02f30b5b840161b0c5
0.205040 ms  sha512/224   raw      56 bytes  299e3e448baa5b346ad16d6a17f725f283111ea126c1b9d7e43bb0d1
0.209808 ms  sha512/256   hex      64 bytes  c650c29ff3b460a1ff6ac843b4a158bcf250b0fb4abe7d02f30b5b840161b0c5
0.210047 ms  sha384       hex      96 bytes  a5c140e006e20853893545f379e85d5c9b4be729bc6d80e4edef9ba810fec5b39a551f1ef89e379e87d1ffaea8d8d63a
0.210047 ms  sha512/224   hex      56 bytes  299e3e448baa5b346ad16d6a17f725f283111ea126c1b9d7e43bb0d1
0.210047 ms  ripemd160    raw      40 bytes  c0576d2c9ba19398a8186ede276871f4e2454d8c
0.210047 ms  ripemd320    raw      80 bytes  b5a687a2f453a2b05c802bb4edf0e5ce129e479a1a4749ac19e66410fa7fbf909227968ec13a829a
0.211000 ms  sha384       raw      96 bytes  a5c140e006e20853893545f379e85d5c9b4be729bc6d80e4edef9ba810fec5b39a551f1ef89e379e87d1ffaea8d8d63a
0.211000 ms  sha512       hex     128 bytes  29eaa887d3289365a5090890e30de7c94d72dd848770a28ad20243726d22cb8d18a4480458a23e5f01c0ef58e3518a50b999f7ecc64605240639c5ece6e5081c
0.220060 ms  ripemd320    hex      80 bytes  b5a687a2f453a2b05c802bb4edf0e5ce129e479a1a4749ac19e66410fa7fbf909227968ec13a829a
0.221014 ms  sha512       raw     128 bytes  29eaa887d3289365a5090890e30de7c94d72dd848770a28ad20243726d22cb8d18a4480458a23e5f01c0ef58e3518a50b999f7ecc64605240639c5ece6e5081c
0.226021 ms  haval128,3   raw      32 bytes  0ce5a8178df8a106dc50379a20701f7d
0.226021 ms  haval192,3   hex      48 bytes  518ea774a0719bdc4ca613932ccc7a143a83c46bbe020043
0.227928 ms  haval128,3   hex      32 bytes  0ce5a8178df8a106dc50379a20701f7d
0.227928 ms  haval224,3   hex      56 bytes  e9ae55766864c7042dbff240aa93d02fee8b3e25d94e2cdf0d3e324f
0.232935 ms  ripemd160    hex      40 bytes  c0576d2c9ba19398a8186ede276871f4e2454d8c
0.232935 ms  haval256,3   hex      64 bytes  875932fc272c8d024a913de10b648a3ba8f4cb2b6a889cf2d3a64ff01f529e7b
0.233889 ms  ripemd128    raw      32 bytes  ff5304ebd9ed0497e81e52ba41b68dd8
0.235081 ms  haval256,3   raw      64 bytes  875932fc272c8d024a913de10b648a3ba8f4cb2b6a889cf2d3a64ff01f529e7b
0.236034 ms  haval192,3   raw      48 bytes  518ea774a0719bdc4ca613932ccc7a143a83c46bbe020043
0.236034 ms  haval224,3   raw      56 bytes  e9ae55766864c7042dbff240aa93d02fee8b3e25d94e2cdf0d3e324f
0.241995 ms  haval160,3   raw      40 bytes  34fa12a3deb68b53e8b68ca66adb9cd467d62bc3
0.255108 ms  haval160,3   hex      40 bytes  34fa12a3deb68b53e8b68ca66adb9cd467d62bc3
0.319958 ms  haval128,4   hex      32 bytes  f7796afa2436eae5effb9ff87a019d31
0.319958 ms  haval256,4   hex      64 bytes  8f68c8b7145c344ffaca5e97e012bdbc9e9b26378f16684a8bb9028107b057f7
0.321865 ms  haval160,4   hex      40 bytes  2a894b0bbe68b1e32111d414a3afabd9534f7670
0.324011 ms  haval256,4   raw      64 bytes  8f68c8b7145c344ffaca5e97e012bdbc9e9b26378f16684a8bb9028107b057f7
0.331163 ms  haval128,4   raw      32 bytes  f7796afa2436eae5effb9ff87a019d31
0.335932 ms  haval160,4   raw      40 bytes  2a894b0bbe68b1e32111d414a3afabd9534f7670
0.338078 ms  haval224,4   hex      56 bytes  f50493717682839a08e3a98d8cfd52a1b24c5e7e65e1fb1d3023f714
0.339985 ms  haval224,4   raw      56 bytes  f50493717682839a08e3a98d8cfd52a1b24c5e7e65e1fb1d3023f714
0.340939 ms  haval192,4   hex      48 bytes  d0424a666194104413758c603837425b21d4078a97a696d4
0.344992 ms  haval192,4   raw      48 bytes  d0424a666194104413758c603837425b21d4078a97a696d4
0.390053 ms  haval128,5   raw      32 bytes  11edc2eed2208c1bb15ac61e5013046a
0.390053 ms  haval160,5   hex      40 bytes  b704ae3140f87bd2d7c39a4c9fae482add2e5bc6
0.392914 ms  haval224,5   hex      56 bytes  cca3025b301c3eac41bd94fa39d0d65559dd2713fab10e0c3de7ce05
0.392914 ms  haval256,5   raw      64 bytes  a24cf241d2a0e3e0b47796aa3c942563e83499501ff66fbbc7c99fc371d5763a
0.395060 ms  haval256,5   hex      64 bytes  a24cf241d2a0e3e0b47796aa3c942563e83499501ff66fbbc7c99fc371d5763a
0.399113 ms  haval160,5   raw      40 bytes  b704ae3140f87bd2d7c39a4c9fae482add2e5bc6
0.401020 ms  haval192,5   hex      48 bytes  07eef52087f4d4653908f80c6f3465581f617e667fd8fe07
0.401020 ms  haval224,5   raw      56 bytes  cca3025b301c3eac41bd94fa39d0d65559dd2713fab10e0c3de7ce05
0.402927 ms  haval128,5   hex      32 bytes  11edc2eed2208c1bb15ac61e5013046a
0.411987 ms  haval192,5   raw      48 bytes  07eef52087f4d4653908f80c6f3465581f617e667fd8fe07
0.437975 ms  whirlpool    raw     128 bytes  d1665f68eef025f2dfad10ed8cbde74cb5563581b14895ca6b85d03dd87248de83c6e6db55717f2439a92c9bfe20751e1a06619411872b064639066556258e7e
0.438929 ms  whirlpool    hex     128 bytes  d1665f68eef025f2dfad10ed8cbde74cb5563581b14895ca6b85d03dd87248de83c6e6db55717f2439a92c9bfe20751e1a06619411872b064639066556258e7e
0.466108 ms  sha224       raw      56 bytes  e857eaa9019a16a7f0b82808562a273e35919bd178de6e25ff12af4c
0.478029 ms  sha256       raw      64 bytes  cc858cd371d1ce4650495bc393b4082cfe6a2973c463c3c96392153e27dab497
0.482082 ms  sha224       hex      56 bytes  e857eaa9019a16a7f0b82808562a273e35919bd178de6e25ff12af4c
0.495911 ms  sha256       hex      64 bytes  cc858cd371d1ce4650495bc393b4082cfe6a2973c463c3c96392153e27dab497
0.910997 ms  gost-crypto  hex      64 bytes  8d9be2ec5ad5cbaeb328f4fb3c242daa53067865b84148f2b1bc3e1f798cc016
0.926018 ms  gost-crypto  raw      64 bytes  8d9be2ec5ad5cbaeb328f4fb3c242daa53067865b84148f2b1bc3e1f798cc016
0.936985 ms  gost         hex      64 bytes  dd8f51dde702f9f9e26c0be22f8eb1b8804fb74e856650c6fc962c7c6cb1e820
0.962019 ms  gost         raw      64 bytes  dd8f51dde702f9f9e26c0be22f8eb1b8804fb74e856650c6fc962c7c6cb1e820
2.125978 ms  snefru256    raw      64 bytes  1d419bf2826611be8a59a1ee385cd52277662ec42d33b07c299be3249d0bca6c
2.137899 ms  snefru       hex      64 bytes  1d419bf2826611be8a59a1ee385cd52277662ec42d33b07c299be3249d0bca6c
2.187014 ms  snefru       raw      64 bytes  1d419bf2826611be8a59a1ee385cd52277662ec42d33b07c299be3249d0bca6c
2.187967 ms  snefru256    hex      64 bytes  1d419bf2826611be8a59a1ee385cd52277662ec42d33b07c299be3249d0bca6c
6.970167 ms  md2          hex      32 bytes  2f10532b4617cede0ad733da8f86ce55
6.978989 ms  md2          raw      32 bytes  2f10532b4617cede0ad733da8f86ce55
```
