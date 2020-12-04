<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://www.facebook.com/asror.zakirov
 * https://github.com/asror-z
 *
 */

use zetsoft\widgets\themes\ZAjaxOptions;

echo ZAjaxOptions::widget([
'config' => [
    'type' => ZAjaxOptions::type['default'] ,
    'async'=>true,
    'accepts'=>'{\'key[]\':[\'value1\',\'value2\']}',
    'beforeSend'=>'function(jqXHR jqXHR,PlainObject settings){}',
    'cache'=>true,
    'complete'=>' Function( jqXHR jqXHR, String textStatus ){}',
    'contents'=>'PlainObject',
    'contentType'=>true,
    'converters'=>'PlainObject',
    'context'=>'PlainObject',
    'crossDomain'=> false,
    'data'=>'[]',
    'dataFilter'=>'function(data,type){}',
    'dataType'=> 'xml',
    'error'=> 'function(jqXHR jqXHR, String textStatus, String errorThrown ){}',
    'global'=>true,
    'headers'=>'{}',
    'ifModified'=>false,
    'isLocal '=>true,
    'jsonp'=>'{ jsonp: false, jsonpCallback: "callbackName" }',
    'jsonpCallback'=>'function() {}' ,
    'method'  =>'GET',
    'mimeType'=>'String',
    'password'=>'String',
    'processData'=>true,
    'scriptAttrs'=>' PlainObject',
    'scriptCharset'=>'String',
    'statusCode'=>'{}',
    'success'=>'function( Anything data, String textStatus, jqXHR jqXHR ){}',
    'timeout'=>1,
    'traditional'=>true,
    'type'=>'GET',
    'url'=>'http://eyuf.zettest.uz/',
    'username'=>'username',
    'xhr'=>'function named() {}',
    'xhrFields'=>'PlainObject'
],
]);
