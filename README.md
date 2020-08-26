

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