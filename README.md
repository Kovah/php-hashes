# PHP 7.3 Hashes

Exact PHP version: 7.3.25  
Number of available hash algorithms: 52

:warning: **Caution! PHP version 7.3 is no longer supported and should no longer be used!**

All PHP Versions: [8.2](https://github.com/Kovah/php-hashes/tree/8.2) | [8.1](https://github.com/Kovah/php-hashes/tree/8.1) | [8.0](https://github.com/Kovah/php-hashes/tree/8.0) | [7.4](https://github.com/Kovah/php-hashes/tree/7.4) | [7.3](https://github.com/Kovah/php-hashes/tree/7.3) | [7.2](https://github.com/Kovah/php-hashes/tree/7.2) | [7.1](https://github.com/Kovah/php-hashes/tree/7.1)

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro16,1 with an 
Intel i7 (6x 2.6GHz) CPU. Current Docker version is 19.03.13, build 4484c46d9d.

All results are based on a string with a fixed length of 102400 characters, generated with the `random_bytes()` function.

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
0.052929 ms  adler32      hex       8 bytes  09beab00
0.051975 ms  adler32      raw       8 bytes  09beab00
0.270844 ms  crc32        hex       8 bytes  fd959d85
0.317812 ms  crc32        raw       8 bytes  fd959d85
0.293970 ms  crc32b       hex       8 bytes  4d0c52f5
0.248909 ms  crc32b       raw       8 bytes  4d0c52f5
0.121117 ms  fnv132       hex       8 bytes  a9129989
0.123978 ms  fnv132       raw       8 bytes  a9129989
0.105143 ms  fnv164       hex      16 bytes  bfeb2b56e53e1749
0.120878 ms  fnv164       raw      16 bytes  bfeb2b56e53e1749
0.142097 ms  fnv1a32      hex       8 bytes  a76bb77d
0.203848 ms  fnv1a32      raw       8 bytes  a76bb77d
0.102997 ms  fnv1a64      hex      16 bytes  f0e7992c0a0531fd
0.121117 ms  fnv1a64      raw      16 bytes  f0e7992c0a0531fd
1.701832 ms  gost         hex      64 bytes  134f77e9e01ff9ecf3e0f0be47b57885136c679680f9295812e36c2c12351cab
1.764059 ms  gost         raw      64 bytes  134f77e9e01ff9ecf3e0f0be47b57885136c679680f9295812e36c2c12351cab
1.741171 ms  gost-crypto  hex      64 bytes  dffce4707af122e5771297552426dd962cbe68e7bd5749b2dcf8acdb86d0f327
1.816988 ms  gost-crypto  raw      64 bytes  dffce4707af122e5771297552426dd962cbe68e7bd5749b2dcf8acdb86d0f327
0.449896 ms  haval128,3   hex      32 bytes  0e28fbfdb56ffdb18e1952d94faa4769
0.352144 ms  haval128,3   raw      32 bytes  0e28fbfdb56ffdb18e1952d94faa4769
0.539064 ms  haval128,4   hex      32 bytes  f8777c26cdc130b03211075fc05b19a7
0.607967 ms  haval128,4   raw      32 bytes  f8777c26cdc130b03211075fc05b19a7
0.743151 ms  haval128,5   hex      32 bytes  fee1ebb6e5ce37607c13542cd0fa12fd
0.742912 ms  haval128,5   raw      32 bytes  fee1ebb6e5ce37607c13542cd0fa12fd
0.466824 ms  haval160,3   hex      40 bytes  69f7ace1d50cc0dc0cd10fc5589969ff4fc33235
0.353098 ms  haval160,3   raw      40 bytes  69f7ace1d50cc0dc0cd10fc5589969ff4fc33235
0.499010 ms  haval160,4   hex      40 bytes  7f29c16d3420d6b168425470a667d4a0c40adf8e
0.607014 ms  haval160,4   raw      40 bytes  7f29c16d3420d6b168425470a667d4a0c40adf8e
0.622988 ms  haval160,5   hex      40 bytes  564b48cc1d90253ebab0f7597bda95c32a7ae5fb
0.753164 ms  haval160,5   raw      40 bytes  564b48cc1d90253ebab0f7597bda95c32a7ae5fb
0.420094 ms  haval192,3   hex      48 bytes  e232afa02a5e20989b9a15e1801a9f16cfcb1a85c992c8f7
0.435829 ms  haval192,3   raw      48 bytes  e232afa02a5e20989b9a15e1801a9f16cfcb1a85c992c8f7
0.537872 ms  haval192,4   hex      48 bytes  3b9b1a65291c25724cb539ec50e736f2379d754d98e93c16
0.601053 ms  haval192,4   raw      48 bytes  3b9b1a65291c25724cb539ec50e736f2379d754d98e93c16
0.720024 ms  haval192,5   hex      48 bytes  9b10bff05c511fa5e18055c2916a08084efbb28bd54883c4
0.658989 ms  haval192,5   raw      48 bytes  9b10bff05c511fa5e18055c2916a08084efbb28bd54883c4
0.355005 ms  haval224,3   hex      56 bytes  481c6d0c250ffd968efa6843aa89e8c63f058d5f54d46971dcbd700a
0.469208 ms  haval224,3   raw      56 bytes  481c6d0c250ffd968efa6843aa89e8c63f058d5f54d46971dcbd700a
0.549078 ms  haval224,4   hex      56 bytes  b6235cfc9d31e7b3def77d32854cb1ea566f0db3535f2dcf140c2b9a
0.574112 ms  haval224,4   raw      56 bytes  b6235cfc9d31e7b3def77d32854cb1ea566f0db3535f2dcf140c2b9a
0.705004 ms  haval224,5   hex      56 bytes  127d2ff89e0a7b7120bea0ecb337336ca83ef8959a0700b3c156da1e
0.741959 ms  haval224,5   raw      56 bytes  127d2ff89e0a7b7120bea0ecb337336ca83ef8959a0700b3c156da1e
0.350952 ms  haval256,3   hex      64 bytes  e8c0bddac022ee9c074e0d104f0a2f228992ef3d9833a4a81f9b738608f75a12
0.448942 ms  haval256,3   raw      64 bytes  e8c0bddac022ee9c074e0d104f0a2f228992ef3d9833a4a81f9b738608f75a12
0.607014 ms  haval256,4   hex      64 bytes  b716bf4f623b40dc134b9d69219b16a0f2b06743e70df3311cd1b5cea1dfaa26
0.494003 ms  haval256,4   raw      64 bytes  b716bf4f623b40dc134b9d69219b16a0f2b06743e70df3311cd1b5cea1dfaa26
0.779152 ms  haval256,5   hex      64 bytes  5bdafc019b50a12989dc4462a7e0658ac6d504baeac416598f8e39305192b4aa
0.606060 ms  haval256,5   raw      64 bytes  5bdafc019b50a12989dc4462a7e0658ac6d504baeac416598f8e39305192b4aa
0.164032 ms  joaat        hex       8 bytes  56390760
0.165939 ms  joaat        raw       8 bytes  56390760
12.809038 ms md2          hex      32 bytes  729f5f73fd89fd4d0b11046418e5b198
12.935877 ms md2          raw      32 bytes  729f5f73fd89fd4d0b11046418e5b198
0.183105 ms  md4          hex      32 bytes  630d0ac1faeb42fdcfda747369fd9b32
0.093937 ms  md4          raw      32 bytes  630d0ac1faeb42fdcfda747369fd9b32
0.153065 ms  md5          hex      32 bytes  9e4946286bcc94fab35f62d7ae972255
0.153065 ms  md5          raw      32 bytes  9e4946286bcc94fab35f62d7ae972255
0.341892 ms  ripemd128    hex      32 bytes  c1ec28bf4c5298dc6e44f4f7e38ce691
0.468016 ms  ripemd128    raw      32 bytes  c1ec28bf4c5298dc6e44f4f7e38ce691
0.477076 ms  ripemd160    hex      40 bytes  9a8edd98ee867fdfc2011b8712751bb7a2f5bde6
0.608921 ms  ripemd160    raw      40 bytes  9a8edd98ee867fdfc2011b8712751bb7a2f5bde6
0.339031 ms  ripemd256    hex      64 bytes  8dcc002becb14c3ac9310e408201fd7ce329adb003ed74a0194e675035933681
0.395060 ms  ripemd256    raw      64 bytes  8dcc002becb14c3ac9310e408201fd7ce329adb003ed74a0194e675035933681
0.552893 ms  ripemd320    hex      80 bytes  35fb1ba559f3c959e398889abe63db5570ea6a619abd5343ecedccf317d9fdedaa6caf8796aa5472
0.602007 ms  ripemd320    raw      80 bytes  35fb1ba559f3c959e398889abe63db5570ea6a619abd5343ecedccf317d9fdedaa6caf8796aa5472
0.223875 ms  sha1         hex      40 bytes  ac1a41b003464e2fae99e214db6bd9a26e8d1dd3
0.342846 ms  sha1         raw      40 bytes  ac1a41b003464e2fae99e214db6bd9a26e8d1dd3
0.526190 ms  sha224       hex      56 bytes  e50406a82678a6983533d7c071006d3952bc0881700a023fd6ed8c86
0.619888 ms  sha224       raw      56 bytes  e50406a82678a6983533d7c071006d3952bc0881700a023fd6ed8c86
0.566006 ms  sha256       hex      64 bytes  178d56675fc05cb87b15ccbf1f3a1b5752b20605081d019e05e18397522331f6
0.639915 ms  sha256       raw      64 bytes  178d56675fc05cb87b15ccbf1f3a1b5752b20605081d019e05e18397522331f6
0.432014 ms  sha3-224     hex      56 bytes  cd56935860137866ebed0dd3cdf7b52ab4b4d06a7d58737626468a2a
0.275135 ms  sha3-224     raw      56 bytes  cd56935860137866ebed0dd3cdf7b52ab4b4d06a7d58737626468a2a
0.308990 ms  sha3-256     hex      64 bytes  3fd38ec90583fe47f86d15978b1dc4c3ed57cd0d5f3e036179af786b01b74f09
0.416994 ms  sha3-256     raw      64 bytes  3fd38ec90583fe47f86d15978b1dc4c3ed57cd0d5f3e036179af786b01b74f09
0.386000 ms  sha3-384     hex      96 bytes  ca90cac9a4065cb6c1a1889bc7d793940a1cbfbeeef8bb37784c1d4e07755d472699148b1ffa40fdf5ae2465724d7a9d
0.486851 ms  sha3-384     raw      96 bytes  ca90cac9a4065cb6c1a1889bc7d793940a1cbfbeeef8bb37784c1d4e07755d472699148b1ffa40fdf5ae2465724d7a9d
0.622034 ms  sha3-512     hex     128 bytes  2b0569c94b316ad914ecfd48a5ccfd8dd184c16501a970cead3c10043028d900459aee6a5900c156d979d4cd2c35521cb96c3c4132a9c8df802495e9626ab789
0.671148 ms  sha3-512     raw     128 bytes  2b0569c94b316ad914ecfd48a5ccfd8dd184c16501a970cead3c10043028d900459aee6a5900c156d979d4cd2c35521cb96c3c4132a9c8df802495e9626ab789
0.387907 ms  sha384       hex      96 bytes  78ca6734f3898344142a3685595eae62e38b614e5fdf47598049f473840b6edd8fed5d4b0c6b1e8e60823053de3f26f8
0.457048 ms  sha384       raw      96 bytes  78ca6734f3898344142a3685595eae62e38b614e5fdf47598049f473840b6edd8fed5d4b0c6b1e8e60823053de3f26f8
0.422955 ms  sha512       hex     128 bytes  0174b4d08d185711d8671a11f8559c565c6f4b52a9058b6c670f7759cf011d431c32b348ccee0e31551b0e1d51ba7e6afaedce0663009bff8de7f89b58f7cb0c
0.379086 ms  sha512       raw     128 bytes  0174b4d08d185711d8671a11f8559c565c6f4b52a9058b6c670f7759cf011d431c32b348ccee0e31551b0e1d51ba7e6afaedce0663009bff8de7f89b58f7cb0c
0.350952 ms  sha512/224   hex      56 bytes  787f536e19b115e7c99945985858936648ad9881791f8c19e11a2008
0.501156 ms  sha512/224   raw      56 bytes  787f536e19b115e7c99945985858936648ad9881791f8c19e11a2008
0.355005 ms  sha512/256   hex      64 bytes  bd909f78aea6db4f72af5a8e5caf1e6baa547b03b6081bf77df8bd63ebb40bdf
0.391006 ms  sha512/256   raw      64 bytes  bd909f78aea6db4f72af5a8e5caf1e6baa547b03b6081bf77df8bd63ebb40bdf
3.634930 ms  snefru       hex      64 bytes  20033093d9296ff6324c812ac515b761c4b32c3390b56db8616cd8bfb434b129
3.932953 ms  snefru       raw      64 bytes  20033093d9296ff6324c812ac515b761c4b32c3390b56db8616cd8bfb434b129
3.495216 ms  snefru256    hex      64 bytes  20033093d9296ff6324c812ac515b761c4b32c3390b56db8616cd8bfb434b129
3.590822 ms  snefru256    raw      64 bytes  20033093d9296ff6324c812ac515b761c4b32c3390b56db8616cd8bfb434b129
0.138998 ms  tiger128,3   hex      32 bytes  dd89b2fa2c6544e6a8d657a7df4a1791
0.155926 ms  tiger128,3   raw      32 bytes  dd89b2fa2c6544e6a8d657a7df4a1791
0.196934 ms  tiger128,4   hex      32 bytes  3fa34918f81842623817499a4601c108
0.199795 ms  tiger128,4   raw      32 bytes  3fa34918f81842623817499a4601c108
0.154972 ms  tiger160,3   hex      40 bytes  dd89b2fa2c6544e6a8d657a7df4a1791a0aea205
0.172138 ms  tiger160,3   raw      40 bytes  dd89b2fa2c6544e6a8d657a7df4a1791a0aea205
0.216007 ms  tiger160,4   hex      40 bytes  3fa34918f81842623817499a4601c108fb579b59
0.303030 ms  tiger160,4   raw      40 bytes  3fa34918f81842623817499a4601c108fb579b59
0.180006 ms  tiger192,3   hex      48 bytes  dd89b2fa2c6544e6a8d657a7df4a1791a0aea2058b48760a
0.262022 ms  tiger192,3   raw      48 bytes  dd89b2fa2c6544e6a8d657a7df4a1791a0aea2058b48760a
0.201941 ms  tiger192,4   hex      48 bytes  3fa34918f81842623817499a4601c108fb579b59047effed
0.200033 ms  tiger192,4   raw      48 bytes  3fa34918f81842623817499a4601c108fb579b59047effed
0.988007 ms  whirlpool    hex     128 bytes  a373b49e1c7a65490532a74d1a62b6e33fa0e122368a2a8ef11315d976a9195db777367eb7e844844d66f3205d0ec22f99eb7191686993158432631fedb2d5ce
0.962973 ms  whirlpool    raw     128 bytes  a373b49e1c7a65490532a74d1a62b6e33fa0e122368a2a8ef11315d976a9195db777367eb7e844844d66f3205d0ec22f99eb7191686993158432631fedb2d5ce
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.051975 ms  adler32      raw       8 bytes  09beab00
0.052929 ms  adler32      hex       8 bytes  09beab00
0.093937 ms  md4          raw      32 bytes  630d0ac1faeb42fdcfda747369fd9b32
0.102997 ms  fnv1a64      hex      16 bytes  f0e7992c0a0531fd
0.105143 ms  fnv164       hex      16 bytes  bfeb2b56e53e1749
0.120878 ms  fnv164       raw      16 bytes  bfeb2b56e53e1749
0.121117 ms  fnv1a64      raw      16 bytes  f0e7992c0a0531fd
0.121117 ms  fnv132       hex       8 bytes  a9129989
0.123978 ms  fnv132       raw       8 bytes  a9129989
0.138998 ms  tiger128,3   hex      32 bytes  dd89b2fa2c6544e6a8d657a7df4a1791
0.142097 ms  fnv1a32      hex       8 bytes  a76bb77d
0.153065 ms  md5          hex      32 bytes  9e4946286bcc94fab35f62d7ae972255
0.153065 ms  md5          raw      32 bytes  9e4946286bcc94fab35f62d7ae972255
0.154972 ms  tiger160,3   hex      40 bytes  dd89b2fa2c6544e6a8d657a7df4a1791a0aea205
0.155926 ms  tiger128,3   raw      32 bytes  dd89b2fa2c6544e6a8d657a7df4a1791
0.164032 ms  joaat        hex       8 bytes  56390760
0.165939 ms  joaat        raw       8 bytes  56390760
0.172138 ms  tiger160,3   raw      40 bytes  dd89b2fa2c6544e6a8d657a7df4a1791a0aea205
0.180006 ms  tiger192,3   hex      48 bytes  dd89b2fa2c6544e6a8d657a7df4a1791a0aea2058b48760a
0.183105 ms  md4          hex      32 bytes  630d0ac1faeb42fdcfda747369fd9b32
0.196934 ms  tiger128,4   hex      32 bytes  3fa34918f81842623817499a4601c108
0.199795 ms  tiger128,4   raw      32 bytes  3fa34918f81842623817499a4601c108
0.200033 ms  tiger192,4   raw      48 bytes  3fa34918f81842623817499a4601c108fb579b59047effed
0.201941 ms  tiger192,4   hex      48 bytes  3fa34918f81842623817499a4601c108fb579b59047effed
0.203848 ms  fnv1a32      raw       8 bytes  a76bb77d
0.216007 ms  tiger160,4   hex      40 bytes  3fa34918f81842623817499a4601c108fb579b59
0.223875 ms  sha1         hex      40 bytes  ac1a41b003464e2fae99e214db6bd9a26e8d1dd3
0.248909 ms  crc32b       raw       8 bytes  4d0c52f5
0.262022 ms  tiger192,3   raw      48 bytes  dd89b2fa2c6544e6a8d657a7df4a1791a0aea2058b48760a
0.270844 ms  crc32        hex       8 bytes  fd959d85
0.275135 ms  sha3-224     raw      56 bytes  cd56935860137866ebed0dd3cdf7b52ab4b4d06a7d58737626468a2a
0.293970 ms  crc32b       hex       8 bytes  4d0c52f5
0.303030 ms  tiger160,4   raw      40 bytes  3fa34918f81842623817499a4601c108fb579b59
0.308990 ms  sha3-256     hex      64 bytes  3fd38ec90583fe47f86d15978b1dc4c3ed57cd0d5f3e036179af786b01b74f09
0.317812 ms  crc32        raw       8 bytes  fd959d85
0.339031 ms  ripemd256    hex      64 bytes  8dcc002becb14c3ac9310e408201fd7ce329adb003ed74a0194e675035933681
0.341892 ms  ripemd128    hex      32 bytes  c1ec28bf4c5298dc6e44f4f7e38ce691
0.342846 ms  sha1         raw      40 bytes  ac1a41b003464e2fae99e214db6bd9a26e8d1dd3
0.350952 ms  sha512/224   hex      56 bytes  787f536e19b115e7c99945985858936648ad9881791f8c19e11a2008
0.350952 ms  haval256,3   hex      64 bytes  e8c0bddac022ee9c074e0d104f0a2f228992ef3d9833a4a81f9b738608f75a12
0.352144 ms  haval128,3   raw      32 bytes  0e28fbfdb56ffdb18e1952d94faa4769
0.353098 ms  haval160,3   raw      40 bytes  69f7ace1d50cc0dc0cd10fc5589969ff4fc33235
0.355005 ms  haval224,3   hex      56 bytes  481c6d0c250ffd968efa6843aa89e8c63f058d5f54d46971dcbd700a
0.355005 ms  sha512/256   hex      64 bytes  bd909f78aea6db4f72af5a8e5caf1e6baa547b03b6081bf77df8bd63ebb40bdf
0.379086 ms  sha512       raw     128 bytes  0174b4d08d185711d8671a11f8559c565c6f4b52a9058b6c670f7759cf011d431c32b348ccee0e31551b0e1d51ba7e6afaedce0663009bff8de7f89b58f7cb0c
0.386000 ms  sha3-384     hex      96 bytes  ca90cac9a4065cb6c1a1889bc7d793940a1cbfbeeef8bb37784c1d4e07755d472699148b1ffa40fdf5ae2465724d7a9d
0.387907 ms  sha384       hex      96 bytes  78ca6734f3898344142a3685595eae62e38b614e5fdf47598049f473840b6edd8fed5d4b0c6b1e8e60823053de3f26f8
0.391006 ms  sha512/256   raw      64 bytes  bd909f78aea6db4f72af5a8e5caf1e6baa547b03b6081bf77df8bd63ebb40bdf
0.395060 ms  ripemd256    raw      64 bytes  8dcc002becb14c3ac9310e408201fd7ce329adb003ed74a0194e675035933681
0.416994 ms  sha3-256     raw      64 bytes  3fd38ec90583fe47f86d15978b1dc4c3ed57cd0d5f3e036179af786b01b74f09
0.420094 ms  haval192,3   hex      48 bytes  e232afa02a5e20989b9a15e1801a9f16cfcb1a85c992c8f7
0.422955 ms  sha512       hex     128 bytes  0174b4d08d185711d8671a11f8559c565c6f4b52a9058b6c670f7759cf011d431c32b348ccee0e31551b0e1d51ba7e6afaedce0663009bff8de7f89b58f7cb0c
0.432014 ms  sha3-224     hex      56 bytes  cd56935860137866ebed0dd3cdf7b52ab4b4d06a7d58737626468a2a
0.435829 ms  haval192,3   raw      48 bytes  e232afa02a5e20989b9a15e1801a9f16cfcb1a85c992c8f7
0.448942 ms  haval256,3   raw      64 bytes  e8c0bddac022ee9c074e0d104f0a2f228992ef3d9833a4a81f9b738608f75a12
0.449896 ms  haval128,3   hex      32 bytes  0e28fbfdb56ffdb18e1952d94faa4769
0.457048 ms  sha384       raw      96 bytes  78ca6734f3898344142a3685595eae62e38b614e5fdf47598049f473840b6edd8fed5d4b0c6b1e8e60823053de3f26f8
0.466824 ms  haval160,3   hex      40 bytes  69f7ace1d50cc0dc0cd10fc5589969ff4fc33235
0.468016 ms  ripemd128    raw      32 bytes  c1ec28bf4c5298dc6e44f4f7e38ce691
0.469208 ms  haval224,3   raw      56 bytes  481c6d0c250ffd968efa6843aa89e8c63f058d5f54d46971dcbd700a
0.477076 ms  ripemd160    hex      40 bytes  9a8edd98ee867fdfc2011b8712751bb7a2f5bde6
0.486851 ms  sha3-384     raw      96 bytes  ca90cac9a4065cb6c1a1889bc7d793940a1cbfbeeef8bb37784c1d4e07755d472699148b1ffa40fdf5ae2465724d7a9d
0.494003 ms  haval256,4   raw      64 bytes  b716bf4f623b40dc134b9d69219b16a0f2b06743e70df3311cd1b5cea1dfaa26
0.499010 ms  haval160,4   hex      40 bytes  7f29c16d3420d6b168425470a667d4a0c40adf8e
0.501156 ms  sha512/224   raw      56 bytes  787f536e19b115e7c99945985858936648ad9881791f8c19e11a2008
0.526190 ms  sha224       hex      56 bytes  e50406a82678a6983533d7c071006d3952bc0881700a023fd6ed8c86
0.537872 ms  haval192,4   hex      48 bytes  3b9b1a65291c25724cb539ec50e736f2379d754d98e93c16
0.539064 ms  haval128,4   hex      32 bytes  f8777c26cdc130b03211075fc05b19a7
0.549078 ms  haval224,4   hex      56 bytes  b6235cfc9d31e7b3def77d32854cb1ea566f0db3535f2dcf140c2b9a
0.552893 ms  ripemd320    hex      80 bytes  35fb1ba559f3c959e398889abe63db5570ea6a619abd5343ecedccf317d9fdedaa6caf8796aa5472
0.566006 ms  sha256       hex      64 bytes  178d56675fc05cb87b15ccbf1f3a1b5752b20605081d019e05e18397522331f6
0.574112 ms  haval224,4   raw      56 bytes  b6235cfc9d31e7b3def77d32854cb1ea566f0db3535f2dcf140c2b9a
0.601053 ms  haval192,4   raw      48 bytes  3b9b1a65291c25724cb539ec50e736f2379d754d98e93c16
0.602007 ms  ripemd320    raw      80 bytes  35fb1ba559f3c959e398889abe63db5570ea6a619abd5343ecedccf317d9fdedaa6caf8796aa5472
0.606060 ms  haval256,5   raw      64 bytes  5bdafc019b50a12989dc4462a7e0658ac6d504baeac416598f8e39305192b4aa
0.607014 ms  haval160,4   raw      40 bytes  7f29c16d3420d6b168425470a667d4a0c40adf8e
0.607014 ms  haval256,4   hex      64 bytes  b716bf4f623b40dc134b9d69219b16a0f2b06743e70df3311cd1b5cea1dfaa26
0.607967 ms  haval128,4   raw      32 bytes  f8777c26cdc130b03211075fc05b19a7
0.608921 ms  ripemd160    raw      40 bytes  9a8edd98ee867fdfc2011b8712751bb7a2f5bde6
0.619888 ms  sha224       raw      56 bytes  e50406a82678a6983533d7c071006d3952bc0881700a023fd6ed8c86
0.622034 ms  sha3-512     hex     128 bytes  2b0569c94b316ad914ecfd48a5ccfd8dd184c16501a970cead3c10043028d900459aee6a5900c156d979d4cd2c35521cb96c3c4132a9c8df802495e9626ab789
0.622988 ms  haval160,5   hex      40 bytes  564b48cc1d90253ebab0f7597bda95c32a7ae5fb
0.639915 ms  sha256       raw      64 bytes  178d56675fc05cb87b15ccbf1f3a1b5752b20605081d019e05e18397522331f6
0.658989 ms  haval192,5   raw      48 bytes  9b10bff05c511fa5e18055c2916a08084efbb28bd54883c4
0.671148 ms  sha3-512     raw     128 bytes  2b0569c94b316ad914ecfd48a5ccfd8dd184c16501a970cead3c10043028d900459aee6a5900c156d979d4cd2c35521cb96c3c4132a9c8df802495e9626ab789
0.705004 ms  haval224,5   hex      56 bytes  127d2ff89e0a7b7120bea0ecb337336ca83ef8959a0700b3c156da1e
0.720024 ms  haval192,5   hex      48 bytes  9b10bff05c511fa5e18055c2916a08084efbb28bd54883c4
0.741959 ms  haval224,5   raw      56 bytes  127d2ff89e0a7b7120bea0ecb337336ca83ef8959a0700b3c156da1e
0.742912 ms  haval128,5   raw      32 bytes  fee1ebb6e5ce37607c13542cd0fa12fd
0.743151 ms  haval128,5   hex      32 bytes  fee1ebb6e5ce37607c13542cd0fa12fd
0.753164 ms  haval160,5   raw      40 bytes  564b48cc1d90253ebab0f7597bda95c32a7ae5fb
0.779152 ms  haval256,5   hex      64 bytes  5bdafc019b50a12989dc4462a7e0658ac6d504baeac416598f8e39305192b4aa
0.962973 ms  whirlpool    raw     128 bytes  a373b49e1c7a65490532a74d1a62b6e33fa0e122368a2a8ef11315d976a9195db777367eb7e844844d66f3205d0ec22f99eb7191686993158432631fedb2d5ce
0.988007 ms  whirlpool    hex     128 bytes  a373b49e1c7a65490532a74d1a62b6e33fa0e122368a2a8ef11315d976a9195db777367eb7e844844d66f3205d0ec22f99eb7191686993158432631fedb2d5ce
1.701832 ms  gost         hex      64 bytes  134f77e9e01ff9ecf3e0f0be47b57885136c679680f9295812e36c2c12351cab
1.741171 ms  gost-crypto  hex      64 bytes  dffce4707af122e5771297552426dd962cbe68e7bd5749b2dcf8acdb86d0f327
1.764059 ms  gost         raw      64 bytes  134f77e9e01ff9ecf3e0f0be47b57885136c679680f9295812e36c2c12351cab
1.816988 ms  gost-crypto  raw      64 bytes  dffce4707af122e5771297552426dd962cbe68e7bd5749b2dcf8acdb86d0f327
3.495216 ms  snefru256    hex      64 bytes  20033093d9296ff6324c812ac515b761c4b32c3390b56db8616cd8bfb434b129
3.590822 ms  snefru256    raw      64 bytes  20033093d9296ff6324c812ac515b761c4b32c3390b56db8616cd8bfb434b129
3.634930 ms  snefru       hex      64 bytes  20033093d9296ff6324c812ac515b761c4b32c3390b56db8616cd8bfb434b129
3.932953 ms  snefru       raw      64 bytes  20033093d9296ff6324c812ac515b761c4b32c3390b56db8616cd8bfb434b129
12.809038 ms md2          hex      32 bytes  729f5f73fd89fd4d0b11046418e5b198
12.935877 ms md2          raw      32 bytes  729f5f73fd89fd4d0b11046418e5b198
```
