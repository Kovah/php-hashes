# PHP 7.4 Hashes

Exact PHP version: 7.4.13 
Number of available hash algorithms: 53

All PHP Versions: [7.1](https://github.com/Kovah/php-hashes/tree/7.1) | [7.2](https://github.com/Kovah/php-hashes/tree/7.2) | [7.3](https://github.com/Kovah/php-hashes/tree/7.3) | [7.4](https://github.com/Kovah/php-hashes/tree/7.4) | [8.0](https://github.com/Kovah/php-hashes/tree/8.0) | [8.1](https://github.com/Kovah/php-hashes/tree/8.1)

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro16,1 with an 
Intel i7 (6x 2.6GHz) CPU. Current Docker version is 19.03.13, build 4484c46d9d.

All results are based on a string with a fixed length of 102400 characters, generated with the `random_bytes()` function.

```bash
# Regular output to the CLI
docker run -it --rm -v "$PWD/hashes.php":/usr/src/hashes.php -w /usr/src php:7.4-cli php hashes.php
```

Additionally, for better statistical insights, you may generate a dataset which contains the execution times for all
available algorithms, each with regular string and raw binary output and each for string lengths ranging from 512
characters up to 2^25 (~33 mil) characters.  
You can generate the csv file with the following command:

```bash
# Output to a csv file
docker run -it --rm -v "$PWD":/usr/src/app -w /usr/src/app php:7.4-cli php hashes-csv.php
```

Please notice that the resulting csv file uses the semicolon as a delimiter and all numeric values use the dot as a
decimal separator.


## Results

### Sorted by algorithm name

```
Time         Algorithm    Method     Length  Hash
0.072956 ms  adler32      hex       8 bytes  e50890b1
0.051975 ms  adler32      raw       8 bytes  e50890b1
0.279903 ms  crc32        hex       8 bytes  ab760bc7
0.387192 ms  crc32        raw       8 bytes  ab760bc7
0.226974 ms  crc32b       hex       8 bytes  ad0d543d
0.227213 ms  crc32b       raw       8 bytes  ad0d543d
0.247955 ms  crc32c       hex       8 bytes  c1b0c92d
0.341177 ms  crc32c       raw       8 bytes  c1b0c92d
0.103951 ms  fnv132       hex       8 bytes  3d4848a4
0.121832 ms  fnv132       raw       8 bytes  3d4848a4
0.120878 ms  fnv164       hex      16 bytes  0fa1f201efbe0724
0.140905 ms  fnv164       raw      16 bytes  0fa1f201efbe0724
0.102997 ms  fnv1a32      hex       8 bytes  726ac55e
0.123978 ms  fnv1a32      raw       8 bytes  726ac55e
0.218153 ms  fnv1a64      hex      16 bytes  0884e72feca0657e
0.103951 ms  fnv1a64      raw      16 bytes  0884e72feca0657e
1.808167 ms  gost         hex      64 bytes  f4ba8a28106161eb9674c1f84b8e56fec4937bc3d471e16b8a3a2c58384fa072
1.645803 ms  gost         raw      64 bytes  f4ba8a28106161eb9674c1f84b8e56fec4937bc3d471e16b8a3a2c58384fa072
1.777887 ms  gost-crypto  hex      64 bytes  96eb4e5e56c38792f1bfc0b8b4b0c625233d08161f3247eaa3819208d31ab963
1.775980 ms  gost-crypto  raw      64 bytes  96eb4e5e56c38792f1bfc0b8b4b0c625233d08161f3247eaa3819208d31ab963
0.391960 ms  haval128,3   hex      32 bytes  0e436de887ffcda0e2506868bb23ef3a
0.432968 ms  haval128,3   raw      32 bytes  0e436de887ffcda0e2506868bb23ef3a
0.634909 ms  haval128,4   hex      32 bytes  c23864926e1cefa3d91016faaba7e65b
0.482082 ms  haval128,4   raw      32 bytes  c23864926e1cefa3d91016faaba7e65b
0.630140 ms  haval128,5   hex      32 bytes  af475f48e404935a7e0f4e0ce12ac2fb
0.724077 ms  haval128,5   raw      32 bytes  af475f48e404935a7e0f4e0ce12ac2fb
0.373125 ms  haval160,3   hex      40 bytes  a646db2a105876499619c557f3d95133dc312f7b
0.472069 ms  haval160,3   raw      40 bytes  a646db2a105876499619c557f3d95133dc312f7b
0.613928 ms  haval160,4   hex      40 bytes  8eb87a547c1766b727aec47d8ede063c8b11666e
0.499010 ms  haval160,4   raw      40 bytes  8eb87a547c1766b727aec47d8ede063c8b11666e
0.731945 ms  haval160,5   hex      40 bytes  6d2e2dd6b86b78f00bd189e053a69cccebe8db66
0.667095 ms  haval160,5   raw      40 bytes  6d2e2dd6b86b78f00bd189e053a69cccebe8db66
0.352859 ms  haval192,3   hex      48 bytes  a4472934c3d2456d1fae955669c2b7a8c09f05d5bd88f32d
0.373125 ms  haval192,3   raw      48 bytes  a4472934c3d2456d1fae955669c2b7a8c09f05d5bd88f32d
0.611067 ms  haval192,4   hex      48 bytes  841001bb88287538402e82787598f281c8fb4cf297cc2140
0.521898 ms  haval192,4   raw      48 bytes  841001bb88287538402e82787598f281c8fb4cf297cc2140
0.687838 ms  haval192,5   hex      48 bytes  1897d40dcdb42dfd95bf199b579431e23fbbf09e49697283
0.741959 ms  haval192,5   raw      48 bytes  1897d40dcdb42dfd95bf199b579431e23fbbf09e49697283
0.452042 ms  haval224,3   hex      56 bytes  de632a2258b768a3087b73164fefefe68c9adfd16f1c03170617823d
0.355005 ms  haval224,3   raw      56 bytes  de632a2258b768a3087b73164fefefe68c9adfd16f1c03170617823d
0.576973 ms  haval224,4   hex      56 bytes  96fd13080ffae804320d27137cf181a5c6c465295619754e1e86c44b
0.567913 ms  haval224,4   raw      56 bytes  96fd13080ffae804320d27137cf181a5c6c465295619754e1e86c44b
0.739098 ms  haval224,5   hex      56 bytes  7a52072ca8094c72edf881a7af2fe570a208a0702a9f0cfa0cbd66a9
0.610828 ms  haval224,5   raw      56 bytes  7a52072ca8094c72edf881a7af2fe570a208a0702a9f0cfa0cbd66a9
0.468016 ms  haval256,3   hex      64 bytes  7c6cb9f83d9f3e3e13f5d137b5229138be25d763dfd93db9fddc6953a5b6c8d4
0.336885 ms  haval256,3   raw      64 bytes  7c6cb9f83d9f3e3e13f5d137b5229138be25d763dfd93db9fddc6953a5b6c8d4
0.533104 ms  haval256,4   hex      64 bytes  b21d895fbd5be7e34f6b0b8845fee4b52e31bd386804d488280063113f326db8
0.630856 ms  haval256,4   raw      64 bytes  b21d895fbd5be7e34f6b0b8845fee4b52e31bd386804d488280063113f326db8
0.725985 ms  haval256,5   hex      64 bytes  c931c3e309d2e51e2f465fc4038d459769e457065c459cded3045a70ec3078de
0.761986 ms  haval256,5   raw      64 bytes  c931c3e309d2e51e2f465fc4038d459769e457065c459cded3045a70ec3078de
0.148058 ms  joaat        hex       8 bytes  a1c7bafc
0.128984 ms  joaat        raw       8 bytes  a1c7bafc
13.314962 ms md2          hex      32 bytes  95bbc4d76d0a7c5c5c8fc46a3018e6f5
12.507915 ms md2          raw      32 bytes  95bbc4d76d0a7c5c5c8fc46a3018e6f5
0.123024 ms  md4          hex      32 bytes  5515b4c355ecb2fd4d725c49811dda99
0.113964 ms  md4          raw      32 bytes  5515b4c355ecb2fd4d725c49811dda99
0.159979 ms  md5          hex      32 bytes  426bb6e1d3ecbf1a8ba0af48b861125b
0.228882 ms  md5          raw      32 bytes  426bb6e1d3ecbf1a8ba0af48b861125b
0.407934 ms  ripemd128    hex      32 bytes  2939be45ebc69110843386abd50c8d34
0.346184 ms  ripemd128    raw      32 bytes  2939be45ebc69110843386abd50c8d34
0.617027 ms  ripemd160    hex      40 bytes  d12ca8a36a4ed5097aa2913d80a4851cba15f6ee
0.515938 ms  ripemd160    raw      40 bytes  d12ca8a36a4ed5097aa2913d80a4851cba15f6ee
0.426054 ms  ripemd256    hex      64 bytes  960fb02c3336c3bef16e79a30e4ac1cb3430bd3bb4a9e3bd9e6a3f3b3d86871d
0.345945 ms  ripemd256    raw      64 bytes  960fb02c3336c3bef16e79a30e4ac1cb3430bd3bb4a9e3bd9e6a3f3b3d86871d
0.587940 ms  ripemd320    hex      80 bytes  7feef144a7e65ed4561b7809d39672407df72fb60e3547cd9636e04a9ea6ee5042127b03a1d66e7c
0.539064 ms  ripemd320    raw      80 bytes  7feef144a7e65ed4561b7809d39672407df72fb60e3547cd9636e04a9ea6ee5042127b03a1d66e7c
0.229836 ms  sha1         hex      40 bytes  059eb32964bdf5e5accc92b034ad835255852205
0.206947 ms  sha1         raw      40 bytes  059eb32964bdf5e5accc92b034ad835255852205
0.718832 ms  sha224       hex      56 bytes  408a1e78753c4c4ef78cc25bbdc1989140702217632ff69b85444b40
0.602007 ms  sha224       raw      56 bytes  408a1e78753c4c4ef78cc25bbdc1989140702217632ff69b85444b40
0.696898 ms  sha256       hex      64 bytes  ab0b3dc92d9badf238891185aa3211e149c2db25382c318469307380bcdd9322
0.697851 ms  sha256       raw      64 bytes  ab0b3dc92d9badf238891185aa3211e149c2db25382c318469307380bcdd9322
0.310898 ms  sha3-224     hex      56 bytes  6094980fc65d1de54f0d3c88bbdbd483156978b0afd88d5164f3f820
0.410080 ms  sha3-224     raw      56 bytes  6094980fc65d1de54f0d3c88bbdbd483156978b0afd88d5164f3f820
0.289917 ms  sha3-256     hex      64 bytes  069d3c682a92766bf7ec61ee38649952724dee0b8120c2775f633302da06e348
0.308990 ms  sha3-256     raw      64 bytes  069d3c682a92766bf7ec61ee38649952724dee0b8120c2775f633302da06e348
0.504017 ms  sha3-384     hex      96 bytes  16c462d482db3ffd20738cea3efe2cff69851840c3e9259d2794c8d19a1640b53688a74275c05187463c7bd5ab13f625
0.391006 ms  sha3-384     raw      96 bytes  16c462d482db3ffd20738cea3efe2cff69851840c3e9259d2794c8d19a1640b53688a74275c05187463c7bd5ab13f625
0.735998 ms  sha3-512     hex     128 bytes  c1cfb695bcf4bee5a8f822a54f318ce53c1366a17f610726dbafbaf00ec4ef506465fa5b94d9cacfbe532109b62764d7af7f834d0adc4ed8c8c45069ec55eacf
0.629187 ms  sha3-512     raw     128 bytes  c1cfb695bcf4bee5a8f822a54f318ce53c1366a17f610726dbafbaf00ec4ef506465fa5b94d9cacfbe532109b62764d7af7f834d0adc4ed8c8c45069ec55eacf
0.347137 ms  sha384       hex      96 bytes  46ab48370550be4db188d9ec8dbb20c6b03f93efaef33605cccf3b2a027f56cce96692e6a19081e40b759b5329f60cab
0.382900 ms  sha384       raw      96 bytes  46ab48370550be4db188d9ec8dbb20c6b03f93efaef33605cccf3b2a027f56cce96692e6a19081e40b759b5329f60cab
0.381947 ms  sha512       hex     128 bytes  2d1b0525a9c0e5bca1d484edeb9e917dda7da77d359add51f9b78f5c395b3e33e1a17423e47b825d16c42d8d6d4a47831a7386e02f6af3ec2835debaea894188
0.530958 ms  sha512       raw     128 bytes  2d1b0525a9c0e5bca1d484edeb9e917dda7da77d359add51f9b78f5c395b3e33e1a17423e47b825d16c42d8d6d4a47831a7386e02f6af3ec2835debaea894188
0.421047 ms  sha512/224   hex      56 bytes  d107cae1e93130660383c21dab66c0a996db5331512691b151986877
0.344992 ms  sha512/224   raw      56 bytes  d107cae1e93130660383c21dab66c0a996db5331512691b151986877
0.463009 ms  sha512/256   hex      64 bytes  2de7d16d462dbbfe8d1bb5d883bbd8f79be904a986fe5cdbc04188ba058e7d34
0.326157 ms  sha512/256   raw      64 bytes  2de7d16d462dbbfe8d1bb5d883bbd8f79be904a986fe5cdbc04188ba058e7d34
3.457069 ms  snefru       hex      64 bytes  50e82b5fdc08099f4bd667fb5b2ac28d0629618e0dacaca51bf50f5531666f11
3.541946 ms  snefru       raw      64 bytes  50e82b5fdc08099f4bd667fb5b2ac28d0629618e0dacaca51bf50f5531666f11
3.450155 ms  snefru256    hex      64 bytes  50e82b5fdc08099f4bd667fb5b2ac28d0629618e0dacaca51bf50f5531666f11
3.525972 ms  snefru256    raw      64 bytes  50e82b5fdc08099f4bd667fb5b2ac28d0629618e0dacaca51bf50f5531666f11
0.216961 ms  tiger128,3   hex      32 bytes  4e00585712027836a95e533725130a1f
0.198126 ms  tiger128,3   raw      32 bytes  4e00585712027836a95e533725130a1f
0.298023 ms  tiger128,4   hex      32 bytes  6275036247cda0dc21fb7bd987dd713e
0.199795 ms  tiger128,4   raw      32 bytes  6275036247cda0dc21fb7bd987dd713e
0.157833 ms  tiger160,3   hex      40 bytes  4e00585712027836a95e533725130a1f8b79a868
0.154972 ms  tiger160,3   raw      40 bytes  4e00585712027836a95e533725130a1f8b79a868
0.200033 ms  tiger160,4   hex      40 bytes  6275036247cda0dc21fb7bd987dd713e4303ad26
0.219822 ms  tiger160,4   raw      40 bytes  6275036247cda0dc21fb7bd987dd713e4303ad26
0.156879 ms  tiger192,3   hex      48 bytes  4e00585712027836a95e533725130a1f8b79a86837841a61
0.176191 ms  tiger192,3   raw      48 bytes  4e00585712027836a95e533725130a1f8b79a86837841a61
0.314951 ms  tiger192,4   hex      48 bytes  6275036247cda0dc21fb7bd987dd713e4303ad263384e314
0.200987 ms  tiger192,4   raw      48 bytes  6275036247cda0dc21fb7bd987dd713e4303ad263384e314
1.020908 ms  whirlpool    hex     128 bytes  531e45258deac1f73042a9022f9e474d82b2111dec26dd6aeeea48e672f3c9a8c3fec0e444e3ed2143c82f305c421b67f3c531b5ffe661b370e86654a4254e61
0.981092 ms  whirlpool    raw     128 bytes  531e45258deac1f73042a9022f9e474d82b2111dec26dd6aeeea48e672f3c9a8c3fec0e444e3ed2143c82f305c421b67f3c531b5ffe661b370e86654a4254e61
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.051975 ms  adler32      raw       8 bytes  e50890b1
0.072956 ms  adler32      hex       8 bytes  e50890b1
0.102997 ms  fnv1a32      hex       8 bytes  726ac55e
0.103951 ms  fnv1a64      raw      16 bytes  0884e72feca0657e
0.103951 ms  fnv132       hex       8 bytes  3d4848a4
0.113964 ms  md4          raw      32 bytes  5515b4c355ecb2fd4d725c49811dda99
0.120878 ms  fnv164       hex      16 bytes  0fa1f201efbe0724
0.121832 ms  fnv132       raw       8 bytes  3d4848a4
0.123024 ms  md4          hex      32 bytes  5515b4c355ecb2fd4d725c49811dda99
0.123978 ms  fnv1a32      raw       8 bytes  726ac55e
0.128984 ms  joaat        raw       8 bytes  a1c7bafc
0.140905 ms  fnv164       raw      16 bytes  0fa1f201efbe0724
0.148058 ms  joaat        hex       8 bytes  a1c7bafc
0.154972 ms  tiger160,3   raw      40 bytes  4e00585712027836a95e533725130a1f8b79a868
0.156879 ms  tiger192,3   hex      48 bytes  4e00585712027836a95e533725130a1f8b79a86837841a61
0.157833 ms  tiger160,3   hex      40 bytes  4e00585712027836a95e533725130a1f8b79a868
0.159979 ms  md5          hex      32 bytes  426bb6e1d3ecbf1a8ba0af48b861125b
0.176191 ms  tiger192,3   raw      48 bytes  4e00585712027836a95e533725130a1f8b79a86837841a61
0.198126 ms  tiger128,3   raw      32 bytes  4e00585712027836a95e533725130a1f
0.199795 ms  tiger128,4   raw      32 bytes  6275036247cda0dc21fb7bd987dd713e
0.200033 ms  tiger160,4   hex      40 bytes  6275036247cda0dc21fb7bd987dd713e4303ad26
0.200987 ms  tiger192,4   raw      48 bytes  6275036247cda0dc21fb7bd987dd713e4303ad263384e314
0.206947 ms  sha1         raw      40 bytes  059eb32964bdf5e5accc92b034ad835255852205
0.216961 ms  tiger128,3   hex      32 bytes  4e00585712027836a95e533725130a1f
0.218153 ms  fnv1a64      hex      16 bytes  0884e72feca0657e
0.219822 ms  tiger160,4   raw      40 bytes  6275036247cda0dc21fb7bd987dd713e4303ad26
0.226974 ms  crc32b       hex       8 bytes  ad0d543d
0.227213 ms  crc32b       raw       8 bytes  ad0d543d
0.228882 ms  md5          raw      32 bytes  426bb6e1d3ecbf1a8ba0af48b861125b
0.229836 ms  sha1         hex      40 bytes  059eb32964bdf5e5accc92b034ad835255852205
0.247955 ms  crc32c       hex       8 bytes  c1b0c92d
0.279903 ms  crc32        hex       8 bytes  ab760bc7
0.289917 ms  sha3-256     hex      64 bytes  069d3c682a92766bf7ec61ee38649952724dee0b8120c2775f633302da06e348
0.298023 ms  tiger128,4   hex      32 bytes  6275036247cda0dc21fb7bd987dd713e
0.308990 ms  sha3-256     raw      64 bytes  069d3c682a92766bf7ec61ee38649952724dee0b8120c2775f633302da06e348
0.310898 ms  sha3-224     hex      56 bytes  6094980fc65d1de54f0d3c88bbdbd483156978b0afd88d5164f3f820
0.314951 ms  tiger192,4   hex      48 bytes  6275036247cda0dc21fb7bd987dd713e4303ad263384e314
0.326157 ms  sha512/256   raw      64 bytes  2de7d16d462dbbfe8d1bb5d883bbd8f79be904a986fe5cdbc04188ba058e7d34
0.336885 ms  haval256,3   raw      64 bytes  7c6cb9f83d9f3e3e13f5d137b5229138be25d763dfd93db9fddc6953a5b6c8d4
0.341177 ms  crc32c       raw       8 bytes  c1b0c92d
0.344992 ms  sha512/224   raw      56 bytes  d107cae1e93130660383c21dab66c0a996db5331512691b151986877
0.345945 ms  ripemd256    raw      64 bytes  960fb02c3336c3bef16e79a30e4ac1cb3430bd3bb4a9e3bd9e6a3f3b3d86871d
0.346184 ms  ripemd128    raw      32 bytes  2939be45ebc69110843386abd50c8d34
0.347137 ms  sha384       hex      96 bytes  46ab48370550be4db188d9ec8dbb20c6b03f93efaef33605cccf3b2a027f56cce96692e6a19081e40b759b5329f60cab
0.352859 ms  haval192,3   hex      48 bytes  a4472934c3d2456d1fae955669c2b7a8c09f05d5bd88f32d
0.355005 ms  haval224,3   raw      56 bytes  de632a2258b768a3087b73164fefefe68c9adfd16f1c03170617823d
0.373125 ms  haval160,3   hex      40 bytes  a646db2a105876499619c557f3d95133dc312f7b
0.373125 ms  haval192,3   raw      48 bytes  a4472934c3d2456d1fae955669c2b7a8c09f05d5bd88f32d
0.381947 ms  sha512       hex     128 bytes  2d1b0525a9c0e5bca1d484edeb9e917dda7da77d359add51f9b78f5c395b3e33e1a17423e47b825d16c42d8d6d4a47831a7386e02f6af3ec2835debaea894188
0.382900 ms  sha384       raw      96 bytes  46ab48370550be4db188d9ec8dbb20c6b03f93efaef33605cccf3b2a027f56cce96692e6a19081e40b759b5329f60cab
0.387192 ms  crc32        raw       8 bytes  ab760bc7
0.391006 ms  sha3-384     raw      96 bytes  16c462d482db3ffd20738cea3efe2cff69851840c3e9259d2794c8d19a1640b53688a74275c05187463c7bd5ab13f625
0.391960 ms  haval128,3   hex      32 bytes  0e436de887ffcda0e2506868bb23ef3a
0.407934 ms  ripemd128    hex      32 bytes  2939be45ebc69110843386abd50c8d34
0.410080 ms  sha3-224     raw      56 bytes  6094980fc65d1de54f0d3c88bbdbd483156978b0afd88d5164f3f820
0.421047 ms  sha512/224   hex      56 bytes  d107cae1e93130660383c21dab66c0a996db5331512691b151986877
0.426054 ms  ripemd256    hex      64 bytes  960fb02c3336c3bef16e79a30e4ac1cb3430bd3bb4a9e3bd9e6a3f3b3d86871d
0.432968 ms  haval128,3   raw      32 bytes  0e436de887ffcda0e2506868bb23ef3a
0.452042 ms  haval224,3   hex      56 bytes  de632a2258b768a3087b73164fefefe68c9adfd16f1c03170617823d
0.463009 ms  sha512/256   hex      64 bytes  2de7d16d462dbbfe8d1bb5d883bbd8f79be904a986fe5cdbc04188ba058e7d34
0.468016 ms  haval256,3   hex      64 bytes  7c6cb9f83d9f3e3e13f5d137b5229138be25d763dfd93db9fddc6953a5b6c8d4
0.472069 ms  haval160,3   raw      40 bytes  a646db2a105876499619c557f3d95133dc312f7b
0.482082 ms  haval128,4   raw      32 bytes  c23864926e1cefa3d91016faaba7e65b
0.499010 ms  haval160,4   raw      40 bytes  8eb87a547c1766b727aec47d8ede063c8b11666e
0.504017 ms  sha3-384     hex      96 bytes  16c462d482db3ffd20738cea3efe2cff69851840c3e9259d2794c8d19a1640b53688a74275c05187463c7bd5ab13f625
0.515938 ms  ripemd160    raw      40 bytes  d12ca8a36a4ed5097aa2913d80a4851cba15f6ee
0.521898 ms  haval192,4   raw      48 bytes  841001bb88287538402e82787598f281c8fb4cf297cc2140
0.530958 ms  sha512       raw     128 bytes  2d1b0525a9c0e5bca1d484edeb9e917dda7da77d359add51f9b78f5c395b3e33e1a17423e47b825d16c42d8d6d4a47831a7386e02f6af3ec2835debaea894188
0.533104 ms  haval256,4   hex      64 bytes  b21d895fbd5be7e34f6b0b8845fee4b52e31bd386804d488280063113f326db8
0.539064 ms  ripemd320    raw      80 bytes  7feef144a7e65ed4561b7809d39672407df72fb60e3547cd9636e04a9ea6ee5042127b03a1d66e7c
0.567913 ms  haval224,4   raw      56 bytes  96fd13080ffae804320d27137cf181a5c6c465295619754e1e86c44b
0.576973 ms  haval224,4   hex      56 bytes  96fd13080ffae804320d27137cf181a5c6c465295619754e1e86c44b
0.587940 ms  ripemd320    hex      80 bytes  7feef144a7e65ed4561b7809d39672407df72fb60e3547cd9636e04a9ea6ee5042127b03a1d66e7c
0.602007 ms  sha224       raw      56 bytes  408a1e78753c4c4ef78cc25bbdc1989140702217632ff69b85444b40
0.610828 ms  haval224,5   raw      56 bytes  7a52072ca8094c72edf881a7af2fe570a208a0702a9f0cfa0cbd66a9
0.611067 ms  haval192,4   hex      48 bytes  841001bb88287538402e82787598f281c8fb4cf297cc2140
0.613928 ms  haval160,4   hex      40 bytes  8eb87a547c1766b727aec47d8ede063c8b11666e
0.617027 ms  ripemd160    hex      40 bytes  d12ca8a36a4ed5097aa2913d80a4851cba15f6ee
0.629187 ms  sha3-512     raw     128 bytes  c1cfb695bcf4bee5a8f822a54f318ce53c1366a17f610726dbafbaf00ec4ef506465fa5b94d9cacfbe532109b62764d7af7f834d0adc4ed8c8c45069ec55eacf
0.630140 ms  haval128,5   hex      32 bytes  af475f48e404935a7e0f4e0ce12ac2fb
0.630856 ms  haval256,4   raw      64 bytes  b21d895fbd5be7e34f6b0b8845fee4b52e31bd386804d488280063113f326db8
0.634909 ms  haval128,4   hex      32 bytes  c23864926e1cefa3d91016faaba7e65b
0.667095 ms  haval160,5   raw      40 bytes  6d2e2dd6b86b78f00bd189e053a69cccebe8db66
0.687838 ms  haval192,5   hex      48 bytes  1897d40dcdb42dfd95bf199b579431e23fbbf09e49697283
0.696898 ms  sha256       hex      64 bytes  ab0b3dc92d9badf238891185aa3211e149c2db25382c318469307380bcdd9322
0.697851 ms  sha256       raw      64 bytes  ab0b3dc92d9badf238891185aa3211e149c2db25382c318469307380bcdd9322
0.718832 ms  sha224       hex      56 bytes  408a1e78753c4c4ef78cc25bbdc1989140702217632ff69b85444b40
0.724077 ms  haval128,5   raw      32 bytes  af475f48e404935a7e0f4e0ce12ac2fb
0.725985 ms  haval256,5   hex      64 bytes  c931c3e309d2e51e2f465fc4038d459769e457065c459cded3045a70ec3078de
0.731945 ms  haval160,5   hex      40 bytes  6d2e2dd6b86b78f00bd189e053a69cccebe8db66
0.735998 ms  sha3-512     hex     128 bytes  c1cfb695bcf4bee5a8f822a54f318ce53c1366a17f610726dbafbaf00ec4ef506465fa5b94d9cacfbe532109b62764d7af7f834d0adc4ed8c8c45069ec55eacf
0.739098 ms  haval224,5   hex      56 bytes  7a52072ca8094c72edf881a7af2fe570a208a0702a9f0cfa0cbd66a9
0.741959 ms  haval192,5   raw      48 bytes  1897d40dcdb42dfd95bf199b579431e23fbbf09e49697283
0.761986 ms  haval256,5   raw      64 bytes  c931c3e309d2e51e2f465fc4038d459769e457065c459cded3045a70ec3078de
0.981092 ms  whirlpool    raw     128 bytes  531e45258deac1f73042a9022f9e474d82b2111dec26dd6aeeea48e672f3c9a8c3fec0e444e3ed2143c82f305c421b67f3c531b5ffe661b370e86654a4254e61
1.020908 ms  whirlpool    hex     128 bytes  531e45258deac1f73042a9022f9e474d82b2111dec26dd6aeeea48e672f3c9a8c3fec0e444e3ed2143c82f305c421b67f3c531b5ffe661b370e86654a4254e61
1.645803 ms  gost         raw      64 bytes  f4ba8a28106161eb9674c1f84b8e56fec4937bc3d471e16b8a3a2c58384fa072
1.775980 ms  gost-crypto  raw      64 bytes  96eb4e5e56c38792f1bfc0b8b4b0c625233d08161f3247eaa3819208d31ab963
1.777887 ms  gost-crypto  hex      64 bytes  96eb4e5e56c38792f1bfc0b8b4b0c625233d08161f3247eaa3819208d31ab963
1.808167 ms  gost         hex      64 bytes  f4ba8a28106161eb9674c1f84b8e56fec4937bc3d471e16b8a3a2c58384fa072
3.450155 ms  snefru256    hex      64 bytes  50e82b5fdc08099f4bd667fb5b2ac28d0629618e0dacaca51bf50f5531666f11
3.457069 ms  snefru       hex      64 bytes  50e82b5fdc08099f4bd667fb5b2ac28d0629618e0dacaca51bf50f5531666f11
3.525972 ms  snefru256    raw      64 bytes  50e82b5fdc08099f4bd667fb5b2ac28d0629618e0dacaca51bf50f5531666f11
3.541946 ms  snefru       raw      64 bytes  50e82b5fdc08099f4bd667fb5b2ac28d0629618e0dacaca51bf50f5531666f11
12.507915 ms md2          raw      32 bytes  95bbc4d76d0a7c5c5c8fc46a3018e6f5
13.314962 ms md2          hex      32 bytes  95bbc4d76d0a7c5c5c8fc46a3018e6f5
```
