# Generate the Client

- Set the date for commit messages:
  ```shell
  export GENERATED_DATE=`date +"%Y-%m-%d"`
  ```

- Get the generator, check releases here https://github.com/OpenAPITools/openapi-generator/releases:
  ```shell
  export GENERATOR_VERSION=7.15.0
  wget https://repo1.maven.org/maven2/org/openapitools/openapi-generator-cli/$GENERATOR_VERSION/openapi-generator-cli-$GENERATOR_VERSION.jar
  ```

- Get the OpenAPI definition file from https://developers.eveonline.com/api-explorer, adjust the 
  compatibility date if necessary:
  ```shell
  export COMPATIBILITY_DATE=2025-09-30
  wget https://esi.evetech.net/meta/openapi.yaml?compatibility_date=$COMPATIBILITY_DATE -O openapi.yaml
  ```

- Apply the [compatibility date patch](patches/01-x-compatibility-date-definition.patch) to `openapi.yaml`:
  ```shell
  git apply patches/01-x-compatibility-date-definition.patch
  ```

- Commit `openapi.yaml`:
  ```shell
  git commit openapi.yaml -m "Update openapi.yaml on $GENERATED_DATE with compatibility date $COMPATIBILITY_DATE"
  ```

- Delete the directories `lib` and `docs`:
  ```shell
  rm -R lib docs
  ```

- Generate the client:
  ```shell
  java -jar openapi-generator-cli-$GENERATOR_VERSION.jar generate -i openapi.yaml -g php -c openapi-config.json
  ```

- Add the directories `lib` and `docs`:
  ```shell
  git add lib docs
  ```

- Revert changes in `.gitignore` and `composer.json`:
  ```shell
  git checkout .gitignore composer.json
  ```

- In `.openapi-generator/FILES`, delete all new lines that begin with `test/`.

- In `README.md`, undo all changes above `### Manual Installation` and increase the version for
  `tkhamez/eve-api`.

- Commit everything:
  ```shell
  git commit -a -m "Generated from the definition file dated $GENERATED_DATE for the compatibility date $COMPATIBILITY_DATE using OpenAPI Generator $GENERATOR_VERSION."
  ```
