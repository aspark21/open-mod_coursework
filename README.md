Coursework Activity
======================================================================
Copyright University of London.

The Coursework Activity has been written to provide a way to receive coursework and have it marked without teachers knowing which student the work belongs to. Multiple markers are also supported where a final grade can be agreed based on several options. It does not replace the standard assignment activity and is intended to work alongside it.
Special thanks to Plymouth University, Royal Veterinary College and London School of Tropical Medicine for funding parts of the development and documentation. 

Current features include:

•	Integration with Turnitin (V2 customized older version 2014012413)

•	Use of Moodle’s core grading methods

•	Blind Marking (Instructors do not know who they are marking)

•	Blind Feedback (Students do not know who marked their submission)

•	Bulk download of submissions

•	Bulk upload of annotated files

•	Bulk submission of grades through a grading worksheet

•	Support for up to 3 markers

•	Control over who sees feedback and grades at each stage

•	Automatic marker allocation rules

•	Group submissions

•	Backup & Restore Support

•	Duplication Support

•	Import of markers allocation from CSV


Release & Support
=================

This is currently a beta preview release and includes untested code. 
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details: 
http://www.gnu.org/copyleft/gpl.html

Warning
=======

Coursework does not currently work with any official Turnitin release due to the way it is has been coded. Do not install this on a production site that is using the latest release as it will result in a FATAL error. University of London are reviewing the effort required to rewrite. The plugin does not require Turnitin to work but if you wish to use Turnitin then a subscription from iParadigms is required. 
The tailored version for the Moodle Direct V2 plugin is available here: https://github.com/aspark21/MoodleDirectV2/archive/Coursework.zip
 
Installation
============

This plugin comes as part of a set. You MUST install both the Coursework activity and the ULCC framework (https://github.com/ULCC/open-local_ulcc_framework) plugins for it to work. Place the contents of each plugin in their respective Moodle root folders:
mod/coursework 
local/ulcc_framework

Reliability
===========

University of London tests its developments on its own systems that run on a standard LAMP stack. Any issues resulting from running on other infrastructure is not supported. 
Bug Reports:
Please report bugs using the GitHub issues tab. When reporting a bug please outline the exact steps you took that resulted in the bug so it is easier to identify and potentially fix. 

Defining roles
===============

Coursework allows institutions to define their permissions unique to their institution. If you wish for help setting these up please contact moodle@rvc.ac.uk 

Configuration
=============

Be aware that you will need to prevent teachers from viewing logs in your courses/site in order
for the anonymity to be effective.

Running Behat tests
=================

Follow the steps to install both PHPUnit and Behat on your Moodle instance:

http://docs.moodle.org/dev/PHPUnit#Installation_of_PHPUnit_via_Composer
http://docs.moodle.org/dev/Acceptance_testing#Installation

PHPUnit

* In PHPStorm, go to settings --> PHP --> PHPUnit
* Make a new configuration if there's not one there already
* Choose 'use custom loader'
* Set the path to the loader to be "/path/to/your/docroot/vendor/autoload.php"
* Set a keyboard shortcut for the Main menu/Navigate/Test action (Settings --> keymap)
* Go to the /tests folder, open the generator_test.php file, place the cursor inside the class and press the shortcut.

Behat

* In PHPStorm, go to Settings --> PHP --> Behat
* Make a new configuration if there's not one there already
* Set the path to the Behat directory to be "/path/to/your/docroot/vendor/behat/behat"
* Set the deafult configuration file to be "/path/to/your/behat_moodledata/behat/behat.yml"
* Go to the /tests/behat folder, open the factory.feature file, place the cursor inside one of the scenarios and press the shortcut.


