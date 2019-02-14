![alt XOOPS CMS](http://xoops.org/images/logoXoops4GithubRepository.png)
## XOOPS-архив языков для [XOOPS CMS 2.5.x](http://xoops.org)

Место для файлов локализации XOOPS, поддерживаемых командой переводчиков XOOPS.

** ПРИМЕЧАНИЕ: в настоящее время для переводов мы используем [Transifex](https://www.transifex.com/xoops/)**

**ПРИМЕЧАНИЕ: Обратите внимание, что файлы локализации необходимо копировать в дистрибудив до установки системы или модулей, т.к. некоторые переменные записываются в БД и изменения придется вносить в БД в ручную.**

**Структура:** в этом хранилище каждые файлы локализации имеют следующую структуру:

```
XoopsLanguages
-- dirnamea
----- core
----- modules
----- themes
-- dirnameb
----- core
----- modules
----- themes

Пример структуры:
XoopsLanguages/
-- spanish/
----- core
--------- 2.3.1
----------- docs
----------- upgrade
----------- release_notes_spanish.txt
----- modules
--------- moduleA
----------- 1.0
------------- language
--------------- spanish
----- themes
```
Примечание: Вы можете использовать пример каталога «foo». Скопируйте и переименуйте его.

---------------------------------------------------------------------------------------------------------

## XOOPS-Languages Archive for [XOOPS CMS 2.5.x](http://xoops.org)

The place for XOOPS Languages maintained by XOOPS Translation Team.

**NOTE: Currently for translations we're using [Transifex](https://www.transifex.com/xoops/)**

**NOTE: Please note that localization files need to be copied to the distribution before installing the system or modules, since Some variables are written to the database and changes will have to be made to the database manually.**

**Structure:** in this repository each language has following structure:

```
XoopsLanguages
-- dirnamea
----- core
----- modules
----- themes
-- dirnameb
----- core
----- modules
----- themes

Structure Example:
XoopsLanguages/
-- spanish/
----- core
--------- 2.3.1
----------- docs
----------- upgrade
----------- release_notes_spanish.txt
----- modules
--------- moduleA
----------- 1.0
------------- language
--------------- spanish
----- themes
```
Note: You can use "foo" directory example. Copy and rename it.