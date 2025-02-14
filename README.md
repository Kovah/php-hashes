# PHP 8.4 Hashes

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.

All other PHP Versions can be found [here](https://github.com/Kovah/php-hashes/branches).


## Calculate the results

Exact PHP version: 8.4.4  
Number of available hash algorithms: 60

The current results were calculated by running the following command on a MacBookPro18,3 with an 
Apple M1 Pro CPU. Current Docker Engine version is 27.5.1.

All results are based on a string with a fixed length of **200,000 characters**, generated with the `random_bytes()` function.

```bash
# Regular output to the CLI
docker run -it --rm -v "$PWD/hashes.php":/usr/src/hashes.php -w /usr/src php:8.4-cli php hashes.php
```

Additionally, for better statistical insights, you may generate a dataset which contains the execution times for all
available algorithms, each with regular string and raw binary output and each for string lengths ranging from 512
characters up to 2^25 (~33 mil) characters.  
You can generate the csv file with the following command:

```bash
# Output to a csv file
docker run -it --rm -v "$PWD":/usr/src/app -w /usr/src/app php:8.4-cli php hashes-csv.php
```

Please notice that the resulting csv file uses the semicolon as a delimiter and all numeric values use the dot as a
decimal separator.


## Results

### Sorted by algorithm name

```
Time         Algorithm    Method     Length  Hash
0.124931 ms  adler32      hex       8 bytes  b5df5130
0.123978 ms  adler32      raw       8 bytes  b5df5130
0.496149 ms  crc32        hex       8 bytes  7969a188
0.511885 ms  crc32        raw       8 bytes  7969a188
0.495911 ms  crc32b       hex       8 bytes  d972e236
0.502110 ms  crc32b       raw       8 bytes  d972e236
0.546932 ms  crc32c       hex       8 bytes  9758443e
0.518084 ms  crc32c       raw       8 bytes  9758443e
0.247955 ms  fnv132       hex       8 bytes  e8568273
0.247955 ms  fnv132       raw       8 bytes  e8568273
0.247955 ms  fnv164       hex      16 bytes  e730af6bec350593
0.258207 ms  fnv164       raw      16 bytes  e730af6bec350593
0.254154 ms  fnv1a32      hex       8 bytes  931e011b
0.254869 ms  fnv1a32      raw       8 bytes  931e011b
0.279903 ms  fnv1a64      hex      16 bytes  3c80f590794ff7bb
0.269890 ms  fnv1a64      raw      16 bytes  3c80f590794ff7bb
2.817869 ms  gost         hex      64 bytes  e99f86b0fcd76aafcbafa2cb2f7c5e355d0f209d10596d8a6dbdddab68bed1c6
2.786875 ms  gost         raw      64 bytes  e99f86b0fcd76aafcbafa2cb2f7c5e355d0f209d10596d8a6dbdddab68bed1c6
2.775908 ms  gost-crypto  hex      64 bytes  693f67e520fe0fee0d0ba7727652431b6038202516ddc483fc4c956f50b89001
2.774954 ms  gost-crypto  raw      64 bytes  693f67e520fe0fee0d0ba7727652431b6038202516ddc483fc4c956f50b89001
0.701904 ms  haval128,3   hex      32 bytes  b5fc09d1398fec5b10e70e8d3055e73b
0.692129 ms  haval128,3   raw      32 bytes  b5fc09d1398fec5b10e70e8d3055e73b
0.983953 ms  haval128,4   hex      32 bytes  e9b681192b0392b3bdaa634514603d7d
0.993013 ms  haval128,4   raw      32 bytes  e9b681192b0392b3bdaa634514603d7d
1.178980 ms  haval128,5   hex      32 bytes  417b01f9da274675eb976a32dabe63cc
1.174927 ms  haval128,5   raw      32 bytes  417b01f9da274675eb976a32dabe63cc
0.709057 ms  haval160,3   hex      40 bytes  91640ffd3b5947ea04bd4d4e324dbf3f3045e1d5
0.733852 ms  haval160,3   raw      40 bytes  91640ffd3b5947ea04bd4d4e324dbf3f3045e1d5
0.996113 ms  haval160,4   hex      40 bytes  75ca722309b929e8959c43893e1f0ec9b1e53254
0.973940 ms  haval160,4   raw      40 bytes  75ca722309b929e8959c43893e1f0ec9b1e53254
1.192093 ms  haval160,5   hex      40 bytes  4c4115f2bca020c7df640af38e6073c3aff7a273
1.203060 ms  haval160,5   raw      40 bytes  4c4115f2bca020c7df640af38e6073c3aff7a273
0.700951 ms  haval192,3   hex      48 bytes  c746c5caab0de966384665d9761dcaa46b104bf999e7d8f2
0.691891 ms  haval192,3   raw      48 bytes  c746c5caab0de966384665d9761dcaa46b104bf999e7d8f2
1.007080 ms  haval192,4   hex      48 bytes  cc2ce49dd9d6c0176b5e3eaf926123ec3880e71ea9c113ae
1.024008 ms  haval192,4   raw      48 bytes  cc2ce49dd9d6c0176b5e3eaf926123ec3880e71ea9c113ae
1.211882 ms  haval192,5   hex      48 bytes  2cd5500bfb05beeda6c6eb8e13857128d20b7614a5b2a0d9
1.182079 ms  haval192,5   raw      48 bytes  2cd5500bfb05beeda6c6eb8e13857128d20b7614a5b2a0d9
0.705957 ms  haval224,3   hex      56 bytes  9278325d460daffde96e58edfc841c4d964e1c8273864a38b4baa295
0.697136 ms  haval224,3   raw      56 bytes  9278325d460daffde96e58edfc841c4d964e1c8273864a38b4baa295
0.978947 ms  haval224,4   hex      56 bytes  14977b10e2cc4d7ee428581e5620a44661b5f140af2b06cbd797c126
0.970125 ms  haval224,4   raw      56 bytes  14977b10e2cc4d7ee428581e5620a44661b5f140af2b06cbd797c126
1.189947 ms  haval224,5   hex      56 bytes  968a3c339ac6bbe75d1bc66be22f345f1968c432c1d70762bba591b9
1.188993 ms  haval224,5   raw      56 bytes  968a3c339ac6bbe75d1bc66be22f345f1968c432c1d70762bba591b9
0.702858 ms  haval256,3   hex      64 bytes  942ce764723ad0bd70d859de8693cb36e3009d4376e2d390b8501e78ff2b6661
0.708103 ms  haval256,3   raw      64 bytes  942ce764723ad0bd70d859de8693cb36e3009d4376e2d390b8501e78ff2b6661
1.005888 ms  haval256,4   hex      64 bytes  10d48f7a26729706096a2706274703fa3485dddb1eb6f8da179fa9f01f2ec18b
1.015186 ms  haval256,4   raw      64 bytes  10d48f7a26729706096a2706274703fa3485dddb1eb6f8da179fa9f01f2ec18b
1.178026 ms  haval256,5   hex      64 bytes  e8050e5fbd95fcd05ab1d30e640d0f105751a581ba073d2c56bdbcd31a35d519
1.204014 ms  haval256,5   raw      64 bytes  e8050e5fbd95fcd05ab1d30e640d0f105751a581ba073d2c56bdbcd31a35d519
0.309944 ms  joaat        hex       8 bytes  52e7ddea
0.350952 ms  joaat        raw       8 bytes  52e7ddea
21.739960 ms md2          hex      32 bytes  72ebaa59f54c1f0f6a3d7da7197e4e3c
20.694017 ms md2          raw      32 bytes  72ebaa59f54c1f0f6a3d7da7197e4e3c
0.312090 ms  md4          hex      32 bytes  29d732cbf7f312d84e951c1311030547
0.295877 ms  md4          raw      32 bytes  29d732cbf7f312d84e951c1311030547
0.396013 ms  md5          hex      32 bytes  92d83e14f0d4fbf778f1467a2368d152
0.394106 ms  md5          raw      32 bytes  92d83e14f0d4fbf778f1467a2368d152
0.087023 ms  murmur3a     hex       8 bytes  55539bd3
0.088930 ms  murmur3a     raw       8 bytes  55539bd3
0.045061 ms  murmur3c     hex      32 bytes  f68b85ec5c18e26d0aa3c7b81cd83c1c
0.044107 ms  murmur3c     raw      32 bytes  f68b85ec5c18e26d0aa3c7b81cd83c1c
0.036955 ms  murmur3f     hex      32 bytes  594d00eb698d41cc708a8ac550c4369a
0.036001 ms  murmur3f     raw      32 bytes  594d00eb698d41cc708a8ac550c4369a
0.437021 ms  ripemd128    hex      32 bytes  9692e17ec336800a2aa6fcb14caf6552
0.441074 ms  ripemd128    raw      32 bytes  9692e17ec336800a2aa6fcb14caf6552
0.616074 ms  ripemd160    hex      40 bytes  e96741af326932cebff7d7a6e97015db642911ff
0.620842 ms  ripemd160    raw      40 bytes  e96741af326932cebff7d7a6e97015db642911ff
0.491142 ms  ripemd256    hex      64 bytes  721e7663504552596503100243d3c16f9bfa713ffaafd3a7d695d9762a9d18df
0.498056 ms  ripemd256    raw      64 bytes  721e7663504552596503100243d3c16f9bfa713ffaafd3a7d695d9762a9d18df
0.643015 ms  ripemd320    hex      80 bytes  b1e1cf5c9a7e21c98b17bdc05667455598459cfd7eb860fe1f90f25d866287cd8ba2ffafd1d4895e
0.654221 ms  ripemd320    raw      80 bytes  b1e1cf5c9a7e21c98b17bdc05667455598459cfd7eb860fe1f90f25d866287cd8ba2ffafd1d4895e
0.329971 ms  sha1         hex      40 bytes  4f87bdb16a542d2e9a1bb7c5f59e3bf49d91d592
0.329971 ms  sha1         raw      40 bytes  4f87bdb16a542d2e9a1bb7c5f59e3bf49d91d592
1.634121 ms  sha224       hex      56 bytes  f3e523598d20ad58aa56d0e923c17db6edaf3296c3474719c4c6ad6c
1.566887 ms  sha224       raw      56 bytes  f3e523598d20ad58aa56d0e923c17db6edaf3296c3474719c4c6ad6c
1.561165 ms  sha256       hex      64 bytes  8cbe020fef54b0022a60edc374058efdff6b9ab1c21033e40f9b99d246979042
1.623869 ms  sha256       raw      64 bytes  8cbe020fef54b0022a60edc374058efdff6b9ab1c21033e40f9b99d246979042
0.325918 ms  sha3-224     hex      56 bytes  9883bfa09a03a2e6f19cd52aed570527d01e328f458313359889c34f
0.300169 ms  sha3-224     raw      56 bytes  9883bfa09a03a2e6f19cd52aed570527d01e328f458313359889c34f
0.315905 ms  sha3-256     hex      64 bytes  b29e16e2bb50b86a9e3f8a76f969e952bffebb2ecdb1de8b1b753ab220037fc4
0.326157 ms  sha3-256     raw      64 bytes  b29e16e2bb50b86a9e3f8a76f969e952bffebb2ecdb1de8b1b753ab220037fc4
0.415802 ms  sha3-384     hex      96 bytes  3c1ef7d6929d5ce885acaab738af44f54ee5fc792ebe397ab0ee5bb5ec08a848a699b5b42d642c1a236682c69695a365
0.454903 ms  sha3-384     raw      96 bytes  3c1ef7d6929d5ce885acaab738af44f54ee5fc792ebe397ab0ee5bb5ec08a848a699b5b42d642c1a236682c69695a365
0.612974 ms  sha3-512     hex     128 bytes  f6815c50a663eb0df93a9926bcaec8ae6e5305eca7a8475a2df11a1bf69d2ca4b89188f7a704a3ce1fa243f76d7066218501e37c1622316c49e564549c7ff8e7
0.617981 ms  sha3-512     raw     128 bytes  f6815c50a663eb0df93a9926bcaec8ae6e5305eca7a8475a2df11a1bf69d2ca4b89188f7a704a3ce1fa243f76d7066218501e37c1622316c49e564549c7ff8e7
0.648975 ms  sha384       hex      96 bytes  8101b6504fadc26918c55ea19ba4718a467ffe6e23033aa825a2d5f2f487417fb5ee39e82b708ebbad78cbd9d6b7c217
0.651121 ms  sha384       raw      96 bytes  8101b6504fadc26918c55ea19ba4718a467ffe6e23033aa825a2d5f2f487417fb5ee39e82b708ebbad78cbd9d6b7c217
0.648975 ms  sha512       hex     128 bytes  01a811f61df5c59fd504d7c77875127a60c6d89fbd8534bd82d7266bb4699089bb9da19b0820d7efd7d3e1399b1a6fd286f138a729795c9d9d02da682717e684
0.639915 ms  sha512       raw     128 bytes  01a811f61df5c59fd504d7c77875127a60c6d89fbd8534bd82d7266bb4699089bb9da19b0820d7efd7d3e1399b1a6fd286f138a729795c9d9d02da682717e684
0.637054 ms  sha512/224   hex      56 bytes  d7024aae312bfa21531c7a7bae15a699052aa6c550f3b6b93502515c
0.652075 ms  sha512/224   raw      56 bytes  d7024aae312bfa21531c7a7bae15a699052aa6c550f3b6b93502515c
0.687838 ms  sha512/256   hex      64 bytes  9e6543a312adb05e3d81886611ec1da7773c1cfdbc0f6f9b979b072f347404ba
0.737906 ms  sha512/256   raw      64 bytes  9e6543a312adb05e3d81886611ec1da7773c1cfdbc0f6f9b979b072f347404ba
6.305933 ms  snefru       hex      64 bytes  2c261dfb61cbbe2ef60c023362c2d2edd807de9881873330e54439ba6382b960
6.421089 ms  snefru       raw      64 bytes  2c261dfb61cbbe2ef60c023362c2d2edd807de9881873330e54439ba6382b960
6.459951 ms  snefru256    hex      64 bytes  2c261dfb61cbbe2ef60c023362c2d2edd807de9881873330e54439ba6382b960
6.562233 ms  snefru256    raw      64 bytes  2c261dfb61cbbe2ef60c023362c2d2edd807de9881873330e54439ba6382b960
0.280142 ms  tiger128,3   hex      32 bytes  7040b35caee71aa04a36bd4396f7f586
0.288010 ms  tiger128,3   raw      32 bytes  7040b35caee71aa04a36bd4396f7f586
0.425100 ms  tiger128,4   hex      32 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d1
0.367880 ms  tiger128,4   raw      32 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d1
0.277996 ms  tiger160,3   hex      40 bytes  7040b35caee71aa04a36bd4396f7f58630b54bd5
0.313997 ms  tiger160,3   raw      40 bytes  7040b35caee71aa04a36bd4396f7f58630b54bd5
0.368834 ms  tiger160,4   hex      40 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d10723d7c4
0.383139 ms  tiger160,4   raw      40 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d10723d7c4
0.278950 ms  tiger192,3   hex      48 bytes  7040b35caee71aa04a36bd4396f7f58630b54bd5594db7a2
0.277996 ms  tiger192,3   raw      48 bytes  7040b35caee71aa04a36bd4396f7f58630b54bd5594db7a2
0.389814 ms  tiger192,4   hex      48 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d10723d7c401d501b3
0.394106 ms  tiger192,4   raw      48 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d10723d7c401d501b3
0.735044 ms  whirlpool    hex     128 bytes  63965c46f2bb32bf50dacb59d27b3a8e0bc77a4295dc4fc0a8c532b018827cbc175e677cdca01daf6a2b589acade9fc13cc6940b8dc06e21ea72eccb46780d30
0.746965 ms  whirlpool    raw     128 bytes  63965c46f2bb32bf50dacb59d27b3a8e0bc77a4295dc4fc0a8c532b018827cbc175e677cdca01daf6a2b589acade9fc13cc6940b8dc06e21ea72eccb46780d30
0.028133 ms  xxh128       hex      32 bytes  d7fa5a78e9321791b6691a60c9c714f6
0.027895 ms  xxh128       raw      32 bytes  d7fa5a78e9321791b6691a60c9c714f6
0.028849 ms  xxh3         hex      16 bytes  b6691a60c9c714f6
0.027895 ms  xxh3         raw      16 bytes  b6691a60c9c714f6
0.027895 ms  xxh32        hex       8 bytes  62b64f3f
0.026941 ms  xxh32        raw       8 bytes  62b64f3f
0.015974 ms  xxh64        hex      16 bytes  c10415d8d8de6bce
0.014067 ms  xxh64        raw      16 bytes  c10415d8d8de6bce
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.014067 ms  xxh64        raw      16 bytes  c10415d8d8de6bce
0.015974 ms  xxh64        hex      16 bytes  c10415d8d8de6bce
0.026941 ms  xxh32        raw       8 bytes  62b64f3f
0.027895 ms  xxh32        hex       8 bytes  62b64f3f
0.027895 ms  xxh3         raw      16 bytes  b6691a60c9c714f6
0.027895 ms  xxh128       raw      32 bytes  d7fa5a78e9321791b6691a60c9c714f6
0.028133 ms  xxh128       hex      32 bytes  d7fa5a78e9321791b6691a60c9c714f6
0.028849 ms  xxh3         hex      16 bytes  b6691a60c9c714f6
0.036001 ms  murmur3f     raw      32 bytes  594d00eb698d41cc708a8ac550c4369a
0.036955 ms  murmur3f     hex      32 bytes  594d00eb698d41cc708a8ac550c4369a
0.044107 ms  murmur3c     raw      32 bytes  f68b85ec5c18e26d0aa3c7b81cd83c1c
0.045061 ms  murmur3c     hex      32 bytes  f68b85ec5c18e26d0aa3c7b81cd83c1c
0.087023 ms  murmur3a     hex       8 bytes  55539bd3
0.088930 ms  murmur3a     raw       8 bytes  55539bd3
0.123978 ms  adler32      raw       8 bytes  b5df5130
0.124931 ms  adler32      hex       8 bytes  b5df5130
0.247955 ms  fnv132       hex       8 bytes  e8568273
0.247955 ms  fnv132       raw       8 bytes  e8568273
0.247955 ms  fnv164       hex      16 bytes  e730af6bec350593
0.254154 ms  fnv1a32      hex       8 bytes  931e011b
0.254869 ms  fnv1a32      raw       8 bytes  931e011b
0.258207 ms  fnv164       raw      16 bytes  e730af6bec350593
0.269890 ms  fnv1a64      raw      16 bytes  3c80f590794ff7bb
0.277996 ms  tiger160,3   hex      40 bytes  7040b35caee71aa04a36bd4396f7f58630b54bd5
0.277996 ms  tiger192,3   raw      48 bytes  7040b35caee71aa04a36bd4396f7f58630b54bd5594db7a2
0.278950 ms  tiger192,3   hex      48 bytes  7040b35caee71aa04a36bd4396f7f58630b54bd5594db7a2
0.279903 ms  fnv1a64      hex      16 bytes  3c80f590794ff7bb
0.280142 ms  tiger128,3   hex      32 bytes  7040b35caee71aa04a36bd4396f7f586
0.288010 ms  tiger128,3   raw      32 bytes  7040b35caee71aa04a36bd4396f7f586
0.295877 ms  md4          raw      32 bytes  29d732cbf7f312d84e951c1311030547
0.300169 ms  sha3-224     raw      56 bytes  9883bfa09a03a2e6f19cd52aed570527d01e328f458313359889c34f
0.309944 ms  joaat        hex       8 bytes  52e7ddea
0.312090 ms  md4          hex      32 bytes  29d732cbf7f312d84e951c1311030547
0.313997 ms  tiger160,3   raw      40 bytes  7040b35caee71aa04a36bd4396f7f58630b54bd5
0.315905 ms  sha3-256     hex      64 bytes  b29e16e2bb50b86a9e3f8a76f969e952bffebb2ecdb1de8b1b753ab220037fc4
0.325918 ms  sha3-224     hex      56 bytes  9883bfa09a03a2e6f19cd52aed570527d01e328f458313359889c34f
0.326157 ms  sha3-256     raw      64 bytes  b29e16e2bb50b86a9e3f8a76f969e952bffebb2ecdb1de8b1b753ab220037fc4
0.329971 ms  sha1         hex      40 bytes  4f87bdb16a542d2e9a1bb7c5f59e3bf49d91d592
0.329971 ms  sha1         raw      40 bytes  4f87bdb16a542d2e9a1bb7c5f59e3bf49d91d592
0.350952 ms  joaat        raw       8 bytes  52e7ddea
0.367880 ms  tiger128,4   raw      32 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d1
0.368834 ms  tiger160,4   hex      40 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d10723d7c4
0.383139 ms  tiger160,4   raw      40 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d10723d7c4
0.389814 ms  tiger192,4   hex      48 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d10723d7c401d501b3
0.394106 ms  md5          raw      32 bytes  92d83e14f0d4fbf778f1467a2368d152
0.394106 ms  tiger192,4   raw      48 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d10723d7c401d501b3
0.396013 ms  md5          hex      32 bytes  92d83e14f0d4fbf778f1467a2368d152
0.415802 ms  sha3-384     hex      96 bytes  3c1ef7d6929d5ce885acaab738af44f54ee5fc792ebe397ab0ee5bb5ec08a848a699b5b42d642c1a236682c69695a365
0.425100 ms  tiger128,4   hex      32 bytes  c0bcb3e5cee96892f8b2aa2af3f0e8d1
0.437021 ms  ripemd128    hex      32 bytes  9692e17ec336800a2aa6fcb14caf6552
0.441074 ms  ripemd128    raw      32 bytes  9692e17ec336800a2aa6fcb14caf6552
0.454903 ms  sha3-384     raw      96 bytes  3c1ef7d6929d5ce885acaab738af44f54ee5fc792ebe397ab0ee5bb5ec08a848a699b5b42d642c1a236682c69695a365
0.491142 ms  ripemd256    hex      64 bytes  721e7663504552596503100243d3c16f9bfa713ffaafd3a7d695d9762a9d18df
0.495911 ms  crc32b       hex       8 bytes  d972e236
0.496149 ms  crc32        hex       8 bytes  7969a188
0.498056 ms  ripemd256    raw      64 bytes  721e7663504552596503100243d3c16f9bfa713ffaafd3a7d695d9762a9d18df
0.502110 ms  crc32b       raw       8 bytes  d972e236
0.511885 ms  crc32        raw       8 bytes  7969a188
0.518084 ms  crc32c       raw       8 bytes  9758443e
0.546932 ms  crc32c       hex       8 bytes  9758443e
0.612974 ms  sha3-512     hex     128 bytes  f6815c50a663eb0df93a9926bcaec8ae6e5305eca7a8475a2df11a1bf69d2ca4b89188f7a704a3ce1fa243f76d7066218501e37c1622316c49e564549c7ff8e7
0.616074 ms  ripemd160    hex      40 bytes  e96741af326932cebff7d7a6e97015db642911ff
0.617981 ms  sha3-512     raw     128 bytes  f6815c50a663eb0df93a9926bcaec8ae6e5305eca7a8475a2df11a1bf69d2ca4b89188f7a704a3ce1fa243f76d7066218501e37c1622316c49e564549c7ff8e7
0.620842 ms  ripemd160    raw      40 bytes  e96741af326932cebff7d7a6e97015db642911ff
0.637054 ms  sha512/224   hex      56 bytes  d7024aae312bfa21531c7a7bae15a699052aa6c550f3b6b93502515c
0.639915 ms  sha512       raw     128 bytes  01a811f61df5c59fd504d7c77875127a60c6d89fbd8534bd82d7266bb4699089bb9da19b0820d7efd7d3e1399b1a6fd286f138a729795c9d9d02da682717e684
0.643015 ms  ripemd320    hex      80 bytes  b1e1cf5c9a7e21c98b17bdc05667455598459cfd7eb860fe1f90f25d866287cd8ba2ffafd1d4895e
0.648975 ms  sha384       hex      96 bytes  8101b6504fadc26918c55ea19ba4718a467ffe6e23033aa825a2d5f2f487417fb5ee39e82b708ebbad78cbd9d6b7c217
0.648975 ms  sha512       hex     128 bytes  01a811f61df5c59fd504d7c77875127a60c6d89fbd8534bd82d7266bb4699089bb9da19b0820d7efd7d3e1399b1a6fd286f138a729795c9d9d02da682717e684
0.651121 ms  sha384       raw      96 bytes  8101b6504fadc26918c55ea19ba4718a467ffe6e23033aa825a2d5f2f487417fb5ee39e82b708ebbad78cbd9d6b7c217
0.652075 ms  sha512/224   raw      56 bytes  d7024aae312bfa21531c7a7bae15a699052aa6c550f3b6b93502515c
0.654221 ms  ripemd320    raw      80 bytes  b1e1cf5c9a7e21c98b17bdc05667455598459cfd7eb860fe1f90f25d866287cd8ba2ffafd1d4895e
0.687838 ms  sha512/256   hex      64 bytes  9e6543a312adb05e3d81886611ec1da7773c1cfdbc0f6f9b979b072f347404ba
0.691891 ms  haval192,3   raw      48 bytes  c746c5caab0de966384665d9761dcaa46b104bf999e7d8f2
0.692129 ms  haval128,3   raw      32 bytes  b5fc09d1398fec5b10e70e8d3055e73b
0.697136 ms  haval224,3   raw      56 bytes  9278325d460daffde96e58edfc841c4d964e1c8273864a38b4baa295
0.700951 ms  haval192,3   hex      48 bytes  c746c5caab0de966384665d9761dcaa46b104bf999e7d8f2
0.701904 ms  haval128,3   hex      32 bytes  b5fc09d1398fec5b10e70e8d3055e73b
0.702858 ms  haval256,3   hex      64 bytes  942ce764723ad0bd70d859de8693cb36e3009d4376e2d390b8501e78ff2b6661
0.705957 ms  haval224,3   hex      56 bytes  9278325d460daffde96e58edfc841c4d964e1c8273864a38b4baa295
0.708103 ms  haval256,3   raw      64 bytes  942ce764723ad0bd70d859de8693cb36e3009d4376e2d390b8501e78ff2b6661
0.709057 ms  haval160,3   hex      40 bytes  91640ffd3b5947ea04bd4d4e324dbf3f3045e1d5
0.733852 ms  haval160,3   raw      40 bytes  91640ffd3b5947ea04bd4d4e324dbf3f3045e1d5
0.735044 ms  whirlpool    hex     128 bytes  63965c46f2bb32bf50dacb59d27b3a8e0bc77a4295dc4fc0a8c532b018827cbc175e677cdca01daf6a2b589acade9fc13cc6940b8dc06e21ea72eccb46780d30
0.737906 ms  sha512/256   raw      64 bytes  9e6543a312adb05e3d81886611ec1da7773c1cfdbc0f6f9b979b072f347404ba
0.746965 ms  whirlpool    raw     128 bytes  63965c46f2bb32bf50dacb59d27b3a8e0bc77a4295dc4fc0a8c532b018827cbc175e677cdca01daf6a2b589acade9fc13cc6940b8dc06e21ea72eccb46780d30
0.970125 ms  haval224,4   raw      56 bytes  14977b10e2cc4d7ee428581e5620a44661b5f140af2b06cbd797c126
0.973940 ms  haval160,4   raw      40 bytes  75ca722309b929e8959c43893e1f0ec9b1e53254
0.978947 ms  haval224,4   hex      56 bytes  14977b10e2cc4d7ee428581e5620a44661b5f140af2b06cbd797c126
0.983953 ms  haval128,4   hex      32 bytes  e9b681192b0392b3bdaa634514603d7d
0.993013 ms  haval128,4   raw      32 bytes  e9b681192b0392b3bdaa634514603d7d
0.996113 ms  haval160,4   hex      40 bytes  75ca722309b929e8959c43893e1f0ec9b1e53254
1.005888 ms  haval256,4   hex      64 bytes  10d48f7a26729706096a2706274703fa3485dddb1eb6f8da179fa9f01f2ec18b
1.007080 ms  haval192,4   hex      48 bytes  cc2ce49dd9d6c0176b5e3eaf926123ec3880e71ea9c113ae
1.015186 ms  haval256,4   raw      64 bytes  10d48f7a26729706096a2706274703fa3485dddb1eb6f8da179fa9f01f2ec18b
1.024008 ms  haval192,4   raw      48 bytes  cc2ce49dd9d6c0176b5e3eaf926123ec3880e71ea9c113ae
1.174927 ms  haval128,5   raw      32 bytes  417b01f9da274675eb976a32dabe63cc
1.178026 ms  haval256,5   hex      64 bytes  e8050e5fbd95fcd05ab1d30e640d0f105751a581ba073d2c56bdbcd31a35d519
1.178980 ms  haval128,5   hex      32 bytes  417b01f9da274675eb976a32dabe63cc
1.182079 ms  haval192,5   raw      48 bytes  2cd5500bfb05beeda6c6eb8e13857128d20b7614a5b2a0d9
1.188993 ms  haval224,5   raw      56 bytes  968a3c339ac6bbe75d1bc66be22f345f1968c432c1d70762bba591b9
1.189947 ms  haval224,5   hex      56 bytes  968a3c339ac6bbe75d1bc66be22f345f1968c432c1d70762bba591b9
1.192093 ms  haval160,5   hex      40 bytes  4c4115f2bca020c7df640af38e6073c3aff7a273
1.203060 ms  haval160,5   raw      40 bytes  4c4115f2bca020c7df640af38e6073c3aff7a273
1.204014 ms  haval256,5   raw      64 bytes  e8050e5fbd95fcd05ab1d30e640d0f105751a581ba073d2c56bdbcd31a35d519
1.211882 ms  haval192,5   hex      48 bytes  2cd5500bfb05beeda6c6eb8e13857128d20b7614a5b2a0d9
1.561165 ms  sha256       hex      64 bytes  8cbe020fef54b0022a60edc374058efdff6b9ab1c21033e40f9b99d246979042
1.566887 ms  sha224       raw      56 bytes  f3e523598d20ad58aa56d0e923c17db6edaf3296c3474719c4c6ad6c
1.623869 ms  sha256       raw      64 bytes  8cbe020fef54b0022a60edc374058efdff6b9ab1c21033e40f9b99d246979042
1.634121 ms  sha224       hex      56 bytes  f3e523598d20ad58aa56d0e923c17db6edaf3296c3474719c4c6ad6c
2.774954 ms  gost-crypto  raw      64 bytes  693f67e520fe0fee0d0ba7727652431b6038202516ddc483fc4c956f50b89001
2.775908 ms  gost-crypto  hex      64 bytes  693f67e520fe0fee0d0ba7727652431b6038202516ddc483fc4c956f50b89001
2.786875 ms  gost         raw      64 bytes  e99f86b0fcd76aafcbafa2cb2f7c5e355d0f209d10596d8a6dbdddab68bed1c6
2.817869 ms  gost         hex      64 bytes  e99f86b0fcd76aafcbafa2cb2f7c5e355d0f209d10596d8a6dbdddab68bed1c6
6.305933 ms  snefru       hex      64 bytes  2c261dfb61cbbe2ef60c023362c2d2edd807de9881873330e54439ba6382b960
6.421089 ms  snefru       raw      64 bytes  2c261dfb61cbbe2ef60c023362c2d2edd807de9881873330e54439ba6382b960
6.459951 ms  snefru256    hex      64 bytes  2c261dfb61cbbe2ef60c023362c2d2edd807de9881873330e54439ba6382b960
6.562233 ms  snefru256    raw      64 bytes  2c261dfb61cbbe2ef60c023362c2d2edd807de9881873330e54439ba6382b960
20.694017 ms md2          raw      32 bytes  72ebaa59f54c1f0f6a3d7da7197e4e3c
21.739960 ms md2          hex      32 bytes  72ebaa59f54c1f0f6a3d7da7197e4e3c
```
