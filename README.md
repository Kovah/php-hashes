# PHP 8.0 Hashes

Exact PHP version: 8.0.30  
Number of available hash algorithms: 53

:warning: **Caution! PHP version 8.0 is no longer supported and should no longer be used!**

All other PHP Versions can be found [here](https://github.com/Kovah/php-hashes/branches).

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro18,3 with an Apple M1 Pro CPU. Current Docker Engine version is 27.5.1.

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
0.051975 ms  adler32      hex       8 bytes  f0a793b1
0.049114 ms  adler32      raw       8 bytes  f0a793b1
0.268936 ms  crc32        hex       8 bytes  35ee6aa2
0.278950 ms  crc32        raw       8 bytes  35ee6aa2
0.272036 ms  crc32b       hex       8 bytes  e5b0a52e
0.269175 ms  crc32b       raw       8 bytes  e5b0a52e
0.285864 ms  crc32c       hex       8 bytes  25bb8c4d
0.271082 ms  crc32c       raw       8 bytes  25bb8c4d
0.134945 ms  fnv132       hex       8 bytes  1d599af4
0.135183 ms  fnv132       raw       8 bytes  1d599af4
0.140905 ms  fnv164       hex      16 bytes  315bc695e30083f4
0.131845 ms  fnv164       raw      16 bytes  315bc695e30083f4
0.135899 ms  fnv1a32      hex       8 bytes  d3976cbe
0.148058 ms  fnv1a32      raw       8 bytes  d3976cbe
0.160933 ms  fnv1a64      hex      16 bytes  161866afda46dbde
0.131130 ms  fnv1a64      raw      16 bytes  161866afda46dbde
1.395941 ms  gost         hex      64 bytes  6e00416a1bab07204c626e5f785fda1a4d4db0e850b453ac4e907cd70c76f2c8
1.357079 ms  gost         raw      64 bytes  6e00416a1bab07204c626e5f785fda1a4d4db0e850b453ac4e907cd70c76f2c8
1.375914 ms  gost-crypto  hex      64 bytes  d77f12d699e508eb55570082aae129ee9c9567a5b38136ef49f1537c1704fa91
1.430035 ms  gost-crypto  raw      64 bytes  d77f12d699e508eb55570082aae129ee9c9567a5b38136ef49f1537c1704fa91
0.370979 ms  haval128,3   hex      32 bytes  92f2a0afe27001fe5eebfb537beca03f
0.370979 ms  haval128,3   raw      32 bytes  92f2a0afe27001fe5eebfb537beca03f
0.550032 ms  haval128,4   hex      32 bytes  08285664cc6f8db3cd4668a95d0bd5d0
0.506163 ms  haval128,4   raw      32 bytes  08285664cc6f8db3cd4668a95d0bd5d0
0.607014 ms  haval128,5   hex      32 bytes  53b1a6c2d9da1d240527234f34ba9b45
0.602961 ms  haval128,5   raw      32 bytes  53b1a6c2d9da1d240527234f34ba9b45
0.408173 ms  haval160,3   hex      40 bytes  c9ade47f7afeca0a19a27ea1094002c9d4272e85
0.426054 ms  haval160,3   raw      40 bytes  c9ade47f7afeca0a19a27ea1094002c9d4272e85
0.539064 ms  haval160,4   hex      40 bytes  55cbb5bedf3e77a0d6160baf34e820df5b39fd40
0.522852 ms  haval160,4   raw      40 bytes  55cbb5bedf3e77a0d6160baf34e820df5b39fd40
0.596046 ms  haval160,5   hex      40 bytes  893bfc8ffe86f50106fa15e2ae2ec019111ea238
0.608921 ms  haval160,5   raw      40 bytes  893bfc8ffe86f50106fa15e2ae2ec019111ea238
0.408888 ms  haval192,3   hex      48 bytes  6e73dec82d537d6711dc795e1e482e0fca007a84958c95ad
0.419140 ms  haval192,3   raw      48 bytes  6e73dec82d537d6711dc795e1e482e0fca007a84958c95ad
0.565052 ms  haval192,4   hex      48 bytes  68190459522fab9847bf4265c18047e320b98bf120a56faf
0.519991 ms  haval192,4   raw      48 bytes  68190459522fab9847bf4265c18047e320b98bf120a56faf
0.633001 ms  haval192,5   hex      48 bytes  54bd1941fe80d786c4d79c37b10181ed8b2642f17f60dd57
0.647783 ms  haval192,5   raw      48 bytes  54bd1941fe80d786c4d79c37b10181ed8b2642f17f60dd57
0.377893 ms  haval224,3   hex      56 bytes  7b995a19f4cbd503303c71eec4bdb7b7ebb537dd2eee0fe643499e3e
0.372171 ms  haval224,3   raw      56 bytes  7b995a19f4cbd503303c71eec4bdb7b7ebb537dd2eee0fe643499e3e
0.509977 ms  haval224,4   hex      56 bytes  b94c0faed44aab7a27f3b75135191bfb2b10588917e1b33c7f5f87e5
0.509024 ms  haval224,4   raw      56 bytes  b94c0faed44aab7a27f3b75135191bfb2b10588917e1b33c7f5f87e5
0.627041 ms  haval224,5   hex      56 bytes  4c04d01c40a2262e9bb697f27313558a3a2d35b5cc698f1e6cde66a9
0.636816 ms  haval224,5   raw      56 bytes  4c04d01c40a2262e9bb697f27313558a3a2d35b5cc698f1e6cde66a9
0.379086 ms  haval256,3   hex      64 bytes  8ecac4464528af5f08ad745f6712d4c3b011eaaaf83c055b2f9fb62c5a97c332
0.362873 ms  haval256,3   raw      64 bytes  8ecac4464528af5f08ad745f6712d4c3b011eaaaf83c055b2f9fb62c5a97c332
0.498056 ms  haval256,4   hex      64 bytes  c121c9c756ba47858eed7c2287dc852296b4c2ba8ccd08cbdb1a6c5ff95d91d6
0.484943 ms  haval256,4   raw      64 bytes  c121c9c756ba47858eed7c2287dc852296b4c2ba8ccd08cbdb1a6c5ff95d91d6
0.643015 ms  haval256,5   hex      64 bytes  5a555d9f5cf6bad5fb3b25245170f1f7968ace6486cfa1911c4cb17d80df38f2
0.655890 ms  haval256,5   raw      64 bytes  5a555d9f5cf6bad5fb3b25245170f1f7968ace6486cfa1911c4cb17d80df38f2
0.164032 ms  joaat        hex       8 bytes  0152db92
0.164032 ms  joaat        raw       8 bytes  0152db92
9.247780 ms  md2          hex      32 bytes  6cb5323f1b23f00a51cbab20aef09611
9.263039 ms  md2          raw      32 bytes  6cb5323f1b23f00a51cbab20aef09611
0.114918 ms  md4          hex      32 bytes  8327fd328ed5dd51e3cb9234c56858a6
0.113010 ms  md4          raw      32 bytes  8327fd328ed5dd51e3cb9234c56858a6
0.199080 ms  md5          hex      32 bytes  01945f5644f37973b1f45358dc9f1316
0.196934 ms  md5          raw      32 bytes  01945f5644f37973b1f45358dc9f1316
0.231981 ms  ripemd128    hex      32 bytes  e8961b0b3a9933025dfec30c73e02086
0.231981 ms  ripemd128    raw      32 bytes  e8961b0b3a9933025dfec30c73e02086
0.380039 ms  ripemd160    hex      40 bytes  fda48dd6820e909cd1825a590f1b3e570f9e789d
0.323057 ms  ripemd160    raw      40 bytes  fda48dd6820e909cd1825a590f1b3e570f9e789d
0.232935 ms  ripemd256    hex      64 bytes  150dfb43be69883689dc862489e97140527ff54b59993bc715f5b092a71f0ddd
0.232935 ms  ripemd256    raw      64 bytes  150dfb43be69883689dc862489e97140527ff54b59993bc715f5b092a71f0ddd
0.360012 ms  ripemd320    hex      80 bytes  41688c587e6f24a1895e9028722dc4ec3e7dd7e9f78b604e9cb13015fbc2a6389014410a858db5a0
0.329971 ms  ripemd320    raw      80 bytes  41688c587e6f24a1895e9028722dc4ec3e7dd7e9f78b604e9cb13015fbc2a6389014410a858db5a0
0.139952 ms  sha1         hex      40 bytes  c1e251f96b2681882b34d2dc18352e041740c6a0
0.132084 ms  sha1         raw      40 bytes  c1e251f96b2681882b34d2dc18352e041740c6a0
0.622034 ms  sha224       hex      56 bytes  1c4694dfbfa2472e48a28382f244e69d79584d0baa27f64c2e2d2e0d
0.670910 ms  sha224       raw      56 bytes  1c4694dfbfa2472e48a28382f244e69d79584d0baa27f64c2e2d2e0d
0.608921 ms  sha256       hex      64 bytes  ba065cc2575e3e3031965323e605f34c4a97a621c88ecc2cd452b74380fe1c37
0.612974 ms  sha256       raw      64 bytes  ba065cc2575e3e3031965323e605f34c4a97a621c88ecc2cd452b74380fe1c37
0.160933 ms  sha3-224     hex      56 bytes  c8d4c2bf8f86fb58fdc839e4fabdbe1e754a305f8bab3e8be3039efc
0.153065 ms  sha3-224     raw      56 bytes  c8d4c2bf8f86fb58fdc839e4fabdbe1e754a305f8bab3e8be3039efc
0.176907 ms  sha3-256     hex      64 bytes  383ec2b92085a95ecd51d46b37beb5618c6afd1b669712742887ed5433c9d805
0.167131 ms  sha3-256     raw      64 bytes  383ec2b92085a95ecd51d46b37beb5618c6afd1b669712742887ed5433c9d805
0.216007 ms  sha3-384     hex      96 bytes  49808fa1a26da901ae0dd5445451d2cc1fea088d9a9471fbb398d7205856cf68940e9bb55770fb01013d7b47711017c7
0.216007 ms  sha3-384     raw      96 bytes  49808fa1a26da901ae0dd5445451d2cc1fea088d9a9471fbb398d7205856cf68940e9bb55770fb01013d7b47711017c7
0.313997 ms  sha3-512     hex     128 bytes  0541f56574c215737daf467e6b68a6e11d1438bd918886ea082eedb1938683e0b3ef36f5f8ffc8d40c50250ccc45b4abffcab9f8fc8fb623d2be1c6ec7e4a33a
0.324965 ms  sha3-512     raw     128 bytes  0541f56574c215737daf467e6b68a6e11d1438bd918886ea082eedb1938683e0b3ef36f5f8ffc8d40c50250ccc45b4abffcab9f8fc8fb623d2be1c6ec7e4a33a
0.355005 ms  sha384       hex      96 bytes  476bae05be3ed4f89a6499fe8d5171f191cceaec5a62160ea6f4a028cfe98da10d3d628e2d4af99208942187f524bd49
0.347853 ms  sha384       raw      96 bytes  476bae05be3ed4f89a6499fe8d5171f191cceaec5a62160ea6f4a028cfe98da10d3d628e2d4af99208942187f524bd49
0.363111 ms  sha512       hex     128 bytes  1bdd1d3a54c08abe258ac3fff50cf7dc3b06b67b8cdba1881b8c14a6c9086aa5367bb047216174a212572084e0574fa5eef3a58986d95605c0a93468b11f8ad6
0.344992 ms  sha512       raw     128 bytes  1bdd1d3a54c08abe258ac3fff50cf7dc3b06b67b8cdba1881b8c14a6c9086aa5367bb047216174a212572084e0574fa5eef3a58986d95605c0a93468b11f8ad6
0.411987 ms  sha512/224   hex      56 bytes  6957cc3fb57d1dd28173448f8cb14cfce636eab3068f658efe3a6984
0.360966 ms  sha512/224   raw      56 bytes  6957cc3fb57d1dd28173448f8cb14cfce636eab3068f658efe3a6984
0.349045 ms  sha512/256   hex      64 bytes  5b0f3abda1d1b8f66b976e7fea1ffc92531622f1b8a804e77499215012b5148d
0.335932 ms  sha512/256   raw      64 bytes  5b0f3abda1d1b8f66b976e7fea1ffc92531622f1b8a804e77499215012b5148d
3.383875 ms  snefru       hex      64 bytes  f696a80b38f1c6976371de29dcda303ad092a01b88860b7169bc5ea7ac03b897
3.388882 ms  snefru       raw      64 bytes  f696a80b38f1c6976371de29dcda303ad092a01b88860b7169bc5ea7ac03b897
3.358841 ms  snefru256    hex      64 bytes  f696a80b38f1c6976371de29dcda303ad092a01b88860b7169bc5ea7ac03b897
3.371954 ms  snefru256    raw      64 bytes  f696a80b38f1c6976371de29dcda303ad092a01b88860b7169bc5ea7ac03b897
0.153065 ms  tiger128,3   hex      32 bytes  4f9245f9c8ed69bc34178fe181891228
0.165939 ms  tiger128,3   raw      32 bytes  4f9245f9c8ed69bc34178fe181891228
0.190020 ms  tiger128,4   hex      32 bytes  ec7bc126c726a4ed212e6ca87440c8ac
0.189066 ms  tiger128,4   raw      32 bytes  ec7bc126c726a4ed212e6ca87440c8ac
0.150919 ms  tiger160,3   hex      40 bytes  4f9245f9c8ed69bc34178fe18189122814e51106
0.189066 ms  tiger160,3   raw      40 bytes  4f9245f9c8ed69bc34178fe18189122814e51106
0.192881 ms  tiger160,4   hex      40 bytes  ec7bc126c726a4ed212e6ca87440c8acbce73c4f
0.203133 ms  tiger160,4   raw      40 bytes  ec7bc126c726a4ed212e6ca87440c8acbce73c4f
0.143051 ms  tiger192,3   hex      48 bytes  4f9245f9c8ed69bc34178fe18189122814e511065f9cb3a5
0.148058 ms  tiger192,3   raw      48 bytes  4f9245f9c8ed69bc34178fe18189122814e511065f9cb3a5
0.189066 ms  tiger192,4   hex      48 bytes  ec7bc126c726a4ed212e6ca87440c8acbce73c4fa89d0bf7
0.190973 ms  tiger192,4   raw      48 bytes  ec7bc126c726a4ed212e6ca87440c8acbce73c4fa89d0bf7
0.427961 ms  whirlpool    hex     128 bytes  6a3479fd4f8d798e6f6cac4aa7f805a7e9546200d166fb9ca2a73d712451618cb79ea5c8617eeee742199f325810512824f2761d11586b1971c8c886f8e7a2e3
0.415087 ms  whirlpool    raw     128 bytes  6a3479fd4f8d798e6f6cac4aa7f805a7e9546200d166fb9ca2a73d712451618cb79ea5c8617eeee742199f325810512824f2761d11586b1971c8c886f8e7a2e3
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.049114 ms  adler32      raw       8 bytes  f0a793b1
0.051975 ms  adler32      hex       8 bytes  f0a793b1
0.113010 ms  md4          raw      32 bytes  8327fd328ed5dd51e3cb9234c56858a6
0.114918 ms  md4          hex      32 bytes  8327fd328ed5dd51e3cb9234c56858a6
0.131130 ms  fnv1a64      raw      16 bytes  161866afda46dbde
0.131845 ms  fnv164       raw      16 bytes  315bc695e30083f4
0.132084 ms  sha1         raw      40 bytes  c1e251f96b2681882b34d2dc18352e041740c6a0
0.134945 ms  fnv132       hex       8 bytes  1d599af4
0.135183 ms  fnv132       raw       8 bytes  1d599af4
0.135899 ms  fnv1a32      hex       8 bytes  d3976cbe
0.139952 ms  sha1         hex      40 bytes  c1e251f96b2681882b34d2dc18352e041740c6a0
0.140905 ms  fnv164       hex      16 bytes  315bc695e30083f4
0.143051 ms  tiger192,3   hex      48 bytes  4f9245f9c8ed69bc34178fe18189122814e511065f9cb3a5
0.148058 ms  tiger192,3   raw      48 bytes  4f9245f9c8ed69bc34178fe18189122814e511065f9cb3a5
0.148058 ms  fnv1a32      raw       8 bytes  d3976cbe
0.150919 ms  tiger160,3   hex      40 bytes  4f9245f9c8ed69bc34178fe18189122814e51106
0.153065 ms  sha3-224     raw      56 bytes  c8d4c2bf8f86fb58fdc839e4fabdbe1e754a305f8bab3e8be3039efc
0.153065 ms  tiger128,3   hex      32 bytes  4f9245f9c8ed69bc34178fe181891228
0.160933 ms  sha3-224     hex      56 bytes  c8d4c2bf8f86fb58fdc839e4fabdbe1e754a305f8bab3e8be3039efc
0.160933 ms  fnv1a64      hex      16 bytes  161866afda46dbde
0.164032 ms  joaat        hex       8 bytes  0152db92
0.164032 ms  joaat        raw       8 bytes  0152db92
0.165939 ms  tiger128,3   raw      32 bytes  4f9245f9c8ed69bc34178fe181891228
0.167131 ms  sha3-256     raw      64 bytes  383ec2b92085a95ecd51d46b37beb5618c6afd1b669712742887ed5433c9d805
0.176907 ms  sha3-256     hex      64 bytes  383ec2b92085a95ecd51d46b37beb5618c6afd1b669712742887ed5433c9d805
0.189066 ms  tiger160,3   raw      40 bytes  4f9245f9c8ed69bc34178fe18189122814e51106
0.189066 ms  tiger128,4   raw      32 bytes  ec7bc126c726a4ed212e6ca87440c8ac
0.189066 ms  tiger192,4   hex      48 bytes  ec7bc126c726a4ed212e6ca87440c8acbce73c4fa89d0bf7
0.190020 ms  tiger128,4   hex      32 bytes  ec7bc126c726a4ed212e6ca87440c8ac
0.190973 ms  tiger192,4   raw      48 bytes  ec7bc126c726a4ed212e6ca87440c8acbce73c4fa89d0bf7
0.192881 ms  tiger160,4   hex      40 bytes  ec7bc126c726a4ed212e6ca87440c8acbce73c4f
0.196934 ms  md5          raw      32 bytes  01945f5644f37973b1f45358dc9f1316
0.199080 ms  md5          hex      32 bytes  01945f5644f37973b1f45358dc9f1316
0.203133 ms  tiger160,4   raw      40 bytes  ec7bc126c726a4ed212e6ca87440c8acbce73c4f
0.216007 ms  sha3-384     hex      96 bytes  49808fa1a26da901ae0dd5445451d2cc1fea088d9a9471fbb398d7205856cf68940e9bb55770fb01013d7b47711017c7
0.216007 ms  sha3-384     raw      96 bytes  49808fa1a26da901ae0dd5445451d2cc1fea088d9a9471fbb398d7205856cf68940e9bb55770fb01013d7b47711017c7
0.231981 ms  ripemd128    hex      32 bytes  e8961b0b3a9933025dfec30c73e02086
0.231981 ms  ripemd128    raw      32 bytes  e8961b0b3a9933025dfec30c73e02086
0.232935 ms  ripemd256    hex      64 bytes  150dfb43be69883689dc862489e97140527ff54b59993bc715f5b092a71f0ddd
0.232935 ms  ripemd256    raw      64 bytes  150dfb43be69883689dc862489e97140527ff54b59993bc715f5b092a71f0ddd
0.268936 ms  crc32        hex       8 bytes  35ee6aa2
0.269175 ms  crc32b       raw       8 bytes  e5b0a52e
0.271082 ms  crc32c       raw       8 bytes  25bb8c4d
0.272036 ms  crc32b       hex       8 bytes  e5b0a52e
0.278950 ms  crc32        raw       8 bytes  35ee6aa2
0.285864 ms  crc32c       hex       8 bytes  25bb8c4d
0.313997 ms  sha3-512     hex     128 bytes  0541f56574c215737daf467e6b68a6e11d1438bd918886ea082eedb1938683e0b3ef36f5f8ffc8d40c50250ccc45b4abffcab9f8fc8fb623d2be1c6ec7e4a33a
0.323057 ms  ripemd160    raw      40 bytes  fda48dd6820e909cd1825a590f1b3e570f9e789d
0.324965 ms  sha3-512     raw     128 bytes  0541f56574c215737daf467e6b68a6e11d1438bd918886ea082eedb1938683e0b3ef36f5f8ffc8d40c50250ccc45b4abffcab9f8fc8fb623d2be1c6ec7e4a33a
0.329971 ms  ripemd320    raw      80 bytes  41688c587e6f24a1895e9028722dc4ec3e7dd7e9f78b604e9cb13015fbc2a6389014410a858db5a0
0.335932 ms  sha512/256   raw      64 bytes  5b0f3abda1d1b8f66b976e7fea1ffc92531622f1b8a804e77499215012b5148d
0.344992 ms  sha512       raw     128 bytes  1bdd1d3a54c08abe258ac3fff50cf7dc3b06b67b8cdba1881b8c14a6c9086aa5367bb047216174a212572084e0574fa5eef3a58986d95605c0a93468b11f8ad6
0.347853 ms  sha384       raw      96 bytes  476bae05be3ed4f89a6499fe8d5171f191cceaec5a62160ea6f4a028cfe98da10d3d628e2d4af99208942187f524bd49
0.349045 ms  sha512/256   hex      64 bytes  5b0f3abda1d1b8f66b976e7fea1ffc92531622f1b8a804e77499215012b5148d
0.355005 ms  sha384       hex      96 bytes  476bae05be3ed4f89a6499fe8d5171f191cceaec5a62160ea6f4a028cfe98da10d3d628e2d4af99208942187f524bd49
0.360012 ms  ripemd320    hex      80 bytes  41688c587e6f24a1895e9028722dc4ec3e7dd7e9f78b604e9cb13015fbc2a6389014410a858db5a0
0.360966 ms  sha512/224   raw      56 bytes  6957cc3fb57d1dd28173448f8cb14cfce636eab3068f658efe3a6984
0.362873 ms  haval256,3   raw      64 bytes  8ecac4464528af5f08ad745f6712d4c3b011eaaaf83c055b2f9fb62c5a97c332
0.363111 ms  sha512       hex     128 bytes  1bdd1d3a54c08abe258ac3fff50cf7dc3b06b67b8cdba1881b8c14a6c9086aa5367bb047216174a212572084e0574fa5eef3a58986d95605c0a93468b11f8ad6
0.370979 ms  haval128,3   hex      32 bytes  92f2a0afe27001fe5eebfb537beca03f
0.370979 ms  haval128,3   raw      32 bytes  92f2a0afe27001fe5eebfb537beca03f
0.372171 ms  haval224,3   raw      56 bytes  7b995a19f4cbd503303c71eec4bdb7b7ebb537dd2eee0fe643499e3e
0.377893 ms  haval224,3   hex      56 bytes  7b995a19f4cbd503303c71eec4bdb7b7ebb537dd2eee0fe643499e3e
0.379086 ms  haval256,3   hex      64 bytes  8ecac4464528af5f08ad745f6712d4c3b011eaaaf83c055b2f9fb62c5a97c332
0.380039 ms  ripemd160    hex      40 bytes  fda48dd6820e909cd1825a590f1b3e570f9e789d
0.408173 ms  haval160,3   hex      40 bytes  c9ade47f7afeca0a19a27ea1094002c9d4272e85
0.408888 ms  haval192,3   hex      48 bytes  6e73dec82d537d6711dc795e1e482e0fca007a84958c95ad
0.411987 ms  sha512/224   hex      56 bytes  6957cc3fb57d1dd28173448f8cb14cfce636eab3068f658efe3a6984
0.415087 ms  whirlpool    raw     128 bytes  6a3479fd4f8d798e6f6cac4aa7f805a7e9546200d166fb9ca2a73d712451618cb79ea5c8617eeee742199f325810512824f2761d11586b1971c8c886f8e7a2e3
0.419140 ms  haval192,3   raw      48 bytes  6e73dec82d537d6711dc795e1e482e0fca007a84958c95ad
0.426054 ms  haval160,3   raw      40 bytes  c9ade47f7afeca0a19a27ea1094002c9d4272e85
0.427961 ms  whirlpool    hex     128 bytes  6a3479fd4f8d798e6f6cac4aa7f805a7e9546200d166fb9ca2a73d712451618cb79ea5c8617eeee742199f325810512824f2761d11586b1971c8c886f8e7a2e3
0.484943 ms  haval256,4   raw      64 bytes  c121c9c756ba47858eed7c2287dc852296b4c2ba8ccd08cbdb1a6c5ff95d91d6
0.498056 ms  haval256,4   hex      64 bytes  c121c9c756ba47858eed7c2287dc852296b4c2ba8ccd08cbdb1a6c5ff95d91d6
0.506163 ms  haval128,4   raw      32 bytes  08285664cc6f8db3cd4668a95d0bd5d0
0.509024 ms  haval224,4   raw      56 bytes  b94c0faed44aab7a27f3b75135191bfb2b10588917e1b33c7f5f87e5
0.509977 ms  haval224,4   hex      56 bytes  b94c0faed44aab7a27f3b75135191bfb2b10588917e1b33c7f5f87e5
0.519991 ms  haval192,4   raw      48 bytes  68190459522fab9847bf4265c18047e320b98bf120a56faf
0.522852 ms  haval160,4   raw      40 bytes  55cbb5bedf3e77a0d6160baf34e820df5b39fd40
0.539064 ms  haval160,4   hex      40 bytes  55cbb5bedf3e77a0d6160baf34e820df5b39fd40
0.550032 ms  haval128,4   hex      32 bytes  08285664cc6f8db3cd4668a95d0bd5d0
0.565052 ms  haval192,4   hex      48 bytes  68190459522fab9847bf4265c18047e320b98bf120a56faf
0.596046 ms  haval160,5   hex      40 bytes  893bfc8ffe86f50106fa15e2ae2ec019111ea238
0.602961 ms  haval128,5   raw      32 bytes  53b1a6c2d9da1d240527234f34ba9b45
0.607014 ms  haval128,5   hex      32 bytes  53b1a6c2d9da1d240527234f34ba9b45
0.608921 ms  sha256       hex      64 bytes  ba065cc2575e3e3031965323e605f34c4a97a621c88ecc2cd452b74380fe1c37
0.608921 ms  haval160,5   raw      40 bytes  893bfc8ffe86f50106fa15e2ae2ec019111ea238
0.612974 ms  sha256       raw      64 bytes  ba065cc2575e3e3031965323e605f34c4a97a621c88ecc2cd452b74380fe1c37
0.622034 ms  sha224       hex      56 bytes  1c4694dfbfa2472e48a28382f244e69d79584d0baa27f64c2e2d2e0d
0.627041 ms  haval224,5   hex      56 bytes  4c04d01c40a2262e9bb697f27313558a3a2d35b5cc698f1e6cde66a9
0.633001 ms  haval192,5   hex      48 bytes  54bd1941fe80d786c4d79c37b10181ed8b2642f17f60dd57
0.636816 ms  haval224,5   raw      56 bytes  4c04d01c40a2262e9bb697f27313558a3a2d35b5cc698f1e6cde66a9
0.643015 ms  haval256,5   hex      64 bytes  5a555d9f5cf6bad5fb3b25245170f1f7968ace6486cfa1911c4cb17d80df38f2
0.647783 ms  haval192,5   raw      48 bytes  54bd1941fe80d786c4d79c37b10181ed8b2642f17f60dd57
0.655890 ms  haval256,5   raw      64 bytes  5a555d9f5cf6bad5fb3b25245170f1f7968ace6486cfa1911c4cb17d80df38f2
0.670910 ms  sha224       raw      56 bytes  1c4694dfbfa2472e48a28382f244e69d79584d0baa27f64c2e2d2e0d
1.357079 ms  gost         raw      64 bytes  6e00416a1bab07204c626e5f785fda1a4d4db0e850b453ac4e907cd70c76f2c8
1.375914 ms  gost-crypto  hex      64 bytes  d77f12d699e508eb55570082aae129ee9c9567a5b38136ef49f1537c1704fa91
1.395941 ms  gost         hex      64 bytes  6e00416a1bab07204c626e5f785fda1a4d4db0e850b453ac4e907cd70c76f2c8
1.430035 ms  gost-crypto  raw      64 bytes  d77f12d699e508eb55570082aae129ee9c9567a5b38136ef49f1537c1704fa91
3.358841 ms  snefru256    hex      64 bytes  f696a80b38f1c6976371de29dcda303ad092a01b88860b7169bc5ea7ac03b897
3.371954 ms  snefru256    raw      64 bytes  f696a80b38f1c6976371de29dcda303ad092a01b88860b7169bc5ea7ac03b897
3.383875 ms  snefru       hex      64 bytes  f696a80b38f1c6976371de29dcda303ad092a01b88860b7169bc5ea7ac03b897
3.388882 ms  snefru       raw      64 bytes  f696a80b38f1c6976371de29dcda303ad092a01b88860b7169bc5ea7ac03b897
9.247780 ms  md2          hex      32 bytes  6cb5323f1b23f00a51cbab20aef09611
9.263039 ms  md2          raw      32 bytes  6cb5323f1b23f00a51cbab20aef09611
```
