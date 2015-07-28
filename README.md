# sqlite-shim

Shim for SQLite v2 PHP functions on systems with SQLite v3

Requires PHP >= 5.3 and `ext/sqlite3`.

## Usage

The library provides replacements of old `sqlite_*` functions, facilitating upgrading an application to the SQLite3 extension that ships with PHP 5.3 and higher. Ideally, just load it and your legacy code might work as before. 

## Contributing

This is just a quick and dirty implementation that I helped me in a project. Pull requests are appreciated. As long as you keep the attribution, feel free to reuse the code in your own libraries. 

## TODO

- Shims for additional functions
- Composer support
- Tests