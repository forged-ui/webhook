# Forged UI Deployment Hook

If you want to receive desktop notifications when a deployment is made, you'll need to install our webhook.

## Requirements

- A Web server that's visible to the public
- NGINX or Apache
- PHP 5.6+
- Composer Support
 
 ## Installation
 - Create a free account on [pusher.com](https://pusher.com/) and setup an app, keep your Cluster, ID and Key handy
 - Duplicate create an `.env` file from the `.env.example` e.g. `cp .env.example .env`
 - Update the details within the `.env`
 - Do a `composer install` to install the dependencies.
 - Add a new deployment hook to your Site in forge pointing to the `forged-ui.php` script. e.g. `https://forged-ui.my-company.com/forged-ui.php`

## Usage
- Add your Pusher credentials into the Forge UI preferences via the tray icon or pushing `cmd/ctrl + /`
- Click reconnect and check the connection is established from within the Pusher debug menu.
- Trigger a deployment
- Relax
