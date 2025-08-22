# Patches

## 01-x-compatibility-date-definition.patch

This patches the OpenAPI definition file. 

It removes the format "date" from the X-Compatibility-Date header, makes it optional, and adds a
default value (this client always sends an optional header with a default value).

This fixes two issues that the PHP generator currently has:

1. The X-Compatibility-Date header is not formatted correctly (date with time instead of date only).
2. It does not use a constant value for the X-Compatibility-Date header, which is an enumeration with
   only one possible value (see also https://github.com/OpenAPITools/openapi-generator/issues/16547).
   Other clients have "autosetConstants=true" to toggle this behaviour.
