<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace GPBMetadata\Google\Firestore\V1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Firestore\V1\Document::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a85120a1f676f6f676c652f6669726573746f72652f76312f71756572792e70726f746f1213676f6f676c652e6669726573746f72652e76311a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22fa0e0a0f537472756374757265645175657279123f0a0673656c65637418012001280b322f2e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e50726f6a656374696f6e12450a0466726f6d18022003280b32372e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e436f6c6c656374696f6e53656c6563746f72123a0a05776865726518032001280b322b2e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e46696c746572123c0a086f726465725f627918042003280b322a2e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e4f72646572122d0a0873746172745f617418072001280b321b2e676f6f676c652e6669726573746f72652e76312e437572736f72122b0a06656e645f617418082001280b321b2e676f6f676c652e6669726573746f72652e76312e437572736f72120e0a066f6666736574180620012805122a0a056c696d697418052001280b321b2e676f6f676c652e70726f746f6275662e496e74333256616c75651a440a12436f6c6c656374696f6e53656c6563746f7212150a0d636f6c6c656374696f6e5f696418022001280912170a0f616c6c5f64657363656e64616e74731803200128081afd010a0646696c74657212500a10636f6d706f736974655f66696c74657218012001280b32342e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e436f6d706f7369746546696c746572480012480a0c6669656c645f66696c74657218022001280b32302e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e4669656c6446696c746572480012480a0c756e6172795f66696c74657218032001280b32302e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e556e61727946696c7465724800420d0a0b66696c7465725f747970651ac9010a0f436f6d706f7369746546696c74657212490a026f7018012001280e323d2e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e436f6d706f7369746546696c7465722e4f70657261746f72123c0a0766696c7465727318022003280b322b2e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e46696c746572222d0a084f70657261746f7212180a144f50455241544f525f554e535045434946494544100012070a03414e4410011afd020a0b4669656c6446696c74657212420a056669656c6418012001280b32332e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e4669656c645265666572656e636512450a026f7018022001280e32392e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e4669656c6446696c7465722e4f70657261746f7212290a0576616c756518032001280b321a2e676f6f676c652e6669726573746f72652e76312e56616c756522b7010a084f70657261746f7212180a144f50455241544f525f554e5350454349464945441000120d0a094c4553535f5448414e100112160a124c4553535f5448414e5f4f525f455155414c100212100a0c475245415445525f5448414e100312190a15475245415445525f5448414e5f4f525f455155414c100412090a05455155414c100512120a0e41525241595f434f4e5441494e53100712060a02494e100812160a1241525241595f434f4e5441494e535f414e5910091ae9010a0b556e61727946696c74657212450a026f7018012001280e32392e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e556e61727946696c7465722e4f70657261746f7212440a056669656c6418022001280b32332e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e4669656c645265666572656e63654800223d0a084f70657261746f7212180a144f50455241544f525f554e5350454349464945441000120a0a0649535f4e414e1002120b0a0749535f4e554c4c1003420e0a0c6f706572616e645f747970651a240a0e4669656c645265666572656e636512120a0a6669656c645f706174681802200128091a510a0a50726f6a656374696f6e12430a066669656c647318022003280b32332e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e4669656c645265666572656e63651a8e010a054f7264657212420a056669656c6418012001280b32332e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e4669656c645265666572656e636512410a09646972656374696f6e18022001280e322e2e676f6f676c652e6669726573746f72652e76312e5374727563747572656451756572792e446972656374696f6e22450a09446972656374696f6e12190a15444952454354494f4e5f554e5350454349464945441000120d0a09415343454e44494e471001120e0a0a44455343454e44494e47100222440a06437572736f72122a0a0676616c75657318012003280b321a2e676f6f676c652e6669726573746f72652e76312e56616c7565120e0a066265666f726518022001280842c3010a17636f6d2e676f6f676c652e6669726573746f72652e7631420a517565727950726f746f50015a3c676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6669726573746f72652f76313b6669726573746f7265a2020447434653aa0219476f6f676c652e436c6f75642e4669726573746f72652e5631ca0219476f6f676c655c436c6f75645c4669726573746f72655c5631ea021c476f6f676c653a3a436c6f75643a3a4669726573746f72653a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

