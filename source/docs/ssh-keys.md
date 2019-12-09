---
title: SSH Keys
description: PyHost SSH keys
extends: _layouts.documentation
section: content
---

# SSH Keys

SSH keys are incredibly useful for allowing and disallowing access to your server. If you would like an explanation of SSH keys then you can read [this article](https://jumpcloud.com/blog/what-are-ssh-keys/) which does a good job of explaining them. 

PyHost lets you create and delete SSH keys from the SSH keys tab on the server page.

**n.b.** You will see a 'Default' key in your SSH keys section. This is vital for PyHost to be able to connect to your server and make changes so DO NOT delete this from your server's `authorized_keys` file.

SSH keys created through PyHost are assigned a human readable name so that you can identify each one and delete the correct ones when the time comes.

To delete the keys you can click on the bin icon next to the name

![ssh key form](/assets/img/ssh-key-delete.png)