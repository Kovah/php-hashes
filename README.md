# PHP 8.3 Hashes

Exact PHP version: 8.3.2  
Number of available hash algorithms: 60

All PHP Versions: [8.3](https://github.com/Kovah/php-hashes/tree/8.3) | [8.2](https://github.com/Kovah/php-hashes/tree/8.2) | [8.1](https://github.com/Kovah/php-hashes/tree/8.1) | [8.0](https://github.com/Kovah/php-hashes/tree/8.0) | [7.4](https://github.com/Kovah/php-hashes/tree/7.4) | [7.3](https://github.com/Kovah/php-hashes/tree/7.3) | [7.2](https://github.com/Kovah/php-hashes/tree/7.2) | [7.1](https://github.com/Kovah/php-hashes/tree/7.1)

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro18,3 with an 
Apple M1 Pro CPU. Current Docker Engine version is 24.10.6.

All results are based on a string with a fixed length of 204800 characters, generated with the `random_bytes()` function.

```bash
# Regular output to the CLI
docker run -it --rm -v "$PWD/hashes.php":/usr/src/hashes.php -w /usr/src php:8.3-cli php hashes.php
```

Additionally, for better statistical insights, you may generate a dataset which contains the execution times for all
available algorithms, each with regular string and raw binary output and each for string lengths ranging from 512
characters up to 2^25 (~33 mil) characters.  
You can generate the csv file with the following command:

```bash
# Output to a csv file
docker run -it --rm -v "$PWD":/usr/src/app -w /usr/src/app php:8.3-cli php hashes-csv.php
```

Please notice that the resulting csv file uses the semicolon as a delimiter and all numeric values use the dot as a
decimal separator.


## Results

### Sorted by algorithm name

```
Time         Algorithm    Method     Length  Hash
0.049114 ms  adler32      hex       8 bytes  2f5923a5
0.044823 ms  adler32      raw       8 bytes  2f5923a5
0.180006 ms  crc32        hex       8 bytes  be3f61d3
0.179052 ms  crc32        raw       8 bytes  be3f61d3
0.189066 ms  crc32b       hex       8 bytes  20186c63
0.181913 ms  crc32b       raw       8 bytes  20186c63
0.180006 ms  crc32c       hex       8 bytes  e678aaa0
0.180006 ms  crc32c       raw       8 bytes  e678aaa0
0.088930 ms  fnv132       hex       8 bytes  13564678
0.087976 ms  fnv132       raw       8 bytes  13564678
0.096083 ms  fnv164       hex      16 bytes  1f952039143acbf8
0.113964 ms  fnv164       raw      16 bytes  1f952039143acbf8
0.087023 ms  fnv1a32      hex       8 bytes  37762652
0.090122 ms  fnv1a32      raw       8 bytes  37762652
0.092030 ms  fnv1a64      hex      16 bytes  7eaceccfcac321f2
0.083923 ms  fnv1a64      raw      16 bytes  7eaceccfcac321f2
0.964880 ms  gost         hex      64 bytes  88cfcd673a6c0f36036326846fd174b090ff5d13fd35e3f4c847ad255bcf26ca
0.966072 ms  gost         raw      64 bytes  88cfcd673a6c0f36036326846fd174b090ff5d13fd35e3f4c847ad255bcf26ca
0.962019 ms  gost-crypto  hex      64 bytes  cbea4625ed9ffbf52bc97e380993912933946e8dcb9c78d5e814a6b1c97378d0
0.953913 ms  gost-crypto  raw      64 bytes  cbea4625ed9ffbf52bc97e380993912933946e8dcb9c78d5e814a6b1c97378d0
0.237942 ms  haval128,3   hex      32 bytes  fca81342968d95e994937b488c2e67be
0.226974 ms  haval128,3   raw      32 bytes  fca81342968d95e994937b488c2e67be
0.367880 ms  haval128,4   hex      32 bytes  4b8dc3c54aac0a7bc64a68b8567aadcf
0.380993 ms  haval128,4   raw      32 bytes  4b8dc3c54aac0a7bc64a68b8567aadcf
0.441074 ms  haval128,5   hex      32 bytes  6a56cb8e829890f053fe9e676cb7f263
0.449896 ms  haval128,5   raw      32 bytes  6a56cb8e829890f053fe9e676cb7f263
0.226974 ms  haval160,3   hex      40 bytes  65333d7cb8f271954baecae90106e9d18c302644
0.227213 ms  haval160,3   raw      40 bytes  65333d7cb8f271954baecae90106e9d18c302644
0.463963 ms  haval160,4   hex      40 bytes  9b3934c6f88f489bbb9c9c2be79a99e040a2e762
0.358105 ms  haval160,4   raw      40 bytes  9b3934c6f88f489bbb9c9c2be79a99e040a2e762
0.431061 ms  haval160,5   hex      40 bytes  d0fd9f30fa1fa7ade991d6591324331f2527b8ad
0.419140 ms  haval160,5   raw      40 bytes  d0fd9f30fa1fa7ade991d6591324331f2527b8ad
0.231981 ms  haval192,3   hex      48 bytes  6f614e0cd3c068310d66f4593c792d8dbe17584f5cc5f8fb
0.240803 ms  haval192,3   raw      48 bytes  6f614e0cd3c068310d66f4593c792d8dbe17584f5cc5f8fb
0.355005 ms  haval192,4   hex      48 bytes  b90e200c8ebaf06f9f9f7825fc5640bd67cbd0f6afd2a63f
0.343084 ms  haval192,4   raw      48 bytes  b90e200c8ebaf06f9f9f7825fc5640bd67cbd0f6afd2a63f
0.424862 ms  haval192,5   hex      48 bytes  6f3eec9980ca33b42d1de5ff822cb7b943383557149850eb
0.417948 ms  haval192,5   raw      48 bytes  6f3eec9980ca33b42d1de5ff822cb7b943383557149850eb
0.235796 ms  haval224,3   hex      56 bytes  c176c89bcf103f4902ea1e9de591299c371190abbd0468cbcabad9ef
0.239134 ms  haval224,3   raw      56 bytes  c176c89bcf103f4902ea1e9de591299c371190abbd0468cbcabad9ef
0.339985 ms  haval224,4   hex      56 bytes  27ffad17ed7da682b924d7d219f9550e5267b661a9664a89b6827ec3
0.347853 ms  haval224,4   raw      56 bytes  27ffad17ed7da682b924d7d219f9550e5267b661a9664a89b6827ec3
0.420094 ms  haval224,5   hex      56 bytes  509febca79489a2866c122cc0c3ffba764b2bcc418cddb539326617b
0.431061 ms  haval224,5   raw      56 bytes  509febca79489a2866c122cc0c3ffba764b2bcc418cddb539326617b
0.261068 ms  haval256,3   hex      64 bytes  0b2855284e2a54964b387f9ceaf55ae17fe7fe4ec9372f31177931b24a31a035
0.267982 ms  haval256,3   raw      64 bytes  0b2855284e2a54964b387f9ceaf55ae17fe7fe4ec9372f31177931b24a31a035
0.344038 ms  haval256,4   hex      64 bytes  4f1044336ee03767e7c28ac8d7d6dc29b58a724d622548911ccb459e2a725bda
0.345945 ms  haval256,4   raw      64 bytes  4f1044336ee03767e7c28ac8d7d6dc29b58a724d622548911ccb459e2a725bda
0.416040 ms  haval256,5   hex      64 bytes  2d14bd4ba923ea92b93913eb3154ec7c1fc94fcb36ce1df9c17fbae7b96e8d3a
0.413895 ms  haval256,5   raw      64 bytes  2d14bd4ba923ea92b93913eb3154ec7c1fc94fcb36ce1df9c17fbae7b96e8d3a
0.106096 ms  joaat        hex       8 bytes  c627927d
0.105858 ms  joaat        raw       8 bytes  c627927d
7.041931 ms  md2          hex      32 bytes  96b61a974069461babdc151388c53b29
7.266998 ms  md2          raw      32 bytes  96b61a974069461babdc151388c53b29
0.093937 ms  md4          hex      32 bytes  5d362ac2da67379f6290aa03a546a190
0.074863 ms  md4          raw      32 bytes  5d362ac2da67379f6290aa03a546a190
0.128031 ms  md5          hex      32 bytes  4a6e9e4c2d9db87a8090babebc9eac43
0.128031 ms  md5          raw      32 bytes  4a6e9e4c2d9db87a8090babebc9eac43
0.030041 ms  murmur3a     hex       8 bytes  3f8a0b6c
0.030041 ms  murmur3a     raw       8 bytes  3f8a0b6c
0.015020 ms  murmur3c     hex      32 bytes  bf2728c71beed939f3235f4bc5bca852
0.015974 ms  murmur3c     raw      32 bytes  bf2728c71beed939f3235f4bc5bca852
0.011921 ms  murmur3f     hex      32 bytes  a2fad94adcb0c4ae4f1564b7f49b80bd
0.013113 ms  murmur3f     raw      32 bytes  a2fad94adcb0c4ae4f1564b7f49b80bd
0.156879 ms  ripemd128    hex      32 bytes  ff11ffe4e102a6f9425fb49ba56ee367
0.152111 ms  ripemd128    raw      32 bytes  ff11ffe4e102a6f9425fb49ba56ee367
0.221968 ms  ripemd160    hex      40 bytes  54992b618a07b09d71a403f4c0157ea047195159
0.219107 ms  ripemd160    raw      40 bytes  54992b618a07b09d71a403f4c0157ea047195159
0.159979 ms  ripemd256    hex      64 bytes  373c2bc7156ea6aa247d5d158f1c5a7f02d63ceebce6449ed04e14524d8619bf
0.159025 ms  ripemd256    raw      64 bytes  373c2bc7156ea6aa247d5d158f1c5a7f02d63ceebce6449ed04e14524d8619bf
0.218868 ms  ripemd320    hex      80 bytes  7124a05c3b8f1824cefbd53d58a72cd48649c7e37b2da5035f684efa1aad9e8b943d2493fe8a13ff
0.247955 ms  ripemd320    raw      80 bytes  7124a05c3b8f1824cefbd53d58a72cd48649c7e37b2da5035f684efa1aad9e8b943d2493fe8a13ff
0.087023 ms  sha1         hex      40 bytes  e5f4eccb7538226311da9efb39980ebc0bebf7e2
0.086069 ms  sha1         raw      40 bytes  e5f4eccb7538226311da9efb39980ebc0bebf7e2
0.467062 ms  sha224       hex      56 bytes  bedc10158c106666b3fb0a384c48790030da547aa8962c486f05b648
0.487804 ms  sha224       raw      56 bytes  bedc10158c106666b3fb0a384c48790030da547aa8962c486f05b648
0.460148 ms  sha256       hex      64 bytes  eefb9d2742c60bd6f6c938cc02349a7c20787bfd4f76cd3ff96cb8116248807f
0.470877 ms  sha256       raw      64 bytes  eefb9d2742c60bd6f6c938cc02349a7c20787bfd4f76cd3ff96cb8116248807f
0.129938 ms  sha3-224     hex      56 bytes  4d17d403b97b2a2a382b270600faa53bbf0a031f96f9a42e312f5e2b
0.117064 ms  sha3-224     raw      56 bytes  4d17d403b97b2a2a382b270600faa53bbf0a031f96f9a42e312f5e2b
0.114918 ms  sha3-256     hex      64 bytes  01c8c74bd00238206cd0ba3ab42bd059886fc2d244a440990ba42f106b252943
0.115156 ms  sha3-256     raw      64 bytes  01c8c74bd00238206cd0ba3ab42bd059886fc2d244a440990ba42f106b252943
0.151873 ms  sha3-384     hex      96 bytes  b8da7aaf610d06c65f55534b9203164fa4847e41615ab5a333d66f3c95c22d4ade1960738f5266b013cc16b2e15a5175
0.201941 ms  sha3-384     raw      96 bytes  b8da7aaf610d06c65f55534b9203164fa4847e41615ab5a333d66f3c95c22d4ade1960738f5266b013cc16b2e15a5175
0.217915 ms  sha3-512     hex     128 bytes  1fa1844575c0ae9b3513940710964d80e5b584d8d234792e7fc63b51e1cbecbe51d81ae7589916b5da5148f5bcc96759eaa923400f58510ffdcb75859c256d0e
0.209093 ms  sha3-512     raw     128 bytes  1fa1844575c0ae9b3513940710964d80e5b584d8d234792e7fc63b51e1cbecbe51d81ae7589916b5da5148f5bcc96759eaa923400f58510ffdcb75859c256d0e
0.207186 ms  sha384       hex      96 bytes  362ef45234f5a3bf3c113c9680f6713bb0a743572ffbff6d22fdcf694b04ede11758a10300526c083785180859a1c960
0.204802 ms  sha384       raw      96 bytes  362ef45234f5a3bf3c113c9680f6713bb0a743572ffbff6d22fdcf694b04ede11758a10300526c083785180859a1c960
0.238895 ms  sha512       hex     128 bytes  b43b39a11162fd12d6889ff3515a7895c5b4ddcb78061f7d101fc6b29df8b5d9ffe69775ff6f82924e6c73b48d859f43a087c925627d31153d68f185f37b601e
0.238895 ms  sha512       raw     128 bytes  b43b39a11162fd12d6889ff3515a7895c5b4ddcb78061f7d101fc6b29df8b5d9ffe69775ff6f82924e6c73b48d859f43a087c925627d31153d68f185f37b601e
0.241041 ms  sha512/224   hex      56 bytes  e91caf3f57690cf1bf7bc831e6add547c63403e7e9e3d820185b5358
0.225067 ms  sha512/224   raw      56 bytes  e91caf3f57690cf1bf7bc831e6add547c63403e7e9e3d820185b5358
0.202179 ms  sha512/256   hex      64 bytes  3420288f9b519786e1bffe70a874d8a0417acaed9875d6bad944461ac328fcd7
0.205040 ms  sha512/256   raw      64 bytes  3420288f9b519786e1bffe70a874d8a0417acaed9875d6bad944461ac328fcd7
2.110958 ms  snefru       hex      64 bytes  b1012612a87ad44be1d845ae2a8a40fdf3b816d336c200027871e8738ef80c97
2.120972 ms  snefru       raw      64 bytes  b1012612a87ad44be1d845ae2a8a40fdf3b816d336c200027871e8738ef80c97
2.112150 ms  snefru256    hex      64 bytes  b1012612a87ad44be1d845ae2a8a40fdf3b816d336c200027871e8738ef80c97
2.187014 ms  snefru256    raw      64 bytes  b1012612a87ad44be1d845ae2a8a40fdf3b816d336c200027871e8738ef80c97
0.102997 ms  tiger128,3   hex      32 bytes  1850f302c74217fd8599a102a258776d
0.107050 ms  tiger128,3   raw      32 bytes  1850f302c74217fd8599a102a258776d
0.132084 ms  tiger128,4   hex      32 bytes  efafea1fa51065394347f6d1a8ad0a7c
0.134945 ms  tiger128,4   raw      32 bytes  efafea1fa51065394347f6d1a8ad0a7c
0.106096 ms  tiger160,3   hex      40 bytes  1850f302c74217fd8599a102a258776d4403c739
0.100851 ms  tiger160,3   raw      40 bytes  1850f302c74217fd8599a102a258776d4403c739
0.144958 ms  tiger160,4   hex      40 bytes  efafea1fa51065394347f6d1a8ad0a7c5442ea06
0.138044 ms  tiger160,4   raw      40 bytes  efafea1fa51065394347f6d1a8ad0a7c5442ea06
0.110149 ms  tiger192,3   hex      48 bytes  1850f302c74217fd8599a102a258776d4403c7391416442f
0.095844 ms  tiger192,3   raw      48 bytes  1850f302c74217fd8599a102a258776d4403c7391416442f
0.135183 ms  tiger192,4   hex      48 bytes  efafea1fa51065394347f6d1a8ad0a7c5442ea069cec2896
0.201941 ms  tiger192,4   raw      48 bytes  efafea1fa51065394347f6d1a8ad0a7c5442ea069cec2896
0.259161 ms  whirlpool    hex     128 bytes  2e814f238724c26beb9646ed592bfe963c1eb7231136532480933de110cc9833b87da0f63bed03ad6f3b4a59a91e40f5f5e58011971510f1a87e7c1e733fa321
0.259876 ms  whirlpool    raw     128 bytes  2e814f238724c26beb9646ed592bfe963c1eb7231136532480933de110cc9833b87da0f63bed03ad6f3b4a59a91e40f5f5e58011971510f1a87e7c1e733fa321
0.009060 ms  xxh128       hex      32 bytes  628a4a768979071d32d1fcada60fa74d
0.009060 ms  xxh128       raw      32 bytes  628a4a768979071d32d1fcada60fa74d
0.020027 ms  xxh3         hex      16 bytes  32d1fcada60fa74d
0.010014 ms  xxh3         raw      16 bytes  32d1fcada60fa74d
0.010014 ms  xxh32        hex       8 bytes  3733e101
0.008821 ms  xxh32        raw       8 bytes  3733e101
0.005007 ms  xxh64        hex      16 bytes  1bae20c479c95c5e
0.005007 ms  xxh64        raw      16 bytes  1bae20c479c95c5e
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.005007 ms  xxh64        hex      16 bytes  1bae20c479c95c5e
0.005007 ms  xxh64        raw      16 bytes  1bae20c479c95c5e
0.008821 ms  xxh32        raw       8 bytes  3733e101
0.009060 ms  xxh128       hex      32 bytes  628a4a768979071d32d1fcada60fa74d
0.009060 ms  xxh128       raw      32 bytes  628a4a768979071d32d1fcada60fa74d
0.010014 ms  xxh32        hex       8 bytes  3733e101
0.010014 ms  xxh3         raw      16 bytes  32d1fcada60fa74d
0.011921 ms  murmur3f     hex      32 bytes  a2fad94adcb0c4ae4f1564b7f49b80bd
0.013113 ms  murmur3f     raw      32 bytes  a2fad94adcb0c4ae4f1564b7f49b80bd
0.015020 ms  murmur3c     hex      32 bytes  bf2728c71beed939f3235f4bc5bca852
0.015974 ms  murmur3c     raw      32 bytes  bf2728c71beed939f3235f4bc5bca852
0.020027 ms  xxh3         hex      16 bytes  32d1fcada60fa74d
0.030041 ms  murmur3a     hex       8 bytes  3f8a0b6c
0.030041 ms  murmur3a     raw       8 bytes  3f8a0b6c
0.044823 ms  adler32      raw       8 bytes  2f5923a5
0.049114 ms  adler32      hex       8 bytes  2f5923a5
0.074863 ms  md4          raw      32 bytes  5d362ac2da67379f6290aa03a546a190
0.083923 ms  fnv1a64      raw      16 bytes  7eaceccfcac321f2
0.086069 ms  sha1         raw      40 bytes  e5f4eccb7538226311da9efb39980ebc0bebf7e2
0.087023 ms  sha1         hex      40 bytes  e5f4eccb7538226311da9efb39980ebc0bebf7e2
0.087023 ms  fnv1a32      hex       8 bytes  37762652
0.087976 ms  fnv132       raw       8 bytes  13564678
0.088930 ms  fnv132       hex       8 bytes  13564678
0.090122 ms  fnv1a32      raw       8 bytes  37762652
0.092030 ms  fnv1a64      hex      16 bytes  7eaceccfcac321f2
0.093937 ms  md4          hex      32 bytes  5d362ac2da67379f6290aa03a546a190
0.095844 ms  tiger192,3   raw      48 bytes  1850f302c74217fd8599a102a258776d4403c7391416442f
0.096083 ms  fnv164       hex      16 bytes  1f952039143acbf8
0.100851 ms  tiger160,3   raw      40 bytes  1850f302c74217fd8599a102a258776d4403c739
0.102997 ms  tiger128,3   hex      32 bytes  1850f302c74217fd8599a102a258776d
0.105858 ms  joaat        raw       8 bytes  c627927d
0.106096 ms  tiger160,3   hex      40 bytes  1850f302c74217fd8599a102a258776d4403c739
0.106096 ms  joaat        hex       8 bytes  c627927d
0.107050 ms  tiger128,3   raw      32 bytes  1850f302c74217fd8599a102a258776d
0.110149 ms  tiger192,3   hex      48 bytes  1850f302c74217fd8599a102a258776d4403c7391416442f
0.113964 ms  fnv164       raw      16 bytes  1f952039143acbf8
0.114918 ms  sha3-256     hex      64 bytes  01c8c74bd00238206cd0ba3ab42bd059886fc2d244a440990ba42f106b252943
0.115156 ms  sha3-256     raw      64 bytes  01c8c74bd00238206cd0ba3ab42bd059886fc2d244a440990ba42f106b252943
0.117064 ms  sha3-224     raw      56 bytes  4d17d403b97b2a2a382b270600faa53bbf0a031f96f9a42e312f5e2b
0.128031 ms  md5          hex      32 bytes  4a6e9e4c2d9db87a8090babebc9eac43
0.128031 ms  md5          raw      32 bytes  4a6e9e4c2d9db87a8090babebc9eac43
0.129938 ms  sha3-224     hex      56 bytes  4d17d403b97b2a2a382b270600faa53bbf0a031f96f9a42e312f5e2b
0.132084 ms  tiger128,4   hex      32 bytes  efafea1fa51065394347f6d1a8ad0a7c
0.134945 ms  tiger128,4   raw      32 bytes  efafea1fa51065394347f6d1a8ad0a7c
0.135183 ms  tiger192,4   hex      48 bytes  efafea1fa51065394347f6d1a8ad0a7c5442ea069cec2896
0.138044 ms  tiger160,4   raw      40 bytes  efafea1fa51065394347f6d1a8ad0a7c5442ea06
0.144958 ms  tiger160,4   hex      40 bytes  efafea1fa51065394347f6d1a8ad0a7c5442ea06
0.151873 ms  sha3-384     hex      96 bytes  b8da7aaf610d06c65f55534b9203164fa4847e41615ab5a333d66f3c95c22d4ade1960738f5266b013cc16b2e15a5175
0.152111 ms  ripemd128    raw      32 bytes  ff11ffe4e102a6f9425fb49ba56ee367
0.156879 ms  ripemd128    hex      32 bytes  ff11ffe4e102a6f9425fb49ba56ee367
0.159025 ms  ripemd256    raw      64 bytes  373c2bc7156ea6aa247d5d158f1c5a7f02d63ceebce6449ed04e14524d8619bf
0.159979 ms  ripemd256    hex      64 bytes  373c2bc7156ea6aa247d5d158f1c5a7f02d63ceebce6449ed04e14524d8619bf
0.179052 ms  crc32        raw       8 bytes  be3f61d3
0.180006 ms  crc32        hex       8 bytes  be3f61d3
0.180006 ms  crc32c       hex       8 bytes  e678aaa0
0.180006 ms  crc32c       raw       8 bytes  e678aaa0
0.181913 ms  crc32b       raw       8 bytes  20186c63
0.189066 ms  crc32b       hex       8 bytes  20186c63
0.201941 ms  sha3-384     raw      96 bytes  b8da7aaf610d06c65f55534b9203164fa4847e41615ab5a333d66f3c95c22d4ade1960738f5266b013cc16b2e15a5175
0.201941 ms  tiger192,4   raw      48 bytes  efafea1fa51065394347f6d1a8ad0a7c5442ea069cec2896
0.202179 ms  sha512/256   hex      64 bytes  3420288f9b519786e1bffe70a874d8a0417acaed9875d6bad944461ac328fcd7
0.204802 ms  sha384       raw      96 bytes  362ef45234f5a3bf3c113c9680f6713bb0a743572ffbff6d22fdcf694b04ede11758a10300526c083785180859a1c960
0.205040 ms  sha512/256   raw      64 bytes  3420288f9b519786e1bffe70a874d8a0417acaed9875d6bad944461ac328fcd7
0.207186 ms  sha384       hex      96 bytes  362ef45234f5a3bf3c113c9680f6713bb0a743572ffbff6d22fdcf694b04ede11758a10300526c083785180859a1c960
0.209093 ms  sha3-512     raw     128 bytes  1fa1844575c0ae9b3513940710964d80e5b584d8d234792e7fc63b51e1cbecbe51d81ae7589916b5da5148f5bcc96759eaa923400f58510ffdcb75859c256d0e
0.217915 ms  sha3-512     hex     128 bytes  1fa1844575c0ae9b3513940710964d80e5b584d8d234792e7fc63b51e1cbecbe51d81ae7589916b5da5148f5bcc96759eaa923400f58510ffdcb75859c256d0e
0.218868 ms  ripemd320    hex      80 bytes  7124a05c3b8f1824cefbd53d58a72cd48649c7e37b2da5035f684efa1aad9e8b943d2493fe8a13ff
0.219107 ms  ripemd160    raw      40 bytes  54992b618a07b09d71a403f4c0157ea047195159
0.221968 ms  ripemd160    hex      40 bytes  54992b618a07b09d71a403f4c0157ea047195159
0.225067 ms  sha512/224   raw      56 bytes  e91caf3f57690cf1bf7bc831e6add547c63403e7e9e3d820185b5358
0.226974 ms  haval128,3   raw      32 bytes  fca81342968d95e994937b488c2e67be
0.226974 ms  haval160,3   hex      40 bytes  65333d7cb8f271954baecae90106e9d18c302644
0.227213 ms  haval160,3   raw      40 bytes  65333d7cb8f271954baecae90106e9d18c302644
0.231981 ms  haval192,3   hex      48 bytes  6f614e0cd3c068310d66f4593c792d8dbe17584f5cc5f8fb
0.235796 ms  haval224,3   hex      56 bytes  c176c89bcf103f4902ea1e9de591299c371190abbd0468cbcabad9ef
0.237942 ms  haval128,3   hex      32 bytes  fca81342968d95e994937b488c2e67be
0.238895 ms  sha512       hex     128 bytes  b43b39a11162fd12d6889ff3515a7895c5b4ddcb78061f7d101fc6b29df8b5d9ffe69775ff6f82924e6c73b48d859f43a087c925627d31153d68f185f37b601e
0.238895 ms  sha512       raw     128 bytes  b43b39a11162fd12d6889ff3515a7895c5b4ddcb78061f7d101fc6b29df8b5d9ffe69775ff6f82924e6c73b48d859f43a087c925627d31153d68f185f37b601e
0.239134 ms  haval224,3   raw      56 bytes  c176c89bcf103f4902ea1e9de591299c371190abbd0468cbcabad9ef
0.240803 ms  haval192,3   raw      48 bytes  6f614e0cd3c068310d66f4593c792d8dbe17584f5cc5f8fb
0.241041 ms  sha512/224   hex      56 bytes  e91caf3f57690cf1bf7bc831e6add547c63403e7e9e3d820185b5358
0.247955 ms  ripemd320    raw      80 bytes  7124a05c3b8f1824cefbd53d58a72cd48649c7e37b2da5035f684efa1aad9e8b943d2493fe8a13ff
0.259161 ms  whirlpool    hex     128 bytes  2e814f238724c26beb9646ed592bfe963c1eb7231136532480933de110cc9833b87da0f63bed03ad6f3b4a59a91e40f5f5e58011971510f1a87e7c1e733fa321
0.259876 ms  whirlpool    raw     128 bytes  2e814f238724c26beb9646ed592bfe963c1eb7231136532480933de110cc9833b87da0f63bed03ad6f3b4a59a91e40f5f5e58011971510f1a87e7c1e733fa321
0.261068 ms  haval256,3   hex      64 bytes  0b2855284e2a54964b387f9ceaf55ae17fe7fe4ec9372f31177931b24a31a035
0.267982 ms  haval256,3   raw      64 bytes  0b2855284e2a54964b387f9ceaf55ae17fe7fe4ec9372f31177931b24a31a035
0.339985 ms  haval224,4   hex      56 bytes  27ffad17ed7da682b924d7d219f9550e5267b661a9664a89b6827ec3
0.343084 ms  haval192,4   raw      48 bytes  b90e200c8ebaf06f9f9f7825fc5640bd67cbd0f6afd2a63f
0.344038 ms  haval256,4   hex      64 bytes  4f1044336ee03767e7c28ac8d7d6dc29b58a724d622548911ccb459e2a725bda
0.345945 ms  haval256,4   raw      64 bytes  4f1044336ee03767e7c28ac8d7d6dc29b58a724d622548911ccb459e2a725bda
0.347853 ms  haval224,4   raw      56 bytes  27ffad17ed7da682b924d7d219f9550e5267b661a9664a89b6827ec3
0.355005 ms  haval192,4   hex      48 bytes  b90e200c8ebaf06f9f9f7825fc5640bd67cbd0f6afd2a63f
0.358105 ms  haval160,4   raw      40 bytes  9b3934c6f88f489bbb9c9c2be79a99e040a2e762
0.367880 ms  haval128,4   hex      32 bytes  4b8dc3c54aac0a7bc64a68b8567aadcf
0.380993 ms  haval128,4   raw      32 bytes  4b8dc3c54aac0a7bc64a68b8567aadcf
0.413895 ms  haval256,5   raw      64 bytes  2d14bd4ba923ea92b93913eb3154ec7c1fc94fcb36ce1df9c17fbae7b96e8d3a
0.416040 ms  haval256,5   hex      64 bytes  2d14bd4ba923ea92b93913eb3154ec7c1fc94fcb36ce1df9c17fbae7b96e8d3a
0.417948 ms  haval192,5   raw      48 bytes  6f3eec9980ca33b42d1de5ff822cb7b943383557149850eb
0.419140 ms  haval160,5   raw      40 bytes  d0fd9f30fa1fa7ade991d6591324331f2527b8ad
0.420094 ms  haval224,5   hex      56 bytes  509febca79489a2866c122cc0c3ffba764b2bcc418cddb539326617b
0.424862 ms  haval192,5   hex      48 bytes  6f3eec9980ca33b42d1de5ff822cb7b943383557149850eb
0.431061 ms  haval160,5   hex      40 bytes  d0fd9f30fa1fa7ade991d6591324331f2527b8ad
0.431061 ms  haval224,5   raw      56 bytes  509febca79489a2866c122cc0c3ffba764b2bcc418cddb539326617b
0.441074 ms  haval128,5   hex      32 bytes  6a56cb8e829890f053fe9e676cb7f263
0.449896 ms  haval128,5   raw      32 bytes  6a56cb8e829890f053fe9e676cb7f263
0.460148 ms  sha256       hex      64 bytes  eefb9d2742c60bd6f6c938cc02349a7c20787bfd4f76cd3ff96cb8116248807f
0.463963 ms  haval160,4   hex      40 bytes  9b3934c6f88f489bbb9c9c2be79a99e040a2e762
0.467062 ms  sha224       hex      56 bytes  bedc10158c106666b3fb0a384c48790030da547aa8962c486f05b648
0.470877 ms  sha256       raw      64 bytes  eefb9d2742c60bd6f6c938cc02349a7c20787bfd4f76cd3ff96cb8116248807f
0.487804 ms  sha224       raw      56 bytes  bedc10158c106666b3fb0a384c48790030da547aa8962c486f05b648
0.953913 ms  gost-crypto  raw      64 bytes  cbea4625ed9ffbf52bc97e380993912933946e8dcb9c78d5e814a6b1c97378d0
0.962019 ms  gost-crypto  hex      64 bytes  cbea4625ed9ffbf52bc97e380993912933946e8dcb9c78d5e814a6b1c97378d0
0.964880 ms  gost         hex      64 bytes  88cfcd673a6c0f36036326846fd174b090ff5d13fd35e3f4c847ad255bcf26ca
0.966072 ms  gost         raw      64 bytes  88cfcd673a6c0f36036326846fd174b090ff5d13fd35e3f4c847ad255bcf26ca
2.110958 ms  snefru       hex      64 bytes  b1012612a87ad44be1d845ae2a8a40fdf3b816d336c200027871e8738ef80c97
2.112150 ms  snefru256    hex      64 bytes  b1012612a87ad44be1d845ae2a8a40fdf3b816d336c200027871e8738ef80c97
2.120972 ms  snefru       raw      64 bytes  b1012612a87ad44be1d845ae2a8a40fdf3b816d336c200027871e8738ef80c97
2.187014 ms  snefru256    raw      64 bytes  b1012612a87ad44be1d845ae2a8a40fdf3b816d336c200027871e8738ef80c97
7.041931 ms  md2          hex      32 bytes  96b61a974069461babdc151388c53b29
7.266998 ms  md2          raw      32 bytes  96b61a974069461babdc151388c53b29
```
