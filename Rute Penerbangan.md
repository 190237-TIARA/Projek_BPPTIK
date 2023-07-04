# Rute Penerbangan
## Pendaftaran Rute Penerbangan

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://nodesource.com/products/nsolid)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Website ini  digunakan untuk melakukan proses peng inputan sederhana untuk rute penerbangan.

## Features

- Input pendaftaran rute penerbangan
- tabel data rute penerbangan

# Requirements
- xampp <= 5.1
- php
- html

# Teknologi
Dalam pembuatan aplikasi ini meliputi
- [Boostrap](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
- [Sublime Text](ps://getbootstrap.com/docs/5.3/getting-started/introduction/)
- [Xampp](https://www.apachefriends.org/download.html)
- [php] - Bahasa Pemrograman
- [Javasricpt] - evented I/O for the Backend

## Installation
Install Xampp
Pindahkan folde projek kedalam
```
C://xampp/htdocs/projek
```

## Structure Folder
📦projek
 ┣ 📂gambar
 ┃ ┣ 📜airport.jpg
 ┃ ┣ 📜gambar 1.png
 ┃ ┗ 📜gambar_2.png
 ┣ 📂library
 ┃ ┣ 📂css
 ┃ ┃ ┣ 📜bootstrap-grid.css
 ┃ ┃ ┣ 📜bootstrap-grid.css.map
 ┃ ┃ ┣ 📜bootstrap-grid.min.css
 ┃ ┃ ┣ 📜bootstrap-grid.min.css.map
 ┃ ┃ ┣ 📜bootstrap-grid.rtl.css
 ┃ ┃ ┣ 📜bootstrap-grid.rtl.css.map
 ┃ ┃ ┣ 📜bootstrap-grid.rtl.min.css
 ┃ ┃ ┣ 📜bootstrap-grid.rtl.min.css.map
 ┃ ┃ ┣ 📜bootstrap-reboot.css
 ┃ ┃ ┣ 📜bootstrap-reboot.css.map
 ┃ ┃ ┣ 📜bootstrap-reboot.min.css
 ┃ ┃ ┣ 📜bootstrap-reboot.min.css.map
 ┃ ┃ ┣ 📜bootstrap-reboot.rtl.css
 ┃ ┃ ┣ 📜bootstrap-reboot.rtl.css.map
 ┃ ┃ ┣ 📜bootstrap-reboot.rtl.min.css
 ┃ ┃ ┣ 📜bootstrap-reboot.rtl.min.css.map
 ┃ ┃ ┣ 📜bootstrap-utilities.css
 ┃ ┃ ┣ 📜bootstrap-utilities.css.map
 ┃ ┃ ┣ 📜bootstrap-utilities.min.css
 ┃ ┃ ┣ 📜bootstrap-utilities.min.css.map
 ┃ ┃ ┣ 📜bootstrap-utilities.rtl.css
 ┃ ┃ ┣ 📜bootstrap-utilities.rtl.css.map
 ┃ ┃ ┣ 📜bootstrap-utilities.rtl.min.css
 ┃ ┃ ┣ 📜bootstrap-utilities.rtl.min.css.map
 ┃ ┃ ┣ 📜bootstrap.css
 ┃ ┃ ┣ 📜bootstrap.css.map
 ┃ ┃ ┣ 📜bootstrap.min.css
 ┃ ┃ ┣ 📜bootstrap.min.css.map
 ┃ ┃ ┣ 📜bootstrap.rtl.css
 ┃ ┃ ┣ 📜bootstrap.rtl.css.map
 ┃ ┃ ┣ 📜bootstrap.rtl.min.css
 ┃ ┃ ┗ 📜bootstrap.rtl.min.css.map
 ┃ ┗ 📂js
 ┃ ┃ ┣ 📜bootstrap.bundle.js
 ┃ ┃ ┣ 📜bootstrap.bundle.js.map
 ┃ ┃ ┣ 📜bootstrap.bundle.min.js
 ┃ ┃ ┣ 📜bootstrap.bundle.min.js.map
 ┃ ┃ ┣ 📜bootstrap.esm.js
 ┃ ┃ ┣ 📜bootstrap.esm.js.map
 ┃ ┃ ┣ 📜bootstrap.esm.min.js
 ┃ ┃ ┣ 📜bootstrap.esm.min.js.map
 ┃ ┃ ┣ 📜bootstrap.js
 ┃ ┃ ┣ 📜bootstrap.js.map
 ┃ ┃ ┣ 📜bootstrap.min.js
 ┃ ┃ ┗ 📜bootstrap.min.js.map
 ┣ 📜data.json
 ┣ 📜index.php
 ┗ 📜style.css


## Credits
- [Instagram](https://www.instagram.com/?hl=id)

Want to contribute? Great!

Dillinger uses Gulp + Webpack for fast developing.
Make a change in your file and instantaneously see your updates!

Open your favorite Terminal and run these commands.

First Tab:

```sh
node app
```

Second Tab:

```sh
gulp watch
```

(optional) Third:

```sh
karma test
```

#### Building for source

For production release:

```sh
gulp build --prod
```

Generating pre-built zip archives for distribution:

```sh
gulp build dist --prod
```

## Docker

Dillinger is very easy to install and deploy in a Docker container.

By default, the Docker will expose port 8080, so change this within the
Dockerfile if necessary. When ready, simply use the Dockerfile to
build the image.

```sh
cd dillinger
docker build -t <youruser>/dillinger:${package.json.version} .
```

This will create the dillinger image and pull in the necessary dependencies.
Be sure to swap out `${package.json.version}` with the actual
version of Dillinger.

Once done, run the Docker image and map the port to whatever you wish on
your host. In this example, we simply map port 8000 of the host to
port 8080 of the Docker (or whatever port was exposed in the Dockerfile):

```sh
docker run -d -p 8000:8080 --restart=always --cap-add=SYS_ADMIN --name=dillinger <youruser>/dillinger:${package.json.version}
```

> Note: `--capt-add=SYS-ADMIN` is required for PDF rendering.

Verify the deployment by navigating to your server address in
your preferred browser.

```sh
127.0.0.1:8000
```

## License

MIT

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [dill]: <https://github.com/joemccann/dillinger>
   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [john gruber]: <http://daringfireball.net>
   [df1]: <http://daringfireball.net/projects/markdown/>
   [markdown-it]: <https://github.com/markdown-it/markdown-it>
   [Ace Editor]: <http://ace.ajax.org>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
   [express]: <http://expressjs.com>
   [AngularJS]: <http://angularjs.org>
   [Gulp]: <http://gulpjs.com>

   [PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
   [PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
   [PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
   [PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>
