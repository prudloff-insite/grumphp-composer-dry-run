# GrumPHP Composer dry run

This [GrumPHP](https://github.com/phpro/grumphp) task
runs `composer update --lock --dry-run`.

It can be used to detect inconsistencies in the Composer lock file
before committing it.

It can be used like this:

```yaml
---
grumphp:
  extensions:
    - ComposerDryRun\Loader
  tasks:
    composer_dry_run: ~
```
