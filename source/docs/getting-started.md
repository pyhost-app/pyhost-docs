---
title: Getting Started
description: Deploying your first Django site with PyHost
extends: _layouts.documentation
section: content
---

# Welcome to PyHost! {#welcome}

PyHost is a server provisioning, deployment and hosting service which lets you take a site from local to live in under 15 minutes without needing to touch the command line once.

## Prerequisites {#getting-started-configuration}

In order to make the most of PyHost you'll need a few things before you jump in:

- -A [DigitalOcean](https://digitalocean.com) account / a server with a clean install of Debian 10 which you have `root` access to.
- -A [Github](https://github.com), [Bitbucket](https://bitbucket.com), or [Gitlab](https://gitlab.com) account
- -A Django project with either `requirements.txt` or that uses `pipenv`.
- -A domain (you need to be able to edit the DNS records)
- -10 - 15 minutes to get your first site set up.

## A Simple Journey through PyHost {#journey}

Once you have logged into PyHost you'll be greeted with the [servers page](https://app.pyhost.io/servers). This is where you can create your new server or connect your existing one to the system. 
On this page you can also choose from any existing servers which you have and you'll be taken to the page for that individual server.

![The servers page](/assets/img/servers-page.png)

Once you have filled in one of the forms on the servers index page then you will be taken to a holding page where you will see a message explaining what is going on in the system as well as what your next steps should be. Once your server is created / configured then your page will automatically populate with some basic information about the server and you will see options to connect to your git host account.

![A new server page](/assets/img/server-page-no-git.png)


After you have connected your git account to PyHost then you can create sites on your newly configured server. Simply fill out the form on the servers page and you'll be taken to the page for your new site. From there you can click 'initialize' and let PyHost do the rest! Take a look at [this video](https://youtube.com) if you'd like to see the process in action.