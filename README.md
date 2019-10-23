# PHP 7.2 Hashes

Exact PHP version: 7.2.23
Number of available hash algorithms: 52

As of today, there is no up-to-date overview on available PHP hash functions and their output and runtime.
This repository contains branches for all currently supported PHP versions and their corresponding outputs.


## Calculate the results

The current results were calculated by running the following command on a MacBookPro15,1 with an 
Intel i7 (6x 2.2GHz). Current Docker version is 19.03.2, build 6a30dfc.

All results are based on a string with a fixed length of 1024 characters, generated with the `random_bytes()` function.

```bash
docker run -it --rm -v "$PWD/hashes.php":/usr/src/hashes.php -w /usr/src php:7.2-cli php hashes.php
```


## Results

### Sorted by algorithm name

```
Time         Algorithm    Method     Length  Hash
0.008106 ms  adler32      hex       8 bytes  bd611714
0.008106 ms  adler32      raw       8 bytes  bd611714
0.015974 ms  crc32        hex       8 bytes  ec29f0ec
0.008106 ms  crc32        raw       8 bytes  ec29f0ec
0.007153 ms  crc32b       hex       8 bytes  9c34810f
0.005960 ms  crc32b       raw       8 bytes  9c34810f
0.006914 ms  fnv132       hex       8 bytes  31c55661
0.008106 ms  fnv132       raw       8 bytes  31c55661
0.008106 ms  fnv164       hex      16 bytes  e930cb53d67dc281
0.006914 ms  fnv164       raw      16 bytes  e930cb53d67dc281
0.008106 ms  fnv1a32      hex       8 bytes  020374d9
0.008106 ms  fnv1a32      raw       8 bytes  020374d9
0.006914 ms  fnv1a64      hex      16 bytes  5757dcf37580c679
0.007153 ms  fnv1a64      raw      16 bytes  5757dcf37580c679
0.025034 ms  gost         hex      64 bytes  0d7f13607ba2db3c4ba4249b2f4f8b77228a2ced6664f7f9c1c7f92d8fa59d11
0.023127 ms  gost         raw      64 bytes  0d7f13607ba2db3c4ba4249b2f4f8b77228a2ced6664f7f9c1c7f92d8fa59d11
0.020981 ms  gost-crypto  hex      64 bytes  9fccbbcac9ab77a2f8c73bae96917ceead8d9f985643de5b3881acf666f11323
0.023127 ms  gost-crypto  raw      64 bytes  9fccbbcac9ab77a2f8c73bae96917ceead8d9f985643de5b3881acf666f11323
0.012159 ms  haval128,3   hex      32 bytes  e04f80ddc4856fbf2c1fea900203a400
0.011921 ms  haval128,3   raw      32 bytes  e04f80ddc4856fbf2c1fea900203a400
0.013113 ms  haval128,4   hex      32 bytes  f437824f16da9da01a18f1ee29f7c0f7
0.013113 ms  haval128,4   raw      32 bytes  f437824f16da9da01a18f1ee29f7c0f7
0.015020 ms  haval128,5   hex      32 bytes  5e685fa7bb8d87ef17fee03c12ccaa6a
0.012159 ms  haval128,5   raw      32 bytes  5e685fa7bb8d87ef17fee03c12ccaa6a
0.010967 ms  haval160,3   hex      40 bytes  a82e482af92fd62fc7d909f38dede14a987aa3e1
0.012159 ms  haval160,3   raw      40 bytes  a82e482af92fd62fc7d909f38dede14a987aa3e1
0.061035 ms  haval160,4   hex      40 bytes  e2367cafd07d5e37bc202d5c973fb6b85f9677a5
0.012159 ms  haval160,4   raw      40 bytes  e2367cafd07d5e37bc202d5c973fb6b85f9677a5
0.014067 ms  haval160,5   hex      40 bytes  0eb57d7a309ce22160729a33815795da020d8fa5
0.014067 ms  haval160,5   raw      40 bytes  0eb57d7a309ce22160729a33815795da020d8fa5
0.009060 ms  haval192,3   hex      48 bytes  caad529a1bb40e34498a1b9b7611245229a58d89c69c541c
0.006914 ms  haval192,3   raw      48 bytes  caad529a1bb40e34498a1b9b7611245229a58d89c69c541c
0.011921 ms  haval192,4   hex      48 bytes  4ca63334f4faa35c1abc647c117bce6147524cb59b7e6074
0.012875 ms  haval192,4   raw      48 bytes  4ca63334f4faa35c1abc647c117bce6147524cb59b7e6074
0.014067 ms  haval192,5   hex      48 bytes  e7d8e7ffe70c2a963194873190abdea563a7b1c1525a5613
0.014067 ms  haval192,5   raw      48 bytes  e7d8e7ffe70c2a963194873190abdea563a7b1c1525a5613
0.006914 ms  haval224,3   hex      56 bytes  44028c18da5e8def054f5c4bb8bf6935e44d472884ecc8e16e5283f1
0.007153 ms  haval224,3   raw      56 bytes  44028c18da5e8def054f5c4bb8bf6935e44d472884ecc8e16e5283f1
0.012875 ms  haval224,4   hex      56 bytes  a3f5ae4492b6fb8e8dcfa5dd2a8c17cca73497d3aa030c5c601f760a
0.012875 ms  haval224,4   raw      56 bytes  a3f5ae4492b6fb8e8dcfa5dd2a8c17cca73497d3aa030c5c601f760a
0.015020 ms  haval224,5   hex      56 bytes  c1ea6ca9e5b2e24c6e556e49257a7b259d3679248fe001ac68d4c67c
0.014067 ms  haval224,5   raw      56 bytes  c1ea6ca9e5b2e24c6e556e49257a7b259d3679248fe001ac68d4c67c
0.010967 ms  haval256,3   hex      64 bytes  c0af9ba7fea9b295469fd01870c1bdc44e686570a8d0ab04dfa21e3c04c877fe
0.010967 ms  haval256,3   raw      64 bytes  c0af9ba7fea9b295469fd01870c1bdc44e686570a8d0ab04dfa21e3c04c877fe
0.013113 ms  haval256,4   hex      64 bytes  dd022ee0d9e7af01063ed3de83e4bbe02fd066094e09c245ea7ca7050f5186c0
0.009060 ms  haval256,4   raw      64 bytes  dd022ee0d9e7af01063ed3de83e4bbe02fd066094e09c245ea7ca7050f5186c0
0.013113 ms  haval256,5   hex      64 bytes  6b104f9b3230973e07854782ac05b65db7e275ad252a204a182e6c6765d54046
0.015974 ms  haval256,5   raw      64 bytes  6b104f9b3230973e07854782ac05b65db7e275ad252a204a182e6c6765d54046
0.005960 ms  joaat        hex       8 bytes  b07b2caa
0.008106 ms  joaat        raw       8 bytes  b07b2caa
0.122070 ms  md2          hex      32 bytes  237b62dbe31829fb7649518dbce08628
0.136137 ms  md2          raw      32 bytes  237b62dbe31829fb7649518dbce08628
0.010967 ms  md4          hex      32 bytes  06ebbefba830bd250fd39a985478f7dd
0.005960 ms  md4          raw      32 bytes  06ebbefba830bd250fd39a985478f7dd
0.006914 ms  md5          hex      32 bytes  9be3860da6d674e869f56d89203de1fa
0.007153 ms  md5          raw      32 bytes  9be3860da6d674e869f56d89203de1fa
0.005960 ms  ripemd128    hex      32 bytes  289cd1c4c6020ad75c555983cd9dc708
0.010967 ms  ripemd128    raw      32 bytes  289cd1c4c6020ad75c555983cd9dc708
0.012875 ms  ripemd160    hex      40 bytes  d36ad4d81c1705fc0104c40d01a1eaeadba0bd51
0.012159 ms  ripemd160    raw      40 bytes  d36ad4d81c1705fc0104c40d01a1eaeadba0bd51
0.005960 ms  ripemd256    hex      64 bytes  5c492496d85775a764386c8690284776c609611c1818b293d7cbf5f6d2e37de5
0.006199 ms  ripemd256    raw      64 bytes  5c492496d85775a764386c8690284776c609611c1818b293d7cbf5f6d2e37de5
0.006914 ms  ripemd320    hex      80 bytes  e3629636483e6026c069c26b6fc40719b9a7910460af5e892586e093273b0321995604bd3e96eb49
0.008821 ms  ripemd320    raw      80 bytes  e3629636483e6026c069c26b6fc40719b9a7910460af5e892586e093273b0321995604bd3e96eb49
0.010014 ms  sha1         hex      40 bytes  c320c5ddd6827870b6d1b84400508f62959ffcf8
0.014067 ms  sha1         raw      40 bytes  c320c5ddd6827870b6d1b84400508f62959ffcf8
0.013113 ms  sha224       hex      56 bytes  32cb3a8c663851dbe80fac2f61138029dc0ad42994407425df5e0f9c
0.010967 ms  sha224       raw      56 bytes  32cb3a8c663851dbe80fac2f61138029dc0ad42994407425df5e0f9c
0.012875 ms  sha256       hex      64 bytes  520e5af9af94abd4445d4846d1e6c3f7b57c99d07ec0c543b2245f8fc25e9b89
0.012875 ms  sha256       raw      64 bytes  520e5af9af94abd4445d4846d1e6c3f7b57c99d07ec0c543b2245f8fc25e9b89
0.015974 ms  sha3-224     hex      56 bytes  2682dcdaba612868ca6924dc2be9d52bc6dbba26fed74580cd94a066
0.008821 ms  sha3-224     raw      56 bytes  2682dcdaba612868ca6924dc2be9d52bc6dbba26fed74580cd94a066
0.011921 ms  sha3-256     hex      64 bytes  0420dfd5e7730058ae1fac586370dabfd5e0b55c855aecd1a220e4664f18cc4e
0.007153 ms  sha3-256     raw      64 bytes  0420dfd5e7730058ae1fac586370dabfd5e0b55c855aecd1a220e4664f18cc4e
0.006914 ms  sha3-384     hex      96 bytes  46b340902740d2bc4305e83aa7645d47d8390a145e6b63e6afdd9ab2e87506473d15cecd096a49167e623951c86b5b70
0.007868 ms  sha3-384     raw      96 bytes  46b340902740d2bc4305e83aa7645d47d8390a145e6b63e6afdd9ab2e87506473d15cecd096a49167e623951c86b5b70
0.013828 ms  sha3-512     hex     128 bytes  2444d19896447798c8df85eceacfeae6828b663c3cb8b26cbdaf4f9f0f27971e48d9617574fed9b5ae5ec8c8377c786bb3d40e1345c867fc4b3df7d3ad277362
0.008821 ms  sha3-512     raw     128 bytes  2444d19896447798c8df85eceacfeae6828b663c3cb8b26cbdaf4f9f0f27971e48d9617574fed9b5ae5ec8c8377c786bb3d40e1345c867fc4b3df7d3ad277362
0.007153 ms  sha384       hex      96 bytes  224c0215eb8d3816cfa9eafee4c93e08785b76c1da7a00f32712b75d2fca862876bd56b78f41c02ab952f996ebe3cda2
0.009060 ms  sha384       raw      96 bytes  224c0215eb8d3816cfa9eafee4c93e08785b76c1da7a00f32712b75d2fca862876bd56b78f41c02ab952f996ebe3cda2
0.015020 ms  sha512       hex     128 bytes  9c89ec56fddf2204ed60ac8420fd05370eabe2f930bc4b8fb674cd1226634c5e444d8688f62059d6aa966a016f9dc57ade371326dd8fd9270ed97f579ebefd74
0.009060 ms  sha512       raw     128 bytes  9c89ec56fddf2204ed60ac8420fd05370eabe2f930bc4b8fb674cd1226634c5e444d8688f62059d6aa966a016f9dc57ade371326dd8fd9270ed97f579ebefd74
0.005960 ms  sha512/224   hex      56 bytes  e2c4e1a6ffe6d60ccb81d656a3721ab4090a9bfb4045265fa494b23c
0.005960 ms  sha512/224   raw      56 bytes  e2c4e1a6ffe6d60ccb81d656a3721ab4090a9bfb4045265fa494b23c
0.010014 ms  sha512/256   hex      64 bytes  296ff535316222122276779ce93723765644d364526a3abf7d795e21eed07863
0.016928 ms  sha512/256   raw      64 bytes  296ff535316222122276779ce93723765644d364526a3abf7d795e21eed07863
0.043869 ms  snefru       hex      64 bytes  443ee058e1da2685b1ed2d52d2826a72753659275caa5e3f326960f2400df77a
0.045061 ms  snefru       raw      64 bytes  443ee058e1da2685b1ed2d52d2826a72753659275caa5e3f326960f2400df77a
0.036001 ms  snefru256    hex      64 bytes  443ee058e1da2685b1ed2d52d2826a72753659275caa5e3f326960f2400df77a
0.040054 ms  snefru256    raw      64 bytes  443ee058e1da2685b1ed2d52d2826a72753659275caa5e3f326960f2400df77a
0.005960 ms  tiger128,3   hex      32 bytes  faf81c9644d42cd2de55b5fa0ecbf02a
0.008106 ms  tiger128,3   raw      32 bytes  faf81c9644d42cd2de55b5fa0ecbf02a
0.010014 ms  tiger128,4   hex      32 bytes  0e291abd158312cffbef3441db5d8711
0.010014 ms  tiger128,4   raw      32 bytes  0e291abd158312cffbef3441db5d8711
0.009060 ms  tiger160,3   hex      40 bytes  faf81c9644d42cd2de55b5fa0ecbf02a8dc69f16
0.005960 ms  tiger160,3   raw      40 bytes  faf81c9644d42cd2de55b5fa0ecbf02a8dc69f16
0.010014 ms  tiger160,4   hex      40 bytes  0e291abd158312cffbef3441db5d87112cf2037c
0.006199 ms  tiger160,4   raw      40 bytes  0e291abd158312cffbef3441db5d87112cf2037c
0.007153 ms  tiger192,3   hex      48 bytes  faf81c9644d42cd2de55b5fa0ecbf02a8dc69f1614d38a80
0.010967 ms  tiger192,3   raw      48 bytes  faf81c9644d42cd2de55b5fa0ecbf02a8dc69f1614d38a80
0.007868 ms  tiger192,4   hex      48 bytes  0e291abd158312cffbef3441db5d87112cf2037ca5139dd6
0.007868 ms  tiger192,4   raw      48 bytes  0e291abd158312cffbef3441db5d87112cf2037ca5139dd6
0.016928 ms  whirlpool    hex     128 bytes  75364da8c5c18c840fe7f02261c5692f8f5f63dbeef33a158ddddcd7f9312aef519e41090d04bacf1e626755774f5317d9bfa56044584770ca9603966c2ed474
0.015974 ms  whirlpool    raw     128 bytes  75364da8c5c18c840fe7f02261c5692f8f5f63dbeef33a158ddddcd7f9312aef519e41090d04bacf1e626755774f5317d9bfa56044584770ca9603966c2ed474
```

