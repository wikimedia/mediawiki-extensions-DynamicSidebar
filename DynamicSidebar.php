<?php
/*
 * Copyright (C) 2010 Ryan Lane <http://www.mediawiki.org/wiki/User:Ryan_lane>
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

// This extension is loosely based on the SidebarEx extension by Jean-Lou Dupont;
// See: http://www.mediawiki.org/wiki/Extension:SidebarEx

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'DynamicSidebar' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['DynamicSidebar'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for DynamicSidebar extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the DynamicSidebar extension requires MediaWiki 1.25+' );
}
