---
title: Environment Variables
description: PyHost Environment variables
extends: _layouts.documentation
section: content
---

# Environment Variables

An integral part of deployment is the ability to store sensitive values outside of the codebase and git by using environment variables on the server the site is hosted on. You can create and delete envionment variables through PyHost with the 'Environment Variables' tab on the server page. This tab works much the same way as both the SSH key and Databases tab in that you need to fill in the form with a name and the value of the environment variable. PyHost will then add this varibale to your server and this will allow it to be picked up by your django site.

> Your site may require a restart in order for it to be picked up but you can do this through the settings tab on the server page and clicking 'Restart all Server Processes'.

In order to edit an environment varibale you will need to delete the variable and then re-add it.

![environment variable form](/assets/img/env-var-form.png)