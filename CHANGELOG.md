# Changelog

For API changes see the changelog at https://developers.eveonline.com/api-explorer.  
For generator library changes see https://github.com/OpenAPITools/openapi-generator/releases.

## Versioning scheme

- Major: This number is increased everytime when the client was generated from an updated
  OpenAPI definition file or any other breaking change.
- Minor: The compatibility date (see https://developers.eveonline.com/docs/services/esi/overview/#versioning)
  for which the client was generated in the format YYYYMMDD.
- Patch: Increased when the client was regenerated with a new minor or patch version of the
  generator library from the same OpenAPI definition file.

## Notable changes

### 8.20250826.0

Beta status.

- Some request bodies are now required. This changes the order of the parameters for the 
  respective methods.

### 7.20250826.0

Beta status.

- Updated to version 2025-08-26.

### 4.20200101.0

Beta status.

- The parameter `$x_compatibility_date` is now optional and has a default value. This also changes
  the order of the parameters.

### 2.20250802.0

Beta status.

- Switched to the new versioning scheme.

### 1.0.0

Beta status.

- Forked from https://github.com/tkhamez/swagger-eve-php.
- Generated from the new OpenAPI 3.1 definition.
- Added a patch for the format of the compatibility date.

In addition to the change in the PHP namespace, the biggest changes between `swagger-eve-php` and
`eve-api` are that many model classes have been renamed and each API method now requires the
`$x_compatibility_date` parameter. You can see all the changes in
[this commit](https://github.com/tkhamez/eve-api-php/commit/862d19140f6dfadf699d463e53be4d16b5fe2e72).