### Sorted by execution time

```
Time         Algorithm    Method     Length  Hash
0.005960 ms  crc32b       raw       8 bytes  9c34810f
0.005960 ms  sha512/224   raw      56 bytes  e2c4e1a6ffe6d60ccb81d656a3721ab4090a9bfb4045265fa494b23c
0.005960 ms  tiger160,3   raw      40 bytes  faf81c9644d42cd2de55b5fa0ecbf02a8dc69f16
0.005960 ms  md4          raw      32 bytes  06ebbefba830bd250fd39a985478f7dd
0.005960 ms  joaat        hex       8 bytes  b07b2caa
0.005960 ms  ripemd256    hex      64 bytes  5c492496d85775a764386c8690284776c609611c1818b293d7cbf5f6d2e37de5
0.005960 ms  ripemd128    hex      32 bytes  289cd1c4c6020ad75c555983cd9dc708
0.005960 ms  tiger128,3   hex      32 bytes  faf81c9644d42cd2de55b5fa0ecbf02a
0.005960 ms  sha512/224   hex      56 bytes  e2c4e1a6ffe6d60ccb81d656a3721ab4090a9bfb4045265fa494b23c
0.006199 ms  ripemd256    raw      64 bytes  5c492496d85775a764386c8690284776c609611c1818b293d7cbf5f6d2e37de5
0.006199 ms  tiger160,4   raw      40 bytes  0e291abd158312cffbef3441db5d87112cf2037c
0.006914 ms  ripemd320    hex      80 bytes  e3629636483e6026c069c26b6fc40719b9a7910460af5e892586e093273b0321995604bd3e96eb49
0.006914 ms  sha3-384     hex      96 bytes  46b340902740d2bc4305e83aa7645d47d8390a145e6b63e6afdd9ab2e87506473d15cecd096a49167e623951c86b5b70
0.006914 ms  haval224,3   hex      56 bytes  44028c18da5e8def054f5c4bb8bf6935e44d472884ecc8e16e5283f1
0.006914 ms  fnv132       hex       8 bytes  31c55661
0.006914 ms  haval192,3   raw      48 bytes  caad529a1bb40e34498a1b9b7611245229a58d89c69c541c
0.006914 ms  fnv1a64      hex      16 bytes  5757dcf37580c679
0.006914 ms  md5          hex      32 bytes  9be3860da6d674e869f56d89203de1fa
0.006914 ms  fnv164       raw      16 bytes  e930cb53d67dc281
0.007153 ms  sha384       hex      96 bytes  224c0215eb8d3816cfa9eafee4c93e08785b76c1da7a00f32712b75d2fca862876bd56b78f41c02ab952f996ebe3cda2
0.007153 ms  crc32b       hex       8 bytes  9c34810f
0.007153 ms  md5          raw      32 bytes  9be3860da6d674e869f56d89203de1fa
0.007153 ms  sha3-256     raw      64 bytes  0420dfd5e7730058ae1fac586370dabfd5e0b55c855aecd1a220e4664f18cc4e
0.007153 ms  fnv1a64      raw      16 bytes  5757dcf37580c679
0.007153 ms  tiger192,3   hex      48 bytes  faf81c9644d42cd2de55b5fa0ecbf02a8dc69f1614d38a80
0.007153 ms  haval224,3   raw      56 bytes  44028c18da5e8def054f5c4bb8bf6935e44d472884ecc8e16e5283f1
0.007868 ms  tiger192,4   hex      48 bytes  0e291abd158312cffbef3441db5d87112cf2037ca5139dd6
0.007868 ms  sha3-384     raw      96 bytes  46b340902740d2bc4305e83aa7645d47d8390a145e6b63e6afdd9ab2e87506473d15cecd096a49167e623951c86b5b70
0.007868 ms  tiger192,4   raw      48 bytes  0e291abd158312cffbef3441db5d87112cf2037ca5139dd6
0.008106 ms  joaat        raw       8 bytes  b07b2caa
0.008106 ms  fnv132       raw       8 bytes  31c55661
0.008106 ms  fnv1a32      hex       8 bytes  020374d9
0.008106 ms  fnv164       hex      16 bytes  e930cb53d67dc281
0.008106 ms  adler32      raw       8 bytes  bd611714
0.008106 ms  fnv1a32      raw       8 bytes  020374d9
0.008106 ms  crc32        raw       8 bytes  ec29f0ec
0.008106 ms  adler32      hex       8 bytes  bd611714
0.008106 ms  tiger128,3   raw      32 bytes  faf81c9644d42cd2de55b5fa0ecbf02a
0.008821 ms  sha3-512     raw     128 bytes  2444d19896447798c8df85eceacfeae6828b663c3cb8b26cbdaf4f9f0f27971e48d9617574fed9b5ae5ec8c8377c786bb3d40e1345c867fc4b3df7d3ad277362
0.008821 ms  ripemd320    raw      80 bytes  e3629636483e6026c069c26b6fc40719b9a7910460af5e892586e093273b0321995604bd3e96eb49
0.008821 ms  sha3-224     raw      56 bytes  2682dcdaba612868ca6924dc2be9d52bc6dbba26fed74580cd94a066
0.009060 ms  haval192,3   hex      48 bytes  caad529a1bb40e34498a1b9b7611245229a58d89c69c541c
0.009060 ms  haval256,4   raw      64 bytes  dd022ee0d9e7af01063ed3de83e4bbe02fd066094e09c245ea7ca7050f5186c0
0.009060 ms  sha512       raw     128 bytes  9c89ec56fddf2204ed60ac8420fd05370eabe2f930bc4b8fb674cd1226634c5e444d8688f62059d6aa966a016f9dc57ade371326dd8fd9270ed97f579ebefd74
0.009060 ms  sha384       raw      96 bytes  224c0215eb8d3816cfa9eafee4c93e08785b76c1da7a00f32712b75d2fca862876bd56b78f41c02ab952f996ebe3cda2
0.009060 ms  tiger160,3   hex      40 bytes  faf81c9644d42cd2de55b5fa0ecbf02a8dc69f16
0.010014 ms  tiger128,4   raw      32 bytes  0e291abd158312cffbef3441db5d8711
0.010014 ms  sha512/256   hex      64 bytes  296ff535316222122276779ce93723765644d364526a3abf7d795e21eed07863
0.010014 ms  sha1         hex      40 bytes  c320c5ddd6827870b6d1b84400508f62959ffcf8
0.010014 ms  tiger128,4   hex      32 bytes  0e291abd158312cffbef3441db5d8711
0.010014 ms  tiger160,4   hex      40 bytes  0e291abd158312cffbef3441db5d87112cf2037c
0.010967 ms  haval256,3   raw      64 bytes  c0af9ba7fea9b295469fd01870c1bdc44e686570a8d0ab04dfa21e3c04c877fe
0.010967 ms  sha224       raw      56 bytes  32cb3a8c663851dbe80fac2f61138029dc0ad42994407425df5e0f9c
0.010967 ms  tiger192,3   raw      48 bytes  faf81c9644d42cd2de55b5fa0ecbf02a8dc69f1614d38a80
0.010967 ms  haval256,3   hex      64 bytes  c0af9ba7fea9b295469fd01870c1bdc44e686570a8d0ab04dfa21e3c04c877fe
0.010967 ms  md4          hex      32 bytes  06ebbefba830bd250fd39a985478f7dd
0.010967 ms  haval160,3   hex      40 bytes  a82e482af92fd62fc7d909f38dede14a987aa3e1
0.010967 ms  ripemd128    raw      32 bytes  289cd1c4c6020ad75c555983cd9dc708
0.011921 ms  sha3-256     hex      64 bytes  0420dfd5e7730058ae1fac586370dabfd5e0b55c855aecd1a220e4664f18cc4e
0.011921 ms  haval192,4   hex      48 bytes  4ca63334f4faa35c1abc647c117bce6147524cb59b7e6074
0.011921 ms  haval128,3   raw      32 bytes  e04f80ddc4856fbf2c1fea900203a400
0.012159 ms  haval128,3   hex      32 bytes  e04f80ddc4856fbf2c1fea900203a400
0.012159 ms  haval160,4   raw      40 bytes  e2367cafd07d5e37bc202d5c973fb6b85f9677a5
0.012159 ms  haval128,5   raw      32 bytes  5e685fa7bb8d87ef17fee03c12ccaa6a
0.012159 ms  ripemd160    raw      40 bytes  d36ad4d81c1705fc0104c40d01a1eaeadba0bd51
0.012159 ms  haval160,3   raw      40 bytes  a82e482af92fd62fc7d909f38dede14a987aa3e1
0.012875 ms  sha256       hex      64 bytes  520e5af9af94abd4445d4846d1e6c3f7b57c99d07ec0c543b2245f8fc25e9b89
0.012875 ms  haval192,4   raw      48 bytes  4ca63334f4faa35c1abc647c117bce6147524cb59b7e6074
0.012875 ms  sha256       raw      64 bytes  520e5af9af94abd4445d4846d1e6c3f7b57c99d07ec0c543b2245f8fc25e9b89
0.012875 ms  haval224,4   raw      56 bytes  a3f5ae4492b6fb8e8dcfa5dd2a8c17cca73497d3aa030c5c601f760a
0.012875 ms  haval224,4   hex      56 bytes  a3f5ae4492b6fb8e8dcfa5dd2a8c17cca73497d3aa030c5c601f760a
0.012875 ms  ripemd160    hex      40 bytes  d36ad4d81c1705fc0104c40d01a1eaeadba0bd51
0.013113 ms  haval256,4   hex      64 bytes  dd022ee0d9e7af01063ed3de83e4bbe02fd066094e09c245ea7ca7050f5186c0
0.013113 ms  sha224       hex      56 bytes  32cb3a8c663851dbe80fac2f61138029dc0ad42994407425df5e0f9c
0.013113 ms  haval128,4   hex      32 bytes  f437824f16da9da01a18f1ee29f7c0f7
0.013113 ms  haval128,4   raw      32 bytes  f437824f16da9da01a18f1ee29f7c0f7
0.013113 ms  haval256,5   hex      64 bytes  6b104f9b3230973e07854782ac05b65db7e275ad252a204a182e6c6765d54046
0.013828 ms  sha3-512     hex     128 bytes  2444d19896447798c8df85eceacfeae6828b663c3cb8b26cbdaf4f9f0f27971e48d9617574fed9b5ae5ec8c8377c786bb3d40e1345c867fc4b3df7d3ad277362
0.014067 ms  haval192,5   hex      48 bytes  e7d8e7ffe70c2a963194873190abdea563a7b1c1525a5613
0.014067 ms  haval160,5   hex      40 bytes  0eb57d7a309ce22160729a33815795da020d8fa5
0.014067 ms  haval160,5   raw      40 bytes  0eb57d7a309ce22160729a33815795da020d8fa5
0.014067 ms  sha1         raw      40 bytes  c320c5ddd6827870b6d1b84400508f62959ffcf8
0.014067 ms  haval192,5   raw      48 bytes  e7d8e7ffe70c2a963194873190abdea563a7b1c1525a5613
0.014067 ms  haval224,5   raw      56 bytes  c1ea6ca9e5b2e24c6e556e49257a7b259d3679248fe001ac68d4c67c
0.015020 ms  haval128,5   hex      32 bytes  5e685fa7bb8d87ef17fee03c12ccaa6a
0.015020 ms  sha512       hex     128 bytes  9c89ec56fddf2204ed60ac8420fd05370eabe2f930bc4b8fb674cd1226634c5e444d8688f62059d6aa966a016f9dc57ade371326dd8fd9270ed97f579ebefd74
0.015020 ms  haval224,5   hex      56 bytes  c1ea6ca9e5b2e24c6e556e49257a7b259d3679248fe001ac68d4c67c
0.015974 ms  sha3-224     hex      56 bytes  2682dcdaba612868ca6924dc2be9d52bc6dbba26fed74580cd94a066
0.015974 ms  crc32        hex       8 bytes  ec29f0ec
0.015974 ms  whirlpool    raw     128 bytes  75364da8c5c18c840fe7f02261c5692f8f5f63dbeef33a158ddddcd7f9312aef519e41090d04bacf1e626755774f5317d9bfa56044584770ca9603966c2ed474
0.015974 ms  haval256,5   raw      64 bytes  6b104f9b3230973e07854782ac05b65db7e275ad252a204a182e6c6765d54046
0.016928 ms  whirlpool    hex     128 bytes  75364da8c5c18c840fe7f02261c5692f8f5f63dbeef33a158ddddcd7f9312aef519e41090d04bacf1e626755774f5317d9bfa56044584770ca9603966c2ed474
0.016928 ms  sha512/256   raw      64 bytes  296ff535316222122276779ce93723765644d364526a3abf7d795e21eed07863
0.020981 ms  gost-crypto  hex      64 bytes  9fccbbcac9ab77a2f8c73bae96917ceead8d9f985643de5b3881acf666f11323
0.023127 ms  gost-crypto  raw      64 bytes  9fccbbcac9ab77a2f8c73bae96917ceead8d9f985643de5b3881acf666f11323
0.023127 ms  gost         raw      64 bytes  0d7f13607ba2db3c4ba4249b2f4f8b77228a2ced6664f7f9c1c7f92d8fa59d11
0.025034 ms  gost         hex      64 bytes  0d7f13607ba2db3c4ba4249b2f4f8b77228a2ced6664f7f9c1c7f92d8fa59d11
0.036001 ms  snefru256    hex      64 bytes  443ee058e1da2685b1ed2d52d2826a72753659275caa5e3f326960f2400df77a
0.040054 ms  snefru256    raw      64 bytes  443ee058e1da2685b1ed2d52d2826a72753659275caa5e3f326960f2400df77a
0.043869 ms  snefru       hex      64 bytes  443ee058e1da2685b1ed2d52d2826a72753659275caa5e3f326960f2400df77a
0.045061 ms  snefru       raw      64 bytes  443ee058e1da2685b1ed2d52d2826a72753659275caa5e3f326960f2400df77a
0.061035 ms  haval160,4   hex      40 bytes  e2367cafd07d5e37bc202d5c973fb6b85f9677a5
0.122070 ms  md2          hex      32 bytes  237b62dbe31829fb7649518dbce08628
0.136137 ms  md2          raw      32 bytes  237b62dbe31829fb7649518dbce08628
```
