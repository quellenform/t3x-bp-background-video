[![Latest Stable Version](https://img.shields.io/packagist/v/quellenform/t3x-bp-background-video?style=for-the-badge)](https://packagist.org/packages/quellenform/t3x-bp-background-video)
[![TYPO3](https://img.shields.io/badge/TYPO3-12|13|14-%23f49700.svg?style=for-the-badge)](https://get.typo3.org/)
[![License](https://img.shields.io/packagist/l/quellenform/t3x-bp-background-video?style=for-the-badge)](https://packagist.org/packages/quellenform/t3x-bp-background-video)

# Background Video for Bootstrap Package

TYPO3 CMS Extension `bp_background_video`

## What does it do?

This extension expands the *Background Image* field in *EXT:bootstrap_package* by adding the option to add videos.

This is useful for the following content elements:
- All content elements that support "Background Image"
- Carousels

## Installation

1. Make sure you have installed *EXT:bootstrap_package*
2. Install this extension from TER or with Composer
3. Add the provided TypoScript (or Site Set) to your template
4. Carefully check whether any of your individual templates affect the above-mentioned content types,
   and whether any relevant parts that are necessary for the rendering of icons are being overwritten!

**Hint:** Take a look at the provided Typoscript/Templates.

**Note:** Parallax is not (yet) supported for videos.
