## Facts

Vendor: Entrepids
 
Module: Giftregistry

## Models: EAV and Simple Models

A resource of the a *simple model* inherits of `Mage_Core_Model_Resource_Db_Abstract` while a resource EAV inherits of
`Mage_Eav_Model_Entity_Abstract`.

* Create a model in the `Entrepids/Giftregistry/Models`
* If a model need to handle data directly, create to the one a *resource* and *collection*.
  * Create the resource file associated with the model in the directory `Entrepids/Giftregistry/Models/Resource` with the
  same name that the model. Also, create the `Collection.php` file inside the directory 
  `Entrepids/Giftregistry/Models/Resource/MODEL_NAME`
* Add mapping of resource and tables to the `config.xml` file of the module.

## Creation of DB

* Create the setup resource in the module `config.xml` file.
* Create the `Entrepids_Giftregistry_Model_Resource_Setup` class
* Create install, data and upgrade scripts.

## Controllers

## Blocks, Templates and Layouts

The templates and blocks must be added to `/design/frontend/`. You can changed the
*frontend* by *adminhtml* if is required.

For example: `/design/frontend/base/default/layout/giftregistry.xml`

Adding our templates and layouts to the `base/default` theme,
we'll make our templates and layouts available to all stores and themes.

A template is associated only with a block. The block that the template will use
to be defined by the `type` attribute of the node `layout>entrepids_giftregistry_index_new>reference>block`

## How to add a new template

* Register layout in `/app/code/local/entrepids_giftregistry.xml` file.
```xml
<config>
    <frontend>
        <layout>
            <updates>
                <entrepids_giftregistry module="entrepids_giftregistry">
                    <file>entrepids_giftregistry.xml</file>
                </entrepids_giftregistry>
            </updates>
        </layout>
    </frontend>
</config>
```
* Register the block it in the `/design/frontend/base/default/layout/entrepids_giftregistry.xml` file.
```xml
<!-- Example -->
<layout>
    <entrepids_giftregistry_index_new>
        <reference name="content">
            <block name="giftregistry.new"
                   type="core/template"
                   template="entrepids/new.phtml"
                   as="giftregistry_new"/>
        </reference>
    </entrepids_giftregistry_index_new>
</layout>
```
* Add the templates into
`/design/frontend/base/default/template/giftregistry/list.phtml`


## Adding a new module

* Add a new module file in `/etc/modules/vendor_name_module_name.xml`

