---
title: Security
description: Security measures to take with a Django app in PyHost
extends: _layouts.documentation
section: content
---

#Security in Django

As I'm sure you can imagine, the Django Docs cover the topic of securing your app thoroughly and clearly. You can find the relevant page in the Django docs [here](https://docs.djangoproject.com/en/3.0/topics/security/).

On PyHost's side we have a few features included automatically to help with security. The first is installing and enabling a firewall on your new server. We use `ufw` for this and enable access to both port 80 (HTTP) and port 443 (HTTPS).

We also allow you to add system wide environment varables through our interface. More information on how to add and delete these can be found [here](/docs/environment-variables).