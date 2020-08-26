![tests](https://github.com/jeyroik/extas-protocols-jsonrpc-expand/workflows/PHP%20Composer/badge.svg?branch=master&event=push)
![codecov.io](https://codecov.io/gh/jeyroik/extas-protocols-jsonrpc-expand/coverage.svg?branch=master)
<a href="https://github.com/phpstan/phpstan"><img src="https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat" alt="PHPStan Enabled"></a> 
<a href="https://codeclimate.com/github/jeyroik/extas-protocols-jsonrpc-expand/maintainability"><img src="https://api.codeclimate.com/v1/badges/ae6aaa2b3157e8dd796e/maintainability" /></a>
<a href="https://github.com/jeyroik/extas-installer/" title="Extas Installer v3"><img alt="Extas Installer v3" src="https://img.shields.io/badge/installer-v3-green"></a>
[![Latest Stable Version](https://poser.pugx.org/jeyroik/extas-protocols-jsonrpc-expand/v)](//packagist.org/packages/jeyroik/extas-jsonrpc)
[![Total Downloads](https://poser.pugx.org/jeyroik/extas-protocols-jsonrpc-expand/downloads)](//packagist.org/packages/jeyroik/extas-jsonrpc)
[![Dependents](https://poser.pugx.org/jeyroik/extas-protocols-jsonrpc-expand/dependents)](//packagist.org/packages/jeyroik/extas-jsonrpc)

# extas-protocols-jsonrpc-expand

Предоставляет возможность вытаскивать `expand` из параметров json-rpc запроса.

# Спецификация

```json
{
  "request": {
    "type": "object",
    "properties": {
      "expand": {
        "type": "array"
      }
    }
  }
}
```

# Пример запроса

```json
{
  "id": "2f5d0719-5b82-4280-9b3b-10f23aff226b",
  "jsonrpc": "2.0",
  "method": "entity.index",
  "params": {
    "expand": ["property1", "property2", "entity.*"]
  }
}
```

`Примечание` как организовать поддержку вайлдкарда (`.*`) можно найти в документации к пакету `extas-expands`.

# Применение в коде

См. примеры в пакете `extas-protocols`. 