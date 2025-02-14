.. include:: /Includes.rst.txt

.. _running-checks-and-tests:

======================
Running checks & tests
======================

Most code checks and tests can be run via Composer commands.

.. contents:: Table of Contents:
   :backlinks: top
   :class: compact-list
   :depth: 1
   :local:

.. _composer-scripts:

Composer scripts
================

For most development-related tasks, this extension provides Composer scripts.
If you are working locally, you can run them using :bash:`composer <scriptname>`.
If you are working with ddev, you can run them with :bash:`ddev composer <scriptname>`.
You do not need to start or build the containers for this as this happens
automatically.

The code-quality-related Composer scripts make use of the PHIVE-installed tools.
This means that for non-ddev-based development, you need to run :bash:`phive install`
before you can use the Composer scripts.

You can run :bash:`composer` (or :bash:`ddev composer`) to display a list of all available
Composer commands and scripts. For all custom Composer scripts there are descriptions
in the `script-description` section of the `composer.json`.

.. _running-code-checks:

Running code checks
===================

You can currently run these code checks on the command line (if working locally without ddev, omit the :bash:`ddev` part):

.. index:: Commands; composer ci
.. code-block:: bash

   ddev composer ci

Runs all dynamic and static code checks.

.. index:: Commands; composer ci:composer:normalize
.. code-block:: bash

   ddev composer ci:composer:normalize

Checks the composer.json.

.. index:: Commands; composer ci:json:lint
.. code-block:: bash

   ddev composer ci:json:lint

Lints the JSON files.

.. index:: Commands; composer ci:php
.. code-block:: bash

   ddev composer ci:php

Runs all static checks for the PHP files.

.. index:: Commands; composer ci:php:cs-fixer
.. code-block:: bash

   ddev composer ci:php:cs-fixer

Checks the code style with the PHP Coding Standards Fixer (PHP-CS-Fixer).

.. index:: Commands; composer ci:php:lint
.. code-block:: bash

   ddev composer ci:php:lint

Lints the PHP files for syntax errors.

.. index:: Commands; composer ci:php:sniff
.. code-block:: bash

   ddev composer ci:php:sniff

Checks the code style with PHP_CodeSniffer (PHPCS).

.. index:: Commands; composer ci:php:stan
.. code-block:: bash

   ddev composer ci:php:stan

Checks the PHP types using PHPStan.

.. index:: Commands; composer ci:static
.. code-block:: bash

   ddev composer ci:static

Runs all static code checks (syntax, style, types).

.. index:: Commands; composer ci:ts:lint
.. code-block:: bash

   ddev composer ci:ts:lint

Lints the TypoScript files.

.. index:: Commands; composer ci:yaml:lint
.. code-block:: bash

   ddev composer ci:yaml:lint

Lints the YAML files.

.. index:: Commands; composer fix:php
.. code-block:: bash

   ddev composer fix:php

Runs all fixers for the PHP code.

.. index:: Commands; composer fix:php:cs
.. code-block:: bash

   ddev composer fix:php:cs

Fixes the code style with PHP-CS-Fixer.

.. index:: Commands; composer fix:php:sniff
.. code-block:: bash

   ddev composer fix:php:sniff

Fixes the code style with PHP_CodeSniffer.

.. index:: Commands; composer phpstan:baseline
.. code-block:: bash

   ddev composer phpstan:baseline

Updates the PHPStan baseline file to match the code.

.. _running-unit-and-functional-tests:

Running unit and functional tests
=================================

You can currently run these tests and coverages on the command line (if working locally without ddev, omit the :bash:`ddev` part):

.. index:: Commands; composer ci:coverage
.. code-block:: bash

   ddev composer ci:coverage

Runs the ci:coverage script as defined in composer.json.

.. index:: Commands; composer ci:coverage:functional
.. code-block:: bash

   ddev composer ci:coverage:functional

Generates the code coverage report for functional tests.

.. index:: Commands; composer ci:coverage:merge
.. code-block:: bash

   ddev composer ci:coverage:merge

Merges the code coverage reports for unit and functional tests.

.. index:: Commands; composer ci:coverage:unit
.. code-block:: bash

   ddev composer ci:coverage:unit

Generates the code coverage report for unit tests.

.. index:: Commands; composer ci:dynamic
.. code-block:: bash

   ddev composer ci:dynamic

Runs all PHPUnit tests (unit and functional).

.. index:: Commands; composer ci:tests
.. code-block:: bash

   ddev composer ci:tests

Runs all PHPUnit tests (unit and functional).

.. index:: Commands; composer ci:tests:functional
.. code-block:: bash

   ddev composer ci:tests:functional

Runs the functional tests.

.. index:: Commands; composer ci:tests:unit
.. code-block:: bash

   ddev composer ci:tests:unit

Runs the unit tests.

.. _running-unit-and-functional-tests-in-phpstorm:

Running unit and functional tests in PHPStorm
=============================================

General setup
-------------

-  Open :guilabel:`File > Settings > PHP > Test Frameworks`.
-  (*) Use Composer autoloader.
-  Path to script: select `.Build/vendor/autoload.php` in your project folder.

In the Run configurations, edit the PHPUnit configuration and use these
settings so this configuration can serve as a template:

-  Directory: use the `Tests/Unit` directory in your project.
-  (*) Use alternative configuration file.
-  Use `.Build/vendor/typo3/testing-framework/Resources/Core/Build/UnitTests.xml`
   in your project folder.
-  Add the following environment variables:

   -  typo3DatabaseUsername
   -  typo3DatabasePassword
   -  typo3DatabaseHost
   -  typo3DatabaseName

Unit tests configuration
------------------------

In the Run configurations, copy the PHPUnit configuration and use these
settings:

-  Directory: use the `Tests/Unit` directory in your project

Functional tests configuration
------------------------------

In the Run configurations, copy the PHPUnit configuration and use these
settings:

-  Directory: use the `Tests/Functional` directory in your project.
-  (*) Use alternative configuration file.
-  Use
   `.Build/vendor/typo3/testing-framework/Resources/Core/Build/FunctionalTests.xml`.
