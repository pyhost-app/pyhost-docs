---
title: Environment Variables
description: PyHost Environment variables
extends: _layouts.documentation
section: content
---

# Environment Variables

An integral part of deployment is the ability to store sensitive values outside of the codebase and git by using environment variables on the server that is hosting your site. You can create and delete environment variables through PyHost with the 'Environment Variables' tab on the server page. This tab works much the same way as both the SSH key and Databases tab in that you need to fill in the form with a name and the value of the environment variable. PyHost will then add this variable to your server and this will allow it to be picked up by your django site.

There is also now a new tab on the Site page which allows you to create a site wide environment variable that will only be loaded by the site on which it's set.
This allows much more flexibility than only using the server-wide environment variables.

> Your site may require a restart in order for it to be picked up, but you can do this through the settings tab on the server page and clicking 'Restart all Server Processes'.

In order to edit an environment variable you will need to delete the variable and then re-add it.

![environment variable form](/assets/img/env-var-form.png)