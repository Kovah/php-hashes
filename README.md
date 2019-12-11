# PHP 7.4 Hashes

Exact PHP version: 7.4.0  
Number of available hash algorithms: 53

All PHP Versions: [7.1](https://github.com/Kovah/php-hashes/tree/7.1) | [7.2](https://github.com/Kovah/php-hashes/tree/7.2) | [7.3](https://github.com/Kovah/php-hashes/tree/7.3) | [7.4](https://github.com/Kovah/php-hashes/tree/7.4)

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro15,1 with an 
Intel i7 (6x 2.2GHz) CPU. Current Docker version is 19.03.4, build 9013bf5.

All results are based on a string with a fixed length of 1024 characters, generated with the `random_bytes()` function.

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
0.008106 ms  adler32      hex       8 bytes  e71e18e5
0.007153 ms  adler32      raw       8 bytes  e71e18e5
0.010967 ms  crc32        hex       8 bytes  3e6c1584
0.075817 ms  crc32        raw       8 bytes  3e6c1584
0.010014 ms  crc32b       hex       8 bytes  bbc7c46f
0.010014 ms  crc32b       raw       8 bytes  bbc7c46f
0.009060 ms  crc32c       hex       8 bytes  e6bafd0e
0.045061 ms  crc32c       raw       8 bytes  e6bafd0e
0.008106 ms  fnv132       hex       8 bytes  85a5e2b6
0.009060 ms  fnv132       raw       8 bytes  85a5e2b6
0.009060 ms  fnv164       hex      16 bytes  78aee8978ff4f6b6
0.009060 ms  fnv164       raw      16 bytes  78aee8978ff4f6b6
0.009060 ms  fnv1a32      hex       8 bytes  7d9242d8
0.008106 ms  fnv1a32      raw       8 bytes  7d9242d8
0.008821 ms  fnv1a64      hex      16 bytes  dd6286e39422cf38
0.007868 ms  fnv1a64      raw      16 bytes  dd6286e39422cf38
0.028849 ms  gost         hex      64 bytes  c736dd8890a0b8374d9b4d3bbbc398f4c02e9a847b9a1a5ca65ea1e975c0e712
0.070095 ms  gost         raw      64 bytes  c736dd8890a0b8374d9b4d3bbbc398f4c02e9a847b9a1a5ca65ea1e975c0e712
0.024080 ms  gost-crypto  hex      64 bytes  4a3b1863d72f0529bb0e943f294b7bde380b53b7e8946798401118f0561859da
0.089169 ms  gost-crypto  raw      64 bytes  4a3b1863d72f0529bb0e943f294b7bde380b53b7e8946798401118f0561859da
0.012875 ms  haval128,3   hex      32 bytes  f52af87434e595064195b2d38d41fdcb
0.011921 ms  haval128,3   raw      32 bytes  f52af87434e595064195b2d38d41fdcb
0.014067 ms  haval128,4   hex      32 bytes  dd81624b319411586e72660a8a8e81ec
0.011921 ms  haval128,4   raw      32 bytes  dd81624b319411586e72660a8a8e81ec
0.015020 ms  haval128,5   hex      32 bytes  51922a56b0d10cb5176c16def438b2ca
0.009060 ms  haval128,5   raw      32 bytes  51922a56b0d10cb5176c16def438b2ca
0.010967 ms  haval160,3   hex      40 bytes  6e5b2c5ec3546a44484c848fd752e38b91866876
0.011921 ms  haval160,3   raw      40 bytes  6e5b2c5ec3546a44484c848fd752e38b91866876
0.078917 ms  haval160,4   hex      40 bytes  70ddcff87c81d490087684667bd94ce3cc23567c
0.014067 ms  haval160,4   raw      40 bytes  70ddcff87c81d490087684667bd94ce3cc23567c
0.014067 ms  haval160,5   hex      40 bytes  f866a7342616af0753e18e8b5c1f5cf0ee4c12d7
0.074863 ms  haval160,5   raw      40 bytes  f866a7342616af0753e18e8b5c1f5cf0ee4c12d7
0.010967 ms  haval192,3   hex      48 bytes  b68eb8b51045910f67e154b48bccab06571b2c12c1e22d2a
0.077009 ms  haval192,3   raw      48 bytes  b68eb8b51045910f67e154b48bccab06571b2c12c1e22d2a
0.013113 ms  haval192,4   hex      48 bytes  3e028c517a432731b322a190097c8e18481fb3c8126035ee
0.013113 ms  haval192,4   raw      48 bytes  3e028c517a432731b322a190097c8e18481fb3c8126035ee
0.011921 ms  haval192,5   hex      48 bytes  1bc66318479d6a47775447cac9d4a8976d2ba08b2a4f59c8
0.012159 ms  haval192,5   raw      48 bytes  1bc66318479d6a47775447cac9d4a8976d2ba08b2a4f59c8
0.011921 ms  haval224,3   hex      56 bytes  ba3650e7312e6efacef840c291f2ca3a66dc0d359d403e58b3791ce3
0.010967 ms  haval224,3   raw      56 bytes  ba3650e7312e6efacef840c291f2ca3a66dc0d359d403e58b3791ce3
0.012875 ms  haval224,4   hex      56 bytes  22112dd7ac7a1598f5fc8fb457b2b9e39bb163c4eef88390920168cf
0.012875 ms  haval224,4   raw      56 bytes  22112dd7ac7a1598f5fc8fb457b2b9e39bb163c4eef88390920168cf
0.014067 ms  haval224,5   hex      56 bytes  9d963de66f5caff037fa2f855e7ff96407a12af8ab3b926bd714492f
0.014067 ms  haval224,5   raw      56 bytes  9d963de66f5caff037fa2f855e7ff96407a12af8ab3b926bd714492f
0.008106 ms  haval256,3   hex      64 bytes  d649d1eb876f90ebe7b7ce5fd8e71e0bdd173ac146d9f5d58b4be4968b4d097f
0.015020 ms  haval256,3   raw      64 bytes  d649d1eb876f90ebe7b7ce5fd8e71e0bdd173ac146d9f5d58b4be4968b4d097f
0.012875 ms  haval256,4   hex      64 bytes  6047f4359233f8407ffbcfad3eb756dfc9a0d4bef6c802458c2288e09970d191
0.012875 ms  haval256,4   raw      64 bytes  6047f4359233f8407ffbcfad3eb756dfc9a0d4bef6c802458c2288e09970d191
0.014067 ms  haval256,5   hex      64 bytes  30e5585bcd7e439fef2dd82be64069d0a8efb8d0cabea2a901ef8f0683824914
0.014067 ms  haval256,5   raw      64 bytes  30e5585bcd7e439fef2dd82be64069d0a8efb8d0cabea2a901ef8f0683824914
0.009060 ms  joaat        hex       8 bytes  f2c2eb10
0.008821 ms  joaat        raw       8 bytes  f2c2eb10
0.257015 ms  md2          hex      32 bytes  85da8c39f4841c81f4fd0145c174962d
0.553131 ms  md2          raw      32 bytes  85da8c39f4841c81f4fd0145c174962d
0.015020 ms  md4          hex      32 bytes  16bc5ffdd487dfa7a332a014e86d90b7
0.008821 ms  md4          raw      32 bytes  16bc5ffdd487dfa7a332a014e86d90b7
0.090837 ms  md5          hex      32 bytes  dcb2e04f9d26660a7e60ec27f190e2ab
0.010014 ms  md5          raw      32 bytes  dcb2e04f9d26660a7e60ec27f190e2ab
0.013113 ms  ripemd128    hex      32 bytes  b0c00971691cc47bb74055442aaa821c
0.008106 ms  ripemd128    raw      32 bytes  b0c00971691cc47bb74055442aaa821c
0.014067 ms  ripemd160    hex      40 bytes  cc7af2cb01f057b4decf3a072e987a41768fc4a5
0.013113 ms  ripemd160    raw      40 bytes  cc7af2cb01f057b4decf3a072e987a41768fc4a5
0.077009 ms  ripemd256    hex      64 bytes  3aa57b0b33045235468cbaddf6a7702d8c01cb22a4bc6f58997a4f90c0986727
0.010967 ms  ripemd256    raw      64 bytes  3aa57b0b33045235468cbaddf6a7702d8c01cb22a4bc6f58997a4f90c0986727
0.013113 ms  ripemd320    hex      80 bytes  3a25b2fdc5adf22c0b3aa0ad26d27204a52a9987702ca51eb41bb8a98b3789e9f8cd70f331eb56ed
0.012875 ms  ripemd320    raw      80 bytes  3a25b2fdc5adf22c0b3aa0ad26d27204a52a9987702ca51eb41bb8a98b3789e9f8cd70f331eb56ed
0.010967 ms  sha1         hex      40 bytes  dc0eef9eb69397b6eb2a9673645a198d80868cc8
0.041008 ms  sha1         raw      40 bytes  dc0eef9eb69397b6eb2a9673645a198d80868cc8
0.015020 ms  sha224       hex      56 bytes  46bdc27f4c249b93129a396d9db9529bd7d69cb47b93e2a914bd961b
0.013828 ms  sha224       raw      56 bytes  46bdc27f4c249b93129a396d9db9529bd7d69cb47b93e2a914bd961b
0.013828 ms  sha256       hex      64 bytes  48c208d6b919d7a52c53c06a07428c2f885d9ed105ba0cf3e5aee773a61fd340
0.014067 ms  sha256       raw      64 bytes  48c208d6b919d7a52c53c06a07428c2f885d9ed105ba0cf3e5aee773a61fd340
0.093937 ms  sha3-224     hex      56 bytes  ea43f7d42061eb3b40dae1bedd45a3c01f40b05dd087042df7f37f7f
0.010967 ms  sha3-224     raw      56 bytes  ea43f7d42061eb3b40dae1bedd45a3c01f40b05dd087042df7f37f7f
0.007868 ms  sha3-256     hex      64 bytes  3cb5687ee2c6b766fbf091916280f643279d63583da0b98ed7346a557b733ba4
0.011206 ms  sha3-256     raw      64 bytes  3cb5687ee2c6b766fbf091916280f643279d63583da0b98ed7346a557b733ba4
0.013828 ms  sha3-384     hex      96 bytes  b2849d15492842ae2df3f497be51286acd4c3d2a07f3095f81cc186b5fe8a8f0822d7850c2c479b1c531f606cf3898d8
0.011921 ms  sha3-384     raw      96 bytes  b2849d15492842ae2df3f497be51286acd4c3d2a07f3095f81cc186b5fe8a8f0822d7850c2c479b1c531f606cf3898d8
0.014067 ms  sha3-512     hex     128 bytes  8e7ec3ceb3d82d4f5931c733cb664049fbf73a024bbf01e34e7a6b236a28e3975f1650e879f7e484c1d5a280247371bb5c6d02f91da9aa50e98300f157e3c0b2
0.015020 ms  sha3-512     raw     128 bytes  8e7ec3ceb3d82d4f5931c733cb664049fbf73a024bbf01e34e7a6b236a28e3975f1650e879f7e484c1d5a280247371bb5c6d02f91da9aa50e98300f157e3c0b2
0.085115 ms  sha384       hex      96 bytes  1cc2b0f85a4ebc3f64ba7a7c4b064d080bb48c0f5abda72379287d1e37d9ea22ddb34156d0c1ea46d46137eb8f624998
0.010967 ms  sha384       raw      96 bytes  1cc2b0f85a4ebc3f64ba7a7c4b064d080bb48c0f5abda72379287d1e37d9ea22ddb34156d0c1ea46d46137eb8f624998
0.011921 ms  sha512       hex     128 bytes  61c562d5029c7840d2b9fcde5909e694429189c48b43d04d1e8eb17b885a520a63c4359b77a8d3f167644d53e9575d9698692780c8429cc76129e7906d8c1ee3
0.012159 ms  sha512       raw     128 bytes  61c562d5029c7840d2b9fcde5909e694429189c48b43d04d1e8eb17b885a520a63c4359b77a8d3f167644d53e9575d9698692780c8429cc76129e7906d8c1ee3
0.010967 ms  sha512/224   hex      56 bytes  d4699fb8f08c9cdbfdf30ceeb08b43c2fb5da2271caf590ddd6e88a4
0.012159 ms  sha512/224   raw      56 bytes  d4699fb8f08c9cdbfdf30ceeb08b43c2fb5da2271caf590ddd6e88a4
0.073910 ms  sha512/256   hex      64 bytes  a449dde1d64ec04927d87b3386c0cb48113325060c91dc2190660eb2d647ef11
0.011921 ms  sha512/256   raw      64 bytes  a449dde1d64ec04927d87b3386c0cb48113325060c91dc2190660eb2d647ef11
0.044107 ms  snefru       hex      64 bytes  2009602e587d8b0b309e0ee97e1eb188e5f78d1eb86c21a2a4eedb93c173093a
0.118971 ms  snefru       raw      64 bytes  2009602e587d8b0b309e0ee97e1eb188e5f78d1eb86c21a2a4eedb93c173093a
0.040054 ms  snefru256    hex      64 bytes  2009602e587d8b0b309e0ee97e1eb188e5f78d1eb86c21a2a4eedb93c173093a
0.108957 ms  snefru256    raw      64 bytes  2009602e587d8b0b309e0ee97e1eb188e5f78d1eb86c21a2a4eedb93c173093a
0.010967 ms  tiger128,3   hex      32 bytes  dcfa5be9001106a5bea92fc0a95087f7
0.009060 ms  tiger128,3   raw      32 bytes  dcfa5be9001106a5bea92fc0a95087f7
0.077009 ms  tiger128,4   hex      32 bytes  90915ef1325ca00cf41a01333723abd8
0.010014 ms  tiger128,4   raw      32 bytes  90915ef1325ca00cf41a01333723abd8
0.010014 ms  tiger160,3   hex      40 bytes  dcfa5be9001106a5bea92fc0a95087f79d4947bf
0.008106 ms  tiger160,3   raw      40 bytes  dcfa5be9001106a5bea92fc0a95087f79d4947bf
0.010014 ms  tiger160,4   hex      40 bytes  90915ef1325ca00cf41a01333723abd8f3e4bbb1
0.007868 ms  tiger160,4   raw      40 bytes  90915ef1325ca00cf41a01333723abd8f3e4bbb1
0.010014 ms  tiger192,3   hex      48 bytes  dcfa5be9001106a5bea92fc0a95087f79d4947bfe8ca9c22
0.008821 ms  tiger192,3   raw      48 bytes  dcfa5be9001106a5bea92fc0a95087f79d4947bfe8ca9c22
0.010014 ms  tiger192,4   hex      48 bytes  90915ef1325ca00cf41a01333723abd8f3e4bbb17662414d
0.008106 ms  tiger192,4   raw      48 bytes  90915ef1325ca00cf41a01333723abd8f3e4bbb17662414d
0.087023 ms  whirlpool    hex     128 bytes  688e8b48546f49a669832e19554a2094db86dd44f4916772b2fbf6b824a29b4540bd5b1c37a383c702d2bc69dff05a57e8b5c91966cf307b25d695f8d1bfd0a0
0.017166 ms  whirlpool    raw     128 bytes  688e8b48546f49a669832e19554a2094db86dd44f4916772b2fbf6b824a29b4540bd5b1c37a383c702d2bc69dff05a57e8b5c91966cf307b25d695f8d1bfd0a0
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.007153 ms  adler32      raw       8 bytes  e71e18e5
0.007868 ms  tiger160,4   raw      40 bytes  90915ef1325ca00cf41a01333723abd8f3e4bbb1
0.007868 ms  fnv1a64      raw      16 bytes  dd6286e39422cf38
0.007868 ms  sha3-256     hex      64 bytes  3cb5687ee2c6b766fbf091916280f643279d63583da0b98ed7346a557b733ba4
0.008106 ms  fnv1a32      raw       8 bytes  7d9242d8
0.008106 ms  tiger160,3   raw      40 bytes  dcfa5be9001106a5bea92fc0a95087f79d4947bf
0.008106 ms  haval256,3   hex      64 bytes  d649d1eb876f90ebe7b7ce5fd8e71e0bdd173ac146d9f5d58b4be4968b4d097f
0.008106 ms  ripemd128    raw      32 bytes  b0c00971691cc47bb74055442aaa821c
0.008106 ms  adler32      hex       8 bytes  e71e18e5
0.008106 ms  tiger192,4   raw      48 bytes  90915ef1325ca00cf41a01333723abd8f3e4bbb17662414d
0.008106 ms  fnv132       hex       8 bytes  85a5e2b6
0.008821 ms  tiger192,3   raw      48 bytes  dcfa5be9001106a5bea92fc0a95087f79d4947bfe8ca9c22
0.008821 ms  md4          raw      32 bytes  16bc5ffdd487dfa7a332a014e86d90b7
0.008821 ms  joaat        raw       8 bytes  f2c2eb10
0.008821 ms  fnv1a64      hex      16 bytes  dd6286e39422cf38
0.009060 ms  haval128,5   raw      32 bytes  51922a56b0d10cb5176c16def438b2ca
0.009060 ms  fnv132       raw       8 bytes  85a5e2b6
0.009060 ms  crc32c       hex       8 bytes  e6bafd0e
0.009060 ms  fnv164       raw      16 bytes  78aee8978ff4f6b6
0.009060 ms  joaat        hex       8 bytes  f2c2eb10
0.009060 ms  fnv164       hex      16 bytes  78aee8978ff4f6b6
0.009060 ms  fnv1a32      hex       8 bytes  7d9242d8
0.009060 ms  tiger128,3   raw      32 bytes  dcfa5be9001106a5bea92fc0a95087f7
0.010014 ms  tiger160,4   hex      40 bytes  90915ef1325ca00cf41a01333723abd8f3e4bbb1
0.010014 ms  md5          raw      32 bytes  dcb2e04f9d26660a7e60ec27f190e2ab
0.010014 ms  tiger160,3   hex      40 bytes  dcfa5be9001106a5bea92fc0a95087f79d4947bf
0.010014 ms  tiger128,4   raw      32 bytes  90915ef1325ca00cf41a01333723abd8
0.010014 ms  tiger192,3   hex      48 bytes  dcfa5be9001106a5bea92fc0a95087f79d4947bfe8ca9c22
0.010014 ms  crc32b       hex       8 bytes  bbc7c46f
0.010014 ms  tiger192,4   hex      48 bytes  90915ef1325ca00cf41a01333723abd8f3e4bbb17662414d
0.010014 ms  crc32b       raw       8 bytes  bbc7c46f
0.010967 ms  haval192,3   hex      48 bytes  b68eb8b51045910f67e154b48bccab06571b2c12c1e22d2a
0.010967 ms  sha3-224     raw      56 bytes  ea43f7d42061eb3b40dae1bedd45a3c01f40b05dd087042df7f37f7f
0.010967 ms  crc32        hex       8 bytes  3e6c1584
0.010967 ms  haval160,3   hex      40 bytes  6e5b2c5ec3546a44484c848fd752e38b91866876
0.010967 ms  ripemd256    raw      64 bytes  3aa57b0b33045235468cbaddf6a7702d8c01cb22a4bc6f58997a4f90c0986727
0.010967 ms  haval224,3   raw      56 bytes  ba3650e7312e6efacef840c291f2ca3a66dc0d359d403e58b3791ce3
0.010967 ms  tiger128,3   hex      32 bytes  dcfa5be9001106a5bea92fc0a95087f7
0.010967 ms  sha512/224   hex      56 bytes  d4699fb8f08c9cdbfdf30ceeb08b43c2fb5da2271caf590ddd6e88a4
0.010967 ms  sha384       raw      96 bytes  1cc2b0f85a4ebc3f64ba7a7c4b064d080bb48c0f5abda72379287d1e37d9ea22ddb34156d0c1ea46d46137eb8f624998
0.010967 ms  sha1         hex      40 bytes  dc0eef9eb69397b6eb2a9673645a198d80868cc8
0.011206 ms  sha3-256     raw      64 bytes  3cb5687ee2c6b766fbf091916280f643279d63583da0b98ed7346a557b733ba4
0.011921 ms  haval192,5   hex      48 bytes  1bc66318479d6a47775447cac9d4a8976d2ba08b2a4f59c8
0.011921 ms  haval128,4   raw      32 bytes  dd81624b319411586e72660a8a8e81ec
0.011921 ms  haval224,3   hex      56 bytes  ba3650e7312e6efacef840c291f2ca3a66dc0d359d403e58b3791ce3
0.011921 ms  haval160,3   raw      40 bytes  6e5b2c5ec3546a44484c848fd752e38b91866876
0.011921 ms  haval128,3   raw      32 bytes  f52af87434e595064195b2d38d41fdcb
0.011921 ms  sha512       hex     128 bytes  61c562d5029c7840d2b9fcde5909e694429189c48b43d04d1e8eb17b885a520a63c4359b77a8d3f167644d53e9575d9698692780c8429cc76129e7906d8c1ee3
0.011921 ms  sha512/256   raw      64 bytes  a449dde1d64ec04927d87b3386c0cb48113325060c91dc2190660eb2d647ef11
0.011921 ms  sha3-384     raw      96 bytes  b2849d15492842ae2df3f497be51286acd4c3d2a07f3095f81cc186b5fe8a8f0822d7850c2c479b1c531f606cf3898d8
0.012159 ms  haval192,5   raw      48 bytes  1bc66318479d6a47775447cac9d4a8976d2ba08b2a4f59c8
0.012159 ms  sha512       raw     128 bytes  61c562d5029c7840d2b9fcde5909e694429189c48b43d04d1e8eb17b885a520a63c4359b77a8d3f167644d53e9575d9698692780c8429cc76129e7906d8c1ee3
0.012159 ms  sha512/224   raw      56 bytes  d4699fb8f08c9cdbfdf30ceeb08b43c2fb5da2271caf590ddd6e88a4
0.012875 ms  haval224,4   hex      56 bytes  22112dd7ac7a1598f5fc8fb457b2b9e39bb163c4eef88390920168cf
0.012875 ms  haval256,4   raw      64 bytes  6047f4359233f8407ffbcfad3eb756dfc9a0d4bef6c802458c2288e09970d191
0.012875 ms  haval256,4   hex      64 bytes  6047f4359233f8407ffbcfad3eb756dfc9a0d4bef6c802458c2288e09970d191
0.012875 ms  haval224,4   raw      56 bytes  22112dd7ac7a1598f5fc8fb457b2b9e39bb163c4eef88390920168cf
0.012875 ms  ripemd320    raw      80 bytes  3a25b2fdc5adf22c0b3aa0ad26d27204a52a9987702ca51eb41bb8a98b3789e9f8cd70f331eb56ed
0.012875 ms  haval128,3   hex      32 bytes  f52af87434e595064195b2d38d41fdcb
0.013113 ms  haval192,4   raw      48 bytes  3e028c517a432731b322a190097c8e18481fb3c8126035ee
0.013113 ms  haval192,4   hex      48 bytes  3e028c517a432731b322a190097c8e18481fb3c8126035ee
0.013113 ms  ripemd128    hex      32 bytes  b0c00971691cc47bb74055442aaa821c
0.013113 ms  ripemd160    raw      40 bytes  cc7af2cb01f057b4decf3a072e987a41768fc4a5
0.013113 ms  ripemd320    hex      80 bytes  3a25b2fdc5adf22c0b3aa0ad26d27204a52a9987702ca51eb41bb8a98b3789e9f8cd70f331eb56ed
0.013828 ms  sha3-384     hex      96 bytes  b2849d15492842ae2df3f497be51286acd4c3d2a07f3095f81cc186b5fe8a8f0822d7850c2c479b1c531f606cf3898d8
0.013828 ms  sha256       hex      64 bytes  48c208d6b919d7a52c53c06a07428c2f885d9ed105ba0cf3e5aee773a61fd340
0.013828 ms  sha224       raw      56 bytes  46bdc27f4c249b93129a396d9db9529bd7d69cb47b93e2a914bd961b
0.014067 ms  haval128,4   hex      32 bytes  dd81624b319411586e72660a8a8e81ec
0.014067 ms  haval160,4   raw      40 bytes  70ddcff87c81d490087684667bd94ce3cc23567c
0.014067 ms  haval160,5   hex      40 bytes  f866a7342616af0753e18e8b5c1f5cf0ee4c12d7
0.014067 ms  haval256,5   raw      64 bytes  30e5585bcd7e439fef2dd82be64069d0a8efb8d0cabea2a901ef8f0683824914
0.014067 ms  haval256,5   hex      64 bytes  30e5585bcd7e439fef2dd82be64069d0a8efb8d0cabea2a901ef8f0683824914
0.014067 ms  haval224,5   raw      56 bytes  9d963de66f5caff037fa2f855e7ff96407a12af8ab3b926bd714492f
0.014067 ms  sha3-512     hex     128 bytes  8e7ec3ceb3d82d4f5931c733cb664049fbf73a024bbf01e34e7a6b236a28e3975f1650e879f7e484c1d5a280247371bb5c6d02f91da9aa50e98300f157e3c0b2
0.014067 ms  sha256       raw      64 bytes  48c208d6b919d7a52c53c06a07428c2f885d9ed105ba0cf3e5aee773a61fd340
0.014067 ms  haval224,5   hex      56 bytes  9d963de66f5caff037fa2f855e7ff96407a12af8ab3b926bd714492f
0.014067 ms  ripemd160    hex      40 bytes  cc7af2cb01f057b4decf3a072e987a41768fc4a5
0.015020 ms  sha3-512     raw     128 bytes  8e7ec3ceb3d82d4f5931c733cb664049fbf73a024bbf01e34e7a6b236a28e3975f1650e879f7e484c1d5a280247371bb5c6d02f91da9aa50e98300f157e3c0b2
0.015020 ms  haval128,5   hex      32 bytes  51922a56b0d10cb5176c16def438b2ca
0.015020 ms  sha224       hex      56 bytes  46bdc27f4c249b93129a396d9db9529bd7d69cb47b93e2a914bd961b
0.015020 ms  haval256,3   raw      64 bytes  d649d1eb876f90ebe7b7ce5fd8e71e0bdd173ac146d9f5d58b4be4968b4d097f
0.015020 ms  md4          hex      32 bytes  16bc5ffdd487dfa7a332a014e86d90b7
0.017166 ms  whirlpool    raw     128 bytes  688e8b48546f49a669832e19554a2094db86dd44f4916772b2fbf6b824a29b4540bd5b1c37a383c702d2bc69dff05a57e8b5c91966cf307b25d695f8d1bfd0a0
0.024080 ms  gost-crypto  hex      64 bytes  4a3b1863d72f0529bb0e943f294b7bde380b53b7e8946798401118f0561859da
0.028849 ms  gost         hex      64 bytes  c736dd8890a0b8374d9b4d3bbbc398f4c02e9a847b9a1a5ca65ea1e975c0e712
0.040054 ms  snefru256    hex      64 bytes  2009602e587d8b0b309e0ee97e1eb188e5f78d1eb86c21a2a4eedb93c173093a
0.041008 ms  sha1         raw      40 bytes  dc0eef9eb69397b6eb2a9673645a198d80868cc8
0.044107 ms  snefru       hex      64 bytes  2009602e587d8b0b309e0ee97e1eb188e5f78d1eb86c21a2a4eedb93c173093a
0.045061 ms  crc32c       raw       8 bytes  e6bafd0e
0.070095 ms  gost         raw      64 bytes  c736dd8890a0b8374d9b4d3bbbc398f4c02e9a847b9a1a5ca65ea1e975c0e712
0.073910 ms  sha512/256   hex      64 bytes  a449dde1d64ec04927d87b3386c0cb48113325060c91dc2190660eb2d647ef11
0.074863 ms  haval160,5   raw      40 bytes  f866a7342616af0753e18e8b5c1f5cf0ee4c12d7
0.075817 ms  crc32        raw       8 bytes  3e6c1584
0.077009 ms  tiger128,4   hex      32 bytes  90915ef1325ca00cf41a01333723abd8
0.077009 ms  haval192,3   raw      48 bytes  b68eb8b51045910f67e154b48bccab06571b2c12c1e22d2a
0.077009 ms  ripemd256    hex      64 bytes  3aa57b0b33045235468cbaddf6a7702d8c01cb22a4bc6f58997a4f90c0986727
0.078917 ms  haval160,4   hex      40 bytes  70ddcff87c81d490087684667bd94ce3cc23567c
0.085115 ms  sha384       hex      96 bytes  1cc2b0f85a4ebc3f64ba7a7c4b064d080bb48c0f5abda72379287d1e37d9ea22ddb34156d0c1ea46d46137eb8f624998
0.087023 ms  whirlpool    hex     128 bytes  688e8b48546f49a669832e19554a2094db86dd44f4916772b2fbf6b824a29b4540bd5b1c37a383c702d2bc69dff05a57e8b5c91966cf307b25d695f8d1bfd0a0
0.089169 ms  gost-crypto  raw      64 bytes  4a3b1863d72f0529bb0e943f294b7bde380b53b7e8946798401118f0561859da
0.090837 ms  md5          hex      32 bytes  dcb2e04f9d26660a7e60ec27f190e2ab
0.093937 ms  sha3-224     hex      56 bytes  ea43f7d42061eb3b40dae1bedd45a3c01f40b05dd087042df7f37f7f
0.108957 ms  snefru256    raw      64 bytes  2009602e587d8b0b309e0ee97e1eb188e5f78d1eb86c21a2a4eedb93c173093a
0.118971 ms  snefru       raw      64 bytes  2009602e587d8b0b309e0ee97e1eb188e5f78d1eb86c21a2a4eedb93c173093a
0.257015 ms  md2          hex      32 bytes  85da8c39f4841c81f4fd0145c174962d
0.553131 ms  md2          raw      32 bytes  85da8c39f4841c81f4fd0145c174962d
```
