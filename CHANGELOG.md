# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## Releases

### [0.1.13] - 2023-01-01

* Adds the possibility to add multiple expected classes on ClassInvalidException

### [0.1.12] - 2023-01-01

* Add ConfigurationMissingException

### [0.1.11] - 2022-12-31

* Fix wording

### [0.1.10] - 2022-12-31

* Add DbEntityNotFoundException

### [0.1.9] - 2022-12-31

* Add FunctionReplaceException

### [0.1.8] - 2022-12-30

* Add CaseInvalidException

### [0.1.7] - 2022-12-30

* Add FunctionCurlExecException

### [0.1.6] - 2022-12-30

* Add FunctionJsonEncodeException

### [0.1.5] - 2022-12-30

* Refactoring.

### [0.1.4] - 2022-12-30

* Add json and stdClass type.

### [0.1.3] - 2022-12-30

* Add ClassInvalidException.

### [0.1.2] - 2022-12-30

* Add iterable type.

### [0.1.1] - 2022-12-30

* Add ArrayKeyNotFoundException and TypeInvalidException
* Add Badges
* Updating the README.md documentation.

### [0.1.0] - 2022-12-30

* Initial release
* Add src
* Add tests
  * PHP Coding Standards Fixer
  * PHPMND - PHP Magic Number Detector
  * PHPStan - PHP Static Analysis Tool
  * PHPUnit - The PHP Testing Framework
  * Rector - Instant Upgrades and Automated Refactoring
* Add README.md
* Add LICENSE.md

## Add new version

```bash
# Checkout master branch
$ git checkout main && git pull

# Check current version
$ vendor/bin/version-manager --current

# Increase patch version
$ vendor/bin/version-manager --patch

# Change changelog
$ vi CHANGELOG.md

# Push new version
$ git add CHANGELOG.md VERSION && git commit -m "Add version $(cat VERSION)" && git push

# Tag and push new version
$ git tag -a "$(cat VERSION)" -m "Version $(cat VERSION)" && git push origin "$(cat VERSION)"
```
