####################################################
# Extlist configuration of the gallery 
#
# @author Daniel Lienert <daniel@lienert.cc> Michael Knoll <knoll@punkt.de>
# @package YAG
# @subpackage Typoscript
####################################################

plugin.tx_yag.settings.themes.default.gallery.extlist {
	backendConfig < plugin.tx_ptextlist.prototype.backend.extbase
	backendConfig {
	
		repositoryClassName = Tx_Yag_Domain_Repository_AlbumRepository
	
	}

	fields {
		album {
			table = __self__
			field = __object__
		}
	}

	columns {
		10 {
			fieldIdentifier = album
			columnIdentifier = album
			label = Album
			renderTemplate = EXT:yag/Resources/Private/Partials/AlbumThumb.html
		}
	}
	
	pager {
		itemsPerPage = 6
	}
}