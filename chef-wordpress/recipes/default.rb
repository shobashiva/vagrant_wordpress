#
# Cookbook Name:: chef-wordpress
# Recipe:: default
#
# Copyright (C) 2017 YOUR_NAME
#
# All rights reserved - Do Not Redistribute
#

include_recipe "apt"
include_recipe "php"
include_recipe "php::module_mysql"

package "git"
package "libmysqlclient-dev"
package "sendmail"
package "php-pear"
package "imagemagick"
package "php5-curl"
package "php5-imagick"
package "unzip"

mysql2_chef_gem 'default' do
  action :install
end

mysql_service 'wordpress' do
  initial_root_password 'password'
  action [:create, :start]
end

mysql_connection_info = {
    :host => '127.0.0.1',
    :username => 'root',
    :password => 'password'
}

mysql_database 'wordpress' do
    connection mysql_connection_info
    action [:drop, :create]
end


include_recipe "apache2"
include_recipe "apache2::mod_rewrite"
include_recipe "apache2::mod_php5"
apache_module "mpm_event" do
  enable false
end
apache_module "mpm_prefork" do
  enable true
end

if Dir.exists? "/home/vagrant"
  user = "vagrant"
  domain = "localhost:8000"
else
  user = "ubuntu"
  app = search("aws_opsworks_app").first
  domain = "#{app['domains'][0]}"
end

web_app "wordpress" do
  template "vhost.conf.erb"
  docroot "/home/#{user}/vagrant_wordpress/wordpress"
  server_name "#{domain}"
  enable true
end

service "apache2" do
  action :restart
end
