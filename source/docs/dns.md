---
title: DNS
description: Point your domain to your new PyHost Server.
extends: _layouts.documentation
section: content
---

# DNS

If you're new to DNS then I've got a blog post [here](https://dev.to/allmanaj/sys-admin-for-web-devs-intro-to-dns-5h1c) which explains what it does and what each record type does.

All you will need to worry about is the A Record which is what you need to change to point your domain to your new PyHost provisioned server. You will see that in the top right corner of the server page there is an IP address next to the location of your server. This IP is the IP of the server (It will be the same as the one for the server in your DigitalOcean account or for your custom server.) You will need to create a new A Record for your domain with the value set to this IP address.

The beauty of PyHost is that this doesn't cost anything to do. All sites which you deploy and create can have custom domains and are entirely yours to manage on your server if you should choose to.

Your new DNS record may look like so 

| Type | Name | Value |
--- | --- | ---
| A | yourdomain.com | 123.456.789.10 |