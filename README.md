# Aeroroad

## Introducción

Este repository es demo del uso de Magento 1 y la implementación de un modulo. 
Utiliza vagrant y ansible para automatizar la creación del ambiente de desarrollo.

## Requerimientos

Los siguientes programas son requeridos

* ansible
* vagrant
* virtual box

```
sudo apt-get install vagrant git virtualbox ansible
```

## Instalación del ambiente de desarrollo

Lo pasos para tener un ambiente de desarrollo funcional son los siguientes

* Clonar este *repository*
* Ejecutar `ansible-galaxy install -r ansible/requirements.yml --roles-path ./ansible/vendor`
* Ejecutar `vagrant plugin install vagrant-hostsupdater` (ver nota)
* Ejecutar `vagrant up --provision` para crear y provisionar la máquina viertual.
* Ahora la página es accessible desde `www.aeroroad.dev`
```
Installing the 'vagrant-hostsupdater' plugin. This can take a few minutes...
/usr/lib/ruby/2.3.0/rubygems/specification.rb:946:in `all=': undefined method `group_by' for nil:NilClass (NoMethodError)
```

## Provisionando manualmente

Enter to the `ansible` directory

#### Local
```
ansible-playbook vagrant.yml -i local/hosts.yml
```
