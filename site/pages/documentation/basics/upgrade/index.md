---
title: Upgrading to the Latest Version
description: Documentation for Flextype Developers and Flextype Users.
template: index
---

### Update from **Flextype 2.0.3** to **Flextype 2.0.4**{.margin-top-hard}
1. **Backup your Site First!**
2. Download [Flextype 2.0.4](https://github.com/Flextype/Flextype/releases/download/v2.0.4/Flextype-2.0.4.zip)
3. Unzip the contents to a new folder on your local computer.
4. Upload `/Flextype/`, `/vendor/` with an (s)FTP client to your host.

### Update from **Flextype 2.0.2** to **Flextype 2.0.3**
1. **Backup your Site First!**
2. Download [Flextype 2.0.3](https://github.com/Flextype/Flextype/releases/download/v2.0.3/Flextype-2.0.3.zip)
3. Unzip the contents to a new folder on your local computer.
4. Upload `/Flextype/`, `/vendor/`, `/.gitignore`, `/composer.json`, `/LICENSE.md`, `/index.php` with an (s)FTP client to your host.

### Update from **Flextype 2.0.1** to **Flextype 2.0.2**
1. **Backup your Site First!**
2. Download [Flextype 2.0.2](https://github.com/Flextype/Flextype/releases/download/v2.0.2/Flextype-2.0.2.zip)
3. Unzip the contents to a new folder on your local computer.
4. Upload `/themes/default/`, `/Flextype/`, `/vendor/doctrine/`, `/.gitignore`, `/composer.json` with an (s)FTP client to your host.

### Update from **Flextype 2.0.0** to **Flextype 2.0.1**
1. **Backup your Site First!**
2. Download [Flextype 2.0.1](https://github.com/Flextype/Flextype/releases/download/v2.0.1/Flextype-2.0.1.zip)
3. Unzip the contents to a new folder on your local computer.
4. Upload `/Flextype/boot/defines.php`, `/robots.txt`, `/composer.json` with an (s)FTP client to your host.

### Update from **Flextype 1.1.4** to **Flextype 2.0.0**
1. **Backup your Site First!**
2. Download [Flextype 2.0.0](https://github.com/Flextype/Flextype/releases/download/v2.0.0/Flextype-2.0.0.zip)
3. Unzip the contents to a new folder on your local computer.
4. Upload `/vendors/`, `/Flextype/`, `/themes/default/`, `/index.php`, `/config/system.yml` with an FTP client to your host.
5. Remove `/libraries/` from your host.

### Update from **Flextype 1.1.3** to **Flextype 1.1.4**
1. **Backup your Site First!**    
2. Download [Flextype 1.1.4](https://github.com/Flextype/Flextype/releases/download/v1.1.4/Flextype-1.1.4.zip)    
3. Unzip the contents to a new folder on your local computer.  
4. Upload `/libraries/Flextype/`, `/libraries/Force/` with an FTP client to your host.

### Update from **Flextype 1.1.2** to **Flextype 1.1.3**
1. **Backup your Site First!**    
2. Download [Flextype 1.1.3](https://github.com/Flextype/Flextype/releases/download/v1.1.3/Flextype-1.1.3.zip)    
3. Unzip the contents to a new folder on your local computer.  
4. Upload `/libraries/Flextype/`, with an FTP client to your host.
5. Update in .htaccess this   
`<FilesMatch "(^#.*#|\.(md|txt|html|tpl)|~)$">`   
to this:  
`<FilesMatch "(^#.*#|\.(md|txt|html|tpl|yml|yaml)|~)$">`  


### Update from **Flextype 1.1.1** to **Flextype 1.1.2**  
1. **Backup your Site First!**    
2. Download [Flextype 1.1.2](https://github.com/Flextype/Flextype/releases/download/v1.1.2/Flextype-1.1.2.zip)    
3. Unzip the contents to a new folder on your local computer.  
4. Upload `/libraries/`, with an FTP client to your host.  


### Update from **Flextype 1.1.0** to **Flextype 1.1.1**  
1. **Backup your Site First!**    
2. Download [Flextype 1.1.1](https://github.com/Flextype/Flextype/releases/download/v1.1.1/Flextype-1.1.1.zip)    
3. Unzip the contents to a new folder on your local computer.  
4. Upload `/themes/default/`, `/libraries/`, `/index.php`, with an FTP client to your host.  
5. Rename `content` folder to `storage`  


### Update from **Flextype 1.0.6** to **Flextype 1.1.0**
1. **Backup your Site First!**    
2. Download [Flextype 1.1.0](https://github.com/Flextype/Flextype/releases/download/v1.1.0/Flextype-1.1.0.zip)    
3. Unzip the contents to a new folder on your local computer.  
4. Upload `/config/`, `/themes/default/`, `/libraries/`, `/cache/`, `/content/`,  `/index.php`, `/robots.txt` with an FTP client to your host.  
5. Move all your pages from `content` to `/content/pages/`  
6. Update all your page headers in [valid YAML format](http://Flextype.org/documentation/content/pages-headers)
7. Set your correct `url`, `title`, `description`, `keywords` and other settings in `/config/site.yml`
