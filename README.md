# pfazzi/isbn

pfazzi/isbn is a PHP 7.2+ library for working with International Standard Book Numbers.

## About

From [Wikipedia](http://en.wikipedia.org/wiki/Universally_unique_identifier):

> The International Standard Book Number (ISBN) is a numeric commercial book identifier which is intended to be unique.[a][b] Publishers purchase ISBNs from an affiliate of the International ISBN Agency.[1]
>  
> An ISBN is assigned to each edition and variation (except reprintings) of a book. For example, an e-book, a paperback and a hardcover edition of the same book would each have a different ISBN. The ISBN is ten digits long if assigned before 2007, and thirteen digits long if assigned on or after 1 January 2007. The method of assigning an ISBN is nation-specific and varies between countries, often depending on how large the publishing industry is within a country.
>  
> The initial ISBN identification format was devised in 1967, based upon the 9-digit Standard Book Numbering (SBN) created in 1966. The 10-digit ISBN format was developed by the International Organization for Standardization (ISO) and was published in 1970 as international standard ISO 2108 (the 9-digit SBN code can be converted to a 10-digit ISBN by prefixing it with a zero digit "0").

## Installation

The preferred method of installation is via [Packagist][] and [Composer][]. Run the following command to install the package and add it as a requirement to your project's `composer.json`:

```bash
composer require pfazzi/isbn
```