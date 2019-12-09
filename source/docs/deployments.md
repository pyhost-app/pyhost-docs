---
title: Deployments
description: Deploying your code with PyHost
extends: _layouts.documentation
section: content
---

# Deployments
PyHost allows you to trigger deployments from the sites page (no more mucking around on the server with git and commands). With PyHost you can deploy a site with the click of a button which will bring the server up to date with your chosen branch and will run migrations and install any new PyPi packages that your updates may require.

### Editable Deploy Script
We allow you full control over your deployment scripts in PyHost (it's your server after all). When you click on the 'Edit Deployment Script' button then you'll see a popup window which contains the contents of your script. Here you can add any custom commands which you may want to add to your deployments so that they can be run every time that you make an update (e.g. compiling assets with Webpack or Gulp).
> Remember that this server belongs to you and only you so don't do anything silly.

### Easy Deploy
Deployments are a core feature of PyHost. We offer the option to enable 'Easy Deploy' which means that every time that you push a change to your github repo then PyHost will deploy this change immediately. This is done using git webhooks and can be disabled at any time by deleting the webhook in your chosen git host provider. 