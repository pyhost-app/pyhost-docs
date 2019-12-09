---
title: Databases
description: PyHost database options
extends: _layouts.documentation
section: content
---

# Databases

PyHost can support MySQL, PostgreSQL, and SQLite databases being used with your Django sites. You need to make the choice of database driver when you initially create the server through the form on the [servers](https://app.pyhost.io/servers) page.

>__N.b__ There is currently no option for SQLite on the servers form, this is because it is a file based database system and does not require installation of a driver. Therefore on the form you can choose either MySQL _OR_ PostgreSQL and a SQLite driver django app will still work as normal.

During the initial set up of your server you will recieve an email containing your server's database password for the `pyhost` user. With this you can connect through the command line or through a database management GUI

## Interacting with Databases

You can use the databases tab on the server page to create and delete databases and users on your server. You must first create a database through the form.

![database create form](/assets/img/database-form.png)

After creating a database you will have the option to create a user for that database. This was done in order to allow users to have individual passwords for each site which they host on a server and therefore if the password gets compromised then there will be less risk of other database being accessed by someone with malicious intentions.