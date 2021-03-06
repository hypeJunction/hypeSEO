<?php

return [
	'seo:autogen' => 'Autogenerate entity SEO',
	'seo:autogen:count' => 'SEO data has been autogenerated for %s of %s entities',
	'seo:edit' => 'Edit page SEO',
	'seo:path' => 'Original Path',
	'seo:paths' => 'Leading Paths',
	'seo:sef_path' => 'Target Path',
	'seo:sef_path:help' => 'Path without the domain with an opening forward slash, e.g. /file/sef-file-url',
	'seo:title' => 'Page Title',
	'seo:description' => 'Page Description',
	'seo:keywords' => 'Page Keywords',
	'seo:metatags' => 'Page Metatags',
	'seo:edit:success' => 'Page data has been saved successfully',
	'seo:edit:error' => 'Page data could not be saved',
	'seo:search:path' => 'Find rules by URL or path',
	'seo:edit:not_unique' => 'Target path must be unique, there is already another rewrite rule with this SEF path',
	
	'seo:object' => 'Articles',
	'seo:settings:edit:help' => '
		Only enter title, description and keywords information, if you would like them to be permanently replaced, otherwise leave empty.
		Metatags will be filtered, so that that other plugins can populate relevant tags - the ones you enter here, may be overwritten.
	',
	'seo:settings:patterns:help' => '
		Below, you can configure SEF rewrite rules for various entity types.
		Patterns can include the following variables:
		  - <b>{guid}</b>: entity GUID
		  - <b>{title}</b>: entity title
		  - <b>{username}</b>: username
		  - <b>{timestamp}</b>: created timestamp
		  - <b>{date}</b>: created date

        Leave the field empty, if you don\'t want the URLs to be rewritten for the given entity type.
	',

	'menu:page:header:seo' => 'Search engine optimization',
	'admin:seo' => 'Search engine optimization',
	'admin:seo:settings' => 'Settings',
	'admin:seo:rules' => 'Rewrite Rules',
	'admin:seo:add_rule' => 'Add custom rule',
	'admin:seo:generator' => 'Rule Generator',
	'admin:seo:sitemap' => 'Sitemap',
	'seo:delete:success' => 'Rule has been deleted',
	'seo:delete:error' => 'Rule could not been deleted',

	'seo:autogen:intro' => 'This script will help you to autogenerate SEF URLs for site content and users. Please configure your rewrite patterns in plugin settings before proceeding',
	'seo:autogen:item_count' => 'Your site has <b>%s</b> entities. Generator script might take a while to complete',
	'seo:autogen:success_count' => 'Processed: ',
	'seo:autogen:error_count' => 'Errors: ',

	'seo:settings:inline_rewrites' => 'Enable inline rewrites',
	'seo:settings:inline_rewrites:help' => '
		If enabled, this will rewrite all URLs on the page to their SEF version.
		This can be a very resource intensive process, as there can be hundreds of URLs on the page.
		If you notice that your site is slow, either configure Memcache, or disable this feature and rely on canonical link tags.
	',

	'seo:settings:redirect_to_canonical' => 'Enable redirects',
	'seo:settings:redirect_to_canonical:help' => '
		SEF URLs are treated as canonical and by default pages accessed via a non-SEF URL will receive a canonical link tag in the HTML head,
		which will be sufficient for search engines to link the pages (the URL in the browser address bar will not point to the SEF URL).
		If you enalbe redirects, whenever a page is accessed via a non-SEF URL, the browser will be forwarded to the canonical/SEF URL.
	',

	'seo:settings:rel_follow' => 'Follow links by trusted users',
	'seo:settings:rel_follow:help' => 'Always trust links that are present in content posted by trusted users. Enabling this feature will remove rel="nofollow" from items posted by admins and other trusted users (defined by trusted_users plugin)',

	'seo:sitemap:help' => 'Below you can configure how static and dynamic URL should appear in the sitemap',

	'seo:sitemap:error' => 'Your site is in a walled garden mode. Install hypeDiscovery to generate a sitemap',
	
	'seo:sitemap:static' => 'Static pages',
	'seo:sitemap:generate' => 'Generate sitemap',
	'seo:sitemap:urls' => 'URLs',
	'seo:sitemap:priority' => 'Priority',
	'seo:sitemap:changefreq' => 'Change Frequency',
	'seo:sitemap:location' => 'Sitemap location: %s',
	'seo:sitemap:generate:success' => 'Sitemap has been successfully generated',
];
