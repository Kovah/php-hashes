# PHP 8.0 Hashes

Exact PHP version: 8.0.0  
Number of available hash algorithms: 53

All PHP Versions: [8.2](https://github.com/Kovah/php-hashes/tree/8.2) | [8.1](https://github.com/Kovah/php-hashes/tree/8.1) | [8.0](https://github.com/Kovah/php-hashes/tree/8.0) | [7.4](https://github.com/Kovah/php-hashes/tree/7.4) | [7.3](https://github.com/Kovah/php-hashes/tree/7.3) | [7.2](https://github.com/Kovah/php-hashes/tree/7.2) | [7.1](https://github.com/Kovah/php-hashes/tree/7.1)

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro16,1 with an 
Intel i7 (6x 2.6GHz) CPU. Current Docker Engine version is 19.03.13, build 4484c46d9d.

All results are based on a string with a fixed length of 102400 characters, generated with the `random_bytes()` function.

```bash
# Regular output to the CLI
docker run -it --rm -v "$PWD/hashes.php":/usr/src/hashes.php -w /usr/src php:8.0-cli php hashes.php
```

Additionally, for better statistical insights, you may generate a dataset which contains the execution times for all
available algorithms, each with regular string and raw binary output and each for string lengths ranging from 512
characters up to 2^25 (~33 mil) characters.  
You can generate the csv file with the following command:

```bash
# Output to a csv file
docker run -it --rm -v "$PWD":/usr/src/app -w /usr/src/app php:8.0-cli php hashes-csv.php
```

Please notice that the resulting csv file uses the semicolon as a delimiter and all numeric values use the dot as a
decimal separator.


## Results

### Sorted by algorithm name

```
Time         Algorithm    Method     Length  Hash
Time         Algorithm    Method     Length  Hash
0.073910 ms  adler32      hex       8 bytes  a9ad8c8a
0.093937 ms  adler32      raw       8 bytes  a9ad8c8a
0.026941 ms  crc32        hex       8 bytes  cf558773
0.005007 ms  crc32        raw       8 bytes  cf558773
0.043869 ms  crc32b       hex       8 bytes  10313afb
0.005007 ms  crc32b       raw       8 bytes  10313afb
0.005007 ms  crc32c       hex       8 bytes  6cfe49b2
0.005007 ms  crc32c       raw       8 bytes  6cfe49b2
0.102997 ms  fnv132       hex       8 bytes  6859e36b
0.123978 ms  fnv132       raw       8 bytes  6859e36b
0.122786 ms  fnv164       hex      16 bytes  88a23efa3882b36b
0.123024 ms  fnv164       raw      16 bytes  88a23efa3882b36b
0.104189 ms  fnv1a32      hex       8 bytes  5eadb1ff
0.121832 ms  fnv1a32      raw       8 bytes  5eadb1ff
0.158072 ms  fnv1a64      hex      16 bytes  be62465829dcf17f
0.182152 ms  fnv1a64      raw      16 bytes  be62465829dcf17f
1.740932 ms  gost         hex      64 bytes  8b5489279c5f7c3b7f81f59c55a9796a9312b50dd98e24110c5e16b3a6b000ea
1.772881 ms  gost         raw      64 bytes  8b5489279c5f7c3b7f81f59c55a9796a9312b50dd98e24110c5e16b3a6b000ea
1.771927 ms  gost-crypto  hex      64 bytes  ae924b5b0f8c0bf6f5ec9284eb64ab2c06b000b561054156becb1d49b6e04aa9
1.665115 ms  gost-crypto  raw      64 bytes  ae924b5b0f8c0bf6f5ec9284eb64ab2c06b000b561054156becb1d49b6e04aa9
0.375986 ms  haval128,3   hex      32 bytes  ef04cd470b4850f420eb02ba87818406
0.452042 ms  haval128,3   raw      32 bytes  ef04cd470b4850f420eb02ba87818406
0.561953 ms  haval128,4   hex      32 bytes  e78ecd29714d38942af5f4e2b9c376d7
0.612020 ms  haval128,4   raw      32 bytes  e78ecd29714d38942af5f4e2b9c376d7
0.758171 ms  haval128,5   hex      32 bytes  bcab72f6072c40f8e77d0db6e1051e93
0.696898 ms  haval128,5   raw      32 bytes  bcab72f6072c40f8e77d0db6e1051e93
0.353098 ms  haval160,3   hex      40 bytes  f8beb3a86e28c1c051c9821540a4bc8545be0a20
0.489950 ms  haval160,3   raw      40 bytes  f8beb3a86e28c1c051c9821540a4bc8545be0a20
0.500202 ms  haval160,4   hex      40 bytes  e1bc55f9be51e5b97ff4182f4884ae0aa4e53d8d
0.598907 ms  haval160,4   raw      40 bytes  e1bc55f9be51e5b97ff4182f4884ae0aa4e53d8d
0.653982 ms  haval160,5   hex      40 bytes  69fe0e73d25e009beba78b145646bf55d0011421
0.721216 ms  haval160,5   raw      40 bytes  69fe0e73d25e009beba78b145646bf55d0011421
0.380993 ms  haval192,3   hex      48 bytes  ce26cd48f7f62e2c8d998f427ea7f238d4727c237ca4e036
0.667095 ms  haval192,3   raw      48 bytes  ce26cd48f7f62e2c8d998f427ea7f238d4727c237ca4e036
0.515938 ms  haval192,4   hex      48 bytes  5aa99a9842fa03fa60c68e21e89b9a002e72200b54e5d548
0.593901 ms  haval192,4   raw      48 bytes  5aa99a9842fa03fa60c68e21e89b9a002e72200b54e5d548
0.756979 ms  haval192,5   hex      48 bytes  002ff93c7331a339049f71753f40848f0b142d747442720c
0.623941 ms  haval192,5   raw      48 bytes  002ff93c7331a339049f71753f40848f0b142d747442720c
0.427008 ms  haval224,3   hex      56 bytes  9173848363ab45e17559731826f54b2976c49bc693310e914846fea0
0.632048 ms  haval224,3   raw      56 bytes  9173848363ab45e17559731826f54b2976c49bc693310e914846fea0
0.534058 ms  haval224,4   hex      56 bytes  2d0684097e866b9a42efd7e9601e35db6755ceb30fd43247657ab305
0.576019 ms  haval224,4   raw      56 bytes  2d0684097e866b9a42efd7e9601e35db6755ceb30fd43247657ab305
0.717878 ms  haval224,5   hex      56 bytes  0a715914a294e68003095445841b73a5b7678d3b25abe12925333f86
0.721931 ms  haval224,5   raw      56 bytes  0a715914a294e68003095445841b73a5b7678d3b25abe12925333f86
0.360966 ms  haval256,3   hex      64 bytes  b150edee1f6a2aa94445e79856f67a41d2047eb273561d6901e964b804f947c0
0.415087 ms  haval256,3   raw      64 bytes  b150edee1f6a2aa94445e79856f67a41d2047eb273561d6901e964b804f947c0
0.609875 ms  haval256,4   hex      64 bytes  3274cfc6317508556298748a235634923ecde308710dfb2a2351db13481f6812
0.475883 ms  haval256,4   raw      64 bytes  3274cfc6317508556298748a235634923ecde308710dfb2a2351db13481f6812
0.642061 ms  haval256,5   hex      64 bytes  8ab728b13da94e4f336999b0e2e8bf0f7533c634c5afd7dcc9a0011dfa5be78e
0.707865 ms  haval256,5   raw      64 bytes  8ab728b13da94e4f336999b0e2e8bf0f7533c634c5afd7dcc9a0011dfa5be78e
0.128984 ms  joaat        hex       8 bytes  56c89085
0.149965 ms  joaat        raw       8 bytes  56c89085
12.783051 ms md2          hex      32 bytes  8d407b37513331ecab7f0fb3b179ea56
12.576818 ms md2          raw      32 bytes  8d407b37513331ecab7f0fb3b179ea56
0.120163 ms  md4          hex      32 bytes  ad551a791d8b23640274ff2f77d6b2d5
0.094891 ms  md4          raw      32 bytes  ad551a791d8b23640274ff2f77d6b2d5
0.155926 ms  md5          hex      32 bytes  03ca0fcc58a13c744af6509d3ab2a7b9
0.174046 ms  md5          raw      32 bytes  03ca0fcc58a13c744af6509d3ab2a7b9
0.401020 ms  ripemd128    hex      32 bytes  add23691246a00dc99ff191e136aa6d4
0.401974 ms  ripemd128    raw      32 bytes  add23691246a00dc99ff191e136aa6d4
0.535011 ms  ripemd160    hex      40 bytes  efdc5bdbe271cfbc2007148c36efec09768ebb76
0.575781 ms  ripemd160    raw      40 bytes  efdc5bdbe271cfbc2007148c36efec09768ebb76
0.375032 ms  ripemd256    hex      64 bytes  6ecf6998291bb5746f837554637f25d1ab14fc1a977538638de64d6e7232c830
0.450850 ms  ripemd256    raw      64 bytes  6ecf6998291bb5746f837554637f25d1ab14fc1a977538638de64d6e7232c830
0.497103 ms  ripemd320    hex      80 bytes  264ac495a99e2070b5ce38557a7deb408178046b2d11836def2ecd04dfd62831c3850530932ddeb1
0.591040 ms  ripemd320    raw      80 bytes  264ac495a99e2070b5ce38557a7deb408178046b2d11836def2ecd04dfd62831c3850530932ddeb1
0.319958 ms  sha1         hex      40 bytes  e571404c67ef214b018cb9921b2e3e812df60395
0.206947 ms  sha1         raw      40 bytes  e571404c67ef214b018cb9921b2e3e812df60395
0.622034 ms  sha224       hex      56 bytes  3e80b67f3f76eae5ff28e4b2896ef23907fbd4d12cb5373c51f75a6a
0.662088 ms  sha224       raw      56 bytes  3e80b67f3f76eae5ff28e4b2896ef23907fbd4d12cb5373c51f75a6a
0.696898 ms  sha256       hex      64 bytes  88cf77a8966b764da22264f316b39fe39f225ee5b2ee2152f29bf1f2d7d33536
0.663996 ms  sha256       raw      64 bytes  88cf77a8966b764da22264f316b39fe39f225ee5b2ee2152f29bf1f2d7d33536
0.289202 ms  sha3-224     hex      56 bytes  37fc10e67a3fc1c6a7de4ceb891af49893c99f72671c27225aafe644
0.293970 ms  sha3-224     raw      56 bytes  37fc10e67a3fc1c6a7de4ceb891af49893c99f72671c27225aafe644
0.422955 ms  sha3-256     hex      64 bytes  6a4f8a852db98674ea1fca2f637bc595cb9c87b70d7775fad5df78c5876444d5
0.288963 ms  sha3-256     raw      64 bytes  6a4f8a852db98674ea1fca2f637bc595cb9c87b70d7775fad5df78c5876444d5
0.434160 ms  sha3-384     hex      96 bytes  0f26f4dd8985bb737c66b8e04ae51803565548893fd8814aa3e8083b5b873c38c1e9f62c2db4e1fa42165092bab166bb
0.484943 ms  sha3-384     raw      96 bytes  0f26f4dd8985bb737c66b8e04ae51803565548893fd8814aa3e8083b5b873c38c1e9f62c2db4e1fa42165092bab166bb
0.597954 ms  sha3-512     hex     128 bytes  08fdb02aed598eccff973d85b7de5b581d76c6c391ca50005ba368025eacb51b3b3dbacdeeed86325991383943c19690b48533e381af583cf9421cbd7d9399ad
0.642061 ms  sha3-512     raw     128 bytes  08fdb02aed598eccff973d85b7de5b581d76c6c391ca50005ba368025eacb51b3b3dbacdeeed86325991383943c19690b48533e381af583cf9421cbd7d9399ad
0.401974 ms  sha384       hex      96 bytes  bc1fe86c8b2c1ad4a3b9abeb1f43fee06f46e41631e0e1b3baf44280ef9d01e55c28b3a89089d5063575d2621d25c6c6
0.344038 ms  sha384       raw      96 bytes  bc1fe86c8b2c1ad4a3b9abeb1f43fee06f46e41631e0e1b3baf44280ef9d01e55c28b3a89089d5063575d2621d25c6c6
0.341892 ms  sha512       hex     128 bytes  6f9162502c2faafe0af3d073d072c1908e21abe84486685776104d419cf1aa1c872f3cdf792fec65f509152c6405eb2f24950eb0e895d66ec43d9e13e95dcd0f
0.458956 ms  sha512       raw     128 bytes  6f9162502c2faafe0af3d073d072c1908e21abe84486685776104d419cf1aa1c872f3cdf792fec65f509152c6405eb2f24950eb0e895d66ec43d9e13e95dcd0f
0.458956 ms  sha512/224   hex      56 bytes  88de4f57bcd7479e8f6108bdc25f70cdbdb6dd731f8db13e9759a131
0.344038 ms  sha512/224   raw      56 bytes  88de4f57bcd7479e8f6108bdc25f70cdbdb6dd731f8db13e9759a131
0.363111 ms  sha512/256   hex      64 bytes  8ddc81f558aac4ae4044445076d9a1c068f359c154920eb8040b9d1afd93ff97
0.436068 ms  sha512/256   raw      64 bytes  8ddc81f558aac4ae4044445076d9a1c068f359c154920eb8040b9d1afd93ff97
3.544807 ms  snefru       hex      64 bytes  cf822b96660b85f523b22dbd0ec16e40ae7a619431532ec767a23b8bfc332846
3.480911 ms  snefru       raw      64 bytes  cf822b96660b85f523b22dbd0ec16e40ae7a619431532ec767a23b8bfc332846
3.503084 ms  snefru256    hex      64 bytes  cf822b96660b85f523b22dbd0ec16e40ae7a619431532ec767a23b8bfc332846
3.465891 ms  snefru256    raw      64 bytes  cf822b96660b85f523b22dbd0ec16e40ae7a619431532ec767a23b8bfc332846
0.159979 ms  tiger128,3   hex      32 bytes  4efaf1c84d9983cd02d6f9047ba6f998
0.175953 ms  tiger128,3   raw      32 bytes  4efaf1c84d9983cd02d6f9047ba6f998
0.214100 ms  tiger128,4   hex      32 bytes  c04ca64ebc4d1e55cb53ed8da069edbf
0.236988 ms  tiger128,4   raw      32 bytes  c04ca64ebc4d1e55cb53ed8da069edbf
0.174046 ms  tiger160,3   hex      40 bytes  4efaf1c84d9983cd02d6f9047ba6f9986226ceee
0.237942 ms  tiger160,3   raw      40 bytes  4efaf1c84d9983cd02d6f9047ba6f9986226ceee
0.277996 ms  tiger160,4   hex      40 bytes  c04ca64ebc4d1e55cb53ed8da069edbfc5335456
0.200033 ms  tiger160,4   raw      40 bytes  c04ca64ebc4d1e55cb53ed8da069edbfc5335456
0.159025 ms  tiger192,3   hex      48 bytes  4efaf1c84d9983cd02d6f9047ba6f9986226ceeefabeb21b
0.137091 ms  tiger192,3   raw      48 bytes  4efaf1c84d9983cd02d6f9047ba6f9986226ceeefabeb21b
0.205994 ms  tiger192,4   hex      48 bytes  c04ca64ebc4d1e55cb53ed8da069edbfc53354562904f6de
0.237942 ms  tiger192,4   raw      48 bytes  c04ca64ebc4d1e55cb53ed8da069edbfc53354562904f6de
1.008987 ms  whirlpool    hex     128 bytes  089c78e8fdef084908284f14673d4f985be6dda42f81551616b2e041fc710930340cdb6f6a577c480018c59f34866a2821aa309af2a4363c7912f5650f682525
1.007080 ms  whirlpool    raw     128 bytes  089c78e8fdef084908284f14673d4f985be6dda42f81551616b2e041fc710930340cdb6f6a577c480018c59f34866a2821aa309af2a4363c7912f5650f682525
```

### Sorted by execution time

```
0.005007 ms  crc32        raw       8 bytes  cf558773
0.005007 ms  crc32b       raw       8 bytes  10313afb
0.005007 ms  crc32c       hex       8 bytes  6cfe49b2
0.005007 ms  crc32c       raw       8 bytes  6cfe49b2
0.026941 ms  crc32        hex       8 bytes  cf558773
0.043869 ms  crc32b       hex       8 bytes  10313afb
0.073910 ms  adler32      hex       8 bytes  a9ad8c8a
0.093937 ms  adler32      raw       8 bytes  a9ad8c8a
0.094891 ms  md4          raw      32 bytes  ad551a791d8b23640274ff2f77d6b2d5
0.102997 ms  fnv132       hex       8 bytes  6859e36b
0.104189 ms  fnv1a32      hex       8 bytes  5eadb1ff
0.120163 ms  md4          hex      32 bytes  ad551a791d8b23640274ff2f77d6b2d5
0.121832 ms  fnv1a32      raw       8 bytes  5eadb1ff
0.122786 ms  fnv164       hex      16 bytes  88a23efa3882b36b
0.123024 ms  fnv164       raw      16 bytes  88a23efa3882b36b
0.123978 ms  fnv132       raw       8 bytes  6859e36b
0.128984 ms  joaat        hex       8 bytes  56c89085
0.137091 ms  tiger192,3   raw      48 bytes  4efaf1c84d9983cd02d6f9047ba6f9986226ceeefabeb21b
0.149965 ms  joaat        raw       8 bytes  56c89085
0.155926 ms  md5          hex      32 bytes  03ca0fcc58a13c744af6509d3ab2a7b9
0.158072 ms  fnv1a64      hex      16 bytes  be62465829dcf17f
0.159025 ms  tiger192,3   hex      48 bytes  4efaf1c84d9983cd02d6f9047ba6f9986226ceeefabeb21b
0.159979 ms  tiger128,3   hex      32 bytes  4efaf1c84d9983cd02d6f9047ba6f998
0.174046 ms  md5          raw      32 bytes  03ca0fcc58a13c744af6509d3ab2a7b9
0.174046 ms  tiger160,3   hex      40 bytes  4efaf1c84d9983cd02d6f9047ba6f9986226ceee
0.175953 ms  tiger128,3   raw      32 bytes  4efaf1c84d9983cd02d6f9047ba6f998
0.182152 ms  fnv1a64      raw      16 bytes  be62465829dcf17f
0.200033 ms  tiger160,4   raw      40 bytes  c04ca64ebc4d1e55cb53ed8da069edbfc5335456
0.205994 ms  tiger192,4   hex      48 bytes  c04ca64ebc4d1e55cb53ed8da069edbfc53354562904f6de
0.206947 ms  sha1         raw      40 bytes  e571404c67ef214b018cb9921b2e3e812df60395
0.214100 ms  tiger128,4   hex      32 bytes  c04ca64ebc4d1e55cb53ed8da069edbf
0.236988 ms  tiger128,4   raw      32 bytes  c04ca64ebc4d1e55cb53ed8da069edbf
0.237942 ms  tiger160,3   raw      40 bytes  4efaf1c84d9983cd02d6f9047ba6f9986226ceee
0.237942 ms  tiger192,4   raw      48 bytes  c04ca64ebc4d1e55cb53ed8da069edbfc53354562904f6de
0.277996 ms  tiger160,4   hex      40 bytes  c04ca64ebc4d1e55cb53ed8da069edbfc5335456
0.288963 ms  sha3-256     raw      64 bytes  6a4f8a852db98674ea1fca2f637bc595cb9c87b70d7775fad5df78c5876444d5
0.289202 ms  sha3-224     hex      56 bytes  37fc10e67a3fc1c6a7de4ceb891af49893c99f72671c27225aafe644
0.293970 ms  sha3-224     raw      56 bytes  37fc10e67a3fc1c6a7de4ceb891af49893c99f72671c27225aafe644
0.319958 ms  sha1         hex      40 bytes  e571404c67ef214b018cb9921b2e3e812df60395
0.341892 ms  sha512       hex     128 bytes  6f9162502c2faafe0af3d073d072c1908e21abe84486685776104d419cf1aa1c872f3cdf792fec65f509152c6405eb2f24950eb0e895d66ec43d9e13e95dcd0f
0.344038 ms  sha384       raw      96 bytes  bc1fe86c8b2c1ad4a3b9abeb1f43fee06f46e41631e0e1b3baf44280ef9d01e55c28b3a89089d5063575d2621d25c6c6
0.344038 ms  sha512/224   raw      56 bytes  88de4f57bcd7479e8f6108bdc25f70cdbdb6dd731f8db13e9759a131
0.353098 ms  haval160,3   hex      40 bytes  f8beb3a86e28c1c051c9821540a4bc8545be0a20
0.360966 ms  haval256,3   hex      64 bytes  b150edee1f6a2aa94445e79856f67a41d2047eb273561d6901e964b804f947c0
0.363111 ms  sha512/256   hex      64 bytes  8ddc81f558aac4ae4044445076d9a1c068f359c154920eb8040b9d1afd93ff97
0.375032 ms  ripemd256    hex      64 bytes  6ecf6998291bb5746f837554637f25d1ab14fc1a977538638de64d6e7232c830
0.375986 ms  haval128,3   hex      32 bytes  ef04cd470b4850f420eb02ba87818406
0.380993 ms  haval192,3   hex      48 bytes  ce26cd48f7f62e2c8d998f427ea7f238d4727c237ca4e036
0.401020 ms  ripemd128    hex      32 bytes  add23691246a00dc99ff191e136aa6d4
0.401974 ms  sha384       hex      96 bytes  bc1fe86c8b2c1ad4a3b9abeb1f43fee06f46e41631e0e1b3baf44280ef9d01e55c28b3a89089d5063575d2621d25c6c6
0.401974 ms  ripemd128    raw      32 bytes  add23691246a00dc99ff191e136aa6d4
0.415087 ms  haval256,3   raw      64 bytes  b150edee1f6a2aa94445e79856f67a41d2047eb273561d6901e964b804f947c0
0.422955 ms  sha3-256     hex      64 bytes  6a4f8a852db98674ea1fca2f637bc595cb9c87b70d7775fad5df78c5876444d5
0.427008 ms  haval224,3   hex      56 bytes  9173848363ab45e17559731826f54b2976c49bc693310e914846fea0
0.434160 ms  sha3-384     hex      96 bytes  0f26f4dd8985bb737c66b8e04ae51803565548893fd8814aa3e8083b5b873c38c1e9f62c2db4e1fa42165092bab166bb
0.436068 ms  sha512/256   raw      64 bytes  8ddc81f558aac4ae4044445076d9a1c068f359c154920eb8040b9d1afd93ff97
0.450850 ms  ripemd256    raw      64 bytes  6ecf6998291bb5746f837554637f25d1ab14fc1a977538638de64d6e7232c830
0.452042 ms  haval128,3   raw      32 bytes  ef04cd470b4850f420eb02ba87818406
0.458956 ms  sha512/224   hex      56 bytes  88de4f57bcd7479e8f6108bdc25f70cdbdb6dd731f8db13e9759a131
0.458956 ms  sha512       raw     128 bytes  6f9162502c2faafe0af3d073d072c1908e21abe84486685776104d419cf1aa1c872f3cdf792fec65f509152c6405eb2f24950eb0e895d66ec43d9e13e95dcd0f
0.475883 ms  haval256,4   raw      64 bytes  3274cfc6317508556298748a235634923ecde308710dfb2a2351db13481f6812
0.484943 ms  sha3-384     raw      96 bytes  0f26f4dd8985bb737c66b8e04ae51803565548893fd8814aa3e8083b5b873c38c1e9f62c2db4e1fa42165092bab166bb
0.489950 ms  haval160,3   raw      40 bytes  f8beb3a86e28c1c051c9821540a4bc8545be0a20
0.497103 ms  ripemd320    hex      80 bytes  264ac495a99e2070b5ce38557a7deb408178046b2d11836def2ecd04dfd62831c3850530932ddeb1
0.500202 ms  haval160,4   hex      40 bytes  e1bc55f9be51e5b97ff4182f4884ae0aa4e53d8d
0.515938 ms  haval192,4   hex      48 bytes  5aa99a9842fa03fa60c68e21e89b9a002e72200b54e5d548
0.534058 ms  haval224,4   hex      56 bytes  2d0684097e866b9a42efd7e9601e35db6755ceb30fd43247657ab305
0.535011 ms  ripemd160    hex      40 bytes  efdc5bdbe271cfbc2007148c36efec09768ebb76
0.561953 ms  haval128,4   hex      32 bytes  e78ecd29714d38942af5f4e2b9c376d7
0.575781 ms  ripemd160    raw      40 bytes  efdc5bdbe271cfbc2007148c36efec09768ebb76
0.576019 ms  haval224,4   raw      56 bytes  2d0684097e866b9a42efd7e9601e35db6755ceb30fd43247657ab305
0.591040 ms  ripemd320    raw      80 bytes  264ac495a99e2070b5ce38557a7deb408178046b2d11836def2ecd04dfd62831c3850530932ddeb1
0.593901 ms  haval192,4   raw      48 bytes  5aa99a9842fa03fa60c68e21e89b9a002e72200b54e5d548
0.597954 ms  sha3-512     hex     128 bytes  08fdb02aed598eccff973d85b7de5b581d76c6c391ca50005ba368025eacb51b3b3dbacdeeed86325991383943c19690b48533e381af583cf9421cbd7d9399ad
0.598907 ms  haval160,4   raw      40 bytes  e1bc55f9be51e5b97ff4182f4884ae0aa4e53d8d
0.609875 ms  haval256,4   hex      64 bytes  3274cfc6317508556298748a235634923ecde308710dfb2a2351db13481f6812
0.612020 ms  haval128,4   raw      32 bytes  e78ecd29714d38942af5f4e2b9c376d7
0.622034 ms  sha224       hex      56 bytes  3e80b67f3f76eae5ff28e4b2896ef23907fbd4d12cb5373c51f75a6a
0.623941 ms  haval192,5   raw      48 bytes  002ff93c7331a339049f71753f40848f0b142d747442720c
0.632048 ms  haval224,3   raw      56 bytes  9173848363ab45e17559731826f54b2976c49bc693310e914846fea0
0.642061 ms  sha3-512     raw     128 bytes  08fdb02aed598eccff973d85b7de5b581d76c6c391ca50005ba368025eacb51b3b3dbacdeeed86325991383943c19690b48533e381af583cf9421cbd7d9399ad
0.642061 ms  haval256,5   hex      64 bytes  8ab728b13da94e4f336999b0e2e8bf0f7533c634c5afd7dcc9a0011dfa5be78e
0.653982 ms  haval160,5   hex      40 bytes  69fe0e73d25e009beba78b145646bf55d0011421
0.662088 ms  sha224       raw      56 bytes  3e80b67f3f76eae5ff28e4b2896ef23907fbd4d12cb5373c51f75a6a
0.663996 ms  sha256       raw      64 bytes  88cf77a8966b764da22264f316b39fe39f225ee5b2ee2152f29bf1f2d7d33536
0.667095 ms  haval192,3   raw      48 bytes  ce26cd48f7f62e2c8d998f427ea7f238d4727c237ca4e036
0.696898 ms  sha256       hex      64 bytes  88cf77a8966b764da22264f316b39fe39f225ee5b2ee2152f29bf1f2d7d33536
0.696898 ms  haval128,5   raw      32 bytes  bcab72f6072c40f8e77d0db6e1051e93
0.707865 ms  haval256,5   raw      64 bytes  8ab728b13da94e4f336999b0e2e8bf0f7533c634c5afd7dcc9a0011dfa5be78e
0.717878 ms  haval224,5   hex      56 bytes  0a715914a294e68003095445841b73a5b7678d3b25abe12925333f86
0.721216 ms  haval160,5   raw      40 bytes  69fe0e73d25e009beba78b145646bf55d0011421
0.721931 ms  haval224,5   raw      56 bytes  0a715914a294e68003095445841b73a5b7678d3b25abe12925333f86
0.756979 ms  haval192,5   hex      48 bytes  002ff93c7331a339049f71753f40848f0b142d747442720c
0.758171 ms  haval128,5   hex      32 bytes  bcab72f6072c40f8e77d0db6e1051e93
1.007080 ms  whirlpool    raw     128 bytes  089c78e8fdef084908284f14673d4f985be6dda42f81551616b2e041fc710930340cdb6f6a577c480018c59f34866a2821aa309af2a4363c7912f5650f682525
1.008987 ms  whirlpool    hex     128 bytes  089c78e8fdef084908284f14673d4f985be6dda42f81551616b2e041fc710930340cdb6f6a577c480018c59f34866a2821aa309af2a4363c7912f5650f682525
1.665115 ms  gost-crypto  raw      64 bytes  ae924b5b0f8c0bf6f5ec9284eb64ab2c06b000b561054156becb1d49b6e04aa9
1.740932 ms  gost         hex      64 bytes  8b5489279c5f7c3b7f81f59c55a9796a9312b50dd98e24110c5e16b3a6b000ea
1.771927 ms  gost-crypto  hex      64 bytes  ae924b5b0f8c0bf6f5ec9284eb64ab2c06b000b561054156becb1d49b6e04aa9
1.772881 ms  gost         raw      64 bytes  8b5489279c5f7c3b7f81f59c55a9796a9312b50dd98e24110c5e16b3a6b000ea
3.465891 ms  snefru256    raw      64 bytes  cf822b96660b85f523b22dbd0ec16e40ae7a619431532ec767a23b8bfc332846
3.480911 ms  snefru       raw      64 bytes  cf822b96660b85f523b22dbd0ec16e40ae7a619431532ec767a23b8bfc332846
3.503084 ms  snefru256    hex      64 bytes  cf822b96660b85f523b22dbd0ec16e40ae7a619431532ec767a23b8bfc332846
3.544807 ms  snefru       hex      64 bytes  cf822b96660b85f523b22dbd0ec16e40ae7a619431532ec767a23b8bfc332846
12.576818 ms md2          raw      32 bytes  8d407b37513331ecab7f0fb3b179ea56
12.783051 ms md2          hex      32 bytes  8d407b37513331ecab7f0fb3b179ea56
```
