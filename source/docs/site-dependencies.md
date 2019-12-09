---
title: Site Dependencies
description: Managing Site Dependencies with PyHost
extends: _layouts.documentation
section: content
---

# Site Dependencies

Managing dependencies with Django is made simpler with Pip, a package manager which allows the installation of other people's code into your own codebase. When making the transition from your local machine to a server, wherever you deploy your site you need a record of what packages you're using locally that you will need on your live site.

## Pip and requirements.txt{#pip}

The simplest way to do this is by just using pip and running a command in your terminal which looks like the following:

```
$ pip freeze -r > requirements.txt
```

> If you are using a virtual environment then you will need to activate it first in order for this command to work correctly

This will create a new file in your project called `requirements.txt`. If you open the file you'll see that it contains the names of the packages which you have installed and their versions. 

> Make sure to commit this new file into your Git repository

## Pipenv {#pipenv}

If you're using Pipenv to build your site then the process of keeping track of your dependencies is already done for you. Just make sure to select 'yes' for 'Does your site use pipenv' when creating your site in PyHost. For more information on pipenv you can find the repository [here](https://github.com/pypa/pipenv)