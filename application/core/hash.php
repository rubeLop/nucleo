<?php
/*
 * Hash -- Clase base de datos 
 *
 * @autor Ing. Ruben Lopez
 * @date mayo-2015
 * @date updated 04 Junio 2015
 */
 
  namespace Core;

  class Hash
  {
    public static function getHash($_data, $_haskey = HASH_KEY) {
        $_hashInit = hash_init(HASH_ALGORITMO, HASH_HMAC, $_haskey);
        hash_update($_hashInit, $_data);
        return hash_final($_hashInit);
    }
  }
