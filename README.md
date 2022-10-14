# toronto

Toronto is a city in Canada. A majority of its inhabitants have a first language other than English.
We pride ourselves on being inclusive without imposing more rules than necessary to keep it a functional city.

This theme tries to apply that approach to CiviCRM themeing - i.e. let the CMS theme do it's job as much as possible.

It does this fairly simply by:
1. replacing civicrm.css with a copy that removes the bits that (imho) should be the responsibility of the theme.
   Two examples: I've removed the old-school layout for forms, and I've removed hard-coded font-sizes.
2. adding a few bits as necessary for commonly used front end CMS themes.

It assumes that the front end theme will include any bootstrap css/js if it wants to (i.e. it doesn't feel the need to include it's own copy).

It's not trying to make a nice looking civicrm out of the box on it's own.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v7.2+
* CiviCRM, probably all recent versions.

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl toronto@https://github.com/adixon/toronto/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/adixon/toronto.git
cv en toronto
```

## Getting Started

After enabling the extension, select toronto as your civicrm front end theme.

## Known Issues

I've only tried it out with Drupal using: Oliveiro, a Bootstrap4/Radix, and Bootstrap (which is bootstrap3), and for simple payment pages.
