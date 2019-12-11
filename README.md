# PHP 7.1 Hashes

Exact PHP version: 7.1.32  
Number of available hash algorithms: 52

:warning: **Caution! PHP version 7.1 is no longer supported and should no longer be used!**

All PHP Versions: [7.1](https://github.com/Kovah/php-hashes/tree/7.1) | [7.2](https://github.com/Kovah/php-hashes/tree/7.2) | [7.3](https://github.com/Kovah/php-hashes/tree/7.3) | [7.4](https://github.com/Kovah/php-hashes/tree/7.4)

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
0.010014 ms  adler32      hex       8 bytes  c5e414d1
0.009060 ms  adler32      raw       8 bytes  c5e414d1
0.013828 ms  crc32        hex       8 bytes  6437f299
0.010014 ms  crc32        raw       8 bytes  6437f299
0.009060 ms  crc32b       hex       8 bytes  7c83800b
0.007868 ms  crc32b       raw       8 bytes  7c83800b
0.006914 ms  fnv132       hex       8 bytes  6cd9b632
0.007868 ms  fnv132       raw       8 bytes  6cd9b632
0.011921 ms  fnv164       hex      16 bytes  96fc8a540b2b1e92
0.010014 ms  fnv164       raw      16 bytes  96fc8a540b2b1e92
0.010014 ms  fnv1a32      hex       8 bytes  8153b770
0.010014 ms  fnv1a32      raw       8 bytes  8153b770
0.007868 ms  fnv1a64      hex      16 bytes  848aabeabedd32f0
0.007153 ms  fnv1a64      raw      16 bytes  848aabeabedd32f0
0.030041 ms  gost         hex      64 bytes  b57301ec61b7846a87ff03e001174539fe4b1b1722c1a8bc0e69eca40be7ddc6
0.031948 ms  gost         raw      64 bytes  b57301ec61b7846a87ff03e001174539fe4b1b1722c1a8bc0e69eca40be7ddc6
0.022888 ms  gost-crypto  hex      64 bytes  e20899c25b73f20b17a2d9d6457c977a863822181b03f68c0d0f0abb2d051c9a
0.026941 ms  gost-crypto  raw      64 bytes  e20899c25b73f20b17a2d9d6457c977a863822181b03f68c0d0f0abb2d051c9a
0.008821 ms  haval128,3   hex      32 bytes  28c40c5336a129107d3a041c26b782de
0.012875 ms  haval128,3   raw      32 bytes  28c40c5336a129107d3a041c26b782de
0.015020 ms  haval128,4   hex      32 bytes  b5b21f0455c4113f8e23fdce814c9462
0.023127 ms  haval128,4   raw      32 bytes  b5b21f0455c4113f8e23fdce814c9462
0.016212 ms  haval128,5   hex      32 bytes  9e57eb754582fc0a31fca7f27547a1da
0.016928 ms  haval128,5   raw      32 bytes  9e57eb754582fc0a31fca7f27547a1da
0.013828 ms  haval160,3   hex      40 bytes  38898e9e500af5b9ee086719f55989a3258c0178
0.008106 ms  haval160,3   raw      40 bytes  38898e9e500af5b9ee086719f55989a3258c0178
0.008821 ms  haval160,4   hex      40 bytes  07fb3c48ff2b632752ddf37ef654b04e69848cfc
0.009060 ms  haval160,4   raw      40 bytes  07fb3c48ff2b632752ddf37ef654b04e69848cfc
0.016928 ms  haval160,5   hex      40 bytes  38d5a7659e4422e00ebd28f48d521b7c6f7c8a96
0.011921 ms  haval160,5   raw      40 bytes  38d5a7659e4422e00ebd28f48d521b7c6f7c8a96
0.014067 ms  haval192,3   hex      48 bytes  be470ece4820ab25ffae4c34fe0238da66e91522c41ca8a6
0.015020 ms  haval192,3   raw      48 bytes  be470ece4820ab25ffae4c34fe0238da66e91522c41ca8a6
0.013113 ms  haval192,4   hex      48 bytes  95f7e51e25665cbd9ed0fcfb1293c8cf8dd3fcdeefa09347
0.016212 ms  haval192,4   raw      48 bytes  95f7e51e25665cbd9ed0fcfb1293c8cf8dd3fcdeefa09347
0.017881 ms  haval192,5   hex      48 bytes  5ab50a87f9b83c41590ce029acd344ffcda7da6741742e17
0.026941 ms  haval192,5   raw      48 bytes  5ab50a87f9b83c41590ce029acd344ffcda7da6741742e17
0.008821 ms  haval224,3   hex      56 bytes  b46c607efdf79c66c3354133b7041cdb0ac397c1ed165f31b66efe56
0.013113 ms  haval224,3   raw      56 bytes  b46c607efdf79c66c3354133b7041cdb0ac397c1ed165f31b66efe56
0.015020 ms  haval224,4   hex      56 bytes  396e63450025ba6427949b517c0b2153c6135ad176b9249ac6625a70
0.015020 ms  haval224,4   raw      56 bytes  396e63450025ba6427949b517c0b2153c6135ad176b9249ac6625a70
0.025034 ms  haval224,5   hex      56 bytes  e2b27ee5d6a463cf2aca45a0f80a7e4b3392ad112327011bb77ca31e
0.010014 ms  haval224,5   raw      56 bytes  e2b27ee5d6a463cf2aca45a0f80a7e4b3392ad112327011bb77ca31e
0.011921 ms  haval256,3   hex      64 bytes  ac236e64b0f1abbbabd000d7bde7bae93ee21483ecb538c685025f5b4eb145f9
0.007868 ms  haval256,3   raw      64 bytes  ac236e64b0f1abbbabd000d7bde7bae93ee21483ecb538c685025f5b4eb145f9
0.015020 ms  haval256,4   hex      64 bytes  2f6215a25b8655950a8326e4ab196ef3757c12cc9e6b7355af08afbb20c38d54
0.015020 ms  haval256,4   raw      64 bytes  2f6215a25b8655950a8326e4ab196ef3757c12cc9e6b7355af08afbb20c38d54
0.020027 ms  haval256,5   hex      64 bytes  b775c496354a88179db93d0b1a774ecd8e7fe129e71a4bfad616240ce33c7d37
0.017166 ms  haval256,5   raw      64 bytes  b775c496354a88179db93d0b1a774ecd8e7fe129e71a4bfad616240ce33c7d37
0.009060 ms  joaat        hex       8 bytes  559660dd
0.010014 ms  joaat        raw       8 bytes  559660dd
0.167847 ms  md2          hex      32 bytes  e7b34985199f39c0ffcee00d3574ccf8
0.165939 ms  md2          raw      32 bytes  e7b34985199f39c0ffcee00d3574ccf8
0.010014 ms  md4          hex      32 bytes  0b71238d54dcb4a300c732fb6b75c2ba
0.010967 ms  md4          raw      32 bytes  0b71238d54dcb4a300c732fb6b75c2ba
0.008106 ms  md5          hex      32 bytes  1fe5560ad1c2e87677d48e9b441194e9
0.009060 ms  md5          raw      32 bytes  1fe5560ad1c2e87677d48e9b441194e9
0.017166 ms  ripemd128    hex      32 bytes  be37d61053bf15b8ba0aac5097301709
0.010014 ms  ripemd128    raw      32 bytes  be37d61053bf15b8ba0aac5097301709
0.022173 ms  ripemd160    hex      40 bytes  6975a75c95046cf2536c2b682c898aa63d8a63f0
0.020981 ms  ripemd160    raw      40 bytes  6975a75c95046cf2536c2b682c898aa63d8a63f0
0.008106 ms  ripemd256    hex      64 bytes  6b0f748f5a3870987da54ae43e239555649f84e64be31b961d777fb2e928c4e5
0.008106 ms  ripemd256    raw      64 bytes  6b0f748f5a3870987da54ae43e239555649f84e64be31b961d777fb2e928c4e5
0.016928 ms  ripemd320    hex      80 bytes  8b7886d18d2b13ba4c6445b6d047f8b135ecbe22362569d6364f1afe86fc1fb07074903f72182669
0.016928 ms  ripemd320    raw      80 bytes  8b7886d18d2b13ba4c6445b6d047f8b135ecbe22362569d6364f1afe86fc1fb07074903f72182669
0.031948 ms  sha1         hex      40 bytes  7d599a0b1620aca02d374549c8ba9e0f884800a9
0.011921 ms  sha1         raw      40 bytes  7d599a0b1620aca02d374549c8ba9e0f884800a9
0.051975 ms  sha224       hex      56 bytes  d98539a08456fe36a97ff6d2979585f75f90399a7cb9a054dac88924
0.047207 ms  sha224       raw      56 bytes  d98539a08456fe36a97ff6d2979585f75f90399a7cb9a054dac88924
0.067949 ms  sha256       hex      64 bytes  dd45c6b9082bbdae919e4612e9c4fe541a9b7d1f60d228e8fe2552440141bd69
0.015020 ms  sha256       raw      64 bytes  dd45c6b9082bbdae919e4612e9c4fe541a9b7d1f60d228e8fe2552440141bd69
0.061035 ms  sha3-224     hex      56 bytes  aa0e6c62ff84ffa420e86a0f88089d4bdac8cd8c55cfea549222a0ce
0.082970 ms  sha3-224     raw      56 bytes  aa0e6c62ff84ffa420e86a0f88089d4bdac8cd8c55cfea549222a0ce
0.061989 ms  sha3-256     hex      64 bytes  3fae79bc761a905d6831031b0986b9e948d6d3d3cf21f69d164b654430097a65
0.057936 ms  sha3-256     raw      64 bytes  3fae79bc761a905d6831031b0986b9e948d6d3d3cf21f69d164b654430097a65
0.066996 ms  sha3-384     hex      96 bytes  a0625e7123a8926f1b1b161fc77eb47d3c85f58113fd5cd472afc49822f18e79b8eb03917894282929e9ee1d1ff2c6c6
0.054121 ms  sha3-384     raw      96 bytes  a0625e7123a8926f1b1b161fc77eb47d3c85f58113fd5cd472afc49822f18e79b8eb03917894282929e9ee1d1ff2c6c6
0.100136 ms  sha3-512     hex     128 bytes  2dd2ff173aafdafdec6f10716ad89ee5b328c9d325532109bb898dffb993455e17e4440a210258a57abfd2f35d31ca969e023cb4eab1189ce7e2d0ce37d875b6
0.079870 ms  sha3-512     raw     128 bytes  2dd2ff173aafdafdec6f10716ad89ee5b328c9d325532109bb898dffb993455e17e4440a210258a57abfd2f35d31ca969e023cb4eab1189ce7e2d0ce37d875b6
0.013113 ms  sha384       hex      96 bytes  db294215118352a9f0e08aae74fdbe00bdadfbf3ab3edcbd54fb48c469cae39ccd51d0e368f1e5498cbf764cac51d8e6
0.008821 ms  sha384       raw      96 bytes  db294215118352a9f0e08aae74fdbe00bdadfbf3ab3edcbd54fb48c469cae39ccd51d0e368f1e5498cbf764cac51d8e6
0.007868 ms  sha512       hex     128 bytes  6499c623b9070139e93fd8a8becd1fbdd566744672c467225af4177079fc9ed65a36ce86bceeacfa6bcef35d7054d3f038455e81ff3b2a1498e02040e092f3ee
0.020981 ms  sha512       raw     128 bytes  6499c623b9070139e93fd8a8becd1fbdd566744672c467225af4177079fc9ed65a36ce86bceeacfa6bcef35d7054d3f038455e81ff3b2a1498e02040e092f3ee
0.006914 ms  sha512/224   hex      56 bytes  b47e466fc2162019aa2f1ba884b2ff7341177666b9988572d506f3d7
0.013113 ms  sha512/224   raw      56 bytes  b47e466fc2162019aa2f1ba884b2ff7341177666b9988572d506f3d7
0.012875 ms  sha512/256   hex      64 bytes  034a09a1377b659781510c9daa510c0cfe2b328171f0a1d9c3af61897753dcd5
0.048161 ms  sha512/256   raw      64 bytes  034a09a1377b659781510c9daa510c0cfe2b328171f0a1d9c3af61897753dcd5
0.051975 ms  snefru       hex      64 bytes  21358693209da3fe1b2b189f0f6cd481320311cdd1db7a2ae4dd621961407480
0.061035 ms  snefru       raw      64 bytes  21358693209da3fe1b2b189f0f6cd481320311cdd1db7a2ae4dd621961407480
0.053883 ms  snefru256    hex      64 bytes  21358693209da3fe1b2b189f0f6cd481320311cdd1db7a2ae4dd621961407480
0.061035 ms  snefru256    raw      64 bytes  21358693209da3fe1b2b189f0f6cd481320311cdd1db7a2ae4dd621961407480
0.013113 ms  tiger128,3   hex      32 bytes  7129fe269b88d503bf6436fa2fe11798
0.008106 ms  tiger128,3   raw      32 bytes  7129fe269b88d503bf6436fa2fe11798
0.010967 ms  tiger128,4   hex      32 bytes  c7ac434a710cdb6f2d569e2f0f26f982
0.011206 ms  tiger128,4   raw      32 bytes  c7ac434a710cdb6f2d569e2f0f26f982
0.007153 ms  tiger160,3   hex      40 bytes  7129fe269b88d503bf6436fa2fe1179837c6dce3
0.007153 ms  tiger160,3   raw      40 bytes  7129fe269b88d503bf6436fa2fe1179837c6dce3
0.010014 ms  tiger160,4   hex      40 bytes  c7ac434a710cdb6f2d569e2f0f26f982c5e5bb02
0.009060 ms  tiger160,4   raw      40 bytes  c7ac434a710cdb6f2d569e2f0f26f982c5e5bb02
0.010014 ms  tiger192,3   hex      48 bytes  7129fe269b88d503bf6436fa2fe1179837c6dce345680761
0.010014 ms  tiger192,3   raw      48 bytes  7129fe269b88d503bf6436fa2fe1179837c6dce345680761
0.011206 ms  tiger192,4   hex      48 bytes  c7ac434a710cdb6f2d569e2f0f26f982c5e5bb0291df5493
0.007868 ms  tiger192,4   raw      48 bytes  c7ac434a710cdb6f2d569e2f0f26f982c5e5bb0291df5493
0.016928 ms  whirlpool    hex     128 bytes  0f8ea8b05d8c4d7d60be4c065a845c1ee79b61f3eadc45c7aaeb60f0cbe651c11446021d139bfbc88fb1dab1da43d3bbd10e7f35a3fa16023e40732ab8e2781e
0.019073 ms  whirlpool    raw     128 bytes  0f8ea8b05d8c4d7d60be4c065a845c1ee79b61f3eadc45c7aaeb60f0cbe651c11446021d139bfbc88fb1dab1da43d3bbd10e7f35a3fa16023e40732ab8e2781e
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.006914 ms  sha512/224   hex      56 bytes  b47e466fc2162019aa2f1ba884b2ff7341177666b9988572d506f3d7
0.006914 ms  fnv132       hex       8 bytes  6cd9b632
0.007153 ms  fnv1a64      raw      16 bytes  848aabeabedd32f0
0.007153 ms  tiger160,3   hex      40 bytes  7129fe269b88d503bf6436fa2fe1179837c6dce3
0.007153 ms  tiger160,3   raw      40 bytes  7129fe269b88d503bf6436fa2fe1179837c6dce3
0.007868 ms  haval256,3   raw      64 bytes  ac236e64b0f1abbbabd000d7bde7bae93ee21483ecb538c685025f5b4eb145f9
0.007868 ms  crc32b       raw       8 bytes  7c83800b
0.007868 ms  fnv1a64      hex      16 bytes  848aabeabedd32f0
0.007868 ms  fnv132       raw       8 bytes  6cd9b632
0.007868 ms  sha512       hex     128 bytes  6499c623b9070139e93fd8a8becd1fbdd566744672c467225af4177079fc9ed65a36ce86bceeacfa6bcef35d7054d3f038455e81ff3b2a1498e02040e092f3ee
0.007868 ms  tiger192,4   raw      48 bytes  c7ac434a710cdb6f2d569e2f0f26f982c5e5bb0291df5493
0.008106 ms  ripemd256    hex      64 bytes  6b0f748f5a3870987da54ae43e239555649f84e64be31b961d777fb2e928c4e5
0.008106 ms  haval160,3   raw      40 bytes  38898e9e500af5b9ee086719f55989a3258c0178
0.008106 ms  tiger128,3   raw      32 bytes  7129fe269b88d503bf6436fa2fe11798
0.008106 ms  ripemd256    raw      64 bytes  6b0f748f5a3870987da54ae43e239555649f84e64be31b961d777fb2e928c4e5
0.008106 ms  md5          hex      32 bytes  1fe5560ad1c2e87677d48e9b441194e9
0.008821 ms  sha384       raw      96 bytes  db294215118352a9f0e08aae74fdbe00bdadfbf3ab3edcbd54fb48c469cae39ccd51d0e368f1e5498cbf764cac51d8e6
0.008821 ms  haval224,3   hex      56 bytes  b46c607efdf79c66c3354133b7041cdb0ac397c1ed165f31b66efe56
0.008821 ms  haval128,3   hex      32 bytes  28c40c5336a129107d3a041c26b782de
0.008821 ms  haval160,4   hex      40 bytes  07fb3c48ff2b632752ddf37ef654b04e69848cfc
0.009060 ms  tiger160,4   raw      40 bytes  c7ac434a710cdb6f2d569e2f0f26f982c5e5bb02
0.009060 ms  haval160,4   raw      40 bytes  07fb3c48ff2b632752ddf37ef654b04e69848cfc
0.009060 ms  md5          raw      32 bytes  1fe5560ad1c2e87677d48e9b441194e9
0.009060 ms  joaat        hex       8 bytes  559660dd
0.009060 ms  adler32      raw       8 bytes  c5e414d1
0.009060 ms  crc32b       hex       8 bytes  7c83800b
0.010014 ms  tiger192,3   raw      48 bytes  7129fe269b88d503bf6436fa2fe1179837c6dce345680761
0.010014 ms  tiger192,3   hex      48 bytes  7129fe269b88d503bf6436fa2fe1179837c6dce345680761
0.010014 ms  tiger160,4   hex      40 bytes  c7ac434a710cdb6f2d569e2f0f26f982c5e5bb02
0.010014 ms  fnv1a32      hex       8 bytes  8153b770
0.010014 ms  adler32      hex       8 bytes  c5e414d1
0.010014 ms  fnv164       raw      16 bytes  96fc8a540b2b1e92
0.010014 ms  fnv1a32      raw       8 bytes  8153b770
0.010014 ms  crc32        raw       8 bytes  6437f299
0.010014 ms  joaat        raw       8 bytes  559660dd
0.010014 ms  ripemd128    raw      32 bytes  be37d61053bf15b8ba0aac5097301709
0.010014 ms  haval224,5   raw      56 bytes  e2b27ee5d6a463cf2aca45a0f80a7e4b3392ad112327011bb77ca31e
0.010014 ms  md4          hex      32 bytes  0b71238d54dcb4a300c732fb6b75c2ba
0.010967 ms  md4          raw      32 bytes  0b71238d54dcb4a300c732fb6b75c2ba
0.010967 ms  tiger128,4   hex      32 bytes  c7ac434a710cdb6f2d569e2f0f26f982
0.011206 ms  tiger192,4   hex      48 bytes  c7ac434a710cdb6f2d569e2f0f26f982c5e5bb0291df5493
0.011206 ms  tiger128,4   raw      32 bytes  c7ac434a710cdb6f2d569e2f0f26f982
0.011921 ms  haval160,5   raw      40 bytes  38d5a7659e4422e00ebd28f48d521b7c6f7c8a96
0.011921 ms  haval256,3   hex      64 bytes  ac236e64b0f1abbbabd000d7bde7bae93ee21483ecb538c685025f5b4eb145f9
0.011921 ms  fnv164       hex      16 bytes  96fc8a540b2b1e92
0.011921 ms  sha1         raw      40 bytes  7d599a0b1620aca02d374549c8ba9e0f884800a9
0.012875 ms  sha512/256   hex      64 bytes  034a09a1377b659781510c9daa510c0cfe2b328171f0a1d9c3af61897753dcd5
0.012875 ms  haval128,3   raw      32 bytes  28c40c5336a129107d3a041c26b782de
0.013113 ms  haval224,3   raw      56 bytes  b46c607efdf79c66c3354133b7041cdb0ac397c1ed165f31b66efe56
0.013113 ms  sha384       hex      96 bytes  db294215118352a9f0e08aae74fdbe00bdadfbf3ab3edcbd54fb48c469cae39ccd51d0e368f1e5498cbf764cac51d8e6
0.013113 ms  tiger128,3   hex      32 bytes  7129fe269b88d503bf6436fa2fe11798
0.013113 ms  haval192,4   hex      48 bytes  95f7e51e25665cbd9ed0fcfb1293c8cf8dd3fcdeefa09347
0.013113 ms  sha512/224   raw      56 bytes  b47e466fc2162019aa2f1ba884b2ff7341177666b9988572d506f3d7
0.013828 ms  haval160,3   hex      40 bytes  38898e9e500af5b9ee086719f55989a3258c0178
0.013828 ms  crc32        hex       8 bytes  6437f299
0.014067 ms  haval192,3   hex      48 bytes  be470ece4820ab25ffae4c34fe0238da66e91522c41ca8a6
0.015020 ms  haval224,4   raw      56 bytes  396e63450025ba6427949b517c0b2153c6135ad176b9249ac6625a70
0.015020 ms  haval192,3   raw      48 bytes  be470ece4820ab25ffae4c34fe0238da66e91522c41ca8a6
0.015020 ms  sha256       raw      64 bytes  dd45c6b9082bbdae919e4612e9c4fe541a9b7d1f60d228e8fe2552440141bd69
0.015020 ms  haval128,4   hex      32 bytes  b5b21f0455c4113f8e23fdce814c9462
0.015020 ms  haval256,4   raw      64 bytes  2f6215a25b8655950a8326e4ab196ef3757c12cc9e6b7355af08afbb20c38d54
0.015020 ms  haval224,4   hex      56 bytes  396e63450025ba6427949b517c0b2153c6135ad176b9249ac6625a70
0.015020 ms  haval256,4   hex      64 bytes  2f6215a25b8655950a8326e4ab196ef3757c12cc9e6b7355af08afbb20c38d54
0.016212 ms  haval192,4   raw      48 bytes  95f7e51e25665cbd9ed0fcfb1293c8cf8dd3fcdeefa09347
0.016212 ms  haval128,5   hex      32 bytes  9e57eb754582fc0a31fca7f27547a1da
0.016928 ms  haval128,5   raw      32 bytes  9e57eb754582fc0a31fca7f27547a1da
0.016928 ms  ripemd320    raw      80 bytes  8b7886d18d2b13ba4c6445b6d047f8b135ecbe22362569d6364f1afe86fc1fb07074903f72182669
0.016928 ms  haval160,5   hex      40 bytes  38d5a7659e4422e00ebd28f48d521b7c6f7c8a96
0.016928 ms  ripemd320    hex      80 bytes  8b7886d18d2b13ba4c6445b6d047f8b135ecbe22362569d6364f1afe86fc1fb07074903f72182669
0.016928 ms  whirlpool    hex     128 bytes  0f8ea8b05d8c4d7d60be4c065a845c1ee79b61f3eadc45c7aaeb60f0cbe651c11446021d139bfbc88fb1dab1da43d3bbd10e7f35a3fa16023e40732ab8e2781e
0.017166 ms  ripemd128    hex      32 bytes  be37d61053bf15b8ba0aac5097301709
0.017166 ms  haval256,5   raw      64 bytes  b775c496354a88179db93d0b1a774ecd8e7fe129e71a4bfad616240ce33c7d37
0.017881 ms  haval192,5   hex      48 bytes  5ab50a87f9b83c41590ce029acd344ffcda7da6741742e17
0.019073 ms  whirlpool    raw     128 bytes  0f8ea8b05d8c4d7d60be4c065a845c1ee79b61f3eadc45c7aaeb60f0cbe651c11446021d139bfbc88fb1dab1da43d3bbd10e7f35a3fa16023e40732ab8e2781e
0.020027 ms  haval256,5   hex      64 bytes  b775c496354a88179db93d0b1a774ecd8e7fe129e71a4bfad616240ce33c7d37
0.020981 ms  ripemd160    raw      40 bytes  6975a75c95046cf2536c2b682c898aa63d8a63f0
0.020981 ms  sha512       raw     128 bytes  6499c623b9070139e93fd8a8becd1fbdd566744672c467225af4177079fc9ed65a36ce86bceeacfa6bcef35d7054d3f038455e81ff3b2a1498e02040e092f3ee
0.022173 ms  ripemd160    hex      40 bytes  6975a75c95046cf2536c2b682c898aa63d8a63f0
0.022888 ms  gost-crypto  hex      64 bytes  e20899c25b73f20b17a2d9d6457c977a863822181b03f68c0d0f0abb2d051c9a
0.023127 ms  haval128,4   raw      32 bytes  b5b21f0455c4113f8e23fdce814c9462
0.025034 ms  haval224,5   hex      56 bytes  e2b27ee5d6a463cf2aca45a0f80a7e4b3392ad112327011bb77ca31e
0.026941 ms  gost-crypto  raw      64 bytes  e20899c25b73f20b17a2d9d6457c977a863822181b03f68c0d0f0abb2d051c9a
0.026941 ms  haval192,5   raw      48 bytes  5ab50a87f9b83c41590ce029acd344ffcda7da6741742e17
0.030041 ms  gost         hex      64 bytes  b57301ec61b7846a87ff03e001174539fe4b1b1722c1a8bc0e69eca40be7ddc6
0.031948 ms  gost         raw      64 bytes  b57301ec61b7846a87ff03e001174539fe4b1b1722c1a8bc0e69eca40be7ddc6
0.031948 ms  sha1         hex      40 bytes  7d599a0b1620aca02d374549c8ba9e0f884800a9
0.047207 ms  sha224       raw      56 bytes  d98539a08456fe36a97ff6d2979585f75f90399a7cb9a054dac88924
0.048161 ms  sha512/256   raw      64 bytes  034a09a1377b659781510c9daa510c0cfe2b328171f0a1d9c3af61897753dcd5
0.051975 ms  snefru       hex      64 bytes  21358693209da3fe1b2b189f0f6cd481320311cdd1db7a2ae4dd621961407480
0.051975 ms  sha224       hex      56 bytes  d98539a08456fe36a97ff6d2979585f75f90399a7cb9a054dac88924
0.053883 ms  snefru256    hex      64 bytes  21358693209da3fe1b2b189f0f6cd481320311cdd1db7a2ae4dd621961407480
0.054121 ms  sha3-384     raw      96 bytes  a0625e7123a8926f1b1b161fc77eb47d3c85f58113fd5cd472afc49822f18e79b8eb03917894282929e9ee1d1ff2c6c6
0.057936 ms  sha3-256     raw      64 bytes  3fae79bc761a905d6831031b0986b9e948d6d3d3cf21f69d164b654430097a65
0.061035 ms  snefru256    raw      64 bytes  21358693209da3fe1b2b189f0f6cd481320311cdd1db7a2ae4dd621961407480
0.061035 ms  snefru       raw      64 bytes  21358693209da3fe1b2b189f0f6cd481320311cdd1db7a2ae4dd621961407480
0.061035 ms  sha3-224     hex      56 bytes  aa0e6c62ff84ffa420e86a0f88089d4bdac8cd8c55cfea549222a0ce
0.061989 ms  sha3-256     hex      64 bytes  3fae79bc761a905d6831031b0986b9e948d6d3d3cf21f69d164b654430097a65
0.066996 ms  sha3-384     hex      96 bytes  a0625e7123a8926f1b1b161fc77eb47d3c85f58113fd5cd472afc49822f18e79b8eb03917894282929e9ee1d1ff2c6c6
0.067949 ms  sha256       hex      64 bytes  dd45c6b9082bbdae919e4612e9c4fe541a9b7d1f60d228e8fe2552440141bd69
0.079870 ms  sha3-512     raw     128 bytes  2dd2ff173aafdafdec6f10716ad89ee5b328c9d325532109bb898dffb993455e17e4440a210258a57abfd2f35d31ca969e023cb4eab1189ce7e2d0ce37d875b6
0.082970 ms  sha3-224     raw      56 bytes  aa0e6c62ff84ffa420e86a0f88089d4bdac8cd8c55cfea549222a0ce
0.100136 ms  sha3-512     hex     128 bytes  2dd2ff173aafdafdec6f10716ad89ee5b328c9d325532109bb898dffb993455e17e4440a210258a57abfd2f35d31ca969e023cb4eab1189ce7e2d0ce37d875b6
0.165939 ms  md2          raw      32 bytes  e7b34985199f39c0ffcee00d3574ccf8
0.167847 ms  md2          hex      32 bytes  e7b34985199f39c0ffcee00d3574ccf8
```
