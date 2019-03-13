ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM amazeeio/php:7.3-cli-drupal

COPY --from=cli /app /app
