This is an OpenSource project by studer + raimann ag, CH-Burgdorf (https://studer-raimann.ch)

## Info
H5P may accumulate temporary files.

This files should be cleaned up from time to time.

We recommend you to use this cron job plugin.

This cron job also refresh H5P hub list in background.

## Installation

First install and enable [H5P repository plugin](https://github.com/studer-raimann/H5P).

### Install H5PCron-Plugin
Start at your ILIAS root directory
```bash
mkdir -p Customizing/global/plugins/Services/Cron/CronHook
cd Customizing/global/plugins/Services/Cron/CronHook
git clone https://github.com/studer-raimann/H5PCron.git H5PCron
```
Update and activate the plugin in the ILIAS Plugin Administration

### Some screenshots
Cron:
![Cron](./doc/screenshots/cron.png)

### Requirements
* ILIAS 5.3 or ILIAS 5.4
* PHP >=5.6

### Adjustment suggestions
* External users can report suggestions and bugs at https://plugins.studer-raimann.ch/goto.php?target=uihk_srsu_PLH5P
* Adjustment suggestions by pull requests via github
* Customer of studer + raimann ag: 
	* Adjustment suggestions which are not yet worked out in detail by Jira tasks under https://jira.studer-raimann.ch/projects/PLH5P
	* Bug reports under https://jira.studer-raimann.ch/projects/PLH5P

### ILIAS Plugin SLA
Wir lieben und leben die Philosophie von Open Source Software! Die meisten unserer Entwicklungen, welche wir im Kundenauftrag oder in Eigenleistung entwickeln, stellen wir öffentlich allen Interessierten kostenlos unter https://github.com/studer-raimann zur Verfügung.

Setzen Sie eines unserer Plugins professionell ein? Sichern Sie sich mittels SLA die termingerechte Verfügbarkeit dieses Plugins auch für die kommenden ILIAS Versionen. Informieren Sie sich hierzu unter https://studer-raimann.ch/produkte/ilias-plugins/plugin-sla.

Bitte beachten Sie, dass wir nur Institutionen, welche ein SLA abschliessen Unterstützung und Release-Pflege garantieren.
