# PHP 8.3 Hashes

Exact PHP version: 8.4.4  
Number of available hash algorithms: 60

All PHP Versions: [8.4](https://github.com/Kovah/php-hashes/tree/8.4) | [8.3](https://github.com/Kovah/php-hashes/tree/8.3) | [8.2](https://github.com/Kovah/php-hashes/tree/8.2) | [8.1](https://github.com/Kovah/php-hashes/tree/8.1) | [8.0](https://github.com/Kovah/php-hashes/tree/8.0) | [7.4](https://github.com/Kovah/php-hashes/tree/7.4) | [7.3](https://github.com/Kovah/php-hashes/tree/7.3) | [7.2](https://github.com/Kovah/php-hashes/tree/7.2) | [7.1](https://github.com/Kovah/php-hashes/tree/7.1)

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro18,3 with an 
Apple M1 Pro CPU. Current Docker Engine version is 27.5.1.

All results are based on a string with a fixed length of 204800 characters, generated with the `random_bytes()` function.

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
Results, sorted alphabetically
Time         Algorithm    Method     Length  Hash
0.042915 ms  adler32      hex       8 bytes  adb83fc7
0.047922 ms  adler32      raw       8 bytes  adb83fc7
0.169992 ms  crc32        hex       8 bytes  5664c103
0.169039 ms  crc32        raw       8 bytes  5664c103
0.169039 ms  crc32b       hex       8 bytes  e5aa2405
0.169039 ms  crc32b       raw       8 bytes  e5aa2405
0.169039 ms  crc32c       hex       8 bytes  d19e6c66
0.174046 ms  crc32c       raw       8 bytes  d19e6c66
0.085115 ms  fnv132       hex       8 bytes  c3494ab8
0.084877 ms  fnv132       raw       8 bytes  c3494ab8
0.084162 ms  fnv164       hex      16 bytes  f968b871038486b8
0.087976 ms  fnv164       raw      16 bytes  f968b871038486b8
0.095129 ms  fnv1a32      hex       8 bytes  2fa4661a
0.084877 ms  fnv1a32      raw       8 bytes  2fa4661a
0.087023 ms  fnv1a64      hex      16 bytes  3868aaa650853ffa
0.086784 ms  fnv1a64      raw      16 bytes  3868aaa650853ffa
0.941992 ms  gost         hex      64 bytes  b54e7af0a45cdbaebf744161b5a861e34cd81a70e342b6b599c7c8866e6fa837
0.939131 ms  gost         raw      64 bytes  b54e7af0a45cdbaebf744161b5a861e34cd81a70e342b6b599c7c8866e6fa837
0.923872 ms  gost-crypto  hex      64 bytes  561678506ad166fed7ec9290e4e4522c5d4a4e15810a8597f4c02f518cb1a7b2
0.918150 ms  gost-crypto  raw      64 bytes  561678506ad166fed7ec9290e4e4522c5d4a4e15810a8597f4c02f518cb1a7b2
0.241995 ms  haval128,3   hex      32 bytes  290ae97dd1b3b883d1a94605d3952e09
0.236034 ms  haval128,3   raw      32 bytes  290ae97dd1b3b883d1a94605d3952e09
0.329971 ms  haval128,4   hex      32 bytes  bfa830be0508d4162b2d1e3975be61fc
0.334024 ms  haval128,4   raw      32 bytes  bfa830be0508d4162b2d1e3975be61fc
0.404119 ms  haval128,5   hex      32 bytes  57ad35cc46ad8cf8e1dfe5e54202ef61
0.400066 ms  haval128,5   raw      32 bytes  57ad35cc46ad8cf8e1dfe5e54202ef61
0.249863 ms  haval160,3   hex      40 bytes  53e1cd30eea9dc33c510be478c5247b1fdd4e7c6
0.243902 ms  haval160,3   raw      40 bytes  53e1cd30eea9dc33c510be478c5247b1fdd4e7c6
0.329018 ms  haval160,4   hex      40 bytes  b531b6b7a084a1adb9ce86954fcd5feed31f1366
0.329018 ms  haval160,4   raw      40 bytes  b531b6b7a084a1adb9ce86954fcd5feed31f1366
0.403881 ms  haval160,5   hex      40 bytes  24924e74d493fa779c48d4c4a4f6053fad511e60
0.400066 ms  haval160,5   raw      40 bytes  24924e74d493fa779c48d4c4a4f6053fad511e60
0.236988 ms  haval192,3   hex      48 bytes  8038458e865a0bdb2f2dfbe5dcd964ff60cefab0f57b4a38
0.236034 ms  haval192,3   raw      48 bytes  8038458e865a0bdb2f2dfbe5dcd964ff60cefab0f57b4a38
0.347137 ms  haval192,4   hex      48 bytes  a18674b5eac4fbb5fec19eb4696b7598e4337ddf6062d15a
0.329018 ms  haval192,4   raw      48 bytes  a18674b5eac4fbb5fec19eb4696b7598e4337ddf6062d15a
0.398874 ms  haval192,5   hex      48 bytes  196b3769af4c0802b4b0328e39fff2a4b8f72dc0d757ddc9
0.405073 ms  haval192,5   raw      48 bytes  196b3769af4c0802b4b0328e39fff2a4b8f72dc0d757ddc9
0.235081 ms  haval224,3   hex      56 bytes  9117e960d3499be6f5a881fb1d3857729dbc6c57896c7481ced17234
0.240803 ms  haval224,3   raw      56 bytes  9117e960d3499be6f5a881fb1d3857729dbc6c57896c7481ced17234
0.331879 ms  haval224,4   hex      56 bytes  42a51fb5db6d83e0dce72d230e898e87b456f1877893f9e682b5f8a0
0.339985 ms  haval224,4   raw      56 bytes  42a51fb5db6d83e0dce72d230e898e87b456f1877893f9e682b5f8a0
0.399113 ms  haval224,5   hex      56 bytes  3da010cab1c9e9017f8d4cc3735848064c629796be27abad4b07d569
0.404835 ms  haval224,5   raw      56 bytes  3da010cab1c9e9017f8d4cc3735848064c629796be27abad4b07d569
0.235081 ms  haval256,3   hex      64 bytes  ada90110007e75245ad775044153fa78bf39707c35a7e544b4a6b3fb736be5a5
0.236988 ms  haval256,3   raw      64 bytes  ada90110007e75245ad775044153fa78bf39707c35a7e544b4a6b3fb736be5a5
0.329018 ms  haval256,4   hex      64 bytes  2a3db324e56377ec9be56ee6bd770f7ab202fd2b5976a91be641c7d5da5bbe62
0.329971 ms  haval256,4   raw      64 bytes  2a3db324e56377ec9be56ee6bd770f7ab202fd2b5976a91be641c7d5da5bbe62
0.406981 ms  haval256,5   hex      64 bytes  a60ee8a8b554e73330b439eb8bc241addfaf0538620adec0afa5ed1b3457be4e
0.401974 ms  haval256,5   raw      64 bytes  a60ee8a8b554e73330b439eb8bc241addfaf0538620adec0afa5ed1b3457be4e
0.106096 ms  joaat        hex       8 bytes  8bfda222
0.112057 ms  joaat        raw       8 bytes  8bfda222
7.462025 ms  md2          hex      32 bytes  f19bfb0e63c8dc3373fafc15ef0e3fa4
7.026911 ms  md2          raw      32 bytes  f19bfb0e63c8dc3373fafc15ef0e3fa4
0.097990 ms  md4          hex      32 bytes  d6ba2eef50f1e9bfa004add434cd415d
0.095129 ms  md4          raw      32 bytes  d6ba2eef50f1e9bfa004add434cd415d
0.132799 ms  md5          hex      32 bytes  1edba6b529e21df400159d1cfff38ad5
0.138998 ms  md5          raw      32 bytes  1edba6b529e21df400159d1cfff38ad5
0.035048 ms  murmur3a     hex       8 bytes  6e690d72
0.029802 ms  murmur3a     raw       8 bytes  6e690d72
0.015020 ms  murmur3c     hex      32 bytes  116344702d129d2141a01411808857d1
0.014782 ms  murmur3c     raw      32 bytes  116344702d129d2141a01411808857d1
0.013113 ms  murmur3f     hex      32 bytes  45550e172851177e688e8dc0fdaf642a
0.011921 ms  murmur3f     raw      32 bytes  45550e172851177e688e8dc0fdaf642a
0.148058 ms  ripemd128    hex      32 bytes  4574e7697bc2a053335441bea4b0eb99
0.147104 ms  ripemd128    raw      32 bytes  4574e7697bc2a053335441bea4b0eb99
0.209808 ms  ripemd160    hex      40 bytes  cc27d5766e1a3dec9f88dbf6e231e11b872be5b0
0.215054 ms  ripemd160    raw      40 bytes  cc27d5766e1a3dec9f88dbf6e231e11b872be5b0
0.163078 ms  ripemd256    hex      64 bytes  cce2bbb13a764d1d9ec5e68239856486c69f0e697512b82cdc9c522dde3b89d7
0.163078 ms  ripemd256    raw      64 bytes  cce2bbb13a764d1d9ec5e68239856486c69f0e697512b82cdc9c522dde3b89d7
0.210047 ms  ripemd320    hex      80 bytes  90e600ade0da543dcbe5d9880555570976d63fdb33cfca6d12be68a77889215dc6fd8ddabffdf047
0.210047 ms  ripemd320    raw      80 bytes  90e600ade0da543dcbe5d9880555570976d63fdb33cfca6d12be68a77889215dc6fd8ddabffdf047
0.113964 ms  sha1         hex      40 bytes  9f172dbd87bf4ed5b0c0c9662fbeb22c7028856c
0.110865 ms  sha1         raw      40 bytes  9f172dbd87bf4ed5b0c0c9662fbeb22c7028856c
0.535011 ms  sha224       hex      56 bytes  218635b7968df93d9dd8bc713e3fd45d958a3c425faee5ba19f5f317
0.550032 ms  sha224       raw      56 bytes  218635b7968df93d9dd8bc713e3fd45d958a3c425faee5ba19f5f317
0.530005 ms  sha256       hex      64 bytes  e22be9099c7f66c2947cb7e9d3f35c024e38c119a80160bbd3af00bed784be9d
0.531197 ms  sha256       raw      64 bytes  e22be9099c7f66c2947cb7e9d3f35c024e38c119a80160bbd3af00bed784be9d
0.110149 ms  sha3-224     hex      56 bytes  6534e083e5edf46bd852951cb27f9c4882fd6eed7ab3173201928975
0.100851 ms  sha3-224     raw      56 bytes  6534e083e5edf46bd852951cb27f9c4882fd6eed7ab3173201928975
0.107050 ms  sha3-256     hex      64 bytes  74cd253a02fc328c2016696f956213798451efc3de1f727eb0d2f0d6077f5b3e
0.107050 ms  sha3-256     raw      64 bytes  74cd253a02fc328c2016696f956213798451efc3de1f727eb0d2f0d6077f5b3e
0.144005 ms  sha3-384     hex      96 bytes  27d8f8c5b0c1ff2b48c4e185197920c302ceb3cb9886139f641d042492532ce376a01275e440383cb2b61894f1ee394b
0.139952 ms  sha3-384     raw      96 bytes  27d8f8c5b0c1ff2b48c4e185197920c302ceb3cb9886139f641d042492532ce376a01275e440383cb2b61894f1ee394b
0.222206 ms  sha3-512     hex     128 bytes  af32d4c4c9dbefeffeb9f18ccaeaf233d480df8e025e8127e85a392438aad31eda4b29493d9c1ea8fdc5051b285a6eaf0bcdd200c14c0380698783b69923ce82
0.218868 ms  sha3-512     raw     128 bytes  af32d4c4c9dbefeffeb9f18ccaeaf233d480df8e025e8127e85a392438aad31eda4b29493d9c1ea8fdc5051b285a6eaf0bcdd200c14c0380698783b69923ce82
0.221968 ms  sha384       hex      96 bytes  9cc12c4a3cb7916ad6843f4d09fee1de2a675b48ffc646766956fc1d9b5e9afecf9326c8a96fefb516a6b8e9827cc655
0.218868 ms  sha384       raw      96 bytes  9cc12c4a3cb7916ad6843f4d09fee1de2a675b48ffc646766956fc1d9b5e9afecf9326c8a96fefb516a6b8e9827cc655
0.229120 ms  sha512       hex     128 bytes  55828297a587b3df1ce07e43991c0aaaf8fcfccd8fbad39a249a284a92c0c2a8e7da0bf213687981f9e1070e1e0f6195f934ccb9df0e5ef2f74e2301451fab17
0.222921 ms  sha512       raw     128 bytes  55828297a587b3df1ce07e43991c0aaaf8fcfccd8fbad39a249a284a92c0c2a8e7da0bf213687981f9e1070e1e0f6195f934ccb9df0e5ef2f74e2301451fab17
0.234127 ms  sha512/224   hex      56 bytes  84b3946d1b7e284cb13a931d219fe7ff03b695191b280c4dd9f2265f
0.226974 ms  sha512/224   raw      56 bytes  84b3946d1b7e284cb13a931d219fe7ff03b695191b280c4dd9f2265f
0.216007 ms  sha512/256   hex      64 bytes  a1cde34755d5f2c969e07931ff35bcfd8e5a69b1a2b4f1e05619df480a139888
0.215769 ms  sha512/256   raw      64 bytes  a1cde34755d5f2c969e07931ff35bcfd8e5a69b1a2b4f1e05619df480a139888
2.105951 ms  snefru       hex      64 bytes  f4ad56d5492a0fe19bb5038e433855901e5e1d02864199b2d1519b74c6d2bfd3
2.122164 ms  snefru       raw      64 bytes  f4ad56d5492a0fe19bb5038e433855901e5e1d02864199b2d1519b74c6d2bfd3
2.125978 ms  snefru256    hex      64 bytes  f4ad56d5492a0fe19bb5038e433855901e5e1d02864199b2d1519b74c6d2bfd3
2.115965 ms  snefru256    raw      64 bytes  f4ad56d5492a0fe19bb5038e433855901e5e1d02864199b2d1519b74c6d2bfd3
0.097990 ms  tiger128,3   hex      32 bytes  d1b3555d1a5672da570869c322e7fc1c
0.097990 ms  tiger128,3   raw      32 bytes  d1b3555d1a5672da570869c322e7fc1c
0.142097 ms  tiger128,4   hex      32 bytes  bb1894bd18d695323cb10fdf1da5ed5b
0.125170 ms  tiger128,4   raw      32 bytes  bb1894bd18d695323cb10fdf1da5ed5b
0.094891 ms  tiger160,3   hex      40 bytes  d1b3555d1a5672da570869c322e7fc1ce1036458
0.095129 ms  tiger160,3   raw      40 bytes  d1b3555d1a5672da570869c322e7fc1ce1036458
0.126839 ms  tiger160,4   hex      40 bytes  bb1894bd18d695323cb10fdf1da5ed5b5c327686
0.128031 ms  tiger160,4   raw      40 bytes  bb1894bd18d695323cb10fdf1da5ed5b5c327686
0.094891 ms  tiger192,3   hex      48 bytes  d1b3555d1a5672da570869c322e7fc1ce1036458fb2ea192
0.094891 ms  tiger192,3   raw      48 bytes  d1b3555d1a5672da570869c322e7fc1ce1036458fb2ea192
0.126123 ms  tiger192,4   hex      48 bytes  bb1894bd18d695323cb10fdf1da5ed5b5c32768696713c02
0.125885 ms  tiger192,4   raw      48 bytes  bb1894bd18d695323cb10fdf1da5ed5b5c32768696713c02
0.252962 ms  whirlpool    hex     128 bytes  8f0923b88a1f438d7d06a8414f03ab667f30444ba77ee43bd3af0c5b25a53b3925b01779aeeecf96dc7dc916e4fa756fc029e588a95d1ed2212ebeba1c952936
0.245094 ms  whirlpool    raw     128 bytes  8f0923b88a1f438d7d06a8414f03ab667f30444ba77ee43bd3af0c5b25a53b3925b01779aeeecf96dc7dc916e4fa756fc029e588a95d1ed2212ebeba1c952936
0.010014 ms  xxh128       hex      32 bytes  17f785aab0ce58c15e54e022afd5ff05
0.010014 ms  xxh128       raw      32 bytes  17f785aab0ce58c15e54e022afd5ff05
0.010014 ms  xxh3         hex      16 bytes  5e54e022afd5ff05
0.010014 ms  xxh3         raw      16 bytes  5e54e022afd5ff05
0.010014 ms  xxh32        hex       8 bytes  c39ba497
0.010014 ms  xxh32        raw       8 bytes  c39ba497
0.005007 ms  xxh64        hex      16 bytes  db9f757e40bc0edd
0.005007 ms  xxh64        raw      16 bytes  db9f757e40bc0edd
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.005007 ms  xxh64        hex      16 bytes  db9f757e40bc0edd
0.005007 ms  xxh64        raw      16 bytes  db9f757e40bc0edd
0.010014 ms  xxh32        hex       8 bytes  c39ba497
0.010014 ms  xxh32        raw       8 bytes  c39ba497
0.010014 ms  xxh3         hex      16 bytes  5e54e022afd5ff05
0.010014 ms  xxh3         raw      16 bytes  5e54e022afd5ff05
0.010014 ms  xxh128       hex      32 bytes  17f785aab0ce58c15e54e022afd5ff05
0.010014 ms  xxh128       raw      32 bytes  17f785aab0ce58c15e54e022afd5ff05
0.011921 ms  murmur3f     raw      32 bytes  45550e172851177e688e8dc0fdaf642a
0.013113 ms  murmur3f     hex      32 bytes  45550e172851177e688e8dc0fdaf642a
0.014782 ms  murmur3c     raw      32 bytes  116344702d129d2141a01411808857d1
0.015020 ms  murmur3c     hex      32 bytes  116344702d129d2141a01411808857d1
0.029802 ms  murmur3a     raw       8 bytes  6e690d72
0.035048 ms  murmur3a     hex       8 bytes  6e690d72
0.042915 ms  adler32      hex       8 bytes  adb83fc7
0.047922 ms  adler32      raw       8 bytes  adb83fc7
0.084162 ms  fnv164       hex      16 bytes  f968b871038486b8
0.084877 ms  fnv132       raw       8 bytes  c3494ab8
0.084877 ms  fnv1a32      raw       8 bytes  2fa4661a
0.085115 ms  fnv132       hex       8 bytes  c3494ab8
0.086784 ms  fnv1a64      raw      16 bytes  3868aaa650853ffa
0.087023 ms  fnv1a64      hex      16 bytes  3868aaa650853ffa
0.087976 ms  fnv164       raw      16 bytes  f968b871038486b8
0.094891 ms  tiger160,3   hex      40 bytes  d1b3555d1a5672da570869c322e7fc1ce1036458
0.094891 ms  tiger192,3   hex      48 bytes  d1b3555d1a5672da570869c322e7fc1ce1036458fb2ea192
0.094891 ms  tiger192,3   raw      48 bytes  d1b3555d1a5672da570869c322e7fc1ce1036458fb2ea192
0.095129 ms  md4          raw      32 bytes  d6ba2eef50f1e9bfa004add434cd415d
0.095129 ms  tiger160,3   raw      40 bytes  d1b3555d1a5672da570869c322e7fc1ce1036458
0.095129 ms  fnv1a32      hex       8 bytes  2fa4661a
0.097990 ms  md4          hex      32 bytes  d6ba2eef50f1e9bfa004add434cd415d
0.097990 ms  tiger128,3   hex      32 bytes  d1b3555d1a5672da570869c322e7fc1c
0.097990 ms  tiger128,3   raw      32 bytes  d1b3555d1a5672da570869c322e7fc1c
0.100851 ms  sha3-224     raw      56 bytes  6534e083e5edf46bd852951cb27f9c4882fd6eed7ab3173201928975
0.106096 ms  joaat        hex       8 bytes  8bfda222
0.107050 ms  sha3-256     hex      64 bytes  74cd253a02fc328c2016696f956213798451efc3de1f727eb0d2f0d6077f5b3e
0.107050 ms  sha3-256     raw      64 bytes  74cd253a02fc328c2016696f956213798451efc3de1f727eb0d2f0d6077f5b3e
0.110149 ms  sha3-224     hex      56 bytes  6534e083e5edf46bd852951cb27f9c4882fd6eed7ab3173201928975
0.110865 ms  sha1         raw      40 bytes  9f172dbd87bf4ed5b0c0c9662fbeb22c7028856c
0.112057 ms  joaat        raw       8 bytes  8bfda222
0.113964 ms  sha1         hex      40 bytes  9f172dbd87bf4ed5b0c0c9662fbeb22c7028856c
0.125170 ms  tiger128,4   raw      32 bytes  bb1894bd18d695323cb10fdf1da5ed5b
0.125885 ms  tiger192,4   raw      48 bytes  bb1894bd18d695323cb10fdf1da5ed5b5c32768696713c02
0.126123 ms  tiger192,4   hex      48 bytes  bb1894bd18d695323cb10fdf1da5ed5b5c32768696713c02
0.126839 ms  tiger160,4   hex      40 bytes  bb1894bd18d695323cb10fdf1da5ed5b5c327686
0.128031 ms  tiger160,4   raw      40 bytes  bb1894bd18d695323cb10fdf1da5ed5b5c327686
0.132799 ms  md5          hex      32 bytes  1edba6b529e21df400159d1cfff38ad5
0.138998 ms  md5          raw      32 bytes  1edba6b529e21df400159d1cfff38ad5
0.139952 ms  sha3-384     raw      96 bytes  27d8f8c5b0c1ff2b48c4e185197920c302ceb3cb9886139f641d042492532ce376a01275e440383cb2b61894f1ee394b
0.142097 ms  tiger128,4   hex      32 bytes  bb1894bd18d695323cb10fdf1da5ed5b
0.144005 ms  sha3-384     hex      96 bytes  27d8f8c5b0c1ff2b48c4e185197920c302ceb3cb9886139f641d042492532ce376a01275e440383cb2b61894f1ee394b
0.147104 ms  ripemd128    raw      32 bytes  4574e7697bc2a053335441bea4b0eb99
0.148058 ms  ripemd128    hex      32 bytes  4574e7697bc2a053335441bea4b0eb99
0.163078 ms  ripemd256    hex      64 bytes  cce2bbb13a764d1d9ec5e68239856486c69f0e697512b82cdc9c522dde3b89d7
0.163078 ms  ripemd256    raw      64 bytes  cce2bbb13a764d1d9ec5e68239856486c69f0e697512b82cdc9c522dde3b89d7
0.169039 ms  crc32        raw       8 bytes  5664c103
0.169039 ms  crc32b       hex       8 bytes  e5aa2405
0.169039 ms  crc32b       raw       8 bytes  e5aa2405
0.169039 ms  crc32c       hex       8 bytes  d19e6c66
0.169992 ms  crc32        hex       8 bytes  5664c103
0.174046 ms  crc32c       raw       8 bytes  d19e6c66
0.209808 ms  ripemd160    hex      40 bytes  cc27d5766e1a3dec9f88dbf6e231e11b872be5b0
0.210047 ms  ripemd320    hex      80 bytes  90e600ade0da543dcbe5d9880555570976d63fdb33cfca6d12be68a77889215dc6fd8ddabffdf047
0.210047 ms  ripemd320    raw      80 bytes  90e600ade0da543dcbe5d9880555570976d63fdb33cfca6d12be68a77889215dc6fd8ddabffdf047
0.215054 ms  ripemd160    raw      40 bytes  cc27d5766e1a3dec9f88dbf6e231e11b872be5b0
0.215769 ms  sha512/256   raw      64 bytes  a1cde34755d5f2c969e07931ff35bcfd8e5a69b1a2b4f1e05619df480a139888
0.216007 ms  sha512/256   hex      64 bytes  a1cde34755d5f2c969e07931ff35bcfd8e5a69b1a2b4f1e05619df480a139888
0.218868 ms  sha384       raw      96 bytes  9cc12c4a3cb7916ad6843f4d09fee1de2a675b48ffc646766956fc1d9b5e9afecf9326c8a96fefb516a6b8e9827cc655
0.218868 ms  sha3-512     raw     128 bytes  af32d4c4c9dbefeffeb9f18ccaeaf233d480df8e025e8127e85a392438aad31eda4b29493d9c1ea8fdc5051b285a6eaf0bcdd200c14c0380698783b69923ce82
0.221968 ms  sha384       hex      96 bytes  9cc12c4a3cb7916ad6843f4d09fee1de2a675b48ffc646766956fc1d9b5e9afecf9326c8a96fefb516a6b8e9827cc655
0.222206 ms  sha3-512     hex     128 bytes  af32d4c4c9dbefeffeb9f18ccaeaf233d480df8e025e8127e85a392438aad31eda4b29493d9c1ea8fdc5051b285a6eaf0bcdd200c14c0380698783b69923ce82
0.222921 ms  sha512       raw     128 bytes  55828297a587b3df1ce07e43991c0aaaf8fcfccd8fbad39a249a284a92c0c2a8e7da0bf213687981f9e1070e1e0f6195f934ccb9df0e5ef2f74e2301451fab17
0.226974 ms  sha512/224   raw      56 bytes  84b3946d1b7e284cb13a931d219fe7ff03b695191b280c4dd9f2265f
0.229120 ms  sha512       hex     128 bytes  55828297a587b3df1ce07e43991c0aaaf8fcfccd8fbad39a249a284a92c0c2a8e7da0bf213687981f9e1070e1e0f6195f934ccb9df0e5ef2f74e2301451fab17
0.234127 ms  sha512/224   hex      56 bytes  84b3946d1b7e284cb13a931d219fe7ff03b695191b280c4dd9f2265f
0.235081 ms  haval224,3   hex      56 bytes  9117e960d3499be6f5a881fb1d3857729dbc6c57896c7481ced17234
0.235081 ms  haval256,3   hex      64 bytes  ada90110007e75245ad775044153fa78bf39707c35a7e544b4a6b3fb736be5a5
0.236034 ms  haval128,3   raw      32 bytes  290ae97dd1b3b883d1a94605d3952e09
0.236034 ms  haval192,3   raw      48 bytes  8038458e865a0bdb2f2dfbe5dcd964ff60cefab0f57b4a38
0.236988 ms  haval192,3   hex      48 bytes  8038458e865a0bdb2f2dfbe5dcd964ff60cefab0f57b4a38
0.236988 ms  haval256,3   raw      64 bytes  ada90110007e75245ad775044153fa78bf39707c35a7e544b4a6b3fb736be5a5
0.240803 ms  haval224,3   raw      56 bytes  9117e960d3499be6f5a881fb1d3857729dbc6c57896c7481ced17234
0.241995 ms  haval128,3   hex      32 bytes  290ae97dd1b3b883d1a94605d3952e09
0.243902 ms  haval160,3   raw      40 bytes  53e1cd30eea9dc33c510be478c5247b1fdd4e7c6
0.245094 ms  whirlpool    raw     128 bytes  8f0923b88a1f438d7d06a8414f03ab667f30444ba77ee43bd3af0c5b25a53b3925b01779aeeecf96dc7dc916e4fa756fc029e588a95d1ed2212ebeba1c952936
0.249863 ms  haval160,3   hex      40 bytes  53e1cd30eea9dc33c510be478c5247b1fdd4e7c6
0.252962 ms  whirlpool    hex     128 bytes  8f0923b88a1f438d7d06a8414f03ab667f30444ba77ee43bd3af0c5b25a53b3925b01779aeeecf96dc7dc916e4fa756fc029e588a95d1ed2212ebeba1c952936
0.329018 ms  haval160,4   hex      40 bytes  b531b6b7a084a1adb9ce86954fcd5feed31f1366
0.329018 ms  haval160,4   raw      40 bytes  b531b6b7a084a1adb9ce86954fcd5feed31f1366
0.329018 ms  haval192,4   raw      48 bytes  a18674b5eac4fbb5fec19eb4696b7598e4337ddf6062d15a
0.329018 ms  haval256,4   hex      64 bytes  2a3db324e56377ec9be56ee6bd770f7ab202fd2b5976a91be641c7d5da5bbe62
0.329971 ms  haval128,4   hex      32 bytes  bfa830be0508d4162b2d1e3975be61fc
0.329971 ms  haval256,4   raw      64 bytes  2a3db324e56377ec9be56ee6bd770f7ab202fd2b5976a91be641c7d5da5bbe62
0.331879 ms  haval224,4   hex      56 bytes  42a51fb5db6d83e0dce72d230e898e87b456f1877893f9e682b5f8a0
0.334024 ms  haval128,4   raw      32 bytes  bfa830be0508d4162b2d1e3975be61fc
0.339985 ms  haval224,4   raw      56 bytes  42a51fb5db6d83e0dce72d230e898e87b456f1877893f9e682b5f8a0
0.347137 ms  haval192,4   hex      48 bytes  a18674b5eac4fbb5fec19eb4696b7598e4337ddf6062d15a
0.398874 ms  haval192,5   hex      48 bytes  196b3769af4c0802b4b0328e39fff2a4b8f72dc0d757ddc9
0.399113 ms  haval224,5   hex      56 bytes  3da010cab1c9e9017f8d4cc3735848064c629796be27abad4b07d569
0.400066 ms  haval128,5   raw      32 bytes  57ad35cc46ad8cf8e1dfe5e54202ef61
0.400066 ms  haval160,5   raw      40 bytes  24924e74d493fa779c48d4c4a4f6053fad511e60
0.401974 ms  haval256,5   raw      64 bytes  a60ee8a8b554e73330b439eb8bc241addfaf0538620adec0afa5ed1b3457be4e
0.403881 ms  haval160,5   hex      40 bytes  24924e74d493fa779c48d4c4a4f6053fad511e60
0.404119 ms  haval128,5   hex      32 bytes  57ad35cc46ad8cf8e1dfe5e54202ef61
0.404835 ms  haval224,5   raw      56 bytes  3da010cab1c9e9017f8d4cc3735848064c629796be27abad4b07d569
0.405073 ms  haval192,5   raw      48 bytes  196b3769af4c0802b4b0328e39fff2a4b8f72dc0d757ddc9
0.406981 ms  haval256,5   hex      64 bytes  a60ee8a8b554e73330b439eb8bc241addfaf0538620adec0afa5ed1b3457be4e
0.530005 ms  sha256       hex      64 bytes  e22be9099c7f66c2947cb7e9d3f35c024e38c119a80160bbd3af00bed784be9d
0.531197 ms  sha256       raw      64 bytes  e22be9099c7f66c2947cb7e9d3f35c024e38c119a80160bbd3af00bed784be9d
0.535011 ms  sha224       hex      56 bytes  218635b7968df93d9dd8bc713e3fd45d958a3c425faee5ba19f5f317
0.550032 ms  sha224       raw      56 bytes  218635b7968df93d9dd8bc713e3fd45d958a3c425faee5ba19f5f317
0.918150 ms  gost-crypto  raw      64 bytes  561678506ad166fed7ec9290e4e4522c5d4a4e15810a8597f4c02f518cb1a7b2
0.923872 ms  gost-crypto  hex      64 bytes  561678506ad166fed7ec9290e4e4522c5d4a4e15810a8597f4c02f518cb1a7b2
0.939131 ms  gost         raw      64 bytes  b54e7af0a45cdbaebf744161b5a861e34cd81a70e342b6b599c7c8866e6fa837
0.941992 ms  gost         hex      64 bytes  b54e7af0a45cdbaebf744161b5a861e34cd81a70e342b6b599c7c8866e6fa837
2.105951 ms  snefru       hex      64 bytes  f4ad56d5492a0fe19bb5038e433855901e5e1d02864199b2d1519b74c6d2bfd3
2.115965 ms  snefru256    raw      64 bytes  f4ad56d5492a0fe19bb5038e433855901e5e1d02864199b2d1519b74c6d2bfd3
2.122164 ms  snefru       raw      64 bytes  f4ad56d5492a0fe19bb5038e433855901e5e1d02864199b2d1519b74c6d2bfd3
2.125978 ms  snefru256    hex      64 bytes  f4ad56d5492a0fe19bb5038e433855901e5e1d02864199b2d1519b74c6d2bfd3
7.026911 ms  md2          raw      32 bytes  f19bfb0e63c8dc3373fafc15ef0e3fa4
7.462025 ms  md2          hex      32 bytes  f19bfb0e63c8dc3373fafc15ef0e3fa4
```
