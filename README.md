# PHP 7.3 Hashes

Exact PHP version: 7.3.10  
Number of available hash algorithms: 52

All PHP Versions: [7.1](https://github.com/Kovah/php-hashes/tree/7.1) | [7.2](https://github.com/Kovah/php-hashes/tree/7.2) | [7.3](https://github.com/Kovah/php-hashes/tree/7.3)

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro15,1 with an 
Intel i7 (6x 2.2GHz) CPU. Current Docker version is 19.03.4, build 9013bf5.

All results are based on a string with a fixed length of 1024 characters, generated with the `random_bytes()` function.

```bash
# Regular output to the CLI
docker run -it --rm -v "$PWD/hashes.php":/usr/src/hashes.php -w /usr/src php:7.3-cli php hashes.php
```

Additionally, for better statistical insights, you may generate a dataset which contains the execution times for all
available algorithms, each with regular string and raw binary output and each for string lengths ranging from 512
characters up to 2^25 (~33 mil) characters.  
You can generate the csv file with the following command:

```bash
# Output to a csv file
docker run -it --rm -v "$PWD":/usr/src/app -w /usr/src/app php:7.3-cli php hashes-csv.php
```

Please notice that the resulting csv file uses the semicolon as a delimiter and all numeric values use the dot as a
decimal separator.


## Results

### Sorted by algorithm name

```
Time         Algorithm    Method     Length  Hash
0.009060 ms  adler32      hex       8 bytes  04d71747
0.015974 ms  adler32      raw       8 bytes  04d71747
0.011921 ms  crc32        hex       8 bytes  794069a3
0.011921 ms  crc32        raw       8 bytes  794069a3
0.007868 ms  crc32b       hex       8 bytes  8bcc6794
0.014782 ms  crc32b       raw       8 bytes  8bcc6794
0.008106 ms  fnv132       hex       8 bytes  5c4b1d0c
0.006914 ms  fnv132       raw       8 bytes  5c4b1d0c
0.009060 ms  fnv164       hex      16 bytes  879d8fd8f9d0bb4c
0.010014 ms  fnv164       raw      16 bytes  879d8fd8f9d0bb4c
0.009060 ms  fnv1a32      hex       8 bytes  36ebdd86
0.009060 ms  fnv1a32      raw       8 bytes  36ebdd86
0.006914 ms  fnv1a64      hex      16 bytes  717b6f83fa063766
0.010967 ms  fnv1a64      raw      16 bytes  717b6f83fa063766
0.029087 ms  gost         hex      64 bytes  120dcc3edbfd1000cc12f5dae6730cbff6114d967c1c99f97c69d7424770e866
0.036001 ms  gost         raw      64 bytes  120dcc3edbfd1000cc12f5dae6730cbff6114d967c1c99f97c69d7424770e866
0.034094 ms  gost-crypto  hex      64 bytes  8c1a01585490ba6bf86f4e17cce3a4e0460ef41881918be5a7ebaef4ae710a80
0.025988 ms  gost-crypto  raw      64 bytes  8c1a01585490ba6bf86f4e17cce3a4e0460ef41881918be5a7ebaef4ae710a80
0.008106 ms  haval128,3   hex      32 bytes  239d8a166e354e9c568bcbd0fb5dbff5
0.008106 ms  haval128,3   raw      32 bytes  239d8a166e354e9c568bcbd0fb5dbff5
0.015974 ms  haval128,4   hex      32 bytes  dc1a7119a1976c50b6995024678dbed5
0.015974 ms  haval128,4   raw      32 bytes  dc1a7119a1976c50b6995024678dbed5
0.022888 ms  haval128,5   hex      32 bytes  46a0c13dba0f951e47e536b8d851fe49
0.017881 ms  haval128,5   raw      32 bytes  46a0c13dba0f951e47e536b8d851fe49
0.010014 ms  haval160,3   hex      40 bytes  2ca8210d98bfdf9a3581131253382f3c89e66cc6
0.014067 ms  haval160,3   raw      40 bytes  2ca8210d98bfdf9a3581131253382f3c89e66cc6
0.015974 ms  haval160,4   hex      40 bytes  67035871aee4107ec8cfd2014f5afd3db2afe83a
0.015020 ms  haval160,4   raw      40 bytes  67035871aee4107ec8cfd2014f5afd3db2afe83a
0.017166 ms  haval160,5   hex      40 bytes  d2cb86c07ddf19a903250040b225cd515eb8af50
0.015974 ms  haval160,5   raw      40 bytes  d2cb86c07ddf19a903250040b225cd515eb8af50
0.011206 ms  haval192,3   hex      48 bytes  8906ad48520c95ffd749c2275ea85122f4f8aaf509377df3
0.014067 ms  haval192,3   raw      48 bytes  8906ad48520c95ffd749c2275ea85122f4f8aaf509377df3
0.016928 ms  haval192,4   hex      48 bytes  794e44119393d1805ffbb3a7d5fee2bb1f00894176f37bfa
0.015020 ms  haval192,4   raw      48 bytes  794e44119393d1805ffbb3a7d5fee2bb1f00894176f37bfa
0.010967 ms  haval192,5   hex      48 bytes  f64cc8b24bfd4c015f3841085e7cd7153cdf185f3cfcaaa8
0.015974 ms  haval192,5   raw      48 bytes  f64cc8b24bfd4c015f3841085e7cd7153cdf185f3cfcaaa8
0.014067 ms  haval224,3   hex      56 bytes  1c4c08c1008f8c446a70cbd3a1ad2c55718ca1bcac5e185f8434d753
0.020981 ms  haval224,3   raw      56 bytes  1c4c08c1008f8c446a70cbd3a1ad2c55718ca1bcac5e185f8434d753
0.014782 ms  haval224,4   hex      56 bytes  dbb4c7aff0e3bb04ca74d726ec8c6561965b60d6775389e3fa75641f
0.015974 ms  haval224,4   raw      56 bytes  dbb4c7aff0e3bb04ca74d726ec8c6561965b60d6775389e3fa75641f
0.016928 ms  haval224,5   hex      56 bytes  1dadd9594039d41c1fb29279633944f0f5851d4701f9c12792f6c742
0.025034 ms  haval224,5   raw      56 bytes  1dadd9594039d41c1fb29279633944f0f5851d4701f9c12792f6c742
0.014067 ms  haval256,3   hex      64 bytes  4845e7e60818dbd6e3335af671fddeda0532ea499e454f64786bd1343c6181c0
0.007153 ms  haval256,3   raw      64 bytes  4845e7e60818dbd6e3335af671fddeda0532ea499e454f64786bd1343c6181c0
0.015020 ms  haval256,4   hex      64 bytes  35106ddd832c45da2f9d10f9416adb3ecaded1e002a9e6f08ced318913c2af3e
0.015020 ms  haval256,4   raw      64 bytes  35106ddd832c45da2f9d10f9416adb3ecaded1e002a9e6f08ced318913c2af3e
0.017166 ms  haval256,5   hex      64 bytes  2209fd3bb70cc8670487250cdd52afa0b7e82d024191ab0bbbcb5e08d1f68c13
0.014067 ms  haval256,5   raw      64 bytes  2209fd3bb70cc8670487250cdd52afa0b7e82d024191ab0bbbcb5e08d1f68c13
0.010014 ms  joaat        hex       8 bytes  cbc02dd3
0.010014 ms  joaat        raw       8 bytes  cbc02dd3
0.232935 ms  md2          hex      32 bytes  efda3837a670e042fc6c1f55e2033f74
0.233173 ms  md2          raw      32 bytes  efda3837a670e042fc6c1f55e2033f74
0.024080 ms  md4          hex      32 bytes  3c7ceade579abbbc8bc2b1ab2c85817a
0.010967 ms  md4          raw      32 bytes  3c7ceade579abbbc8bc2b1ab2c85817a
0.010014 ms  md5          hex      32 bytes  349162636eed915413c4113bf400308d
0.010967 ms  md5          raw      32 bytes  349162636eed915413c4113bf400308d
0.014067 ms  ripemd128    hex      32 bytes  473b9aa70af15b1a082dfc99b959605e
0.007868 ms  ripemd128    raw      32 bytes  473b9aa70af15b1a082dfc99b959605e
0.024080 ms  ripemd160    hex      40 bytes  98bdb3f5d0ac3408834e63fcc299bb17d8245507
0.014067 ms  ripemd160    raw      40 bytes  98bdb3f5d0ac3408834e63fcc299bb17d8245507
0.014067 ms  ripemd256    hex      64 bytes  2d4405f5ae6d9ecbcce4315e13db5e0a6a5d9c0863bd17f9389187b1bd00eccd
0.008106 ms  ripemd256    raw      64 bytes  2d4405f5ae6d9ecbcce4315e13db5e0a6a5d9c0863bd17f9389187b1bd00eccd
0.014067 ms  ripemd320    hex      80 bytes  8c8dbd15a79a555dab11788cea32da51409b2190a39b9860265d17c3e5294025118fb1ccd7a05273
0.015020 ms  ripemd320    raw      80 bytes  8c8dbd15a79a555dab11788cea32da51409b2190a39b9860265d17c3e5294025118fb1ccd7a05273
0.011921 ms  sha1         hex      40 bytes  e3508ed100818720faeadeb3865640f613b9d7c9
0.014067 ms  sha1         raw      40 bytes  e3508ed100818720faeadeb3865640f613b9d7c9
0.016928 ms  sha224       hex      56 bytes  ab427857dbf051ded0f390a0e8898801252360be93a8a2cdd2b99647
0.014782 ms  sha224       raw      56 bytes  ab427857dbf051ded0f390a0e8898801252360be93a8a2cdd2b99647
0.010014 ms  sha256       hex      64 bytes  2b84c61b095556c4ab144592da2e599d373e725204afeb17afd6b148c8046a63
0.017166 ms  sha256       raw      64 bytes  2b84c61b095556c4ab144592da2e599d373e725204afeb17afd6b148c8046a63
0.031948 ms  sha3-224     hex      56 bytes  f1603af749cd249f90644d083c6702df4c6a68d508c1d5a8f2999c38
0.012159 ms  sha3-224     raw      56 bytes  f1603af749cd249f90644d083c6702df4c6a68d508c1d5a8f2999c38
0.010014 ms  sha3-256     hex      64 bytes  126c702409ffb893291e3e9e4be9452465d0e9acf60b8cb3d2c437805f9890f4
0.011206 ms  sha3-256     raw      64 bytes  126c702409ffb893291e3e9e4be9452465d0e9acf60b8cb3d2c437805f9890f4
0.008106 ms  sha3-384     hex      96 bytes  380df00d04e050f5a6322fa90fbac8da9b2a9e1760095019075afcb1dbb6a57edbfd19d0603f40fcd486673e50241362
0.008106 ms  sha3-384     raw      96 bytes  380df00d04e050f5a6322fa90fbac8da9b2a9e1760095019075afcb1dbb6a57edbfd19d0603f40fcd486673e50241362
0.015974 ms  sha3-512     hex     128 bytes  282867b51c9aeb40c2a6b2c61edb76bfc41b8b800fa523abd8e053c8c321747dc1c715b270787093b24a4df240f21127eebab4a01557071e385bdadc4157447f
0.013828 ms  sha3-512     raw     128 bytes  282867b51c9aeb40c2a6b2c61edb76bfc41b8b800fa523abd8e053c8c321747dc1c715b270787093b24a4df240f21127eebab4a01557071e385bdadc4157447f
0.014067 ms  sha384       hex      96 bytes  73d6156f1f042212b89447d5cfef0995f8bb2f6a0b3901477a1e260be24563c40e7d5905c02ff52183f55c65f5e4801c
0.020027 ms  sha384       raw      96 bytes  73d6156f1f042212b89447d5cfef0995f8bb2f6a0b3901477a1e260be24563c40e7d5905c02ff52183f55c65f5e4801c
0.010014 ms  sha512       hex     128 bytes  4203319230604025a29453449859406f3e2ee4cd21df4f833b746fee87b2b734922c46270e2d888e031738d17d2aa87f66e25c07499ef9b61b7cb20eecd7f654
0.006914 ms  sha512       raw     128 bytes  4203319230604025a29453449859406f3e2ee4cd21df4f833b746fee87b2b734922c46270e2d888e031738d17d2aa87f66e25c07499ef9b61b7cb20eecd7f654
0.010967 ms  sha512/224   hex      56 bytes  8af6daea5c33a3965b0d8ece6f05aa99226ff5c184a173461afc797d
0.008106 ms  sha512/224   raw      56 bytes  8af6daea5c33a3965b0d8ece6f05aa99226ff5c184a173461afc797d
0.013113 ms  sha512/256   hex      64 bytes  25b8f60e0ea8958ca3edb2bdc5df0b328756c977f93288679612a714789bf4c4
0.010014 ms  sha512/256   raw      64 bytes  25b8f60e0ea8958ca3edb2bdc5df0b328756c977f93288679612a714789bf4c4
0.052929 ms  snefru       hex      64 bytes  3c996c60f3b2e7e0143912f2e11e48d34186c94cc027cf156b8bb05fca327698
0.049114 ms  snefru       raw      64 bytes  3c996c60f3b2e7e0143912f2e11e48d34186c94cc027cf156b8bb05fca327698
0.046968 ms  snefru256    hex      64 bytes  3c996c60f3b2e7e0143912f2e11e48d34186c94cc027cf156b8bb05fca327698
0.042915 ms  snefru256    raw      64 bytes  3c996c60f3b2e7e0143912f2e11e48d34186c94cc027cf156b8bb05fca327698
0.010967 ms  tiger128,3   hex      32 bytes  302a7c2aef71b48dce8137e8c8328217
0.009060 ms  tiger128,3   raw      32 bytes  302a7c2aef71b48dce8137e8c8328217
0.012159 ms  tiger128,4   hex      32 bytes  cf97ab4c3f6ee6b49b0a9116e781e393
0.019073 ms  tiger128,4   raw      32 bytes  cf97ab4c3f6ee6b49b0a9116e781e393
0.007868 ms  tiger160,3   hex      40 bytes  302a7c2aef71b48dce8137e8c8328217d19a1b52
0.008106 ms  tiger160,3   raw      40 bytes  302a7c2aef71b48dce8137e8c8328217d19a1b52
0.009060 ms  tiger160,4   hex      40 bytes  cf97ab4c3f6ee6b49b0a9116e781e393d158fdb2
0.011921 ms  tiger160,4   raw      40 bytes  cf97ab4c3f6ee6b49b0a9116e781e393d158fdb2
0.017881 ms  tiger192,3   hex      48 bytes  302a7c2aef71b48dce8137e8c8328217d19a1b5267d04ae7
0.013113 ms  tiger192,3   raw      48 bytes  302a7c2aef71b48dce8137e8c8328217d19a1b5267d04ae7
0.006914 ms  tiger192,4   hex      48 bytes  cf97ab4c3f6ee6b49b0a9116e781e393d158fdb2d67c1c61
0.016928 ms  tiger192,4   raw      48 bytes  cf97ab4c3f6ee6b49b0a9116e781e393d158fdb2d67c1c61
0.021935 ms  whirlpool    hex     128 bytes  77fdf6ac4e7ced357cb7f31edb2ac657902682bb9e27b99a242bf71856a3c42b095d9e5afc5bf148953c14a859252302fb58269916f9571ca53cffb846753e0e
0.020981 ms  whirlpool    raw     128 bytes  77fdf6ac4e7ced357cb7f31edb2ac657902682bb9e27b99a242bf71856a3c42b095d9e5afc5bf148953c14a859252302fb58269916f9571ca53cffb846753e0e
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.006914 ms  fnv132       raw       8 bytes  5c4b1d0c
0.006914 ms  tiger192,4   hex      48 bytes  cf97ab4c3f6ee6b49b0a9116e781e393d158fdb2d67c1c61
0.006914 ms  sha512       raw     128 bytes  4203319230604025a29453449859406f3e2ee4cd21df4f833b746fee87b2b734922c46270e2d888e031738d17d2aa87f66e25c07499ef9b61b7cb20eecd7f654
0.006914 ms  fnv1a64      hex      16 bytes  717b6f83fa063766
0.007153 ms  haval256,3   raw      64 bytes  4845e7e60818dbd6e3335af671fddeda0532ea499e454f64786bd1343c6181c0
0.007868 ms  crc32b       hex       8 bytes  8bcc6794
0.007868 ms  ripemd128    raw      32 bytes  473b9aa70af15b1a082dfc99b959605e
0.007868 ms  tiger160,3   hex      40 bytes  302a7c2aef71b48dce8137e8c8328217d19a1b52
0.008106 ms  haval128,3   hex      32 bytes  239d8a166e354e9c568bcbd0fb5dbff5
0.008106 ms  sha512/224   raw      56 bytes  8af6daea5c33a3965b0d8ece6f05aa99226ff5c184a173461afc797d
0.008106 ms  sha3-384     raw      96 bytes  380df00d04e050f5a6322fa90fbac8da9b2a9e1760095019075afcb1dbb6a57edbfd19d0603f40fcd486673e50241362
0.008106 ms  sha3-384     hex      96 bytes  380df00d04e050f5a6322fa90fbac8da9b2a9e1760095019075afcb1dbb6a57edbfd19d0603f40fcd486673e50241362
0.008106 ms  haval128,3   raw      32 bytes  239d8a166e354e9c568bcbd0fb5dbff5
0.008106 ms  ripemd256    raw      64 bytes  2d4405f5ae6d9ecbcce4315e13db5e0a6a5d9c0863bd17f9389187b1bd00eccd
0.008106 ms  tiger160,3   raw      40 bytes  302a7c2aef71b48dce8137e8c8328217d19a1b52
0.008106 ms  fnv132       hex       8 bytes  5c4b1d0c
0.009060 ms  fnv1a32      hex       8 bytes  36ebdd86
0.009060 ms  adler32      hex       8 bytes  04d71747
0.009060 ms  tiger160,4   hex      40 bytes  cf97ab4c3f6ee6b49b0a9116e781e393d158fdb2
0.009060 ms  fnv1a32      raw       8 bytes  36ebdd86
0.009060 ms  fnv164       hex      16 bytes  879d8fd8f9d0bb4c
0.009060 ms  tiger128,3   raw      32 bytes  302a7c2aef71b48dce8137e8c8328217
0.010014 ms  sha256       hex      64 bytes  2b84c61b095556c4ab144592da2e599d373e725204afeb17afd6b148c8046a63
0.010014 ms  sha3-256     hex      64 bytes  126c702409ffb893291e3e9e4be9452465d0e9acf60b8cb3d2c437805f9890f4
0.010014 ms  haval160,3   hex      40 bytes  2ca8210d98bfdf9a3581131253382f3c89e66cc6
0.010014 ms  sha512       hex     128 bytes  4203319230604025a29453449859406f3e2ee4cd21df4f833b746fee87b2b734922c46270e2d888e031738d17d2aa87f66e25c07499ef9b61b7cb20eecd7f654
0.010014 ms  sha512/256   raw      64 bytes  25b8f60e0ea8958ca3edb2bdc5df0b328756c977f93288679612a714789bf4c4
0.010014 ms  fnv164       raw      16 bytes  879d8fd8f9d0bb4c
0.010014 ms  joaat        raw       8 bytes  cbc02dd3
0.010014 ms  md5          hex      32 bytes  349162636eed915413c4113bf400308d
0.010014 ms  joaat        hex       8 bytes  cbc02dd3
0.010967 ms  tiger128,3   hex      32 bytes  302a7c2aef71b48dce8137e8c8328217
0.010967 ms  haval192,5   hex      48 bytes  f64cc8b24bfd4c015f3841085e7cd7153cdf185f3cfcaaa8
0.010967 ms  fnv1a64      raw      16 bytes  717b6f83fa063766
0.010967 ms  md4          raw      32 bytes  3c7ceade579abbbc8bc2b1ab2c85817a
0.010967 ms  sha512/224   hex      56 bytes  8af6daea5c33a3965b0d8ece6f05aa99226ff5c184a173461afc797d
0.010967 ms  md5          raw      32 bytes  349162636eed915413c4113bf400308d
0.011206 ms  sha3-256     raw      64 bytes  126c702409ffb893291e3e9e4be9452465d0e9acf60b8cb3d2c437805f9890f4
0.011206 ms  haval192,3   hex      48 bytes  8906ad48520c95ffd749c2275ea85122f4f8aaf509377df3
0.011921 ms  sha1         hex      40 bytes  e3508ed100818720faeadeb3865640f613b9d7c9
0.011921 ms  crc32        raw       8 bytes  794069a3
0.011921 ms  tiger160,4   raw      40 bytes  cf97ab4c3f6ee6b49b0a9116e781e393d158fdb2
0.011921 ms  crc32        hex       8 bytes  794069a3
0.012159 ms  tiger128,4   hex      32 bytes  cf97ab4c3f6ee6b49b0a9116e781e393
0.012159 ms  sha3-224     raw      56 bytes  f1603af749cd249f90644d083c6702df4c6a68d508c1d5a8f2999c38
0.013113 ms  tiger192,3   raw      48 bytes  302a7c2aef71b48dce8137e8c8328217d19a1b5267d04ae7
0.013113 ms  sha512/256   hex      64 bytes  25b8f60e0ea8958ca3edb2bdc5df0b328756c977f93288679612a714789bf4c4
0.013828 ms  sha3-512     raw     128 bytes  282867b51c9aeb40c2a6b2c61edb76bfc41b8b800fa523abd8e053c8c321747dc1c715b270787093b24a4df240f21127eebab4a01557071e385bdadc4157447f
0.014067 ms  haval256,3   hex      64 bytes  4845e7e60818dbd6e3335af671fddeda0532ea499e454f64786bd1343c6181c0
0.014067 ms  haval192,3   raw      48 bytes  8906ad48520c95ffd749c2275ea85122f4f8aaf509377df3
0.014067 ms  haval160,3   raw      40 bytes  2ca8210d98bfdf9a3581131253382f3c89e66cc6
0.014067 ms  haval224,3   hex      56 bytes  1c4c08c1008f8c446a70cbd3a1ad2c55718ca1bcac5e185f8434d753
0.014067 ms  haval256,5   raw      64 bytes  2209fd3bb70cc8670487250cdd52afa0b7e82d024191ab0bbbcb5e08d1f68c13
0.014067 ms  ripemd320    hex      80 bytes  8c8dbd15a79a555dab11788cea32da51409b2190a39b9860265d17c3e5294025118fb1ccd7a05273
0.014067 ms  ripemd256    hex      64 bytes  2d4405f5ae6d9ecbcce4315e13db5e0a6a5d9c0863bd17f9389187b1bd00eccd
0.014067 ms  sha1         raw      40 bytes  e3508ed100818720faeadeb3865640f613b9d7c9
0.014067 ms  sha384       hex      96 bytes  73d6156f1f042212b89447d5cfef0995f8bb2f6a0b3901477a1e260be24563c40e7d5905c02ff52183f55c65f5e4801c
0.014067 ms  ripemd128    hex      32 bytes  473b9aa70af15b1a082dfc99b959605e
0.014067 ms  ripemd160    raw      40 bytes  98bdb3f5d0ac3408834e63fcc299bb17d8245507
0.014782 ms  sha224       raw      56 bytes  ab427857dbf051ded0f390a0e8898801252360be93a8a2cdd2b99647
0.014782 ms  crc32b       raw       8 bytes  8bcc6794
0.014782 ms  haval224,4   hex      56 bytes  dbb4c7aff0e3bb04ca74d726ec8c6561965b60d6775389e3fa75641f
0.015020 ms  haval160,4   raw      40 bytes  67035871aee4107ec8cfd2014f5afd3db2afe83a
0.015020 ms  haval256,4   raw      64 bytes  35106ddd832c45da2f9d10f9416adb3ecaded1e002a9e6f08ced318913c2af3e
0.015020 ms  haval192,4   raw      48 bytes  794e44119393d1805ffbb3a7d5fee2bb1f00894176f37bfa
0.015020 ms  haval256,4   hex      64 bytes  35106ddd832c45da2f9d10f9416adb3ecaded1e002a9e6f08ced318913c2af3e
0.015020 ms  ripemd320    raw      80 bytes  8c8dbd15a79a555dab11788cea32da51409b2190a39b9860265d17c3e5294025118fb1ccd7a05273
0.015974 ms  haval160,4   hex      40 bytes  67035871aee4107ec8cfd2014f5afd3db2afe83a
0.015974 ms  sha3-512     hex     128 bytes  282867b51c9aeb40c2a6b2c61edb76bfc41b8b800fa523abd8e053c8c321747dc1c715b270787093b24a4df240f21127eebab4a01557071e385bdadc4157447f
0.015974 ms  haval128,4   hex      32 bytes  dc1a7119a1976c50b6995024678dbed5
0.015974 ms  haval128,4   raw      32 bytes  dc1a7119a1976c50b6995024678dbed5
0.015974 ms  haval224,4   raw      56 bytes  dbb4c7aff0e3bb04ca74d726ec8c6561965b60d6775389e3fa75641f
0.015974 ms  haval192,5   raw      48 bytes  f64cc8b24bfd4c015f3841085e7cd7153cdf185f3cfcaaa8
0.015974 ms  adler32      raw       8 bytes  04d71747
0.015974 ms  haval160,5   raw      40 bytes  d2cb86c07ddf19a903250040b225cd515eb8af50
0.016928 ms  haval192,4   hex      48 bytes  794e44119393d1805ffbb3a7d5fee2bb1f00894176f37bfa
0.016928 ms  haval224,5   hex      56 bytes  1dadd9594039d41c1fb29279633944f0f5851d4701f9c12792f6c742
0.016928 ms  sha224       hex      56 bytes  ab427857dbf051ded0f390a0e8898801252360be93a8a2cdd2b99647
0.016928 ms  tiger192,4   raw      48 bytes  cf97ab4c3f6ee6b49b0a9116e781e393d158fdb2d67c1c61
0.017166 ms  haval256,5   hex      64 bytes  2209fd3bb70cc8670487250cdd52afa0b7e82d024191ab0bbbcb5e08d1f68c13
0.017166 ms  sha256       raw      64 bytes  2b84c61b095556c4ab144592da2e599d373e725204afeb17afd6b148c8046a63
0.017166 ms  haval160,5   hex      40 bytes  d2cb86c07ddf19a903250040b225cd515eb8af50
0.017881 ms  tiger192,3   hex      48 bytes  302a7c2aef71b48dce8137e8c8328217d19a1b5267d04ae7
0.017881 ms  haval128,5   raw      32 bytes  46a0c13dba0f951e47e536b8d851fe49
0.019073 ms  tiger128,4   raw      32 bytes  cf97ab4c3f6ee6b49b0a9116e781e393
0.020027 ms  sha384       raw      96 bytes  73d6156f1f042212b89447d5cfef0995f8bb2f6a0b3901477a1e260be24563c40e7d5905c02ff52183f55c65f5e4801c
0.020981 ms  whirlpool    raw     128 bytes  77fdf6ac4e7ced357cb7f31edb2ac657902682bb9e27b99a242bf71856a3c42b095d9e5afc5bf148953c14a859252302fb58269916f9571ca53cffb846753e0e
0.020981 ms  haval224,3   raw      56 bytes  1c4c08c1008f8c446a70cbd3a1ad2c55718ca1bcac5e185f8434d753
0.021935 ms  whirlpool    hex     128 bytes  77fdf6ac4e7ced357cb7f31edb2ac657902682bb9e27b99a242bf71856a3c42b095d9e5afc5bf148953c14a859252302fb58269916f9571ca53cffb846753e0e
0.022888 ms  haval128,5   hex      32 bytes  46a0c13dba0f951e47e536b8d851fe49
0.024080 ms  md4          hex      32 bytes  3c7ceade579abbbc8bc2b1ab2c85817a
0.024080 ms  ripemd160    hex      40 bytes  98bdb3f5d0ac3408834e63fcc299bb17d8245507
0.025034 ms  haval224,5   raw      56 bytes  1dadd9594039d41c1fb29279633944f0f5851d4701f9c12792f6c742
0.025988 ms  gost-crypto  raw      64 bytes  8c1a01585490ba6bf86f4e17cce3a4e0460ef41881918be5a7ebaef4ae710a80
0.029087 ms  gost         hex      64 bytes  120dcc3edbfd1000cc12f5dae6730cbff6114d967c1c99f97c69d7424770e866
0.031948 ms  sha3-224     hex      56 bytes  f1603af749cd249f90644d083c6702df4c6a68d508c1d5a8f2999c38
0.034094 ms  gost-crypto  hex      64 bytes  8c1a01585490ba6bf86f4e17cce3a4e0460ef41881918be5a7ebaef4ae710a80
0.036001 ms  gost         raw      64 bytes  120dcc3edbfd1000cc12f5dae6730cbff6114d967c1c99f97c69d7424770e866
0.042915 ms  snefru256    raw      64 bytes  3c996c60f3b2e7e0143912f2e11e48d34186c94cc027cf156b8bb05fca327698
0.046968 ms  snefru256    hex      64 bytes  3c996c60f3b2e7e0143912f2e11e48d34186c94cc027cf156b8bb05fca327698
0.049114 ms  snefru       raw      64 bytes  3c996c60f3b2e7e0143912f2e11e48d34186c94cc027cf156b8bb05fca327698
0.052929 ms  snefru       hex      64 bytes  3c996c60f3b2e7e0143912f2e11e48d34186c94cc027cf156b8bb05fca327698
0.232935 ms  md2          hex      32 bytes  efda3837a670e042fc6c1f55e2033f74
0.233173 ms  md2          raw      32 bytes  efda3837a670e042fc6c1f55e2033f74
```
