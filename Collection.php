<?php

/**
 * Collection Extension for MediaWiki
 *
 * Copyright (C) PediaPress GmbH
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'Collection' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Collection'] = __DIR__ . '/i18n';

	$wgExtensionMessagesFiles['CollectionAlias'] = __DIR__ . '/Collection.alias.php';
	/*
	Enable once wmf-config is migrated (T87899)
	wfWarn(
		'Deprecated PHP entry point used for Collection extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	*/
	return true;
} else {
	die( 'This version of the Collection extension requires MediaWiki 1.34+' );
}
