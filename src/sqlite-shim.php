<?php

/**
 * (c) Christian Wenz <christian@wenz.org>
 * @license http://opensource.org/licenses/MIT
 */

if (!defined('SQLITE_ASSOC')) {
    define('SQLITE_ASSOC', SQLITE3_ASSOC);
}
if (!defined('SQLITE_BOTH')) {
    define('SQLITE_BOTH', SQLITE3_BOTH);
}
if (!defined('SQLITE_NUM')) {
    define('SQLITE_NUM', SQLITE3_NUM);
}

if (!function_exists('sqlite_open')) {
    function sqlite_open($filename, $mode = 0666)
    {
        $handle = new \SQLite3($filename);
        return $handle;
    }
}

if (!function_exists('sqlite_exec')) {
    function sqlite_exec($dbhandle, $query)
    {
        return $dbhandle->exec($query);
    }
}

if (!function_exists('sqlite_query')) {
    function sqlite_query($dbhandle, $query)
    {
        return $dbhandle->query($query);
    }
}

if (!function_exists('sqlite_fetch_array')) {
    function sqlite_fetch_array($result, $mode = SQLITE_BOTH)
    {
        return $result->fetchArray($mode);
    }
}

if (!function_exists('sqlite_fetch_all')) {
    function sqlite_fetch_all($result, $mode = SQLITE_BOTH)
    {
        $rows = array();
        while ($row = $result->fetchArray($mode)) {
            array_push($rows, $row);
        }
        return $rows;
    }
}

if (!function_exists('sqlite_last_insert_rowid')) {
    function sqlite_last_insert_rowid($dbhandle)
    {
        return $dbhandle->lastInsertRowID();
    }
}

if (!function_exists('sqlite_close')) {
    function sqlite_close($dbhandle)
    {
        $dbhandle->close();
    }
}
