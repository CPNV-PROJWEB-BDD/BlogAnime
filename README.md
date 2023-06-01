# BlogAnime

#### Table of content
- [Description](#description)
- [Getting started](#getting-started)
- [Deployment](#deployment)
- [Run Tests](#run-tests)
- [Directory structure](#directory-structure)
- [Collaborate](#collaborate)
- [License](#license)
- [Contact](#contact)

## Description
this is a blog website on anime for the ProjetWeb and
inspired by [gumroad](https://gumroad.com/blog).
## Getting started

if it's your first time with this site all information are on next secions.


### Prerequisites
Here's the [link](https://www.swisstransfer.com/d/829bca6b-2c7f-40c8-b2ec-23188e21d041) to the download of the virtual machine<br>
You also need the [VMware](https://www.vmware.com/products/workstation-pro.html) app.

### Configuration
Here's the configuration of the VM for the server:
    - RAM: 1GB<br>
    - processor: 1<br>
    - hard disk: 8GB<br>
    - ISO image(IDE): debian-11.6.0-amd64-netinst.iso<br>
    - Network: NAT<br>
    - mariadb password: password<br>
    - vm password: Pa$$w0rd

### Installation
For the installation of Apache(2.4.57), MariaDB(10.11.2) and PHP(8.2) you can use the tutorial in this [website](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mariadb-php-lamp-stack-on-debian-10)<br>
WARNING!!! some of the points of the tutorial where modified or completed so please also do the change below.<br>
### Changes
To have the good version of PHP (8.2), there's this changes to do:<br>
modify the "sources.list" file (sudo nano /etc/apt/sources.list) and write "deb http://ftp.ch.debian.org/debian sid main" inside.<br>
After saving, do an update (sudo apt-get update) and install PHP (sudo apt install php8.2)<br>
<br>
If you have some problems you can send an email to Diogo.OLIVEIRA-SOARES@cpnv.ch
## Deployment
To have the database of the website, you have to run both of the "dbBloganimeScript.sql" and the "insertBloganimeScript.sql".<br>
here's how to execute it on the VM:<br>
sudo mariaDB
sudo password: Pa$$w0rd
source /[absolute path of you file(example: /home/diogo/Téléchargements/dbBloganimeScript.sql)]
show databases;
use bloganime;
source /[absolute path of you file(example: /home/diogo/Téléchargements/insertBloganimeScript.sql)]
show tables;
SELECT * FROM users;

## Run tests
to know if the  complete deployment is fonctional, please follow next lines:

* verify if all is in good version
* verify if [the todolist](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mariadb-php-lamp-stack-on-debian-10) is functional
* verify if the database is operational 
* verify if the site display as excepted


## Directory structure
the website structure as it need look like this:
```bash
.
├── ./controller
├── ./model
└── ./view
    ├── ./view/css
    ├── ./view/image
    │   ├── ./view/image/Banner
    │   ├── ./view/image/GIF
    │   └── ./view/image/Perso
    └── ./view/script
```
## Collaborate
No collaborate for now.
## License
No license for now.
## Contact
If something wrong or you want to give a feedback please send us email at these addresses : <br>

Leo.JAQUIER@cpnv.ch <br>
Diogo.OLIVEIRA-SOARES@cpnv.ch<br>
Loe.LAVAUD@cpnv.ch
