# PHP Jelly Stack

![Pagespeed Report](.github/images/pagespeed.jpg "Pagespeed Report")

<description>Stupid fast semi-static PHP/HTML/JS website starter. Built-in tailwind dark mode, working dark mode toggle, and GDPR compliant cookie consent. Leveraging the gargantuan Nodejs ecosystem for local development plus tasks, tailwind for styling and PHP/HTML/JS for semi-static website generation. Deploy insanely fast with Heroku Buildpack, PHP Composer, and a Procfile. Push changes near instantly by using Heroku piplines and configuring automatic branch deplotment.</description>

- [Live Preview](https://heroku-phpjelly.herokuapp.com/ "Live View")

- [Live Page Speed Test](https://pagespeed.web.dev/report?url=https%3A%2F%2Fheroku-phpjelly.herokuapp.com%2F "PageSpeed Report")

## Getting Started

### Install on Linux

 - Create new repo with [PHP Jelly Stack](https://github.com/fuelviews/phpjelly/generate) repo
 - Clone "PHP Jelly Stack" repo locally `git clone your-repo-url`
 - Install Docker and Docker Compose
 - Install [Homebrew]("https://brew.sh/")
 - Navigate to the root of your newly cloned repo in terminal
 - Install homebrew packages `brew install node npm yarn imagemagick`
 - Install node packages `yarn install`

### Install on MacOS

 - Create new repo with [PHP Jelly Stack](https://github.com/fuelviews/phpjelly/generate) repo
 - Clone "PHP Jelly Stack" repo locally `git clone your-repo-url`
 - Install Docker Desktop and enable Docker Compose
 - Install [Homebrew]("https://brew.sh/")
 - Navigate to the root of your newly cloned repo in terminal
 - Install homebrew packages `brew install node npm yarn imagemagick`
 - Install node packages `yarn install`

### Install on Windows

#### Step One
 - Install Docker Desktop and enable [Docker Compose + WSL Backend](https://docs.docker.com/desktop/windows/wsl/#:~:text=Start%20Docker%20Desktop%20from%20the,will%20be%20enabled%20by%20default.)
 - Install VS Code, install All "Remote Development" extentions, install All "WSL" and "Remote - WSL" extentions, install "Docker" extentsion

#### Step Two
 - Install [Ubuntu WSL](https://www.microsoft.com/en-us/p/ubuntu/9nblggh4msv6?ocid=9nblggh4msv6_ORSEARCH_Bing&rtc=1&activetab=pivot:overviewtab)
 - Install WSL `wsl --install'
 - Open new WSL install `wsl`
 - Update new WSL install `sudo apt-get update -y && sudo apt upgrade -y`
 - Install git `sudo apt-get install git`
 - Install [Homebrew](https://brew.sh/)
 - Install homebrew packages `brew install node npm yarn imagemagick`
 - Open new Remote WSL `CTRL+SHIFT+P` select "New Window using Distro"
 - Install all local VS Code extentsions to Remote WSL
 - Reboot Remote WSL

### Step Three 
 - Create new repo with [PHP Jelly Stack](https://github.com/fuelviews/phpjelly/generate) repo
 - Clone "PHP Jelly Stack" repo locally `git clone your-repo-url`
 - Install node packages `yarn install`

## Available Commands

In the project directory, you can run:

### `yarn build`

   - Builds tailwind css file
   - Config files: "tailwind.config.js"

### `yarn watch`

   - Continuously builds tailwind css
   - Starts apache docker container on localhost:3000
   - Formats codebase with prettier

### `yarn images`

   - Builds responsive images from "/images/" folder
   - Saves responsives images to "/public/images/" folder

### `yarn favicon`

   - Builds favicon images and manifest files from "/images/favicon/favicon.png"
   - Saves favicon images and manifest files to "/public/images/favicon/" folder
   - Config file: "favicon.config.js"

### `yarn sitemap`

   - Builds sitemap.xml from specified live location
   - Saves sitemap.xml to "/public/sitemap.xml"
   - Config file: "package.json"
   - Update the sitemap comamnd with your live location: "yarn generate-robot -r & yarn sitemap-generator -f ./public/sitemap.xml https://heroku-phpjelly.herokuapp.com/",
   - Builds robots.txt
   - Saves robots.txt to "/public/robots.txt"
   - Config files: "robots-text-config.js"

### `yarn prettier`

   - Formats all files with prettier
   - Config file: "prettier.config.js"

### `yarn prod`

   - Prepares project for production by running "yarn images", "yarn favicon" "yarn sitemap", "yarn prettier"

###

## Built With

- Twailwind Plugins
- Docker Compose
- ImageMagick
- Dependabot
- JavaScript
- CSSNano
- Apache2
- Tailwind
- PostCSS
- PHP 8.1
- Docker
- Nodejs
- HTML
- NPM
- Yarn
- CSS

## "Built With" - Special Thanks

- [iunteq/tailwindcss-textshadow](https://github.com/iunteq/tailwindcss-textShadow)
- [@ruhith/generate-robots-text](https://github.com/Udakara/generate-robots-text)
- [orestbida/cookieconsent](https://github.com/orestbida/cookieconsent)
- [sitemap-generator-cli](https://www.npmjs.com/package/sitemap-generator-cli)
- [php:8.1.3RC1-apache](https://registry.hub.docker.com/layers/php/library/php/8.1.3RC1-apache/images/sha256-584796346e375a811b018950c459e47d82891dc2899a96785ef1c56865f50e0c?context=explore)

## Deploy With

- Heroku (free tier)
- Heroku Buildpack
- PHP Composer

## Authors & Contributors

**SkyJebus**

- [Profile](https://github.com/skyjebus "SkyJebus Profile")
- [Website](https://fuelviews.com "Welcome")

**SweatyBreeze**

- [Profile](https://github.com/sweatybreeze "SweatyBreeze Profile")
- [Website](https://fuelviews.com "Welcome")

## Links

- [Github Repo](https://github.com/fuelviews/phpjelly "PHP Jelly Stack Repo")
- [Homepage](https://fuelviews/phpjelly "PHP Jelly Stack Website")
- [Live Preview](https://heroku-phpjelly.herokuapp.com/ "Live View")

## 🤝 Support

Contributions, issues, and feature requests are welcome!

Give a ⭐️ if you like this project!