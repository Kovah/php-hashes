# PHP 8.1 Hashes

Exact PHP version: 8.1.11  
Number of available hash algorithms: 60

All PHP Versions: [8.2](https://github.com/Kovah/php-hashes/tree/8.2) | [8.1](https://github.com/Kovah/php-hashes/tree/8.1) | [8.0](https://github.com/Kovah/php-hashes/tree/8.0) | [7.4](https://github.com/Kovah/php-hashes/tree/7.4) | [7.3](https://github.com/Kovah/php-hashes/tree/7.3) | [7.2](https://github.com/Kovah/php-hashes/tree/7.2) | [7.1](https://github.com/Kovah/php-hashes/tree/7.1)

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro18,3 with an 
Apple M1 Pro CPU. Current Docker Engine version is 20.10.17.

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
0.037193 ms  adler32      hex       8 bytes  82634490
0.030041 ms  adler32      raw       8 bytes  82634490
0.170946 ms  crc32        hex       8 bytes  90d8bf4f
0.179052 ms  crc32        raw       8 bytes  90d8bf4f
0.179052 ms  crc32b       hex       8 bytes  8ded5fe7
0.171185 ms  crc32b       raw       8 bytes  8ded5fe7
0.171900 ms  crc32c       hex       8 bytes  69102582
0.169992 ms  crc32c       raw       8 bytes  69102582
0.084877 ms  fnv132       hex       8 bytes  b9bb6781
0.085115 ms  fnv132       raw       8 bytes  b9bb6781
0.088930 ms  fnv164       hex      16 bytes  1de3a63585a54ea1
0.087976 ms  fnv164       raw      16 bytes  1de3a63585a54ea1
0.089884 ms  fnv1a32      hex       8 bytes  e16ca011
0.085115 ms  fnv1a32      raw       8 bytes  e16ca011
0.085115 ms  fnv1a64      hex      16 bytes  b5840fa1c837f9b1
0.084877 ms  fnv1a64      raw      16 bytes  b5840fa1c837f9b1
0.959158 ms  gost         hex      64 bytes  6cbf0c32bc3ee5f7e76c5678e9ef265197980cb0dc35636e3b6da8780e919f2f
0.921011 ms  gost         raw      64 bytes  6cbf0c32bc3ee5f7e76c5678e9ef265197980cb0dc35636e3b6da8780e919f2f
0.922918 ms  gost-crypto  hex      64 bytes  b91304484284ad83303d660ed456c13d179f4bc9e139f0f935ae45acfd05d360
0.928879 ms  gost-crypto  raw      64 bytes  b91304484284ad83303d660ed456c13d179f4bc9e139f0f935ae45acfd05d360
0.241041 ms  haval128,3   hex      32 bytes  27241aae44a7528a6e1a9fedb9ee22d2
0.247002 ms  haval128,3   raw      32 bytes  27241aae44a7528a6e1a9fedb9ee22d2
0.328064 ms  haval128,4   hex      32 bytes  6dd3eff9d027f103dabfd1762077de77
0.325918 ms  haval128,4   raw      32 bytes  6dd3eff9d027f103dabfd1762077de77
0.406027 ms  haval128,5   hex      32 bytes  abb876830cdf1ca98c8a0f4867bffe11
0.403881 ms  haval128,5   raw      32 bytes  abb876830cdf1ca98c8a0f4867bffe11
0.246048 ms  haval160,3   hex      40 bytes  0ae596957bab6948dd1fd87c7f2536c22d779d73
0.242949 ms  haval160,3   raw      40 bytes  0ae596957bab6948dd1fd87c7f2536c22d779d73
0.338078 ms  haval160,4   hex      40 bytes  9ba6220cd4f24f5ac9cd237305d48ce1f7053bfc
0.334978 ms  haval160,4   raw      40 bytes  9ba6220cd4f24f5ac9cd237305d48ce1f7053bfc
0.401974 ms  haval160,5   hex      40 bytes  971a5ee091ba64e8b319baa8e5ef5582bee8eef5
0.408173 ms  haval160,5   raw      40 bytes  971a5ee091ba64e8b319baa8e5ef5582bee8eef5
0.257015 ms  haval192,3   hex      48 bytes  753ea4fc28684ed8b6c60903c89494e32f30cb6703ab794e
0.244141 ms  haval192,3   raw      48 bytes  753ea4fc28684ed8b6c60903c89494e32f30cb6703ab794e
0.332117 ms  haval192,4   hex      48 bytes  d34a130f29ecc3cbe38dd83acd6dde68fad01f8c00ef4799
0.339985 ms  haval192,4   raw      48 bytes  d34a130f29ecc3cbe38dd83acd6dde68fad01f8c00ef4799
0.401974 ms  haval192,5   hex      48 bytes  c338035b93b266ef861f453072d5ebbfc3d48389f293a28b
0.406981 ms  haval192,5   raw      48 bytes  c338035b93b266ef861f453072d5ebbfc3d48389f293a28b
0.236988 ms  haval224,3   hex      56 bytes  d93db8df961cc463244027c0422e2dcc69f84a5dce8260e54db5af45
0.244856 ms  haval224,3   raw      56 bytes  d93db8df961cc463244027c0422e2dcc69f84a5dce8260e54db5af45
0.334024 ms  haval224,4   hex      56 bytes  1c69a65775eaf1907957ef17f7fc74c1e2d64cd56f52d2e09135ae80
0.359058 ms  haval224,4   raw      56 bytes  1c69a65775eaf1907957ef17f7fc74c1e2d64cd56f52d2e09135ae80
0.402927 ms  haval224,5   hex      56 bytes  b1f99ba01b43da1fe6f567e57b53b26ee3da4d64bf8d2b5f7a5b9d8b
0.401020 ms  haval224,5   raw      56 bytes  b1f99ba01b43da1fe6f567e57b53b26ee3da4d64bf8d2b5f7a5b9d8b
0.244141 ms  haval256,3   hex      64 bytes  5bd9506ec0e6c211473e98d9b85a20e3beb1a56a8050fb11dd5e7c4000202987
0.243902 ms  haval256,3   raw      64 bytes  5bd9506ec0e6c211473e98d9b85a20e3beb1a56a8050fb11dd5e7c4000202987
0.329018 ms  haval256,4   hex      64 bytes  5445fa35ef5722028a3deaffab108f97b66d08d4dcaefac19cdef0b5b1a6e2ab
0.323057 ms  haval256,4   raw      64 bytes  5445fa35ef5722028a3deaffab108f97b66d08d4dcaefac19cdef0b5b1a6e2ab
0.405073 ms  haval256,5   hex      64 bytes  0e0c2a581c45b117765b760724a6b11e2a41ad97ef75259f3e9ae921dddd91fe
0.400066 ms  haval256,5   raw      64 bytes  0e0c2a581c45b117765b760724a6b11e2a41ad97ef75259f3e9ae921dddd91fe
0.106096 ms  joaat        hex       8 bytes  0b2d3a46
0.105858 ms  joaat        raw       8 bytes  0b2d3a46
6.155014 ms  md2          hex      32 bytes  e6d4a4dbd5ffa369cebd85c7c3ef7e1f
5.821943 ms  md2          raw      32 bytes  e6d4a4dbd5ffa369cebd85c7c3ef7e1f
0.074148 ms  md4          hex      32 bytes  4bd4a90f43e1304a1948e40f4385d1a2
0.082016 ms  md4          raw      32 bytes  4bd4a90f43e1304a1948e40f4385d1a2
0.128031 ms  md5          hex      32 bytes  63c7cc426878b493603143872e4f4a89
0.128984 ms  md5          raw      32 bytes  63c7cc426878b493603143872e4f4a89
0.034094 ms  murmur3a     hex       8 bytes  eba77b52
0.039101 ms  murmur3a     raw       8 bytes  eba77b52
0.016928 ms  murmur3c     hex      32 bytes  a2a13ef071776938e5d128b62a2edf31
0.015020 ms  murmur3c     raw      32 bytes  a2a13ef071776938e5d128b62a2edf31
0.011921 ms  murmur3f     hex      32 bytes  a5189c7d6ce56074fa5bd77f04da3e94
0.013113 ms  murmur3f     raw      32 bytes  a5189c7d6ce56074fa5bd77f04da3e94
0.169039 ms  ripemd128    hex      32 bytes  559c83b0fa8d587aec8bd7e38552003c
0.158072 ms  ripemd128    raw      32 bytes  559c83b0fa8d587aec8bd7e38552003c
0.221968 ms  ripemd160    hex      40 bytes  2ea2ff0d33395ab63a18e239fdf99b281243b900
0.220060 ms  ripemd160    raw      40 bytes  2ea2ff0d33395ab63a18e239fdf99b281243b900
0.154018 ms  ripemd256    hex      64 bytes  9b84f8767531ec646b573e8b589e5f089b1f58f0576aba2feab4693eb4cc4561
0.158072 ms  ripemd256    raw      64 bytes  9b84f8767531ec646b573e8b589e5f089b1f58f0576aba2feab4693eb4cc4561
0.213861 ms  ripemd320    hex      80 bytes  2b4a5e018999850f33fad5b410cf8dde98284a55f9e3215dd558baaa388b3634c94659f19d4c96d8
0.211000 ms  ripemd320    raw      80 bytes  2b4a5e018999850f33fad5b410cf8dde98284a55f9e3215dd558baaa388b3634c94659f19d4c96d8
0.085831 ms  sha1         hex      40 bytes  1ab40cc08e7ce699ed9a7e3806d50a935ee770d4
0.086069 ms  sha1         raw      40 bytes  1ab40cc08e7ce699ed9a7e3806d50a935ee770d4
0.375986 ms  sha224       hex      56 bytes  7c5cc3f5e02fb4ea264cb4869374fd37b247025aae2c8f27f35acbf0
0.380039 ms  sha224       raw      56 bytes  7c5cc3f5e02fb4ea264cb4869374fd37b247025aae2c8f27f35acbf0
0.375986 ms  sha256       hex      64 bytes  ed47b541dea854d48be12da83216ffcebad0cef5b4211fae305b3a26b3a0e141
0.375986 ms  sha256       raw      64 bytes  ed47b541dea854d48be12da83216ffcebad0cef5b4211fae305b3a26b3a0e141
0.110865 ms  sha3-224     hex      56 bytes  59a206edcd6728e6287ad99ecd18dfa2ce1ed5f557ed035f9f770d8d
0.102043 ms  sha3-224     raw      56 bytes  59a206edcd6728e6287ad99ecd18dfa2ce1ed5f557ed035f9f770d8d
0.114918 ms  sha3-256     hex      64 bytes  a03de93440f1d1a689c04d84c638a2476cc8ca0350267867cb45376439f21dd0
0.108004 ms  sha3-256     raw      64 bytes  a03de93440f1d1a689c04d84c638a2476cc8ca0350267867cb45376439f21dd0
0.144958 ms  sha3-384     hex      96 bytes  512300a41e3dd9325c1acdba2b25fb79ada274cb9bedaba0909d4ea6148a99a0d5be6f99841e9c39014280abcf88c115
0.145197 ms  sha3-384     raw      96 bytes  512300a41e3dd9325c1acdba2b25fb79ada274cb9bedaba0909d4ea6148a99a0d5be6f99841e9c39014280abcf88c115
0.205994 ms  sha3-512     hex     128 bytes  2e6923dc521848ef3005eafa364892f747c610c35a80d0febe0e9c4b895f1abc0b01f4797d640dccada4cfc921903fbad24d98108b77f43919c7f186274b4f17
0.214815 ms  sha3-512     raw     128 bytes  2e6923dc521848ef3005eafa364892f747c610c35a80d0febe0e9c4b895f1abc0b01f4797d640dccada4cfc921903fbad24d98108b77f43919c7f186274b4f17
0.235081 ms  sha384       hex      96 bytes  bf4aa31c0f642c3bb4fa1ed8126100bc2a2aa73ea45fe45fdf7bc3a881861cce2fb2aaee178bf24c0bc4610cf4105b7b
0.226974 ms  sha384       raw      96 bytes  bf4aa31c0f642c3bb4fa1ed8126100bc2a2aa73ea45fe45fdf7bc3a881861cce2fb2aaee178bf24c0bc4610cf4105b7b
0.227213 ms  sha512       hex     128 bytes  c7f3f68c877d4e3315ff556f54761293da70c546b25d21566f4852ec9f7e9edc4b3a8b5c8f8d280a5006332573111b0a55835b9f433c79507f73138553c93bd9
0.226021 ms  sha512       raw     128 bytes  c7f3f68c877d4e3315ff556f54761293da70c546b25d21566f4852ec9f7e9edc4b3a8b5c8f8d280a5006332573111b0a55835b9f433c79507f73138553c93bd9
0.226974 ms  sha512/224   hex      56 bytes  5e1199893fa03d2c9286bd72a8aaa343fa28a40ac7f106c7553cb732
0.225067 ms  sha512/224   raw      56 bytes  5e1199893fa03d2c9286bd72a8aaa343fa28a40ac7f106c7553cb732
0.230074 ms  sha512/256   hex      64 bytes  d0249d570dd96d99b33842acc0d1c0e9051eb6730b66cca15bca4902276aaae1
0.224829 ms  sha512/256   raw      64 bytes  d0249d570dd96d99b33842acc0d1c0e9051eb6730b66cca15bca4902276aaae1
2.112150 ms  snefru       hex      64 bytes  ef7c019bb27459cb5ee2f9177fd279d525c14a1b663aa38b8b1b7292f26d584b
2.124786 ms  snefru       raw      64 bytes  ef7c019bb27459cb5ee2f9177fd279d525c14a1b663aa38b8b1b7292f26d584b
2.113104 ms  snefru256    hex      64 bytes  ef7c019bb27459cb5ee2f9177fd279d525c14a1b663aa38b8b1b7292f26d584b
2.176046 ms  snefru256    raw      64 bytes  ef7c019bb27459cb5ee2f9177fd279d525c14a1b663aa38b8b1b7292f26d584b
0.109911 ms  tiger128,3   hex      32 bytes  d696fcadff3e517e2faea26627ef9bf5
0.095129 ms  tiger128,3   raw      32 bytes  d696fcadff3e517e2faea26627ef9bf5
0.127077 ms  tiger128,4   hex      32 bytes  e5325b4e7c28dbbac706bf7c6c1c2411
0.144958 ms  tiger128,4   raw      32 bytes  e5325b4e7c28dbbac706bf7c6c1c2411
0.094891 ms  tiger160,3   hex      40 bytes  d696fcadff3e517e2faea26627ef9bf5eaf02359
0.095129 ms  tiger160,3   raw      40 bytes  d696fcadff3e517e2faea26627ef9bf5eaf02359
0.126123 ms  tiger160,4   hex      40 bytes  e5325b4e7c28dbbac706bf7c6c1c24115ecd6be3
0.139952 ms  tiger160,4   raw      40 bytes  e5325b4e7c28dbbac706bf7c6c1c24115ecd6be3
0.095844 ms  tiger192,3   hex      48 bytes  d696fcadff3e517e2faea26627ef9bf5eaf023592578f5f6
0.124931 ms  tiger192,3   raw      48 bytes  d696fcadff3e517e2faea26627ef9bf5eaf023592578f5f6
0.125885 ms  tiger192,4   hex      48 bytes  e5325b4e7c28dbbac706bf7c6c1c24115ecd6be32a6c8273
0.126123 ms  tiger192,4   raw      48 bytes  e5325b4e7c28dbbac706bf7c6c1c24115ecd6be32a6c8273
0.263929 ms  whirlpool    hex     128 bytes  ef7e4923399f0f1fe57f7a363217bb81dcbb454907bb5dcba30000cd7c9064ff2ac34666f438ca30123a03789c1df4c911b74254226ed56b32bcb92e49659486
0.262022 ms  whirlpool    raw     128 bytes  ef7e4923399f0f1fe57f7a363217bb81dcbb454907bb5dcba30000cd7c9064ff2ac34666f438ca30123a03789c1df4c911b74254226ed56b32bcb92e49659486
0.010967 ms  xxh128       hex      32 bytes  d32c9ca177cf99025f695831c3f0f5f9
0.010967 ms  xxh128       raw      32 bytes  d32c9ca177cf99025f695831c3f0f5f9
0.011921 ms  xxh3         hex      16 bytes  5f695831c3f0f5f9
0.010014 ms  xxh3         raw      16 bytes  5f695831c3f0f5f9
0.010014 ms  xxh32        hex       8 bytes  1f5cebc0
0.009060 ms  xxh32        raw       8 bytes  1f5cebc0
0.005007 ms  xxh64        hex      16 bytes  9c206ac4bdb6e783
0.004053 ms  xxh64        raw      16 bytes  9c206ac4bdb6e783
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.004053 ms  xxh64        raw      16 bytes  9c206ac4bdb6e783
0.005007 ms  xxh64        hex      16 bytes  9c206ac4bdb6e783
0.009060 ms  xxh32        raw       8 bytes  1f5cebc0
0.010014 ms  xxh32        hex       8 bytes  1f5cebc0
0.010014 ms  xxh3         raw      16 bytes  5f695831c3f0f5f9
0.010967 ms  xxh128       hex      32 bytes  d32c9ca177cf99025f695831c3f0f5f9
0.010967 ms  xxh128       raw      32 bytes  d32c9ca177cf99025f695831c3f0f5f9
0.011921 ms  murmur3f     hex      32 bytes  a5189c7d6ce56074fa5bd77f04da3e94
0.011921 ms  xxh3         hex      16 bytes  5f695831c3f0f5f9
0.013113 ms  murmur3f     raw      32 bytes  a5189c7d6ce56074fa5bd77f04da3e94
0.015020 ms  murmur3c     raw      32 bytes  a2a13ef071776938e5d128b62a2edf31
0.016928 ms  murmur3c     hex      32 bytes  a2a13ef071776938e5d128b62a2edf31
0.030041 ms  adler32      raw       8 bytes  82634490
0.034094 ms  murmur3a     hex       8 bytes  eba77b52
0.037193 ms  adler32      hex       8 bytes  82634490
0.039101 ms  murmur3a     raw       8 bytes  eba77b52
0.074148 ms  md4          hex      32 bytes  4bd4a90f43e1304a1948e40f4385d1a2
0.082016 ms  md4          raw      32 bytes  4bd4a90f43e1304a1948e40f4385d1a2
0.084877 ms  fnv132       hex       8 bytes  b9bb6781
0.084877 ms  fnv1a64      raw      16 bytes  b5840fa1c837f9b1
0.085115 ms  fnv132       raw       8 bytes  b9bb6781
0.085115 ms  fnv1a32      raw       8 bytes  e16ca011
0.085115 ms  fnv1a64      hex      16 bytes  b5840fa1c837f9b1
0.085831 ms  sha1         hex      40 bytes  1ab40cc08e7ce699ed9a7e3806d50a935ee770d4
0.086069 ms  sha1         raw      40 bytes  1ab40cc08e7ce699ed9a7e3806d50a935ee770d4
0.087976 ms  fnv164       raw      16 bytes  1de3a63585a54ea1
0.088930 ms  fnv164       hex      16 bytes  1de3a63585a54ea1
0.089884 ms  fnv1a32      hex       8 bytes  e16ca011
0.094891 ms  tiger160,3   hex      40 bytes  d696fcadff3e517e2faea26627ef9bf5eaf02359
0.095129 ms  tiger128,3   raw      32 bytes  d696fcadff3e517e2faea26627ef9bf5
0.095129 ms  tiger160,3   raw      40 bytes  d696fcadff3e517e2faea26627ef9bf5eaf02359
0.095844 ms  tiger192,3   hex      48 bytes  d696fcadff3e517e2faea26627ef9bf5eaf023592578f5f6
0.102043 ms  sha3-224     raw      56 bytes  59a206edcd6728e6287ad99ecd18dfa2ce1ed5f557ed035f9f770d8d
0.105858 ms  joaat        raw       8 bytes  0b2d3a46
0.106096 ms  joaat        hex       8 bytes  0b2d3a46
0.108004 ms  sha3-256     raw      64 bytes  a03de93440f1d1a689c04d84c638a2476cc8ca0350267867cb45376439f21dd0
0.109911 ms  tiger128,3   hex      32 bytes  d696fcadff3e517e2faea26627ef9bf5
0.110865 ms  sha3-224     hex      56 bytes  59a206edcd6728e6287ad99ecd18dfa2ce1ed5f557ed035f9f770d8d
0.114918 ms  sha3-256     hex      64 bytes  a03de93440f1d1a689c04d84c638a2476cc8ca0350267867cb45376439f21dd0
0.124931 ms  tiger192,3   raw      48 bytes  d696fcadff3e517e2faea26627ef9bf5eaf023592578f5f6
0.125885 ms  tiger192,4   hex      48 bytes  e5325b4e7c28dbbac706bf7c6c1c24115ecd6be32a6c8273
0.126123 ms  tiger160,4   hex      40 bytes  e5325b4e7c28dbbac706bf7c6c1c24115ecd6be3
0.126123 ms  tiger192,4   raw      48 bytes  e5325b4e7c28dbbac706bf7c6c1c24115ecd6be32a6c8273
0.127077 ms  tiger128,4   hex      32 bytes  e5325b4e7c28dbbac706bf7c6c1c2411
0.128031 ms  md5          hex      32 bytes  63c7cc426878b493603143872e4f4a89
0.128984 ms  md5          raw      32 bytes  63c7cc426878b493603143872e4f4a89
0.139952 ms  tiger160,4   raw      40 bytes  e5325b4e7c28dbbac706bf7c6c1c24115ecd6be3
0.144958 ms  sha3-384     hex      96 bytes  512300a41e3dd9325c1acdba2b25fb79ada274cb9bedaba0909d4ea6148a99a0d5be6f99841e9c39014280abcf88c115
0.144958 ms  tiger128,4   raw      32 bytes  e5325b4e7c28dbbac706bf7c6c1c2411
0.145197 ms  sha3-384     raw      96 bytes  512300a41e3dd9325c1acdba2b25fb79ada274cb9bedaba0909d4ea6148a99a0d5be6f99841e9c39014280abcf88c115
0.154018 ms  ripemd256    hex      64 bytes  9b84f8767531ec646b573e8b589e5f089b1f58f0576aba2feab4693eb4cc4561
0.158072 ms  ripemd128    raw      32 bytes  559c83b0fa8d587aec8bd7e38552003c
0.158072 ms  ripemd256    raw      64 bytes  9b84f8767531ec646b573e8b589e5f089b1f58f0576aba2feab4693eb4cc4561
0.169039 ms  ripemd128    hex      32 bytes  559c83b0fa8d587aec8bd7e38552003c
0.169992 ms  crc32c       raw       8 bytes  69102582
0.170946 ms  crc32        hex       8 bytes  90d8bf4f
0.171185 ms  crc32b       raw       8 bytes  8ded5fe7
0.171900 ms  crc32c       hex       8 bytes  69102582
0.179052 ms  crc32        raw       8 bytes  90d8bf4f
0.179052 ms  crc32b       hex       8 bytes  8ded5fe7
0.205994 ms  sha3-512     hex     128 bytes  2e6923dc521848ef3005eafa364892f747c610c35a80d0febe0e9c4b895f1abc0b01f4797d640dccada4cfc921903fbad24d98108b77f43919c7f186274b4f17
0.211000 ms  ripemd320    raw      80 bytes  2b4a5e018999850f33fad5b410cf8dde98284a55f9e3215dd558baaa388b3634c94659f19d4c96d8
0.213861 ms  ripemd320    hex      80 bytes  2b4a5e018999850f33fad5b410cf8dde98284a55f9e3215dd558baaa388b3634c94659f19d4c96d8
0.214815 ms  sha3-512     raw     128 bytes  2e6923dc521848ef3005eafa364892f747c610c35a80d0febe0e9c4b895f1abc0b01f4797d640dccada4cfc921903fbad24d98108b77f43919c7f186274b4f17
0.220060 ms  ripemd160    raw      40 bytes  2ea2ff0d33395ab63a18e239fdf99b281243b900
0.221968 ms  ripemd160    hex      40 bytes  2ea2ff0d33395ab63a18e239fdf99b281243b900
0.224829 ms  sha512/256   raw      64 bytes  d0249d570dd96d99b33842acc0d1c0e9051eb6730b66cca15bca4902276aaae1
0.225067 ms  sha512/224   raw      56 bytes  5e1199893fa03d2c9286bd72a8aaa343fa28a40ac7f106c7553cb732
0.226021 ms  sha512       raw     128 bytes  c7f3f68c877d4e3315ff556f54761293da70c546b25d21566f4852ec9f7e9edc4b3a8b5c8f8d280a5006332573111b0a55835b9f433c79507f73138553c93bd9
0.226974 ms  sha384       raw      96 bytes  bf4aa31c0f642c3bb4fa1ed8126100bc2a2aa73ea45fe45fdf7bc3a881861cce2fb2aaee178bf24c0bc4610cf4105b7b
0.226974 ms  sha512/224   hex      56 bytes  5e1199893fa03d2c9286bd72a8aaa343fa28a40ac7f106c7553cb732
0.227213 ms  sha512       hex     128 bytes  c7f3f68c877d4e3315ff556f54761293da70c546b25d21566f4852ec9f7e9edc4b3a8b5c8f8d280a5006332573111b0a55835b9f433c79507f73138553c93bd9
0.230074 ms  sha512/256   hex      64 bytes  d0249d570dd96d99b33842acc0d1c0e9051eb6730b66cca15bca4902276aaae1
0.235081 ms  sha384       hex      96 bytes  bf4aa31c0f642c3bb4fa1ed8126100bc2a2aa73ea45fe45fdf7bc3a881861cce2fb2aaee178bf24c0bc4610cf4105b7b
0.236988 ms  haval224,3   hex      56 bytes  d93db8df961cc463244027c0422e2dcc69f84a5dce8260e54db5af45
0.241041 ms  haval128,3   hex      32 bytes  27241aae44a7528a6e1a9fedb9ee22d2
0.242949 ms  haval160,3   raw      40 bytes  0ae596957bab6948dd1fd87c7f2536c22d779d73
0.243902 ms  haval256,3   raw      64 bytes  5bd9506ec0e6c211473e98d9b85a20e3beb1a56a8050fb11dd5e7c4000202987
0.244141 ms  haval192,3   raw      48 bytes  753ea4fc28684ed8b6c60903c89494e32f30cb6703ab794e
0.244141 ms  haval256,3   hex      64 bytes  5bd9506ec0e6c211473e98d9b85a20e3beb1a56a8050fb11dd5e7c4000202987
0.244856 ms  haval224,3   raw      56 bytes  d93db8df961cc463244027c0422e2dcc69f84a5dce8260e54db5af45
0.246048 ms  haval160,3   hex      40 bytes  0ae596957bab6948dd1fd87c7f2536c22d779d73
0.247002 ms  haval128,3   raw      32 bytes  27241aae44a7528a6e1a9fedb9ee22d2
0.257015 ms  haval192,3   hex      48 bytes  753ea4fc28684ed8b6c60903c89494e32f30cb6703ab794e
0.262022 ms  whirlpool    raw     128 bytes  ef7e4923399f0f1fe57f7a363217bb81dcbb454907bb5dcba30000cd7c9064ff2ac34666f438ca30123a03789c1df4c911b74254226ed56b32bcb92e49659486
0.263929 ms  whirlpool    hex     128 bytes  ef7e4923399f0f1fe57f7a363217bb81dcbb454907bb5dcba30000cd7c9064ff2ac34666f438ca30123a03789c1df4c911b74254226ed56b32bcb92e49659486
0.323057 ms  haval256,4   raw      64 bytes  5445fa35ef5722028a3deaffab108f97b66d08d4dcaefac19cdef0b5b1a6e2ab
0.325918 ms  haval128,4   raw      32 bytes  6dd3eff9d027f103dabfd1762077de77
0.328064 ms  haval128,4   hex      32 bytes  6dd3eff9d027f103dabfd1762077de77
0.329018 ms  haval256,4   hex      64 bytes  5445fa35ef5722028a3deaffab108f97b66d08d4dcaefac19cdef0b5b1a6e2ab
0.332117 ms  haval192,4   hex      48 bytes  d34a130f29ecc3cbe38dd83acd6dde68fad01f8c00ef4799
0.334024 ms  haval224,4   hex      56 bytes  1c69a65775eaf1907957ef17f7fc74c1e2d64cd56f52d2e09135ae80
0.334978 ms  haval160,4   raw      40 bytes  9ba6220cd4f24f5ac9cd237305d48ce1f7053bfc
0.338078 ms  haval160,4   hex      40 bytes  9ba6220cd4f24f5ac9cd237305d48ce1f7053bfc
0.339985 ms  haval192,4   raw      48 bytes  d34a130f29ecc3cbe38dd83acd6dde68fad01f8c00ef4799
0.359058 ms  haval224,4   raw      56 bytes  1c69a65775eaf1907957ef17f7fc74c1e2d64cd56f52d2e09135ae80
0.375986 ms  sha224       hex      56 bytes  7c5cc3f5e02fb4ea264cb4869374fd37b247025aae2c8f27f35acbf0
0.375986 ms  sha256       hex      64 bytes  ed47b541dea854d48be12da83216ffcebad0cef5b4211fae305b3a26b3a0e141
0.375986 ms  sha256       raw      64 bytes  ed47b541dea854d48be12da83216ffcebad0cef5b4211fae305b3a26b3a0e141
0.380039 ms  sha224       raw      56 bytes  7c5cc3f5e02fb4ea264cb4869374fd37b247025aae2c8f27f35acbf0
0.400066 ms  haval256,5   raw      64 bytes  0e0c2a581c45b117765b760724a6b11e2a41ad97ef75259f3e9ae921dddd91fe
0.401020 ms  haval224,5   raw      56 bytes  b1f99ba01b43da1fe6f567e57b53b26ee3da4d64bf8d2b5f7a5b9d8b
0.401974 ms  haval160,5   hex      40 bytes  971a5ee091ba64e8b319baa8e5ef5582bee8eef5
0.401974 ms  haval192,5   hex      48 bytes  c338035b93b266ef861f453072d5ebbfc3d48389f293a28b
0.402927 ms  haval224,5   hex      56 bytes  b1f99ba01b43da1fe6f567e57b53b26ee3da4d64bf8d2b5f7a5b9d8b
0.403881 ms  haval128,5   raw      32 bytes  abb876830cdf1ca98c8a0f4867bffe11
0.405073 ms  haval256,5   hex      64 bytes  0e0c2a581c45b117765b760724a6b11e2a41ad97ef75259f3e9ae921dddd91fe
0.406027 ms  haval128,5   hex      32 bytes  abb876830cdf1ca98c8a0f4867bffe11
0.406981 ms  haval192,5   raw      48 bytes  c338035b93b266ef861f453072d5ebbfc3d48389f293a28b
0.408173 ms  haval160,5   raw      40 bytes  971a5ee091ba64e8b319baa8e5ef5582bee8eef5
0.921011 ms  gost         raw      64 bytes  6cbf0c32bc3ee5f7e76c5678e9ef265197980cb0dc35636e3b6da8780e919f2f
0.922918 ms  gost-crypto  hex      64 bytes  b91304484284ad83303d660ed456c13d179f4bc9e139f0f935ae45acfd05d360
0.928879 ms  gost-crypto  raw      64 bytes  b91304484284ad83303d660ed456c13d179f4bc9e139f0f935ae45acfd05d360
0.959158 ms  gost         hex      64 bytes  6cbf0c32bc3ee5f7e76c5678e9ef265197980cb0dc35636e3b6da8780e919f2f
2.112150 ms  snefru       hex      64 bytes  ef7c019bb27459cb5ee2f9177fd279d525c14a1b663aa38b8b1b7292f26d584b
2.113104 ms  snefru256    hex      64 bytes  ef7c019bb27459cb5ee2f9177fd279d525c14a1b663aa38b8b1b7292f26d584b
2.124786 ms  snefru       raw      64 bytes  ef7c019bb27459cb5ee2f9177fd279d525c14a1b663aa38b8b1b7292f26d584b
2.176046 ms  snefru256    raw      64 bytes  ef7c019bb27459cb5ee2f9177fd279d525c14a1b663aa38b8b1b7292f26d584b
5.821943 ms  md2          raw      32 bytes  e6d4a4dbd5ffa369cebd85c7c3ef7e1f
6.155014 ms  md2          hex      32 bytes  e6d4a4dbd5ffa369cebd85c7c3ef7e1f
```
