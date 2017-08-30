name             'chef-wordpress'
maintainer       'YOUR_NAME'
maintainer_email 'YOUR_EMAIL'
license          'All rights reserved'
description      'Installs/Configures chef-wordpress'
long_description 'Installs/Configures chef-wordpress'
version          '0.1.0'

depends "apt"
depends "php"
depends "apache2"
depends "mysql2_chef_gem"
depends "database"