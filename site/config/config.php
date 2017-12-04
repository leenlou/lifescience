<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-LIFESCIENCE-YA9J46A-KS37BXLG252Q');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
c::set('debug', true);

c::set('logger.roles', ['admin']);
c::set('logger.entries', 50);
c::set('logger.language', 'en');
c::set('logger.translation', [
  'site.update'  => 'Changed site options',
  'page.create'  => 'Created page %s',
  'page.update'  => 'Updated page %s',
  'page.delete'  => 'Deleted page %s',
  'page.sort'    => 'Sorted page %s',
  'page.hide'    => 'Hid page %s',
  'page.move'    => 'Moved page %1$s to %2$s',
  'file.upload'  => 'Uploaded file %s',
  'file.replace' => 'Replaced file %s',
  'file.rename'  => 'Renamed file %s',
  'file.update'  => 'Updated file %s',
  'file.sort'    => 'Sorted file %s',
  'file.delete'  => 'Deleted file %s',
  'user'         => 'User',
  'date'         => 'Date',
  'time'         => 'Time',
  'action'       => 'Action'
]);    