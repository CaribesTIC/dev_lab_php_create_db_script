<?php
$aTable = [
    ["tableName" => "seguridad.usuario",
        "aFields" => [
            ["fieldName" => "id"      , "fieldDataType" => "serial"           , "fieldDefaultValue" => ""     , "fieldNotNull" => true],
            ["fieldName" => "cedula"  , "fieldDataType" => "integer"          , "fieldDefaultValue" => ""     , "fieldNotNull" => true],
            ["fieldName" => "nombre"  , "fieldDataType" => "character varying", "fieldDefaultValue" => ""     , "fieldNotNull" => true],
            ["fieldName" => "aellido" , "fieldDataType" => "character varying", "fieldDefaultValue" => ""     , "fieldNotNull" => true],
            ["fieldName" => "usuario" , "fieldDataType" => "character varying", "fieldDefaultValue" => ""     , "fieldNotNull" => true],
            ["fieldName" => "correo"  , "fieldDataType" => "character varying", "fieldDefaultValue" => ""     , "fieldNotNull" => true],
            ["fieldName" => "telefono", "fieldDataType" => "character varying", "fieldDefaultValue" => ""     , "fieldNotNull" => true],
            ["fieldName" => "fecha"   , "fieldDataType" => "date"             , "fieldDefaultValue" => "now()", "fieldNotNull" => true]
        ]
    ],
    ["tableName" => "admin.unidad",
        "aFields" => [
            ["fieldName" => "id"         , "fieldDataType" => "serial"           , "fieldDefaultValue" => ""  , "fieldNotNull" => true],
            ["fieldName" => "descripcion", "fieldDataType" => "character varying", "fieldDefaultValue" => ""  , "fieldNotNull" => true],
            ["fieldName" => "status"     , "fieldDataType" => "integer"          , "fieldDefaultValue" => ""  , "fieldNotNull" => true]
        ]
    ]
];
